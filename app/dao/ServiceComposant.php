<?php

namespace App\dao;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use App\Exceptions\MonException;


class ServiceComposant
{
    public function getListeCompo(){
        try {
            $query = DB::table('composant')->get();
            return $query;

        }catch(QueryException $e){
            throw new Exception($e->getMessage(),5);
        }

    }

    public function getIDComposant()
    {
        try {
            return $this->getkey();

        } catch (QueryException $e) {
            throw new Exception($e->getMessage(), 5);
        }

    }

    public function getListeComposant()
    {
        try {
            $mesComposants = DB::table('composant')
                ->Select()
                ->get();
            return $mesComposants;
        } catch (QueryException $e) {
            throw new Exception($e->getMessage(), 5);
        }
    }
    public function getComposantMedicaments($id_composant)
    {
        try {
            $mesComposantsMedicament = DB::table('composant')
                ->Select()
                ->where('composant.id_composant','=',$id_composant)

                ->get();
            return $mesComposantsMedicament;
        } catch (QueryException $e) {
            throw new Exception($e->getMessage(), 5);
        }
    }

    public function ajoutComposant($compo){
        try {
            DB::table('composant')
                ->insert([
                    'id_composant' => $compo]);

        }catch (QueryException $e){
            throw new Exception($e->getMessage(),5);
        }

    }



}
