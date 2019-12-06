			<!-- ### ###-->
			
			<div class="row">
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
					  {!! Form::label('kode', 'Kode Kategori', ['class'=>'col-md-4']) !!}
					  <div class="col-3 col-sm-6 col-md-3">
						{!! Form::text('kode', isset($kategori) ? $kategori->categorycode : null, ['class'=>'form-control']) !!}
						{!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>		
				</div>
				<div class="col-6 col-sm-12 col-md-6">
					<div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
					  {!! Form::label('kategori', 'Kategori', ['class'=>'col-md-4']) !!}
					  <div class="col-9 col-sm-12 col-md-9">
						{!! Form::text('kategori', isset($kategori) ? $kategori->categoryname : null, ['class'=>'form-control']) !!}
						{!! $errors->first('kategori', '<p class="help-block">:message</p>') !!}
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
