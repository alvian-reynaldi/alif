
		<div class="panel panel-default" style="border-color: #13aa7f">
		  <div class="panel-body">
			<div class="col-md-12">
				<form action="{{ route('ga.inventory') }}" method="get">
				<DIV class="row">					
					<div class="col-md-2">
						<div class="form-group{{ $errors->has('cabang') ? ' has-error' : '' }}">
						  {!! Form::label('cabang', 'Kantor/ Cabang') !!}
						</div>
					</div>
					<div class="col-4 col-sm-12 col-md-4">
						{!! Form::select('cabang', App\Branch::pluck("branchname","id"), isset($cabang) ? $cabang : 0, ['class'=>'form-control']) !!}
						{!! $errors->first('cabang', '<p class="help-block">:message</p>') !!}

					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-primary">Tampilkan</button>
					</div>
				</DIV>
				</form>
				<DIV class="row">
					<div class="table-responsive">
                    	<div class="dataTables_wrapper">
							<table class="table table-stripped">
							  <thead>
								<tr style="background-color: #f5f5f5;">
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Kode</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Nama</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Kategori</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Satuan</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Jumlah</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong>Min</strong></td>
								  <td style="height: 32px;padding-top: 3px;padding-bottom: 0px"><strong></strong></td>
								</tr>
							  </thead>
							  <tbody>
								@forelse ($assets as $asset)
								<tr>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $asset->assetcode }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ $asset->assetname }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ App\KategoriAsset::pluck("categoryname","id")[$asset->categoryid] }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px">{{ App\Asset::satuan()[$asset->satuan] }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px" align="right">{{ isset($cabang) && $cabang != 0 ? App\InventoryStock::where('assetid',$asset->id)->where('branchid',$cabang)->sum('jumlah') : App\InventoryStock::where('assetid',$asset->id)->sum('jumlah') }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px" align="right">{{ isset($cabang) && $cabang != 0 ? App\InventoryStock::where('assetid',$asset->id)->where('branchid',$cabang)->sum('jumlahmin') : App\InventoryStock::where('assetid',$asset->id)->sum('jumlahmin') }}</td>
								  <td style="height: 28px;padding-top: 3px;padding-bottom: 0px" align="right">
								  	@if($cabang != 0)
								  		<A HREF="{{ route('ga.inventory.order',['id'=>$asset->id,'id2'=>$cabang]) }}" class="btn btn-info btn-sm">Order</A>
								  	@endif
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

					{!! $assets->links() !!}

				</div>
			</div>

		  </div>
		</div>

