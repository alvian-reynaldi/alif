@extends('layouts.app')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-8">
	    <div class="panel panel-default" style="border-color: #13aa7f">
		  <div class="panel-heading">
			<h4 class="card-title mb-4">Tambah Data Kantor Cabang</h4>
          </div>

          <div class="panel-body">
				{!! Form::open(['route' => 'branch.store', 'files' => true, 'class'=>'form-horizontal', 'method' => 'post'])!!}
				  @include('branch._form')
				{!! Form::close()  !!}
		  </div>

		</div>
	  </div>
    </div>
  </div>
@endsection
