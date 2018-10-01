<!-- Steps form -->
<div class="card">
    <div class="card-body mb-2">
        <!-- Stepper -->
        <div class="steps-form">
            <div class="steps-row setup-panel">
                <div class="steps-step pass">
                    <a href="{{route('http::booking-route')}}" class="btn btn-indigo btn-circle"></a>
                    <p>Booking</p>
                </div>
                <div class="steps-step pass">
                    <a href="{{route('http::booking-transfer')}}" class="btn btn-indigo btn-circle"></a>
                    <p>Transfer</p>
                </div>
                <div class="steps-step pass">
                    <a href="{{route('http::passenger-info')}}" class="btn btn-indigo btn-circle"></a>
                    <p>Passenger Info</p>
                </div>
                <div class="steps-step pass">
                    <a href="{{route('http::preview-payment')}}" class="btn btn-indigo btn-circle"></a>
                    <p>Preview & Payment</p>
                </div>
                <div class="steps-step active">
                    <a href="#" class="btn btn-indigo btn-circle"></a>
                    <p>Finish</p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Steps form -->