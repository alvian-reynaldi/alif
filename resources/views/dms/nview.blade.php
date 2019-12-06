@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
    	<div class="col-12 col-sm-12 col-md-12">
			<article class="card mb-4">
				<div class="card-body">
					<h4 class="card-title mb-4">Document Management</h4>
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
								<tr>
								  <td width="15%" style="height: 32px;padding: 5px;padding-bottom: 0px;background-color: #f5f5f5;">No Dokumen</td>
								  <td width="35%" style="height: 32px;padding: 5px;padding-bottom: 0px"><strong>{{ $dokumen->docno }}</strong></td>
								  <td width="15%" style="height: 32px;padding: 5px;padding-bottom: 0px;background-color: #f5f5f5;">Kategori</td>
								  <td width="35%" style="height: 32px;padding: 5px;padding-bottom: 0px">{{ App\KategoriDokumen::pluck("categoryname","id")[$dokumen->categoryid] }}</td>
								</tr>
								<tr>
								  <td style="height: 28px;padding: 5px;padding-bottom: 0px;background-color: #f5f5f5;">Nama Dokumen</td>
								  <td style="height: 28px;padding: 5px;padding-bottom: 0px">{{ $dokumen->docname }}</td>
								  <td width="15%" style="height: 32px;padding: 5px;padding-bottom: 0px;background-color: #f5f5f5;">Owner</td>
								  <td width="35%" style="height: 32px;padding: 5px;padding-bottom: 0px">{{ App\User::pluck("name","id")[$dokumen->owner] }}</td>
								</tr>
								<tr>
								  <td width="15%" style="height: 32px;padding: 5px;padding-bottom: 0px;background-color: #f5f5f5;">Status</td>
								  <td width="35%" style="height: 32px;padding: 5px;padding-bottom: 0px">{{ App\Dokumen::status()[$dokumen->status] }}</td>
								  <td style="height: 28px;padding: 5px;padding-bottom: 0px;background-color: #f5f5f5;">Dilihat</td>
								  <td style="height: 28px;padding: 5px;padding-bottom: 0px" align="right">{{ $dokumen->viewed }}</td>
								</tr>
								<tr>
									<td colspan="2" style="height: 28px;padding: 5px;padding-bottom: 0px">
										
									</td>
									<td colspan="2" align="right" style="height: 28px;padding: 5px;padding-bottom: 0px">
										<A HREF="{{ route('financing.dms') }}" class="btn btn-info btn-sm">Kembali ke Index</A>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<DIV class="row">
						<div class="table-responsive">
	                    	<div class="dataTables_wrapper">
								<table class="table table-stripped">
								  <thead>
									<tr style="background-color: #f5f5f5;">
									  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>No</strong></td>
									  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Dilihat Oleh</strong></td>
									  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Waktu</strong></td>
									</tr>
								  </thead>
								  <tbody>
									@forelse ($histories as $history)
									<tr>
									  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $loop->iteration }}</td>
									  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ App\User::pluck("name","id")[$history->viewedby] }}</td>
									  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $history->updated_at }}</td>								  
									</tr>
									@empty
									<tr>
									  <td colspan="4">Belum Terdapat data Dokumen</td>
									</tr>
									@endforelse
								  </tbody>
								</table>
							</div>
						</div>

						{!! $histories->links() !!}

					</div>
					
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
