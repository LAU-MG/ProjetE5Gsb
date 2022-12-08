<?php

namespace App\dao;


use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class ServiceFamille
{
    public function getIDFamille()
    {
        try {
            return $this->getkey();

        } catch (QueryException $e) {
            throw new Exception($e->getMessage(), 5);
        }

    }

    public function getListeFamille(){
        try {
            $query = DB::table('famille')->get();
            return $query;

        }catch(QueryException $e){
            throw new Exception($e->getMessage(),5);
        }

    }

    public function getListeMedicamentsFamille($id_famille)
    {
        try {
            $mesMedicaments = DB::table('medicament')
                ->Select()
                ->where('medicament.id_famille','=',$id_famille)

                ->get();
            return $mesMedicaments;
        } catch (QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }

}
