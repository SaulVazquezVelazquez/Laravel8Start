@extends('adminlte::page')

@section('title', 'Create Persona')

@section('content_header')
    <h1>Create Persona</h1>
@stop

@section('content')
    

<div class="card">
    <div class="card-body">
        <div class="card-header">
            <strong><h5>Form to create a new Persona.</h5></strong>
        </div>
        <div class="card-body">
                {!! Form::open(["route" => "admin.persona.store", "method" => "POST" , "class" =>"row g-3"] ) !!}                    
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
                            {!! Form::date('dateofbirth', '', ["class" =>"form-control"]) !!}
                            
                        </div>
                        <div class="col-md-3">
                            {!! Form::label('', 'Sex', ["class" =>"form-label"]) !!}                            
                            {!! Form::text('sex', null, ["class" =>"form-control"]) !!}
                            {{-- {!! Form::select('sex', ["m" =>"Mujer","h" =>"Hombre"], null, ["class" =>"form-control"]) !!} --}}
                            {{-- {!! Form::checkbox('sex', ["m" =>"Mujer","h" =>"Hombre"], null, ["class" =>"form-control"]) !!} --}}
                            {{-- {!! Form::checkbox('sex', ["m" =>"Mujer"], true, [null]) !!} --}}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('', 'Phone', ["class" =>"form-label"]) !!}                            
                            {!! Form::text('phone', '' , ["class" =>"form-control"]) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('', 'Avatar', ["class" =>"form-label"]) !!}
                            {!! Form::file('avatar', ["class" =>"form-control"]) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('', 'Password', ["class" =>"form-label"]) !!}
                            {!! Form::password('password', ["class" =>"form-control"]) !!}                        
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