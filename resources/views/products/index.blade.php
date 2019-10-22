@extends('layouts.app')

@section('content')
    <h1>Recently Created Products</h1>
    @if(count($productVariants) > 0)
    @foreach($productVariants as $product)
        <div class="card p3 p-3 mt-3 mb-3">
            <h3>Product: {{$product->product_variant_name}} for {{$product->total_price}}</h3>
            <small>Created at {{$product->created_at}}</small>
        </div>
    @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection


