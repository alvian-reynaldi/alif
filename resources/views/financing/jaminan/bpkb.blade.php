@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12">
      	<article class="card mb-4">
		<div class="card-body">

		<div class="panel panel-default" style="border-color: #13aa7f">

			<h4 class="card-title mb-4">Daftar Jaminan BPKB</h4>


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
                    		<table>
                    			<tr>
                    				<td>
                    					<table>
										  <thead>
											<tr style="background-color: #f5f5f5;">
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="30"><strong>Cabang</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="20"><strong>Cab</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="30"><strong>Contract#</strong></td>  
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="50"><strong>Nama</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="30"><strong>Supplier</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="10"><strong>B/U</strong></td>				  
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="40"><strong>Object</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="10"><strong>Tahun</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="30"><strong>O/S Pokok</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="10"><strong>Angs ke</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="10"><strong>TOP</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="10"><strong>Coll Status</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="30"><strong>Sub Location</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="20"><strong>Fiducia</strong></td>
											  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px" width="20"><strong>Object Price</strong></td>
											</tr>
										  </thead>
										  <tbody>
											@forelse ($ledgers1 as $ledger1)
											<tr>
											  <td style="height: 28px;padding:5px;padding-bottom: 0px">{{ DB::connection('oracle')->table("fs_mst_offices")->where('office_code',$ledger1->office_code)->value("name_short") }}</td>
											  <td style="height: 28px;padding:5px;padding-bottom: 0px">{{ $ledger1->office_code }}</td>
											  <td style="height: 28px;padding: 5px;"><a href="{{ route('financing.jaminan.rinci',['id'=>$ledger1->contract_no]) }}">{{ $ledger1->contract_no }}</td>
											  <td style="height: 28px;padding:5px;padding-bottom: 0px">{{ $ledger1->cust_name }}</td>	
											  <td style="height: 28px;padding:5px;padding-bottom: 0px">{{ DB::connection('oracle')->table("fs_mst_supplier")->where('supl_code',$ledger1->supp_code)->value("supl_name") }}</td>		
											  <td style="height: 28px;padding:5px;padding-bottom: 0px">{{ $ledger1->buss_unit }}</td>						  
											  <td style="height: 28px;padding:5px;padding-bottom: 0px" width="60">{{ $ledger1->obj_brand }} {{ $ledger1->obj_desc }}</td>
											  <td style="height: 28px;padding:5px;padding-bottom: 0px">{{ $ledger1->obj_year }}</td>
											  <td style="height: 28px;padding:5px;padding-bottom: 0px" align="right">{{ number_format(DB::connection('oracle')->table("ar_rpt_ovd_running_data_tmp")->where('contract_no',$ledger1->contract_no)->value("ots_pkk_ak"),0,",",".") }}</td>
											  <td style="height: 28px;padding:5px;padding-bottom: 0px" align="right">{{ number_format(DB::connection('oracle')->table("ar_rpt_ovd_running_data_tmp")->where('contract_no',$ledger1->contract_no)->value("angs_ke_aw"),0,",",".") }}</td>
											  <td style="height: 28px;padding:5px;padding-bottom: 0px">{{ $ledger1->top }}</td>
											  <td style="height: 28px;padding:5px;padding-bottom: 0px">{{ DB::connection('oracle')->table("om_trn_collateral")->where('contract_no',$ledger1->contract_no)->value("coll_status") }}</td>
											  <td style="height: 28px;padding:5px;padding-bottom: 0px">{{ DB::connection('oracle')->table("om_trn_collateral")->where('contract_no',$ledger1->contract_no)->value("coll_sub_location") }}</td>
											  <td style="height: 28px;padding:5px;padding-bottom: 0px">{{ DB::connection('oracle')->table("ordmgmt.om_trn_rpt_fiducia")->where('contract_no',$ledger1->contract_no)->value("fiducia_no") }}</td>
											  <td align="right" style="height: 28px;padding:5px;padding-bottom: 0px">{{ number_format($ledger1->obj_price,0,",",".") }}</td>
											</tr>
											@empty
											<tr>
											  <td colspan="4">Belum Terdapat data produk</td>
											</tr>
											@endforelse
										  </tbody>
										</table>
                    				</td>
                    			</tr>
                    		</table>
							
						</div>
					</div>

					{!! $ledgers1->withPath('jaminan')->appends(compact('q'))->links() !!}

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
