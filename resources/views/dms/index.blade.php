@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <div class="row">
    	<div class="col-12 col-sm-12 col-md-12">
			<article class="card mb-4">
				<div class="card-body">
					<h4 class="card-title mb-4">Document Management</h4>
					<div class="tab-panel">
						<ul class="nav nav-tabs small-tab">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#dokumen">Dokumen</a>
							</li>							
							<li class="nav-item">
								<a class="nav-link " data-toggle="tab" href="#upload">Upload</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
									Master Data
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#kategoriDok" data-toggle="tab">Kategori</a>							
								</div>
							</li>							
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="dokumen">
								<!------------------------------------------------------------------------								
								Tab Dokumen  ------------------------------------------------------------>
								<H6>Daftar Dokumen</H6>
								@include('dms._indexDokumen')
								<!------------------------------------------------------------------------								
								Tab Dokumen ------------------------------------------------------------->
							</div>
							<div class="tab-pane " id="upload">
								<!------------------------------------------------------------------------ 
								Tab Upload -------------------------------------------------------------->
								<h6 class="card-title mb-4">Upload Dokumen</h6>
								{!! Form::open(['url' => route('financing.dms.store'), 'method' => 'post', 'class'=>'form-horizontal', 'files' => true]) !!}		
									@include('dms._formDokumen')
								{!! Form::close() !!}
								<!------------------------------------------------------------------------ 
								Tab Upload -------------------------------------------------------------->
							</div>	
							<div class="tab-pane" id="kategoriDok">
								<!------------------------------------------------------------------------ 
								Tab kategori ------------------------------------------------------------>
								<H6>Kategori Dokumen</H6>
								@include('dms._indexKategori')
								<!------------------------------------------------------------------------ 
								Tab kategori ------------------------------------------------------------>
							<div class="search-area">
                <input class="form-control no-border" type="text" placeholder="Search something special" />
                <div class="search-icon">
                  <i class="mdi mdi-magnify md-24"></i>
                  <i class="mdi mdi-arrow-left md-24"></i>
                </div>
                <div class="clear-icon">
                  <i class="mdi mdi-close md-24"></i>
                </div>
              </div>
            </div>
							</div>							
						</div>
					</div>
				</div>
			</article>
		</div>
    </div>
  </div>

@endsection
