@extends('layout.base')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@stop

@section('content')
    <div class="container" id="success">
        @include('booking.payment.step')
        <div class="row information">
            <div class="col-lg-8 col-sm-12 p-0">
                <div class="notification">
                    <div class="note-payment">
                        Note: การชำระเงินของท่านไม่สมบูรณ์ กรุณาทำรายการใหม่อีกครั้ง หรือเปลี่ยนวิธีการชำระเงิน
                        <a href="" class="text-warning">(แก้ไข)</a>
                    </div>
                </div>
                <div class="booking-thank text-center">
                    <img src="{{asset('images/heart.png')}}" alt="">
                    <p>
                        ขอบคุณที่ทำการจองค่ะ
                    </p>
                    <div class="row px-5">
                        <div class="col-6 h5 text-left">
                            Booking Number:
                            <p class="h4">AW21954</p>
                        </div>
                        <div class="col-6 text-right h5">
                            Booking Status:
                            <p class="text-danger h4">PENDING</p>
                        </div>
                    </div>
                    <div class="booking-date">
                        Booking Date:
                        <p>17 November 2019</p>
                    </div>
                </div>
                <div class="border-radius row">
                   <div class="col-md-8 col-sm-12">
                       <table class="table border-none">
                           <tbody>
                           <tr>
                               <td colspan="2">
                                   <p class="h5">James Bound</p>
                               </td>
                           </tr>
                           <tr>
                               <td>AP97548125</td>
                               <td>jame_99</td>
                           </tr>
                           <tr>
                               <td>+66258974132</td>
                               <td>jame@mail.com</td>
                           </tr>
                           <tr>
                               <td></td>
                               <td>English</td>
                           </tr>
                           </tbody>
                       </table>
                   </div>
                    <div class="col-md-4 col-sm-12 border-left text-center">
                       <a href="" class="border-radius manage-booking">
                           <img src="{{asset('images/lock.png')}}" alt="">
                           <span>
                               จัดการบุคกิ้ง <p>เข้าสู่ระบบทันที</p>
                           </span>
                       </a>
                   </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-12 p-3 calculate">
                @include('booking.detail')
                <div class="text-center">
                    <a href="#" class="btn btn-warning btn-lg">
                        ชำระเงิน
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
