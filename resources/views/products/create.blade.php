@extends('layouts.app')
@section('content')
<div class="panel panel-default">
<div class="panel-heading">Adaugă produs nou</div>
<div class="panel-body">
@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Errors:</strong>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
{{ Form::open(array('route' => 'products.store','method'=>'POST')) }}
<div class="form-group">
<label for="nume">Nume</label>
<input type="text" name="nume" class="form-control" value="{{old('nume') }}">
</div>
<div class="form-group">
<label for="pret">Pret</label>
<textarea name="pret" class="form-control">{{old('pret') }}</textarea>
</div>
<div class="form-group">
<label for="imagine">Imagine</label>
<input type="text" name="imagine" class="form-control" value="{{old('imagine') }}">
</div>
<div class="form-group">
<label for="categorie">Categorie</label>
<textarea name="categorie" class="form-control">{{old('categorie') }}</textarea>
</div>
<div class="form-group">
<label for="descriere">Descriere</label>
<input type="text" name="descriere" class="form-control" value="{{old('descriere') }}">
</div>
<div class="form-group">
<label for="desc_completa">Descriere completa </label>
<textarea name="desc_completa" class="form-control" rows="5"> {{old('desc_completa') }}</textarea>
</div>
<div class="form-group">
<label for="stare">Stare</label>
<input type="text" name="stare" class="form-control" value="{{old('stare') }}">
</div>
<div class="form-group">
<label for="oferta">Oferta</label>
<textarea name="oferta" class="form-control">{{old('oferta') }}</textarea>
</div>
<div class="form-group">
<label for="noutati">Noutati</label>
<input type="text" name="noutati" class="form-control" value="{{old('noutati') }}">
</div>
<div class="form-group">
<label for="cod">Cod </label>
<textarea name="cod" class="form-control"> {{old('cod') }}</textarea>
</div>
<div class="form-group">
<label for="metal">Metal</label>
<input type="text" name="metal" class="form-control" value="{{old('metal') }}">
</div>
<div class="form-group">
<label for="piatra">Piatra</label>
<textarea name="piatra" class="form-control">{{old('piatra') }}</textarea>
</div>
<div class="form-group">
<input type="submit" value="Adauga produs" class="btn btn-info">
<a href="{{ route('products.index') }}" class="btn btndefault">Cancel</a>
</div>
{{ Form::close() }}
</div>
</div>
@endsection