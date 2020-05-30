@include('partials._head')
@include('partials._nav',compact('auth'))

<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create Company</h1>
			<hr>
			{!! Form::open(array('route' => 'companies.store', 'data-parsley-validate' => '', 'files' => true)) !!}
				{{ Form::label('title', 'Company ID:') }}
				{{ Form::text('company_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('slug', 'experience:') }}
				{{ Form::text('experience', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255') ) }}



				{{ Form::label('skill', 'skills:') }}
				<select class="form-control select2-multi" name="skills[]" multiple="multiple">
					@foreach($skills as $skill)
						<option value='{{ $skill->id }}'>{{ $skill->name }}</option>
					@endforeach

				</select>


				{{ Form::submit('Create Company', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>

  @include('partials._foot')
