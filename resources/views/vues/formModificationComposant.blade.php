@extends('layouts.master')
@section('content')
    <div>
        <br><br>
        <br><br>
        <div class="container">
            <div class="blanc">
                <h1>modification du composant du médicament</h1>
            </div>
            <div class="well">
                {!! Form::open(array('route'=>array('postAfficherComposant','id_composant'),'method'=>'post')) !!}
                <div class="form-group">
                    <label class="col-md-3 control-label">Liste  :</label>
                    <div class="col-md-3">
                        <select class="form-control" name="id_composant" required>
                            <option value="0">Séléctionner un composant : </option>
                            @foreach($desComposants as  $unC)
                                <option value="{{$unC->id_composant}}">{{$unC->lib_composant}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br><br><br>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok"></span></button>
                        &nbsp;&nbsp;
                        <button type="button" class="btn btn-default btn-primary">
                            <span class="glyphicon glyphicon-remove"></span>Annuler
                        </button>
                        <button type="button" class="btn btn-default btn-primary"
                                onclick="{window.location = '{{url('/welcome')}}';}">
                            <span class="glyphicon glyphicon-backward"></span>retour
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
