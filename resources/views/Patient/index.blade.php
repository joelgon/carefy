@php
    $var = 'insert';

    if(isset($_GET['insert'])) {
        $var = 'insert';
    };

    if(isset($_GET['list'])) {
        $var = 'list';
    };

@endphp

@extends('template.master')

@section('css-view')

@endsection

@section('component-view')
    <div class="main">
        <form method ="GET" action="" class="form-options">
            <input type="submit" name="insert" value="Cadastrar Paciente" class="option">
            <input type="submit" name="list" value="Listar Pacientes" class="option">
        </form>

        @if ($var === 'insert')
            <div class="center">
                {!! Form::open(['route' => 'insert.patient' , 'method' => 'post', 'class' => 'default-form']) !!}
                    @include('template.form.input', ['label' => 'Nome', 'input' => 'Nome', 'attributes' => ['placeholder' => 'Nome']])
                    @include('template.form.input', ['label' => 'Telefone preferencial', 'input' => 'Telefone preferencial', 'attributes' => ['placeholder' => 'Telefone preferencial']])
                    @include('template.form.input', ['label' => 'Telefone', 'input' => 'Telefone', 'attributes' => ['placeholder' => 'Telefone']])
                    @include('template.form.input', ['label' => 'Telefone para contato', 'input' => 'Telefone para contato', 'attributes' => ['placeholder' => 'Telefone para contato']])
                    @include('template.form.submit', ['input' => 'Cadastrar'])
                {!! Form::close() !!}
            </div>
        @endif


    </div>
@endsection

@section('js-view')

@endsection
