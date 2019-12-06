@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">
      	<article class="card mb-4">
		<div class="card-body">

		<div class="panel panel-default" style="border-color: #13aa7f">

			<h4 class="card-title mb-4">Trial Balance Al Ijarah Tanggal: {{ $periode }}</h4>


		  <div class="panel-body">

			<div class="col-md-12">
				<!-- -->

				<div class="col-12 col-lg-12">
	                  <form action="{{ route('lapkeu.neraca') }}" method="gett">
	                    <div class="form-group row">
	                      <label class="col-form-label col-sm-2 text-sm-right">Tanggal Laporan</label>
	                      <div class="col-sm-4">
	                        <input type="text" class="form-control mb-4" id="datepicker-base" value="{{ isset($periode) ? $periode : date_format( today(),'Y-m-d') }}" name="periode">
	                      </div>
	                      <div class="col-sm-6 ml-sm-auto">
	                        <button type="submit" class="btn btn-primary">Tampilkan</button>
	                      </div>
	                    </div>
	                    <div class="form-group row">
	                    </div>		                    
	                  </form>
	            </div>

				<!-- -->
				@php
					$total_saldo1 	= 0;
					$nitem1			= 0;
				@endphp

				<DIV class="row">
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							
								@forelse ($ledgers1 as $ledger1)
								<tr>
								  <td colspan="4" style="height: 20px;padding: 5px;border-bottom: solid 1px #999;border-top: solid 1px #999;background-color: #eee">{{ $ledger1->Description }}</td>
								</tr>
									
									@forelse ($ledgers2 as $ledger2)
										@if ($ledger2->GL_ACCOUNT == $ledger1->ID)
											<tr>
												<td style="height: 20px;padding: 5px" width="5%"></td>
												<td colspan="3" style="height: 20px;padding: 5px">{{ $ledger2->Description }}</td>
											</tr>

											@forelse ($ledgers as $ledger)
												@if ($ledger->SL_ACCOUNT == $ledger2->ID)
													<tr>
														<td style="height: 20px;padding: 5px;border-top: none" width="5%"></td>
														<td style="height: 20px;padding: 5px;border-top: none" width="5%"></td>
														<td style="height: 20px;padding: 5px;border-top: none">{{ $ledger->ID }} - <I>{{ $ledger->Description }}</I></td>
														<td style="height: 20px;padding: 5px;border-top: none" align="right">{{ number_format($ledger->saldo,0,",",".") }}</td>
													</tr>
													@php
														$total_saldo1 += $ledger->saldo;
														$nitem1++;
													@endphp
												@endif
											@empty
											@endforelse

										@endif
									@empty
									@endforelse									
								@empty
								<tr>
								  <td colspan="4">Belum Terdapat Neraca pada Tanggal {{ $periode }}</td>
								</tr>
								@endforelse
							</table>
						</div>
					</div>
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
