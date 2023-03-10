@extends('layouts.app')
@section('content')
<div class="panel panel-default">
<div class="panel-heading">
View Client
</div>
<div class="panel-body">
<div class="pull-right">
<a class="btn btn-default" href="{{ route('clients.index')
}}">Inapoi</a>
</div>
<div class="form-group">
<strong>Nume: </strong> {{ $client->nume }}
</div>
<div class="form-group">
<strong>Email: </strong> {{ $client->email }}
</div>
<div class="form-group">
<strong>Cod postal: </strong> {{ $client->codpostal }}
</div>
<div class="form-group">
<strong>Nr card: </strong> {{ $client->nrcard }}
</div>
</div>
</div>
@endsection