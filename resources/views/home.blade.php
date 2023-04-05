@extends('layouts.app')

@section('content')
<div class="container-fluid hero-section d-flex align-items-center">
    <div class="col-4 text-center m-auto bg-black bg-opacity-50 text-white p-5">
        <h1 class="mb-4">Our dedication to sustainability</h1>
        <p class="mb-5">Looking for high-quality clothing that's both durable and sustainable? 
            Our brand is dedicated to providing stylish and long-lasting garments that are 
            also made from eco-friendly materials, so you can feel good about your 
            purchase and reduce your impact on the environment. Shop now and join us in our commitment to sustainable fashion!
        <p>
        <button class="btn-dark-green">Shop Now</button>
    </div>
</div>
<x-product-list :products="$products" :admin="$admin"></x-product-list>
@endsection
