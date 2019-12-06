@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
    	<div class="col-12 col-sm-12 col-md-12">
			<article class="card mb-4">
				<div class="card-body">
					<h4 class="card-title mb-4">Rincian Kontrak</h4>
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							  <tbody>
							  	<td style="border: 1px solid #c0c0c0">
									<table class="table">
										<tr>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0" width="11%"><strong>No Kontrak</strong></td>
										  <td style="padding: 5px;" width="20%">{{ $kontrak->contract_no }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0" width="13%"><strong>Tanggal Aplikasi</strong></td>
										  <td style="padding: 5px;" width="25%">{{ $kontrak->appl_date }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0" width="12%"><strong>Business Unit</strong></td>
										  <td style="padding: 5px;border-right: 1px solid #f0f0f0">{{ $kontrak->buss_unit }}</td>
										</tr>
										<tr>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>Nama</strong></td>
										  <td style="padding: 5px;">{{ $kontrak->cust_name }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>Alamat Collect</strong></td>
										  <td style="padding: 5px;">{{ $kontrak->collect_addr }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>Cabang</strong></td>
										  <td style="padding: 5px;border-right: 1px solid #f0f0f0">{{ $kontrak->office_code }}</td>
										</tr>
										<tr>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>Handphone</strong></td>
										  <td style="padding: 5px;">{{ $kontrak->handphone_1 }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>Kode Pos</strong></td>
										  <td style="padding: 5px;">{{ $kontrak->zip_code }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"></td>
										  <td style="padding: 5px;border-right: 1px solid #f0f0f0"></td>
										</tr>
									</table>							  		
							  	</td>
							  </tbody>
							</table>
						</div>
					</div>
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							  <tbody>
							  	<td style="border: 1px solid #c0c0c0">
									<table class="table">
										<tr>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0" width="11%"><strong>Tipe</strong></td>
										  <td style="padding: 5px;" width="20%">{{ $kontrak->obj_type }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0" width="13%"><strong>Brand</strong></td>
										  <td style="padding: 5px;" width="20%">{{ $kontrak->obj_brand }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0" width="12%"><strong>Deskripsi</strong></td>
										  <td style="padding: 5px;border-right: 1px solid #f0f0f0">{{ $kontrak->obj_desc }}</td>
										</tr>
										<tr>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>Warna</strong></td>
										  <td style="padding: 5px;">{{ $kontrak->obj_color }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>Tahun</strong></td>
										  <td style="padding: 5px;">{{ $kontrak->obj_year }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>Supplier</strong></td>
										  <td style="padding: 5px;border-right: 1px solid #f0f0f0">{{ $kontrak->supp_code }}</td>
										</tr>
										<tr>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>No Rangka</strong></td>
										  <td style="padding: 5px;">{{ $kontrak->noka }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>No Mesin</strong></td>
										  <td style="padding: 5px;">{{ $kontrak->nosin }}</td>
										  <td style="padding: 5px;border-left: 1px solid #f0f0f0"><strong>No Polisi</strong></td>
										  <td style="padding: 5px;border-right: 1px solid #f0f0f0">{{ $kontrak->no_polisi }}</td>
										</tr>
									</table>							  		
							  	</td>
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
