@extends('layout.base')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@stop

@section('content')
    <div class="container" id="loading">
        @include('booking.payment.step')
        <div class="row">
            <div class="group-img-loading">
                <img src="{{asset('images/logo_boonsiriferry.png')}}" alt="">
                <img src="{{asset('images/anchor.png')}}" alt="">
                <img src="{{asset('images/icon-bank2.png')}}" alt="">
            </div>
        </div>

        <div class="row">
            <div class="information">
                <div class="row py-5  text-center">
                    <div class="col-sm-12 h2">
                        เรากำลังพาท่านไปยังหน้าชำระเงิน...<a class="h4" href="{{route('http::payment-success')}}">หรือ คลิกที่นี่</a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-6 h5">
                        Booking Number:
                    </div>
                    <div class="col-sm-6 h5">
                        Booking Status:
                    </div>
                    <div class="col-sm-6">
                        <p class="h2">AW21954</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-danger h2">PENDING</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
