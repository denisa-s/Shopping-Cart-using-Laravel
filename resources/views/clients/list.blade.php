@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div class="panel panel-default">
<div class="panel-heading">
Lista clientilor
</div>
<div class="panel-body">
<div class="form-group">
<div class="pull-right">
<a href="/products/create" class="btn btn-default">Adaugare Produs Nou</a>
<a href="/clients/create" class="btn btn-default">Adaugare Client Nou</a>
</div>
</div>
<table class="table table-bordered table-stripped">
<tr>
<th width="20">No</th>
<th>Username</th>
<th>Password</th>
<th>Email</th>
<th>Strada</th>
<th>Oras</th>
<th>Tara</th>
<th>Cod postal</th>
<th>Nr card</th>
<th>Tip card</th>
<th>Data expirare card</th>
<th>Acceptare email</th>
<th>Nr inreg RC</th>
<th>Nume</th>
<th>Cod fiscal</th>
<th width="300">Actiune</th>
</tr>
@if (count($clients) > 0)
@foreach ($clients as $key => $client)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $client->username }}</td>
<td>{{ $client->password }}</td>
<td>{{ $client->email }}</td>
<td>{{ $client->strada }}</td>
<td>{{ $client->oras }}</td>
<td>{{ $client->tara }}</td>
<td>{{ $client->codpostal }}</td>
<td>{{ $client->nrcard }}</td>
<td>{{ $client->tipcard }}</td>
<td>{{ $client->dataexpcard }}</td>
<td>{{ $client->acceptareemail }}</td>
<td>{{ $client->nrinregRC }}</td>
<td>{{ $client->nume }}</td>
<td>{{ $client->codfiscal }}</td>
<td>
<a class="btn btn-success" href="{{route('clients.show',$client->id) }}">Vizualizare</a>
<a class="btn btn-primary" href="{{route('clients.edit',$client->id) }}">Modificare</a>
<form action="{{ route('clients.delete', $client->id) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-outline-danger">Delete</button>
</form>

</td>
</tr>
@endforeach
@else
<tr>
<td colspan="4">Nu exista clienti!</td>
</tr>
@endif
</table>
<!-- Introduce nr pagina -->
{{$clients->render()}}
</div>
</div>
@endsection