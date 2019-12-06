			<!-- ### ###-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
					  {!! Form::label('kode', 'Branch Code', ['class'=>'col-md-4']) !!}
					  <div class="col-md-7">
						{!! Form::text('kode', isset($branch) ? $branch->branchcode : null, ['class'=>'form-control']) !!}
						{!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>
					
					<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
					  {!! Form::label('nama', 'Branch Name', ['class'=>'col-md-4']) !!}
					  <div class="col-md-7">
						{!! Form::text('nama', isset($branch) ? $branch->branchname : null, ['class'=>'form-control']) !!}
						{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>

					<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
					  {!! Form::label('address', 'Alamat', ['class'=>'col-md-4']) !!}
					  <div class="col-md-7">
						{!! Form::text('address', isset($branch) ? $branch->address : null, ['class'=>'form-control']) !!}
						{!! $errors->first('address', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>

					<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
					  {!! Form::label('tipe', 'Tipe', ['class'=>'col-md-4']) !!}
					  <div class="col-md-7">
						{!! Form::select('tipe', App\Branch::branchtype(), isset($branch) ? $branch->branchtype : null, ['class'=>'form-control']) !!}
						{!! $errors->first('tipe', '<p class="help-block">:message</p>') !!}
					  </div>
					</div>

				</div>
			</div>
			
			<!-- ### ###-->
			<div class="row">
				<div class="container">
					{!! Form::submit(isset($user) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
				</div>
			</div>
