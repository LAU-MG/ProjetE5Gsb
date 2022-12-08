<?php

namespace App\dao;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Exception;


class ServiceMedicament
{
    public function getListeMedicament()
    {
        try {
            $mesMedicaments = DB::table('medicament')
                ->Select()
                ->get();
            return $mesMedicaments;
        } catch (QueryException $e) {
            throw new Exception($e->getMessage(), 5);
        }
    }

    public function getIDFamMedicament()
    {
        try {
            return $this->getkey();

        } catch (QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }

    }


}
