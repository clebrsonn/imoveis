@extends('layouts.app')
@section('content')
    {!! Form::open(['route' => 'address.store', 'method' => 'POST', 'class' => 'form-group']) !!}
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection