@include('partials._head')
@include('partials._nav',compact('auth'))
<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Edit Candidate</h1>
			<hr>
      {!! Form::model($candidate, ['route' => ['candidates.update', $candidate->id], 'method' => 'PUT']) !!}

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
				{{ Form::select('skills[]', $skills, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

				</select>


				{{ Form::submit('Update Candidate', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}

      <script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($candidate->skills()->allRelatedIds()) !!}).trigger('change');
	</script>
		</div>
	</div>
@include('partials._foot')
