
		<div class="panel panel-default" style="border-color: #13aa7f">
		  <div class="panel-body">
			<div class="col-md-12">
				<DIV class="row">
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							  <thead>
								<tr style="background-color: #f5f5f5;">
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Kode</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Kategori</strong></td>
								</tr>
							  </thead>
							  <tbody>
								@forelse ($kategoriDokumens as $kategoriDokumen)
								<tr>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $kategoriDokumen->categorycode }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $kategoriDokumen->categoryname }}</td>	  
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

					{!! $kategoriDokumens->links() !!}

				</div>
			</div>

		  </div>
		</div>

