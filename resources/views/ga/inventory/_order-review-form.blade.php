		<!-- ### ###-->
			
			<div class="row">
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
					  {!! Form::label('kode', 'Kode Persediaan', ['class'=>'col-md-4']) !!}
					  <div class="col-6 col-sm-12 col-md-6">
						{!! Form::text('kode', isset($asset) ? $asset->assetcode : null, ['class'=>'form-control', 'disabled'=>'true']) !!}
						{!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>		
				</div>
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
					  {!! Form::label('kategori', 'Kategori', ['class'=>'col-md-4']) !!}
					  <div class="col-9 col-sm-12 col-md-9">
						{!! Form::text('kategori', isset($asset) ? App\KategoriAsset::pluck("categoryname","id")[$asset->categoryid] : null, ['class'=>'form-control', 'disabled'=>'true']) !!}
						{!! $errors->first('kategori', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
					  {!! Form::label('nama', 'Nama Persediaan', ['class'=>'col-md-4']) !!}
					  <div class="col-9 col-sm-12 col-md-9">
						{!! Form::text('nama', isset($asset) ? $asset->assetname : null, ['class'=>'form-control', 'disabled'=>'true']) !!}
						{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>		
				</div>
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('jumlah') ? ' has-error' : '' }}">
					  {!! Form::label('jumlah', 'Jumlah Persediaan', ['class'=>'col-md-4']) !!}
					  <div class="col-6 col-sm-12 col-md-6">
						{!! Form::text('jumlah', isset($inventorystock) ? $inventorystock->jumlah : 0, ['class'=>'form-control', 'disabled'=>'true']) !!}
						{!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
					  {!! Form::label('nama', 'Cabang', ['class'=>'col-md-4']) !!}
					  <div class="col-6 col-sm-12 col-md-6">
						{!! Form::text('nama', isset($cabang) ? App\Branch::pluck("branchname","id")[$cabang] : '-', ['class'=>'form-control', 'disabled'=>'true']) !!}
						{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>		
				</div>
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('jumlah') ? ' has-error' : '' }}">
					  {!! Form::label('jumlah', 'Jumlah Minimum', ['class'=>'col-md-4']) !!}
					  <div class="col-6 col-sm-12 col-md-6">
						{!! Form::text('jumlah', isset($inventorystock) ? $inventorystock->jumlahmin : 0, ['class'=>'form-control', 'disabled'=>'true']) !!}
						{!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group{{ $errors->has('jumlahorder') ? ' has-error' : '' }}">
					  {!! Form::label('jumlahorder', 'Jumlah Pemesanan', ['class'=>'col-md-4']) !!}
					  <div class="col-6 col-sm-12 col-md-6">
						{!! Form::text('jumlahorder', isset($dokumen) ? $dokumen[0]->docno : null, ['class'=>'form-control']) !!}
						{!! $errors->first('jumlahorder', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>					
				</div>

				<div class="col-md-6">
				</div>
			</div>
			
			<!-- ### ###-->
			<div class="row">
				<div class="container">
					{!! Form::submit(isset($user) ? 'Update' : 'Simpan', ['class'=>'btn btn-info btn-sm']) !!}
				</div>
			</div>
