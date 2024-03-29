@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12">
      	<article class="card mb-4">
		<div class="card-body">

		<div class="panel panel-default" style="border-color: #13aa7f">

			<h4 class="card-title mb-4">Daftar Kontrak</h4>


		  <div class="panel-body">

			<div class="col-md-12">
				<DIV class="row">
					<DIV class="col-md-8">
						{!! Form::open(['url' => 'admin/setting/product', 'method'=>'get']) !!}
						  	{!! Form::text('q', isset($q) ? $q : null, ['class' => 'col-md-6', 'placeholder' => 'No Kontrak', 'style'=>'height:32px;']) !!}
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
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Contract#</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Konsumen</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Nama</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Cabang</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>O/S</strong></td>
								</tr>
							  </thead>
							  <tbody>
								@forelse ($ledgers1 as $ledger1)
								<tr>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $ledger1->contract_no }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $ledger1->cust_no }}</td>
								  <td style="height: 28px;padding-top:3px;padding-bottom: 0px">{{ DB::connection('oracle')->table("fs_mst_cust")->where('cust_no',$ledger1->cust_no)->value("cust_name") }}</td>
								  <td style="height: 28px;padding-top:3px;padding-bottom: 0px">{{ DB::connection('oracle')->table("fs_mst_offices")->where('office_code',$ledger1->office_code)->value("name_short") }}</td>
								  <td align="right" style="height: 28px;padding-top:3px;padding-bottom: 0px">{{ number_format($ledger1->prnc_amt_dtl_cust_paid,0,",",".") }}</td>
								</tr>
								@empty
								<tr>
								  <td colspan="4">Belum Terdapat data produk</td>
								</tr>
								@endforelse
							  </tbody>
							</table>
						</div>
					</div>

					{!! $ledgers1->withPath('contract')->appends(compact('q'))->links() !!}

				</div>
			</div>

		  </div>
		</div>

      </div>
	  </article>
      </div>
    </div>
  </div>

@endsection
