@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div class="panel panel-default">
<div class="panel-heading">
Lista produselor
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
<th>Nume</th>
<th>Pret</th>
<th>Imagine</th>
<th>Categorie</th>
<th>Descriere</th>
<th>Descriere completa</th>
<th>Stare</th>
<th>Oferta</th>
<th>Noutati</th>
<th>Cod</th>
<th>Metal</th>
<th>Piatra</th>
<th width="300">Actiune</th>
</tr>
@if (count($products) > 0)
@foreach ($products as $key => $product)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $product->nume }}</td>
<td>{{ $product->pret }}</td>
<td>{{ $product->imagine }}</td>
<td>{{ $product->categorie }}</td>
<td>{{ $product->descriere }}</td>
<td>{{ $product->desc_completa }}</td>
<td>{{ $product->stare }}</td>
<td>{{ $product->oferta }}</td>
<td>{{ $product->noutati }}</td>
<td>{{ $product->cod }}</td>
<td>{{ $product->metal }}</td>
<td>{{ $product->piatra }}</td>
<td>
<a class="btn btn-success" href="{{route('products.show',$product->id) }}">Vizualizare</a>
<a class="btn btn-primary" href="{{route('products.edit',$product->id) }}">Modificare</a>
<form action="{{ route('products.delete', $product->id) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-outline-danger">Delete</button>
</form>

</td>
</tr>
@endforeach
@else
<tr>
<td colspan="4">Nu exista produse!</td>
</tr>
@endif
</table>
<!-- Introduce nr pagina -->
{{$products->render()}}
</div>
</div>
@endsection