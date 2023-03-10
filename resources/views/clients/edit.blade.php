@extends('layouts.app')
@section('content')
<div class="panel panel-default">
<div class="panel-heading"> Modificare informatii client</div>
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
{!! Form::model($client, ['method' => 'PATCH','route' =>['clients.update', $client->id]]) !!}
<div class="form-group">
<label for="username">Username</label>
<input type="text" name="username" class="form-control" value="{{$client->nume }}">
</div>
<div class="form-group">
<label for="password">Password</label>
<textarea name="password" class="form-control" >{{ $client->password}}</textarea>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="text" name="email" class="form-control"  value="{{$client->email }}">
</div>
<div class="form-group">
<label for="strada">Strada</label>
<textarea name="strada" class="form-control">{{$client->strada}}</textarea>
</div>
<div class="form-group">
<label for="oras">Oras</label>
<input type="text" name="oras" class="form-control" value="{{$client->oras }}">
</div>
<div class="form-group">
<label for="tara">Tara</label>
<textarea name="tara" class="form-control"> {{$client->tara }}</textarea>
</div>
<div class="form-group">
<label for="codpostal">Cod postal</label>
<input type="text" name="codpostal" class="form-control" value="{{$client->codpostal}}">
</div>
<div class="form-group">
<label for="nrcard">Nr card</label>
<textarea name="nrcard" class="form-control">{{$client->nrcard }}</textarea>
</div>
<div class="form-group">
<label for="tipcard">Tip card</label>
<input type="text" name="tipcard" class="form-control" value="{{$client->tipcard }}">
</div>
<div class="form-group">
<label for="dataexpcard">Data expirare card</label>
<textarea name="dataexpcard" class="form-control"> {{$client->dataexpcard }}</textarea>
</div>
<div class="form-group">
<label for="acceptareemail">Acceptare email</label>
<input type="text" name="acceptareemail" class="form-control" value="{{$client->acceptareemail}}">
</div>
<div class="form-group">
<label for="nrinregRC">Nr inreg RC</label>
<textarea name="nrinregRC" class="form-control">{{$client->nrinregRC }}</textarea>
</div>
<div class="form-group">
<label for="nume">Nume</label>
<input type="text" name="nume" class="form-control" value="{{$client->nume }}">
</div>
<div class="form-group">
<label for="codfiscal">Cod fiscal</label>
<textarea name="codfiscal" class="form-control">{{$client->codfiscal }}</textarea>
</div>
<div class="form-group">
<input type="submit" value="Salvare Modificari" class="btn btn-info">
<a href="{{route('clients.index') }}" class="btn btn-default">Cancel</a>
</div>
{!! Form::close() !!}
</div>
</div>
@endsection