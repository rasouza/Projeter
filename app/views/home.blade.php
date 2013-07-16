@extends('layouts.default')

@section('page-title')
    HOME
@stop

@section('content')
    {{ App::environment() }}
@stop