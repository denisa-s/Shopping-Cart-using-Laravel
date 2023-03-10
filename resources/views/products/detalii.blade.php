@extends('block.master')
@section('breadcrumbs')
<!--breadcrumbs-->
<div class="container">
	<div class="row">
		<div class="col-sm-12">

		</div>
	</div>
</div>
@stop
@section('contents')
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 padding-right">
				<div class="product-details">
					<div class="col-sm-5">
						<div class="view-product">
							<img src="{{ $product->imgsrc }}" alt="" />
						</div>
					</div>

					<div class="col-sm-7">
						<div class="product-information">
							<h1>{{ $product->title }}</h1>
							{!! Form::open(['url'=>'product/'.$product->slug,'method'=>'post']) !!}
							<span>
								<span>RON {{ $product->price }}</span>
								<label>Cantitate:</label>
								{!! Form::text('quantity',1) !!}
								<button type="submit" class="btn btn-fefault add-to-cart cart ">
									<i class="fa fa-shopping-cart"></i>
									Adauga in cos
								</button>
							</span>
							{!! Form::close() !!}
							<p><b>ID Carte:</b>{{ $product->id }}</p>
							<p><b>Rating:</b>
							@if ($rating != null)
							{{$rating}}
							@else
						Acest produs nu are rating inca!
							@endif
							</p>
							<p><b>Disponibilitate:
							@if ($product->hadstock)
							</b> In Stoc</p>
							@else
							</b> Vandut</p>
							@endif
							<p><b>Editura:</b> {{ $product->company }}</p>
							<p><b>Autor:</b> {{ $product->publisher }}</p>
							<p><b>Data publicarii:</b> {{ $product->created_at }}</p>
						</div>
					</div>
				</div>
					<div class="category-tab shop-details-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Detalii</a></li>
								<li><a href="#reviews" data-toggle="tab">Comentarii ({{count($reviews)}})</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
									<div class="col-sm-12">
										<p>{{ $product->detail }}</p>
									</div>
							</div>
							
							<div class="tab-pane fade in" id="reviews" >
								<div class="col-sm-12">
								@if (count($reviews) == 0 )
								Nu sunt comentarii inca.
								@endif
								@foreach ($reviews as $review)
									<ul>
										<li><a href="#"><i class="fa fa-user"></i>{{ $review->username }}</a></li>
										<li><a href="#"><i class="fa fa-clock-o"></i>{{ $review->created_at }}</a></li>
										<li><a href="#"><i class="fa fa-star"></i>{{ $review->rating }}</a></li>
									</ul>
									<p>{{ $review->detail }}</p>
								@endforeach
								@if ($purchased)
									<p><b>Scrieti un comentariu</b></p>
									{!! Form::open(['url'=>'product/'.$product->slug.'/addreview','method'=>'post']) !!}
										<span>
											<label>Rating:</label>
											<input type="range" name="rating" min="1" max="5" step="1"/>
										</span>
										<textarea name="detail">Puteti scrie un comentariu o singura data</textarea>
										<button type="submit" class="btn btn-default pull-right">
											Submit
										</button>
									{!! Form::close() !!}
								@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop
