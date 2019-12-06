
		<div class="panel panel-default" style="border-color: #13aa7f">
		  <div class="panel-body">
			<div class="col-md-12">

				<DIV class="row">
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							  <thead>
								<tr style="background-color: #f5f5f5;">
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>No</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Cabang</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Nama</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Jumlah</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Pengusul</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Waktu</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Status</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"></td>								  
								</tr>
							  </thead>
							  <tbody>
								@forelse ($inventoryorders as $inventoryorder)
								<tr>
								  <td style="height: 28px;padding: 5px">{{ $loop->iteration }}</td>
								  <td style="height: 28px;padding: 5px">{{ App\Branch::pluck("branchname","id")[$inventoryorder->branchid] }}</td>
								  <td style="height: 28px;padding: 5px">{{ App\Asset::pluck("assetname","id")[$inventoryorder->assetid] }}</td>
								  <td style="height: 28px;padding: 5px" align="right">{{ $inventoryorder->jumlah }}</td>
								  <td style="height: 28px;padding: 5px">{{ App\User::pluck("name","id")[$inventoryorder->pengentri] }}</td>
								  <td style="height: 28px;padding: 5px">{{ $inventoryorder->waktuentri }}</td>
								  <td style="height: 28px;padding: 5px">{{ App\InventoryOrder::status()[$inventoryorder->status] }}</td>
								  <td style="height: 28px;padding: 5px">
								  	@role("gscab")
								  		<A HREF="{{ route('ga.inventory.order.review',['val'=>$inventoryorder->id]) }}" class="btn btn-danger btn-sm">Hapus</A>
								  	@endrole
								  	@role("bm")
								  		<A HREF="{{ route('ga.inventory.order.endorse',['val'=>$inventoryorder->id]) }}" class="btn btn-info btn-sm">Persetujuan</A>
								  	@endrole
								  	@role("gsho")
								  		<A HREF="{{ route('ga.inventory.order.approval',['val'=>$inventoryorder->id]) }}" class="btn btn-info btn-sm">Proses</A>
								  	@endrole
								  </td>
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
				</div>
				<A HREF="{{ route('ga.inventory.order.export') }}">Export to <I class="fa fa-file-excel-o"></I></A>
			</div>

		  </div>
		</div>

