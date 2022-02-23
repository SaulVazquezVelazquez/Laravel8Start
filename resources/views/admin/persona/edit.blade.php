@extends('adminlte::page')

@section('title', 'Edit Persona')

@section('content_header')
    <h1>Edit Persona</h1>
@stop

@section('content')
    
@if (session('personaupdate'))
                <div class="alert alert-primary">
                    <strong>{{session('personaupdate')}}</strong>
                </div>
@endif

<div class="card">
    <div class="card-body">
        <div class="card-header">
            <strong><h5>Form to Edit a Persona.</h5></strong>
        </div>
        <div class="card-body">
                {!! Form::model($persona, ["route" => ["admin.persona.update",$persona],"method" => "PUT", "class" => "row g-3"]) !!}        
                        <div class="col-md-4">
                            {!! Form::label('', 'Name', ["class" =>"form-label"]) !!}
                            {!! Form::text('name', null, ["class" =>"form-control"]) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('', 'Lastname', ["class" =>"form-label"]) !!}
                            {!! Form::text('lastname', null, ["class" =>"form-control"]) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('', 'Email', ["class" =>"form-label"]) !!}
                            {!! Form::email('email', null, ["class" =>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label('', 'DateOfBirth', ["class" =>"form-label"]) !!}
                            {!! Form::date('dateofbirth', $persona->dateofbirth, ["class" =>"form-control"]) !!}
                            
                        </div>
                        <div class="col-md-3">
                            {!! Form::label('', 'Sex', ["class" =>"form-label"]) !!}                            
                            {!! Form::select('sex', ['H' => 'H', 'M' => 'M'], null, ['class'=>'form-control','required']) !!}   
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('', 'Phone', ["class" =>"form-label"]) !!}                            
                            {!! Form::text('phone', null , ["class" =>"form-control"]) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('', 'Avatar', ["class" =>"form-label"]) !!}
                            {!! Form::text('avatar', null, ["class" =>"form-control"]) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('', 'Password', ["class" =>"form-label"]) !!}
                            {!! Form::text('password', null,["class" =>"form-control"]) !!}                        
                            
                        </div>
                        <div class="col-md-12 mt-3">
                            {!! Form::submit('Save Person', ["class" =>"btn btn-sm btn-primary btn-block"]) !!}
                        </div>
                {!! Form::close() !!}
                
                
            
        </div>
    </div>
</div>
    
    
    
    
@stop
{{-- 
@push('scripts')
    <script src="/public/js/test-persona.js"></script>
@endpush --}}

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop
