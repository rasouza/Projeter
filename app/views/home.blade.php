@extends('layouts.default')

@section('page-title')
    HOME
@stop

@section('content')
    ENV = {{ App::environment() }}
@stop