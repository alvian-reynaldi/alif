@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">

		<div class="panel panel-default" style="border-color: #13aa7f">

			<h4 class="card-title mb-4">Neraca Al Ijarah</h4>


		  <div class="panel-body">

			<div class="col-md-12">
				<!-- -->

				<div class="col-12 col-lg-12">
	                  <form>
	                    <div class="form-group row">
	                      <label class="col-form-label col-sm-2 text-sm-right">Tanggal Laporan</label>
	                      <div class="col-sm-4">
	                        <input type="text" class="form-control mb-4" id="datepicker-base">
	                      </div>
	                      <div class="col-sm-6 ml-sm-auto">
	                        <button type="submit" class="btn btn-primary">Tampilkan</button>
	                      </div>
	                    </div>	                    
	                  </form>
	            </div>

				<!-- -->

				<DIV class="row">
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							  <thead>
								<tr style="background-color: #f5f5f5;height: 40px;">
								  <td><strong>No Ledger</strong></td>
								  <td><strong>Cabang</strong></td>
								  <td><strong>Periode</strong></td>
								  <td><strong>Saldo</strong></td>
								</tr>
							  </thead>
							  <tbody>
								@forelse ($ledgers as $ledger)
								<tr style="height: 40px;padding-top:5px;padding-bottom: 5px">
								  <td>{{ $ledger->noledg }}</td>
								  <td>{{ $ledger->nocabg }}</td>
								  <td>{{ $ledger->periode }}</td>
								  <td>{{ $ledger->saldo }}</td>
								</tr>
								@empty
								<tr>
								  <td colspan="4">Belum Terdapat data kantor cabang</td>
								</tr>
								@endforelse
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		  </div>
		</div>

      </div>
    </div>
  </div>

@endsection
