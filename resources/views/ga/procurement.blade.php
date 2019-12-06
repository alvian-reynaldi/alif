@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
    	<div class="col-12 col-sm-12 col-md-12">
			<article class="card mb-4">
				<div class="card-body">
					<h4 class="card-title mb-4">Procurement Management</h4>
					<div class="tab-panel">
						<ul class="nav nav-tabs small-tab">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#kebutuhan">Kebutuhan</a>
							</li>							
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#rencana">Rencana Pembelian</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#order">Daftar PO</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
									Laporan
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#pembelian" data-toggle="tab">Pembelian</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
									Master Data
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#vendor" data-toggle="tab">Vendor</a>
									<a class="dropdown-item" href="#barang" data-toggle="tab">Barang</a>							
								</div>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="kebutuhan">
								<!------------------------------------------------------------------------								
								Tab Kebutuhan  ---------------------------------------------------------->
								<H6>Daftar Kebutuhan</H6>
								@include('ga._indexKebutuhan')
								<!------------------------------------------------------------------------								
								Tab Kebutuhan ----------------------------------------------------------->
							</div>
							<div class="tab-pane" id="rencana">
								<!------------------------------------------------------------------------ 
								Tab Rencana Pembelian---------------------------------------------------->
								Daftar Rencana Pembelian
								<!------------------------------------------------------------------------ 
								Tab Rencana Pembelian --------------------------------------------------->
							</div>
							<div class="tab-pane" id="order">
								<!------------------------------------------------------------------------ 
								Tab Purchase Order ------------------------------------------------------>
								Daftar Purchase Order
								<!------------------------------------------------------------------------ 
								Tab Purchase Order ------------------------------------------------------>
							</div>
							<div class="tab-pane" id="pembelian">
								<!------------------------------------------------------------------------ 
								Tab Laporan Pembelian --------------------------------------------------->
								Laporan Pembelian
								<!------------------------------------------------------------------------ 
								Tab Laporan Pembelian --------------------------------------------------->
							</div>
							<div class="tab-pane" id="vendor">
								<!------------------------------------------------------------------------ 
								Tab Vendor -------------------------------------------------------------->
								Vendor
								<!------------------------------------------------------------------------ 
								Tab Vendor -------------------------------------------------------------->
							</div>
							<div class="tab-pane" id="barang">
								<!------------------------------------------------------------------------ 
								Tab Barang -------------------------------------------------------------->
								Barang
								<!------------------------------------------------------------------------ 
								Tab Barang -------------------------------------------------------------->
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
