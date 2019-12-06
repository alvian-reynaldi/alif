@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
    	<div class="col-12 col-sm-12 col-md-12">
			<article class="card mb-4">
				<div class="card-body">
					<h4 class="card-title mb-4">Document Management</h4>
					<h5 class="card-title mb-4">Edit Dokumen</h5>
					{!! Form::model($dokumen, ['url' => route('financing.dms.update',['id' => $dokumen[0]->id]), 'method' => 'patch', 'class'=>'form-horizontal', 'files' => true]) !!}					
					@include('dms._formDokumen')
					{!! Form::close() !!}
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
