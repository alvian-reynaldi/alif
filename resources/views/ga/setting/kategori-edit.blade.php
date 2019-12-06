@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
    	<div class="col-12 col-sm-12 col-md-12">
			<article class="card mb-4">
				<div class="card-body">
					<h4 class="card-title mb-4">Inventory Management</h4>
					<H5>Edit Kategori</H5>
					{!! Form::open(['url' => route('ga.inventory.kategori.update',['id' => $kategori->id]), 'method' => 'patch', 'class'=>'form-horizontal', 'files' => true]) !!}
						@include('ga.setting._formKategori')
					{!! Form::close() !!}
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
