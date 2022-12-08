@extends('layouts.master')
@section('content')
    <div>
        <br><br>
        <br><br>
        <div class="container">
            <div class="blanc">
                <h1>Liste des Medicaments par Famille</h1>
            </div>
            <div class="well">
                {!! Form::open(array('route'=>array('postAfficherMedicament','id_famille'),'method'=>'post')) !!}
                <div class="form-group">
                    <label class="col-md-3 control-label">Genre :</label>
                    <div class="col-md-3">
                        <select class="form-control" name="id_famille" required>
                            @foreach($mesFamMedicaments as $uneF)
                                <option value="{{$uneF->id_famille}}">{{$uneF->lib_famille}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br><br><br>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="admit" class="btn btn-default btn-primary">
                            <span class="glyphicon glyphicon-ok"></span>Valider
                        </button>
                        &nbsp;&nbsp;
                        <button type="button" class="btn btn-default btn-primary"
                                onclick="{window.location = '{{url('/welcome')}}';}">
                            <span class="glyphicon glyphicon-remove"></span>Annuler
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
