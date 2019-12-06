@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
    	<div class="col-12 col-sm-12 col-md-12">
			<article class="card mb-4">
				<div class="card-body">
					<h4 class="card-title mb-4">Inventory Management</h4>
					<H5>Pemesanan Persediaan</H5>
					{!! Form::open(['url' => route('ga.inventory.order.store'), 'method' => 'post', 'class'=>'form-horizontal', 'files' => true]) !!}
					{!! Form::hidden('cabang',$cabang) !!}
					{!! Form::hidden('id',$asset->id) !!}		
						@include('ga._formOrder')
					{!! Form::close() !!}
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
