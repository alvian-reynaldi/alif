
		<div class="panel panel-default" style="border-color: #13aa7f">
		  <div class="panel-body">
			<div class="col-md-12">
				
				<DIV class="row">
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							  <thead>
								<tr style="background-color: #f5f5f5;">
								  <td style="height: 32px;padding: 5px;padding-bottom: 0px" width="7%"><strong>Kode</strong></td>
								  <td style="height: 32px;padding: 5px;padding-bottom: 0px" width="25%"><strong>Nama</strong></td>
								  <td style="height: 32px;padding: 5px;padding-bottom: 0px" width="25%"><strong>Kategori</strong></td>
								  <td style="height: 32px;padding: 5px;padding-bottom: 0px" width="7%"><strong>Satuan</strong></td>
								  <td style="height: 32px;padding: 5px;padding-bottom: 0px" width="7%"><strong>Jumlah</strong></td>
								  <td style="height: 32px;padding: 5px;padding-bottom: 0px"><strong></strong></td>
								</tr>
							  </thead>
							  <tbody>
								@forelse ($assets as $asset)
								<tr>
								  <td style="height: 28px;padding: 5px;padding-bottom: 0px"><A HREF="{{ route('ga.inventory.barang.edit',['id'=>$asset->id]) }}">{{ $asset->assetcode }}</A></td>
								  <td style="height: 28px;padding: 5px;padding-bottom: 0px"><A HREF="{{ route('ga.inventory.barang.edit',['id'=>$asset->id]) }}">{{ $asset->assetname }}</A></td>
								  <td style="height: 28px;padding: 5px;padding-bottom: 0px">{{ App\KategoriAsset::pluck("categoryname","id")[$asset->categoryid] }}</td>
								  <td style="height: 28px;padding: 5px;padding-bottom: 0px">{{ App\Asset::satuan()[$asset->satuan] }}</td>
								  <td style="height: 28px;padding: 5px;padding-bottom: 0px" align="right"></td>
								  <td style="height: 28px;padding: 5px;padding-bottom: 0px" align="right"><A HREF="{{ route('ga.inventory.barang.cabang',['id'=>$asset->id]) }}" class="btn btn-warning btn-sm">Cabang</A></td>
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

					{!! $assets->links() !!}

				</div>
			</div>

		  </div>
		</div>

