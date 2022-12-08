@extends('layouts.master')
@section('content')
    <div>
        <br><br>
        <br><br>
        <div class="container">
            <div class="blanc">
                <h1>affichage de composant(s) d'un médicaments  </h1>
            </div>

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>

                        <th>ID_composant</th>
                        <th>Lib_composant</th>
                    </tr>
                    </thead>

                    @foreach($mesCompoMedicaments  as $unCompoMedicament)
                        <tr>
                            <td>{{$unCompoMedicament->id_composant}}</td>
                            <td>{{$unCompoMedicament->lib_composant}}</td>

                        </tr>
                    @endforeach
                    <br><br>
                </table>

                <div class="form-group">

                        <button type="button" class="btn btn-default btn-primary"
                                onclick="{window.location = '{{url('/welcome')}}';}">
                            <span class="glyphicon glyphicon-backward"></span>retour
                        </button>
                    <button type="button" class="btn btn-default btn-primary"
                            onclick="{window.location = '{{url('/formModificationComposant')}}';}">
                        <span class="glyphicon glyphicon-edit"></span>Modification
                    </button>
                    </div>
                </div>


            </div>


        </div>
    </div>
