@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">
      	<article class="card mb-4">
		<div class="card-body">

		<div class="panel panel-default" style="border-color: #13aa7f">

			<h4 class="card-title mb-4">Laba/ Rugi Al Ijarah Tanggal</h4>


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
	                      <label class="col-form-label col-sm-2 text-sm-right">Kons/ Cabang</label>
	                      <div class="col-sm-4">
	                        {!! Form::select('cabang', ['HOF'=>'Konsolidasi']+App\Branch::pluck("branchname","branchcode")->all(), isset($cabang) ? $cabang : "HOF", ['class'=>'form-control']) !!}
	                      </div>	                      
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
															
								@forelse ($ledgers as $ledger)	
									@if ($ledger->Format == "Header1")
										@if ($ledger->Type == "Desc")
											<tr>
											  <td colspan="5" style="height: 20px;padding: 5px;border-bottom: solid 1px #999;border-top: solid 1px #999;background-color: #eee"><B>{{ $ledger->Description }}</B></td>								  
											</tr>
										@endif
										@if ($ledger->Type == "Sum")
											<tr>
											  <td colspan="4" style="height: 20px;padding: 5px;border-bottom: solid 1px #999;border-top: solid 1px #999;background-color: #eee"><B>{{ $ledger->Description }}</B></td>
											  <td style="height: 20px;padding: 5px;border-bottom: solid 1px #999;border-top: solid 1px #999;background-color: #eee" align="right"><B>{{ number_format($ledger->Amount3,0,",",".") }}</B></td>								  
											</tr>
										@endif
									@endif

									@if ($ledger->Format == "Header2")
										@if ($ledger->Type == "Desc")
											<tr>
												<td style="height: 20px;padding: 5px;border-top: none" width="5%"></td>
												<td colspan="4" style="height: 20px;padding: 5px;border-top: none"><B>{{ $ledger->Description }}</B> </td>
											</tr>
										@endif
										@if ($ledger->Type == "Sum")
											<tr>
												<td style="height: 20px;padding: 5px;border-top: none" width="5%"></td>
												<td colspan="3" style="height: 20px;padding: 5px;border-top: none"><B>{{ $ledger->Description }}</B> </td>
												<td style="height: 20px;padding: 5px;border-top: none" align="right"><B>{{ number_format($ledger->Amount3,0,",",".") }}</B></td>
											</tr>
										@endif

									@endif

									@if ($ledger->Format == "Header3")
										<tr>
											<td style="height: 20px;padding: 5px;border-top: none" width="5%"></td>
											<td style="height: 20px;padding: 5px;border-top: none" width="5%"></td>
											<td colspan="2" style="height: 20px;padding: 5px;border-top: none">{{ $ledger->Description }} </td>
											<td style="height: 20px;padding: 5px;border-top: none" align="right">{{ number_format($ledger->Amount3,0,",",".") }}</td>
										</tr>
									@endif

									@if ($ledger->Format == "Header4")
										<tr>
											<td style="height: 20px;padding: 5px;border-top: none" width="5%"></td>
											<td style="height: 20px;padding: 5px;border-top: none" width="5%"></td>
											<td style="height: 20px;padding: 5px;border-top: none" width="5%"></td>
											<td style="height: 20px;padding: 5px;border-top: none">{{ $ledger->Description }} </td>
											<td style="height: 20px;padding: 5px;border-top: none" align="right">{{ number_format($ledger->Amount3,0,",",".") }}</td>
										</tr>
									@endif
									
									@php
										$total_saldo1 += $ledger->Amount3;
										$nitem1++;
									@endphp																						
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
