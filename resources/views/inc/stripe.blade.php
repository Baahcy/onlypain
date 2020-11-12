<form role="form" action="{{ route('stripe.payment') }}" method="post" class="validation" data-cc-on-file="false"
    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
    @csrf

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text'>
            </div>
        </div>

        {{-- <div class="col-md-6">
            <div class="form-group">
                <label class="bmd-label-floating"> Card Number </label>
                <input type="text" name="title" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="bmd-label-floating"> Card Number </label>
                <input type="text" name="title" class="form-control">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="bmd-label-floating"> Card Number </label>
                <input type="text" name="title" class="form-control">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="bmd-label-floating"> Card Number </label>
                <input type="text" name="title" class="form-control">
            </div>
        </div> --}}
    </div>



    {{-- <div class='form-row row'>
        <div class='col-xs-12 col-md-4 form-group cvc required'>
            <label class='control-label'>CVC</label>
            <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 415' size='4' type='text'>
        </div>
        <div class='col-xs-12 col-md-4 form-group expiration required'>
            <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month'
                placeholder='MM' size='2' type='text'>
        </div>
        <div class='col-xs-12 col-md-4 form-group expiration required'>
            <label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year'
                placeholder='YYYY' size='4' type='text'>
        </div>
    </div>

    <div class='form-row row'>
        <div class='col-md-12 hide error form-group'>
            <div class='alert-danger alert'>Fix the errors before you begin.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-danger btn-lg btn-block" type="submit">Pay Now </button>
        </div>
    </div> --}}

</form>
