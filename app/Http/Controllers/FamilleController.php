<?php

namespace App\Http\Controllers;

use App\dao\ServiceFamille;
use App\dao\ServiceMedicament;
use Request;

class FamilleController extends Controller
{
    public function listerMedicamentFamille(){
        try {
            $uneFamille = new ServiceFamille();
            $idFamille = Request::input('id_famille');
            $mesFamilles = $uneFamille->getListeMedicamentsFamille($idFamille);
            return view('vues.listeMedicament',compact('mesFamilles'));

        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues.pageErreur',compact('monErreur'));
        }catch (\Exception $e){
            $monErreur = $e->getMessage();
            return view('vues.pageErreur',compact('monErreur'));
        }
    }
}
