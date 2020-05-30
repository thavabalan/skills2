@include('partials._head')
@include('partials._nav',compact('auth'))
<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create Candidate</h1>
			<hr>
			{!! Form::open(array('route' => 'candidates.store', 'data-parsley-validate' => '', 'files' => true)) !!}
      {{ Form::label('title', 'knowledge level:') }}

				{{ Form::text('knowledge_level', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        {{ Form::label('title', 'Experience:') }}

				{{ Form::text('experience', null, array('class' => 'form-control', 'required' => '','maxlength' => '255') ) }}
        {{ Form::label('title', 'No of Projects:') }}

        {{ Form::text('no_of_projects', null, array('class' => 'form-control', 'required' => '','maxlength' => '255') ) }}
        {{ Form::label('title', 'Comment:') }}

        {{ Form::text('comment', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255') ) }}
        {{ Form::label('title', 'Highest Certificate:') }}
				{{ Form::text('highest_certificate', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255') ) }}

				{{ Form::label('title', 'E-mail:') }}
        {{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255') ) }}


				{{ Form::label('skill', 'skills:') }}
				<select class="form-control select2-multi" name="skills[]" multiple="multiple">
					@foreach($skills as $skill)
						<option value='{{ $skill->id }}'>{{ $skill->name }}</option>
					@endforeach

				</select>


				{{ Form::submit('Create Candidate', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>
