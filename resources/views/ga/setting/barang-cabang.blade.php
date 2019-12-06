@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
    	<div class="col-12 col-sm-12 col-md-12">
			<article class="card mb-4">
				<div class="card-body">
					<h4 class="card-title mb-4">Inventory Management</h4>
					<H5>Parameter Persediaan Barang di Cabang</H5>	
					<div class="row">
							<div class="col-md-2">
								Kode Barang
							</div>
							<div class="col-md-4">
								: {{ isset($asset) ? $asset->assetcode : null }}
							</div>		

							<div class="col-2">
								Kategori
							</div>
							<div class="col-4">
								: {{  isset($asset) ? App\KategoriAsset::pluck("categoryname","id")[$asset->categoryid] : "-" }}
							</div>
					</div>
					<div class="row">
							<div class="col-md-2">
								Nama Barang
							</div>
							<div class="col-md-4">
								: {{ isset($asset) ? $asset->assetname : null }}
							</div>		

							<div class="col-2">
								Satuan
							</div>
							<div class="col-4">
								: {{ isset($asset) ? App\Asset::satuan()[$asset->satuan] : "-" }}
							</div>
					</div>

					<DIV class="row">
						<div class="col-md-11"> 
						<div class="table-responsive">
	                    	<div class="dataTables_wrapper">
	                    		<BR>
								<table class="table table-stripped">
								  <thead>
									<tr style="background-color: #f5f5f5;" align="center">
									  <td style="height: 32px;padding: 5px;padding-bottom: 0px" width="5%"><strong>No</strong></td>
									  <td style="height: 32px;padding: 5px;padding-bottom: 0px"><strong>Nama</strong></td>
									  <td style="height: 32px;padding: 5px;padding-bottom: 0px" width="15%"><strong>Jumlah Minimum</strong></td>
									  <td style="height: 32px;padding: 5px;padding-bottom: 0px" width="15%"><strong>Saat Ini</strong></td>
									  <td style="height: 32px;padding: 5px;padding-bottom: 0px" width="10%"><strong></strong></td>
									</tr>
								  </thead>
								  <tbody>
									@forelse ($branches as $branch)
									<tr>
									  <td style="height: 28px;padding: 5px;padding-bottom: 0px" align="right">{{ $loop->iteration }}</td>
									  <td style="height: 28px;padding: 5px;padding-bottom: 0px">{{ $branch->branchcode }} - {{ $branch->branchname }}</td>
									  <td style="height: 28px;padding: 5px;padding-bottom: 0px;padding-right: 10px" align="right">{{ App\InventoryStock::where('branchid',$branch->id)->where('assetid',$asset->id)->value("jumlahmin") }}</td>
									  <td style="height: 28px;padding: 5px;padding-bottom: 0px;padding-right: 10px" align="right">{{ App\InventoryStock::where('branchid',$branch->id)->where('assetid',$asset->id)->value("jumlah") }}</td>
									  <td style="height: 28px;padding: 5px;padding-bottom: 0px">
									  	@if ($branch->branchcode != '00000')
									  	<A HREF="{{ route('ga.inventory.barang.cabang.edit',['bid'=>$branch->id, 'aid' => $asset->id]) }}" class="btn btn-info btn-sm">Edit</A></td>
									  	@endif
									</tr>
									@empty
									<tr>
									  <td colspan="4">Belum Terdapat data Parameter Persediaan di Cabang</td>
									</tr>
									@endforelse
								  </tbody>
								</table>
							</div>
						</div>

						{!! $branches->links() !!}
						</div>

					</div>
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
