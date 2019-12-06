
		<div class="panel panel-default" style="border-color: #13aa7f">
		  <div class="panel-body">
			<div class="col-md-12">
				<DIV class="row">
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							  <thead>
								<tr style="background-color: #f5f5f5;">
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Kebutuhan</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Jumlah</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Pengentri</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Waktu</strong></td>
								</tr>
							  </thead>
							  <tbody>
								@forelse ($kebutuhans as $kebutuhan)
								<tr>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ App\Asset::pluck("assetname","id")[$kebutuhan->assetid] }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $kebutuhan->jumlah }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ App\User::pluck("name","id")[$kebutuhan->pengentri] }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $kebutuhan->waktuinput }}</td>
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

					{!! $kebutuhans->links() !!}

				</div>
			</div>

		  </div>
		</div>

