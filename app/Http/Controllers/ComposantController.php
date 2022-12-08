<?php

namespace App\Http\Controllers;
use App\dao\ServiceComposant;
use App\dao\ServiceMedicament;
use Request;

class ComposantController extends Controller
{
    public function listeComposants(){
        try {
            $unComposant = new ServiceComposant();
            $idComposant = Request::input('id_composant');
            $desComposants = $unComposant->getComposantMedicaments($idComposant);
            return view('vues.ModifComposant',compact('desComposants'));

        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues.pageErreur',compact('monErreur'));
        }catch (\Exception $e){
            $monErreur = $e->getMessage();
            return view('vues.pageErreur',compact('monErreur'));
        }

    }

    public function listerDesComposant()
    {
        try {
            $Composant = new ServiceComposant();
            $Composants = $Composant ->getListeComposant();
            return view('vues.formModificationComposant', compact('$Composants'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues.pageErreur', compact('monErreur'));
        } catch (\Exception $ex) {
            $monErreur = $ex->getMessage();
            return view('vues.pageErreur', compact('monErreur'));
        }
    }

    public function postAfficherComposant(){
       $id_composant = Request::input('id_composant ');
        $unComposant = new ServiceComposant();
      $desComposants = $unComposant->getListeComposant($id_composant);
       return view('vues/formModificationComposant',compact('desComposants'));
   }

    public function modificationC($id){
        try {
            $unServiceComposant = new ServiceComposant();
            $unManga = $unServiceComposant->getComposantMedicaments($id);



            return view('vues.formModificationComposant',compact('unManga','mesGenres','mesScenaristes','mesDessinateurs'));

        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues.pageErreur',compact('monErreur'));
        }catch (\Exception $e){
            $monErreur = $e->getMessage();
            return view('vues.pageErreur',compact('monErreur'));
        }
    }

    public function ajoutComposant(){
        try {
            $unMed= new ServiceMedicament();
            $desMed = $unMed->getListeMedicament();
            $unCompo= new ServiceComposant();
            $desCompos = $unCompo->getListeCompo();

            return view('vues.formAjoutComposant',compact('desCompos','desMed'));

        }catch (Exception $e){
            $monErreur = $e->getMessage();
            return view('vues.pageErreur',compact('monErreur'));
        }catch (\Exception $e){
            $monErreur = $e->getMessage();
            return view('vues.pageErreur',compact('monErreur'));
        }
    }




}
