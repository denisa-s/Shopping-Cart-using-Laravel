@extends('layoutcos')
@section('title', 'Products')
@section('content')
<a href="/home" class="btn btn-default">Admin page</a>
<div class="container products">
<div class="row">
@foreach($products as $product)
<div class="col-xs-18 col-sm-6 col-md-3">
<div class="thumbnail">
<img src="{{ $product->imagine }}" width="300" height="400">
<div class="caption">
<h4>{{ $product->nume }}</h4>
<p>{{ \Illuminate\Support\Str::limit(strtolower($product->descriere), 50)}}</p>
<p><strong>Pret: </strong> {{ $product->pret}}$</p>
<a href="http://localhost:8000/products/{{$product['id']}}" class="btn btn-default">Vizualizare</a>
<p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center"role="button">Pune in cos</a> </p>
</div>
</div>
</div>
@endforeach
</div><!-- End row -->
</div>
@endsection