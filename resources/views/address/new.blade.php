@extends('layouts.app')
@section('content')
    {!! Form::open() !!}
        {!! Form::label('name', 'Nome:') !!}
    {!! Form::close() !!}
@endsection