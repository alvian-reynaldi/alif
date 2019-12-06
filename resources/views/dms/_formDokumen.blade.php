			<!-- ### ###-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
					  {!! Form::label('kode', 'No Aplikasi / Nama Pemohon', ['class'=>'col-md-4']) !!}
					  <div class="col-6 col-sm-12 col-md-6">
						{!! Form::text('kode', isset($dokumen) ? $dokumen[0]->docno : null, ['class'=>'form-control']) !!}
						{!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>
					
					<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
					  {!! Form::label('nama', 'Nama Dokumen / Branch', ['class'=>'col-md-4']) !!}
					  <div class="col-12 col-sm-12 col-md-12">
						{!! Form::text('nama', isset($dokumen) ? $dokumen[0]->docname : null, ['class'=>'form-control']) !!}
						{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>

					<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
					  {!! Form::label('status', 'Dokumen', ['class'=>'col-md-4']) !!}
					  <div class="col-6 col-sm-12 col-md-6">
						{!! Form::select('status', App\Dokumen::status(), isset($dokumen) ? $dokumen[0]->status : null, ['class'=>'form-control']) !!}
						{!! $errors->first('status', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>

				</div>

				<div class="col-md-6">
					<div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
					  {!! Form::label('kategori', 'Tipe Dokumen', ['class'=>'col-md-4']) !!}
					  <div class="col-6 col-sm-12 col-md-6">
						{!! Form::select('kategori', App\KategoriDokumen::pluck("categoryname","id"), isset($dokumen) ? $dokumen[0]->categoryid : null, ['class'=>'form-control']) !!}
						{!! $errors->first('kategori', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>
					
					<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
					  {!! Form::label('owner', 'Owner', ['class'=>'col-md-4']) !!}
					  <div class="col-md-7">
					  {{ isset($dokumen) ? App\User::pluck("name","id")[$dokumen[0]->owner] : Auth::user()->name }}
					  </div>
					</div>

					<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
					  {!! Form::label('filename', 'File', ['class'=>'col-md-4']) !!}
					  <div class="col-md-7">
						{!! Form::file('filename', null, ['class'=>'form-control']) !!}
						{!! $errors->first('filename', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>

				</div>
			</div>
			
			<!-- ### ###-->
			<div class="row">
				<div class="container">
					{!! Form::submit(isset($user) ? 'Update' : 'Simpan', ['class'=>'btn btn-info btn-sm ']) !!}
				</div>
			</div>