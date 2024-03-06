@extends('layouts')
<br>
<?php
if(session()->has('paymentStatus') && session('paymentStatus') != '') { ?>
    <h2 style="text-align: center;">Your Payment is {{session('paymentStatus')}}, Please select the more products you wish to purchase. </h2>
<?php  session()->pull('paymentStatus'); } else { ?>
    <h2 style="text-align: center;">Select the products you wish to purchase. </h2>
    <?php } ?>

<br><br>
@section('content')
    <div class="row" id="productGrid">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm product-card">
                    <div class="card-body" style="background-color: #d3d3d3;">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">${{ $product->price }}</p>
                        <div style="float: right">
                            <div class="btn-group">
                                <a href="{{ route('product.checkout', $product->id) }}" class="btn btn-sm btn-outline-secondary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@push('styles')
    <style>
        .product-card:hover .card-body {
            background-color: #ffcccc; 
        }
    </style>
@endpush
