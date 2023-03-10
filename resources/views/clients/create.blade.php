@extends('layouts.app')
@section('content')
<div class="panel panel-default">
<div class="panel-heading">Adaugă client nou</div>
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
{{ Form::open(array('route' => 'clients.store','method'=>'POST')) }}
<div class="form-group">
<label for="username">Username</label>
<input type="text" name="username" class="form-control" value="{{old('username') }}">
</div>
<div class="form-group">
<label for="password">Password</label>
<textarea name="password" class="form-control">{{old('password') }}</textarea>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="text" name="email" class="form-control" value="{{old('email') }}">
</div>
<div class="form-group">
<label for="strada">Strada</label>
<textarea name="strada" class="form-control">{{old('strada') }}</textarea>
</div>
<div class="form-group">
<label for="oras">Oras</label>
<input type="text" name="oras" class="form-control" value="{{old('oras') }}">
</div>
<div class="form-group">
<label for="tara">Tara</label>
<textarea name="tara" class="form-control"> {{old('tara') }}</textarea>
</div>
<div class="form-group">
<label for="codpostal">Cod postal</label>
<input type="text" name="codpostal" class="form-control" value="{{old('codpostal') }}">
</div>
<div class="form-group">
<label for="nrcard">Nr card</label>
<textarea name="nrcard" class="form-control">{{old('nrcard') }}</textarea>
</div>
<div class="form-group">
<label for="tipcard">Tip card</label>
<input type="text" name="tipcard" class="form-control" value="{{old('tipcard') }}">
</div>
<div class="form-group">
<label for="dataexpcard">Data expirare card</label>
<textarea name="dataexpcard" class="form-control"> {{old('dataexpcard') }}</textarea>
</div>
<div class="form-group">
<label for="acceptareemail">Acceptare email</label>
<input type="text" name="acceptareemail" class="form-control" value="{{old('acceptareemail') }}">
</div>
<div class="form-group">
<label for="nrinregRC">Nr inreg RC</label>
<textarea name="nrinregRC" class="form-control">{{old('nrinregRC') }}</textarea>
</div>
<div class="form-group">
<label for="nume">Nume</label>
<input type="text" name="nume" class="form-control" value="{{old('nume') }}">
</div>
<div class="form-group">
<label for="codfiscal">Cod fiscal</label>
<textarea name="codfiscal" class="form-control">{{old('codfiscal') }}</textarea>
</div>
<div class="form-group">
<input type="submit" value="Adauga client" class="btn btn-info">
<a href="{{ route('clients.index') }}" class="btn btndefault">Cancel</a>
</div>
{{ Form::close() }}
</div>
</div>
@endsection