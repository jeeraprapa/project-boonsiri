<div class="group-detail">
    <div class="col-sm-12">
        <header class="h5">1. ตรวจสอบข้อมูลผู้จอง</header>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 pb-2 text-dark">
                กรุณากรอกให้ครบถ้วน
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-border-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" id="FirstName" name="FirstName" value="James" class="form-control">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-border-group">
                    <label for="LastName">Last Name</label>
                    <input type="text" id="LastName" name="LastName" value="Bound" class="form-control">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-border-group">
                    <label for="Email">Email</label>
                    <input type="email" id="Email" name="Email" value="james@mail.com" class="form-control">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-border-group">
                    <label for="PhoneNumber"></label>
                    <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" class="form-control">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-border-group">
                    <label for="Country">Country</label>
                    <select class="form-control" id="Country">
                        <option selected>English</option>
                        <option>Thailand</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-border-group">
                    <label for="Passport"></label>
                    <input type="text" id="Passport" name="Passport" placeholder="ID Card Number" class="form-control">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-border-group">
                    <label for="AppID"></label>
                    <input type="text" id="AppID" name="AppID" placeholder="What's App ID / Line ID / Facebook" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="group-detail">
    <div class="col-sm-12">
        <header class="h5">2. ตรวจสอบข้อมูลการชำระเงิน</header>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 pb-2 text-dark">
                กรุณากรอกให้ครบถ้วน
            </div>
        </div>
        <div class="row" id="group-payment">
            <div id="link-payment" class="text-center col-sm-12">
                <a class="credit_card" href="#payment1" id="payment1">
                    <img src="{{asset('images/icon-bank1.png')}}" alt="Credit / Debit Card">
                    <p>Paypal</p>
                </a>
                <a class="credit_card active" href="#payment2" id="payment2">
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
            <div id="form-credit" class="form-payment active row mx-5">
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
