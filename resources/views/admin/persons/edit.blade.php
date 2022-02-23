@extends('adminlte::page')

@section('title', 'EditPersons')

@section('content_header')
    <h1>Edit Persons</h1>
@stop

@section('content')

@if (session('updatePersons'))
    <div class="alert alert-success">
        <strong>{{session('updatePersons')}}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            
            {!! Form::model($person, ['route'=>['admin.persons.update',$person],'method'=>'PUT']) !!}
            <div class="form-grup">
                {!! Form::label('', 'Name', ['class'=>'label-control']) !!}
                {!! Form::text('nombre', null, ['placeholder'=>'Nombre','class'=>'form-control','required']) !!}
                
            </div>
            <div class="form-group">
                {!! Form::label('', 'Last Name', ['class'=>'label-control']) !!}
                {!! Form::text('apellidop', null, ['placeholder'=>'Last Name','class'=>'form-control','required']) !!}
            </div>
            <div class="form-goup">
                {!! Form::label('', 'Last Name', ['class'=>'label-control']) !!}
                {!! Form::text('apellidom', null, ['placeholder'=>'Last Name','class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('', 'Avatar', ['class'=>'label-control']) !!}
                {!! Form::select('avatar', ['King' => 'King', 'Master' => 'Maser','Crack' => 'Crack','Mostro' => 'Mostro'], null, ['placeholder' => 'Selecciona un avatar...','class'=>'form-control','required']) !!}    
            </div>
            <div class="form-group">
                {!! Form::label('', 'Date Of Birth', ['class'=>'label-control']) !!}
                {!! Form::date('fecha_nac', $person->fecha_nac,['class'=>'form-control input-group-text mt-3 ','required']) !!}
                
            </div>
            <div class="form-group">
                {!! Form::submit('Editar', ['class' => 'btn btn-sm btn-primary btn-block']) !!}
            </div>
    
    
            {!! Form::close() !!}
    
    
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
