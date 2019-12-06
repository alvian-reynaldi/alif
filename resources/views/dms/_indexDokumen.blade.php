
			<!-- <form action="dms/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari No Applikasi .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form> -->
		<div class="panel panel-default" style="border-color: #13aa7f">
		  <div class="panel-body">
			<div class="col-md-12">
				<DIV class="row">
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							  <thead>
								<tr style="background-color: #f5f5f5;">
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>No Aplikasi</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Nama Dokumen / Branch</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Tipe Dokumen</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Dokumen</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Dilihat</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Owner</strong></td>
								</tr>
							  </thead>
							  <tbody>
								@forelse ($dokumens as $dokumen)
								<tr>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px"><A HREF="dms/view/{{ $dokumen->id }}">{{ $dokumen->docno }}</A></td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px"><A HREF="dms/view/{{ $dokumen->id }}">{{ $dokumen->docname }}</A></td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $dokumen->categoryname }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ App\Dokumen::status()[$dokumen->status] }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px" align="right"><A HREF="{{ route('financing.dms.nview',['val' => $dokumen->id]) }}">{{ $dokumen->viewed }}</A></td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ App\User::pluck("name","id")[$dokumen->owner] }}</td>	  
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

					{!! $dokumens->links() !!}

				</div>
			</div>

		  </div>
		</div>

