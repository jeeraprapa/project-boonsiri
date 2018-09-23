@extends('layout.base')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@stop

@section('content')

    <div class="container" id="search">
        <nav class="tabContent">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                   aria-controls="nav-home" aria-selected="true">
                    จองเรือ
                </a>
                <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                   aria-controls="nav-profile" aria-selected="false">
                    แพ็กเกจทัวร์
                </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="PACKAGE">PACKAGE TOUR:</label>
                                <select id="PACKAGE" class="form-control" name="package">
                                    <option selected>PACKAGE TOUR ดำน้ำ ONE DAY TRIP</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-2 col-sm-12">
                            <label for="DateStart">วันออกเดินทาง</label>
                            <input type="text" id="DateStart" name="date" placeholder="" class="form-control">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="is_twoway1">
                                <label class="custom-control-label" for="customCheck1">
                                    ไป - กลับ
                                </label>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="form-row">
                                <div class="form-group col-4">
                                    <label for="adult">ผู้ใหญ่:</label>
                                    <select id="adult" name="adult" class="form-control">
                                        <option selected>2</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="child">เด็ก (4-9 ปี):</label>
                                    <select id="child" class="form-control" name="child">
                                        <option selected>2</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="baby">ทารก (0-3 ปี):</label>
                                    <select id="baby" class="form-control" name="baby">
                                        <option selected>2</option>
                                    </select>
                                </div>
                                <small>* จะมีการตรวจอายุเด็กถ้าหากอายุเกิน อาจมีค่าใช้จ่ายเพิ่มเติม</small>
                            </div>
                        </div>
                        <div class="form-group col-md-2 col-sm-12">
                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary">ค้นหารอบเรือ</button><br>
                                <a href="#"><small>เงื่อนไขในการใช้บริการ</small></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="PACKAGE">PACKAGE TOUR:</label>
                                <select id="PACKAGE" class="form-control" name="package">
                                    <option selected>PACKAGE TOUR ดำน้ำ ONE DAY TRIP</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-2 col-sm-12">
                            <label for="DateStart">วันออกเดินทาง</label>
                            <input type="text" id="DateStart" name="date" placeholder="" class="form-control">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" name="is_twoway2">
                                <label class="custom-control-label" for="customCheck2">
                                    ไป - กลับ
                                </label>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="form-row">
                                <div class="form-group col-4">
                                    <label for="adult">ผู้ใหญ่:</label>
                                    <select id="adult" name="adult" class="form-control">
                                        <option selected>2</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="child">เด็ก (4-9 ปี):</label>
                                    <select id="child" class="form-control" name="child">
                                        <option selected>2</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="baby">ทารก (0-3 ปี):</label>
                                    <select id="baby" class="form-control" name="baby">
                                        <option selected>2</option>
                                    </select>
                                </div>
                                <small>* จะมีการตรวจอายุเด็กถ้าหากอายุเกิน อาจมีค่าใช้จ่ายเพิ่มเติม</small>
                            </div>
                        </div>
                        <div class="form-group col-md-2 col-sm-12">
                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary">ค้นหารอบเรือ</button><br>
                                <a href="#"><small>เงื่อนไขในการใช้บริการ</small></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row information">
            <div class="col-lg-8 col-sm-12 p-0">
                <section id="schedule">
                    <div class="text-center">
                        @include('booking.schedule')
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-sm-12 p-3 calculate">
                @include('booking.detail')
                <div class="text-center">
                    <a href="{{route('http::booking-transfer')}}" class="btn btn-warning btn-lg">
                        ดำเนินการต่อ
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop