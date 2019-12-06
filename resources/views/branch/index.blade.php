@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">

		<div class="panel panel-default" style="border-color: #13aa7f">

			<h4 class="card-title mb-4">Daftar Kantor Cabang</h4>


		  <div class="panel-body">

			<div class="col-md-12">
				<DIV class="row">
					<DIV class="col-md-8">
						{!! Form::open(['url' => 'branch', 'method'=>'get']) !!}
						  	{!! Form::text('q', isset($q) ? $q : null, ['class' => 'col-md-6', 'placeholder' => 'Kantor', 'style'=>'height:32px;']) !!}
							{!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
						{!! Form::close() !!}
					</DIV>
					<DIV class="col-md-4 text-sm-right">						
							
					</DIV>
				</DIV>
				<BR>
				<DIV class="row">
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							  <thead>
								<tr style="background-color: #f5f5f5;">
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Kode</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Nama Kantor</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Alamat</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Kota</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Phone</strong></td>
								</tr>
							  </thead>
							  <tbody>
								@forelse ($branches as $branch)
								<tr>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $branch->office_code }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $branch->name_short }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $branch->address1 }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $branch->city }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $branch->phone1 }}</td>
								</tr>
								@empty
								<tr>
								  <td colspan="3">Belum Terdapat data kantor cabang</td>
								</tr>
								@endforelse
							  </tbody>
							</table>
						</div>
					</div>
					{!! $branches->withPath('branch')->appends(compact('q'))->links() !!}

				</div>
			</div>

		  </div>
		</div>

      </div>
    </div>
  </div>

@endsection
