			<!-- ### ###-->
			
			<div class="row">
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
					  {!! Form::label('kode', 'Kode Barang', ['class'=>'col-md-4']) !!}
					  <div class="col-6 col-sm-12 col-md-6">
						{!! Form::text('kode', isset($asset) ? $asset->assetcode : null, ['class'=>'form-control']) !!}
						{!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>		
				</div>
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
					  {!! Form::label('kategori', 'Kategori', ['class'=>'col-md-4']) !!}
					  <div class="col-9 col-sm-12 col-md-9">
						{!! Form::select('kategori', App\KategoriAsset::pluck("categoryname","id"), isset($asset) ? $asset->categoryid : null, ['class'=>'form-control']) !!}
						{!! $errors->first('kategori', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
					  {!! Form::label('nama', 'Nama Barang', ['class'=>'col-md-4']) !!}
					  <div class="col-9 col-sm-12 col-md-9">
						{!! Form::text('nama', isset($asset) ? $asset->assetname : null, ['class'=>'form-control']) !!}
						{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>		
				</div>
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('satuan') ? ' has-error' : '' }}">
					  {!! Form::label('satuan', 'Satuan', ['class'=>'col-md-4']) !!}
					  <div class="col-6 col-sm-12 col-md-6">
						{!! Form::select('satuan', App\Asset::satuan(), isset($asset) ? $asset->satuan : null, ['class'=>'form-control']) !!}
						{!! $errors->first('satuan', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>
				</div>
			</div>		
			
			<!-- ### ###-->
			<div class="row">
				<div class="container">
					{!! Form::submit(isset($user) ? 'Update' : 'Simpan', ['class'=>'btn btn-info btn-sm']) !!}
				</div>
			</div>
