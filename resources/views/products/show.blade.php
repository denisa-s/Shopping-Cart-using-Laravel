@extends('layouts.app')
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
View Product
</div>
<div class="panel-body">
<div class="pull-right">
<a class="btn btn-default" href="{{ route('products.index')
}}">Inapoi</a>
</div>
<div class="form-group">
<strong>Nume: </strong> {{ $product->nume }}
</div>
<div class="form-group">
<strong>Pret: </strong> {{ $product->pret }}
</div>
<div class="form-group">
<strong>Imagine: </strong> <img src="{{ $product->imagine }}" width="300" height="400"> 
</div>
<div class="form-group">
<strong>Descriere completa: </strong> {{ $product->desc_completa }}
</div>
</div>
</div>
@endsection