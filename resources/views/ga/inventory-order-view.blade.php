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
								<a class="nav-link" href="{{ route('ga.inventory') }}">Persediaan Barang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#order">Order</a>
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
								Tab Order --------------------------------------------------------------->
								<H5>Daftar Order</H5>
								@include('ga._indexOrder')
								{!! $inventoryorders->links() !!}
								<!------------------------------------------------------------------------ 
								Tab Order --------------------------------------------------------------->
							</div>							
						</div>
					</div>
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
