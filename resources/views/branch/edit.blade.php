@extends('layouts.app')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-8">
	    <div class="panel panel-default" style="border-color: #13aa7f">
		  <div class="panel-heading">
			<h4 class="panel-title">Ubah Data Branch</h2>
          </div>

          <div class="panel-body">
				{!! Form::model($branch, ['url' => url('/admin/branch/'.$branch->id), 'method' => 'patch', 'class'=>'form-horizontal', 'files' => true]) !!}
				  @include('branch._form')
				{!! Form::close() !!}
		  </div>

		</div>
	  </div>
    </div>
  </div>
@endsection

