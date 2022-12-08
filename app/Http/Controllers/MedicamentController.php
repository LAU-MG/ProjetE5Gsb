<?php

namespace App\Http\Controllers;

use App\dao\ServiceComposant;
use App\dao\ServiceFamille;
use Request;
use App\dao\ServiceMedicament;
use App\Exceptions\MonException;

class MedicamentController extends Controller
{
    public function listerMedicament()
    {
        try {
            $unServiceMedicament = new ServiceMedicament();
            $mesMedicaments = $unServiceMedicament->getListeMedicament();
            return view('vues.listeMedicament', compact('mesMedicaments'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues.pageErreur', compact('monErreur'));
        } catch (\Exception $ex) {
            $monErreur = $ex->getMessage();
            return view('vues.pageErreur', compact('monErreur'));
        }
    }



    public function listerFamMedicaments(){
        $uneFamMedicament = new ServiceFamille();
        $mesFamMedicaments = $uneFamMedicament->getListeFamille();
        return view('vues/formChoixMedicamentFamille',compact('mesFamMedicaments'));
    }

    public function postAfficherMedicament(){
        $id_famille = Request::input('id_famille');
        $unServiceMedicament = new ServiceFamille();
        $mesMedicaments = $unServiceMedicament->getListeMedicamentsFamille($id_famille);
        return view('vues/pageMedicamentFamille',compact('mesMedicaments'));
    }
    public function listerCompoMedicaments($id_composant){

        $unCompoMedicament = new ServiceComposant();
        $mesCompoMedicaments = $unCompoMedicament->getComposantMedicaments($id_composant);
        return view('vues/ModifComposant',compact('mesCompoMedicaments'));
    }




}


