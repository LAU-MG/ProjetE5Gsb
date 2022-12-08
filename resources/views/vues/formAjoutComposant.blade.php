@extends('layouts.master')
@section('content')
    <div>
        <br><br>
        <br><br>
        <div class="container">
            <div class="blanc">
                <h1>Ajout d'un composant d'un médicament</h1>
            </div>
            <div class="well">
                {!! Form::open(array('route'=>array('postAjoutComposant','id_composant'),'method'=>'post')) !!}

                    <div class="form-group">
                        <label class="col-md-3 control-label">Médicaments: </label>
                        <div class="col-md-3">
                            <select class="form-control" name="id_composant" required>
                                <option value="0">Sélectionner un médicament :  </option>
                                @foreach($desMed as $unMed)
                                    {
                                    <option value="{{$unMed->id_medicament}}">{{$unMed->nom_commercial}}</option>
                                    }
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Composants : </label>
                        <div class="col-md-3">
                            <select class="form-control" name="id_composant" required>
                                <option value="0">Sélectionner un composant </option>
                                @foreach($desCompos as $unCompo)
                                    {
                                    <option value="{{$unCompo->id_composant}}">{{$unCompo->lib_composant}}</option>
                                    }
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br><br>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok"></span>valider</button>
                            &nbsp;

                            <button type="button" class="btn btn-default btn-primary"
                                    onclick="{window.location = '{{url('/home')}}';}">
                                <span class="glyphicon glyphicon-remove"></span>Annuler
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
