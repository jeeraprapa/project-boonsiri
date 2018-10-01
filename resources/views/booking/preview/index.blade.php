@extends('layout.base')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@stop

@section('content')
    <div class="container" id="preview">
        @include('booking.preview.step')
        <div class="row information">
            <div class="col-lg-8 col-sm-12 p-0">
                @include('booking.preview.detail')
            </div>
            <div class="col-lg-4 col-sm-12 p-3 calculate">
                @include('booking.detail')
                <div class="text-center">
                    <a href="{{route('http::passenger-info')}}" class="btn btn-secondary btn-lg">
                        < ย้อนกลับ
                    </a>
                    <a href="{{route('http::payment-loading')}}" class="btn btn-warning btn-lg">
                        ดำเนินการต่อ
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop