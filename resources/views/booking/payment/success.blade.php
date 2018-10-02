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
                <div class="border-radius row detail">
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

                <div class="group-detail pt-5">
                    <div class="col-sm-12 p-0">
                        <header class="h5">
                            ช่องทางการชำระเงิน
                            <span class="float-right text-right">
                                ยอดชำระ
                                <p class="h4">13,900.00 บาท</p>
                            </span>
                        </header>
                    </div>
                    <div class="d-inline-flex justify-content-between align-items-center w-100 py-3">
                        กรุณาเลือกวิธีการชำระเงิน และกรอกข้อมูลให้ครบถ้วน จากนั้นคลิกปุ่มชำระเงิน ทางด้านขวา
                        <span class="float-right">
                                    Download Invoice
                                    <a href="" class="btn text-default border-radius mb-0">TH</a>
                                    <a href="" class="btn text-default border-radius mb-0">EN</a>
                        </span>
                    </div>
                    <div class="row" id="group-payment">
                        <div id="link-payment" class="text-center col-sm-12">
                            <a class="credit_card" href="#payment1" id="payment1">
                                <img src="{{asset('images/icon-bank1.png')}}" alt="Credit / Debit Card">
                                <p>Paypal</p>
                            </a>
                            <a class="credit_card" href="#payment2" id="payment2">
                                <img src="{{asset('images/icon-bank2.png')}}" alt="Credit / Debit Card">
                                <p>Credit / Debit Card</p>
                            </a>
                            <a class="credit_card" href="#payment3" id="payment3">
                                <img src="{{asset('images/icon-bank3.png')}}" alt="Credit / Debit Card">
                                <p>Bank Transfer</p>
                            </a>
                        </div>
                        <div id="form-paypal" class="form-payment row mx-5">
                            <div class="col-sm-12">
                                <div class="form-border-group">
                                    <label for="paypal-email"></label>
                                    <input type="text" id="paypal-email" name="paypal_email" placeholder="Email Paypal"
                                           class="form-control">
                                    <i class="fa fa-envelope fa-2x icon-input"></i>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-border-group">
                                    <label for="paypal-password"></label>
                                    <input type="text" id="paypal-password" name="paypal_password" placeholder="Password Paypal"
                                           class="form-control">
                                    <i class="fa fa-key fa-2x icon-input"></i>
                                </div>
                            </div>
                        </div>
                        <div id="form-credit" class="form-payment row mx-5">
                            <div class="col-sm-12">
                                <div class="form-border-group">
                                    <label for="credit-creditcard"></label>
                                    <input type="text" id="credit-creditcard" name="credit_creditcard" placeholder="Credit Card Number"
                                           class="form-control">
                                    <i class="fa fa-lock fa-2x icon-input"></i>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-border-group">
                                    <label for="credit-namecard"></label>
                                    <input type="text" id="credit-namecard" name="credit_namecard" placeholder="Name on card" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-border-group">
                                    <label for="credit-mmyy"></label>
                                    <input type="text" id="credit-mmyy" name="credit_mmyy" placeholder="MM / YY" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-border-group">
                                    <label for="credit-cvv"></label>
                                    <input type="text" id="credit-cvv" name="credit_cvv" placeholder="CVV" class="form-control">
                                    <i class="fa fa-question-circle fa-lg icon-input"></i>
                                </div>
                            </div>
                        </div>
                        <div id="form-bank" class="form-payment row mx-5">
                            <div class="col-sm-12">
                                <div class="form-border-group">
                                    <label for="bank-creditcard"></label>
                                    <input type="text" id="bank-creditcard" name="bank_creditcard" placeholder="Credit Card Number"
                                           class="form-control">
                                    <i class="fa fa-lock fa-2x icon-input"></i>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-border-group">
                                    <label for="bank-namecard"></label>
                                    <input type="text" id="bank-namecard" name="bank_namecard" placeholder="Name on card" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-border-group">
                                    <label for="bank-mmyy"></label>
                                    <input type="text" id="bank-mmyy" name="bank_mmyy" placeholder="MM / YY" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-border-group">
                                    <label for="bank-cvv"></label>
                                    <input type="text" id="bank-cvv" name="bank_cvv" placeholder="CVV" class="form-control">
                                    <i class="fa fa-question-circle fa-lg icon-input"></i>
                                </div>
                            </div>
                        </div>
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

@section('script')
    <script>
        $( "#payment1" ).click(function(e) {
            e.preventDefault();
            $('#group-payment a').removeClass('active');
            $(this).addClass('active');
            $('.form-payment').removeClass('active');
            $('#form-paypal').addClass('active');
        });
        $( "#payment2" ).click(function(e) {
            e.preventDefault();
            $('#group-payment a').removeClass('active');
            $(this).addClass('active');
            $('.form-payment').removeClass('active');
            $('#form-credit').addClass('active');
        });
        $( "#payment3" ).click(function(e) {
            e.preventDefault();
            $('#group-payment a').removeClass('active');
            $(this).addClass('active');
            $('.form-payment').removeClass('active');
            $('#form-bank').addClass('active');
        });
    </script>
@stop
