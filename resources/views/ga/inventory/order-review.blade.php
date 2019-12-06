@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
    	<div class="col-12 col-sm-12 col-md-12">
			<article class="card mb-4">
				<div class="card-body">
					<h4 class="card-title mb-4">Inventory Management</h4>
					<H5>Review Pemesanan Persediaan</H5>
					{!! Form::open(['url' => route('ga.inventory.order.store'), 'method' => 'post', 'class'=>'form-horizontal', 'files' => true]) !!}
					{!! Form::hidden('cabang',$inventoryorder->branchid) !!}
					{!! Form::hidden('id',$inventoryorder->assetid) !!}		
						@include('ga.inventory._order-review-form')
					{!! Form::close() !!}
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
