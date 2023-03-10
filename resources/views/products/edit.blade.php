@extends('layouts.app')
@section('content')
<div class="panel panel-default">
<div class="panel-heading"> Modificare informatii produs</div>
<div class="panel-body">
<!-- exista inregistrari in tabelul task -->
@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Eroare:</strong>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<!--populez campurile formularului cu datele aferente din tabela task -->
{!! Form::model($product, ['method' => 'PATCH','route' =>['products.update', $product->id]]) !!}
<div class="form-group">
<label for="nume">Nume</label>
<input type="text" name="nume" class="form-control" value="{{$product->nume }}">
</div>
<div class="form-group">
<label for="pret">Pret</label>
<textarea name="pret" class="form-control" rows="3">{{ $product->pret}}</textarea>
</div>
<div class="form-group">
<label for="imagine">Imagine</label>
<input type="text" name="imagine" class="form-control" value="{{$product->imagine }}">
</div>
<div class="form-group">
<label for="categorie">Categorie</label>
<textarea name="categorie" class="form-control">{{$product->categorie}}</textarea>
</div>
<div class="form-group">
<label for="descriere">Descriere</label>
<input type="text" name="descriere" class="form-control" value="{{$product->descriere }}">
</div>
<div class="form-group">
<label for="desc_completa">Descriere completa </label>
<textarea name="desc_completa" class="form-control" rows="5"> {{$product->desc_completa }}</textarea>
</div>
<div class="form-group">
<label for="stare">Stare</label>
<input type="text" name="stare" class="form-control" value="{{$product->stare}}">
</div>
<div class="form-group">
<label for="oferta">Oferta</label>
<textarea name="oferta" class="form-control">{{$product->oferta }}</textarea>
</div>
<div class="form-group">
<label for="noutati">Noutati</label>
<input type="text" name="noutati" class="form-control" value="{{$product->noutati }}">
</div>
<div class="form-group">
<label for="cod">Cod </label>
<textarea name="cod" class="form-control"> {{$product->cod }}</textarea>
</div>
<div class="form-group">
<label for="metal">Metal</label>
<input type="text" name="metal" class="form-control" value="{{$product->metal}}">
</div>
<div class="form-group">
<label for="piatra">Piatra</label>
<textarea name="piatra" class="form-control">{{$product->piatra }}</textarea>
</div>
<div class="form-group">
<input type="submit" value="Salvare Modificari" class="btn btn-info">
<a href="{{route('products.index') }}" class="btn btn-default">Cancel</a>
</div>
{!! Form::close() !!}
</div>
</div>
@endsection