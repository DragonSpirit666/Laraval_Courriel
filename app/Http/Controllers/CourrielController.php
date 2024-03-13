<?php

namespace App\Http\Controllers;

use App\Models\Courriel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Contrôleur pour la gestion des courriels.
 *
 * @package App\Http\Controllers
 */
class CourrielController extends Controller
{
    /**
     * Affiche la liste des courriels en fonction du statut.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $status = $request->query('status');
        $courriels = Courriel::all();

        if ($status !== null) {
            if ($status) {
                $courriels = Courriel::lu();
            } else {
                $courriels = Courriel::nonLu();
            }
        }

        return view('courriels.index', ['courriels' => $courriels]);
    }

    /**
     * Affiche un courriel spécifique.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $courriel = Courriel::find($id);
        return view('courriels.show', ['courriel' => $courriel]);
    }

    public function update($id): RedirectResponse
    {
        $courriel = Courriel::find($id);
        $courriel->update("lu", 1);
        return redirect()->route('courriels.show', ['courriel' => $courriel]);
    }
}
