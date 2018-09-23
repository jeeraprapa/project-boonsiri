@extends('layout.base')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@stop

@section('content')

    @include('partial.landing')

    @include('partial.ad')

    @include('partial.schedule')

    @include('partial.package')

    @include('partial.news')
@stop