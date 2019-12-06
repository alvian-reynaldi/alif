@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
    	<div class="col-12 col-sm-12 col-md-12">
			<article class="card mb-4">
				<div class="card-body">
					<h4 class="card-title mb-4">Inventory Management</h4>
					<div class="tab-panel">
						<ul class="nav nav-tabs small-tab">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#barang">Persediaan Barang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('ga.inventory.order.view') }}">Order</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#stockopname">Stock Opname</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
									Laporan
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#permintaan" data-toggle="tab">Permintaan</a>
									<a class="dropdown-item" href="#persediaan" data-toggle="tab">Persediaan</a>
									<a class="dropdown-item" href="#lapstockopname" data-toggle="tab">Stock Opname</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
									Master Data
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{ route('ga.inventory.kategori') }}">Kategori</a>
									<a class="dropdown-item" href="{{ route('ga.inventory.barang') }}">Barang</a>
								</div>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="barang">
								<!------------------------------------------------------------------------								
								Tab Barang -------------------------------------------------------------->
								<H5>Daftar Barang & Persediaan</H5>
								@role("")
								@endrole
								@include('ga._indexAsset')
								<!------------------------------------------------------------------------								
								Tab Barang -------------------------------------------------------------->
							</div>							
							<div class="tab-pane" id="stockopname">
								<!------------------------------------------------------------------------ 
								Tab Stock Opname -------------------------------------------------------->
								Stock Opname
								<!------------------------------------------------------------------------ 
								Tab Stock Opname -------------------------------------------------------->
							</div>
							<div class="tab-pane" id="permintaan">
								<!------------------------------------------------------------------------ 
								Tab Laporan Permintaan -------------------------------------------------->
								Laporan Permintaan
								<!------------------------------------------------------------------------ 
								Tab Laporan Permintaan -------------------------------------------------->
							</div>
							<div class="tab-pane" id="persediaan">
								<!------------------------------------------------------------------------ 
								Tab Laporan Persediaan -------------------------------------------------->
								Laporan Persediaan
								<!------------------------------------------------------------------------ 
								Tab Laporan Persediaan -------------------------------------------------->
							</div>
							<div class="tab-pane" id="lapstockopname">
								<!------------------------------------------------------------------------ 
								Tab Laporan Stock Opname ------------------------------------------------>
								Laporan Stock Opname
								<!------------------------------------------------------------------------ 
								Tab Laporan Stock Opname ------------------------------------------------>
							</div>							
							<div class="tab-pane" id="itempersediaan">
								<!------------------------------------------------------------------------ 
								Tab Kategori Persediaan ------------------------------------------------->
								<H6>Barang Persediaan</H6>
								
								<!------------------------------------------------------------------------ 
								Tab Kategori Persediaan ------------------------------------------------->
							</div>
							<div class="tab-pane" id="parameter">
								<!------------------------------------------------------------------------ 
								Tab Kategori Persediaan ------------------------------------------------->
								<H6>Parameter Persediaan Cabang</H6>
								
								<!------------------------------------------------------------------------ 
								Tab Kategori Persediaan ------------------------------------------------->
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
