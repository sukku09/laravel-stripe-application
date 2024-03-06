@extends('layouts')
<br>
<h2 style="text-align: center;">Checkout {{ $product->name }} Product. </h2>
<br><br>
@section('content')
    <div class="container payoutproductview">
        <h1>{{ $product->name }}</h1>
        <p>Price: RS {{ $product->price }}</p>
        <p>Description: {{ $product->description }}</p>
        <form method="post" action="{{ route('payment.response') }}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ config('stripekey.STRIPE_KEY') }}"
                data-amount="{{ $product->price * 100 }}"
                data-name="{{ $product->name }}"
                data-description="Purchase {{ $product->name }}"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-currency="inr">
            </script>
        </form>
    </div>
@endsection

<style>
.payoutproductview {
    text-align: center;
    border: solid;
    width: fit-content !important;
    border-color: antiquewhite;
}
</style>