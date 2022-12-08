@extends('layouts.master')
@section('content')

    <div>
        <br><br>
        <br><br>
        <div class="container">
            <div class="blanc">
                <h1>Liste de mes Medicaments</h1>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID_Medicaments</th>
                    <th>ID_famille</th>
                    <th>Depot legal</th>
                    <th>nom Commercial</th>
                    <th>Effets</th>
                    <th>prix echantillon</th>

                </tr>
                </thead>
                @foreach($mesMedicaments as $unMedicament)
                    <tr>
                        <td>{{$unMedicament->id_medicament}}</td>
                        <td>{{$unMedicament->id_famille}}</td>
                        <td>{{$unMedicament->depot_legal}}</td>
                        <td>{{$unMedicament->effets}}</td>
                        <td>{{$unMedicament->contre_indication}}</td>
                        <td>{{$unMedicament->prix_echantillon}}</td>

                    </tr>

                @endforeach
                <br><br>
            </table>
        </div>
    </div>
@stop
