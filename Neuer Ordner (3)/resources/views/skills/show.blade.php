@include('partials._head')
@include('partials._nav',compact('auth'))
@include('partials._massage')

<div class="row">
		<div class="col-md-12">
        <h4> Candidate Have {{$skill->name}}</h4>

			<table id="example1" class="table table-striped" cellspacing="0" width="100%">
				<thead>
					<th>#</th>
					<th>knowledge level</th>
					<th>Experience</th>
					<th>Skills</th>
					<th>No of Projects</th>
          <th>Highest Certificate</th>
          <th>Comment</th>
					<th>email</th>
					<th>Created Before</th>
					<th>Options</th>

				</thead>

				<tbody>

					@foreach ($skill->candidate as $candidate)

						<tr>
							<th>{{ $candidate->id }}</th>
							<td>{{ $candidate->knowledge_level}}</td>
              <td>{{ $candidate->experience}}</td>
              <td>@foreach ($candidate->skills as $skill)
              <a href="{{ route('skills.show', $skill->id) }}"><span class="btn btn-info">{{ $skill->name }}</span></a>				@endforeach</td>
        <td>{{ $candidate->no_of_projects}}</td>
        <td>{{ $candidate->highest_certificate}}</td>
        <td>{{ $candidate->comment}}</td>
				<td><a href='mailto:{{ $candidate->email}}'>{{ $candidate->email}}</a></td>
				<td>{{ $candidate->created_at->diffForHumans()}}</td>
				</tr>

					@endforeach



				</tbody>

			</table></div></div>

            <div class="row">
		<div class="col-md-12">
        <h4> Company Required {{$skill->name}}</h4>
      <table id="example1" class="table table-striped" cellspacing="0" width="100%">
				<thead>
					<th>#</th>
					<th>Company Name</th>
					<th>experience</th>
					<th>Skills</th>
					<th>Option</th>
				</thead>

				<tbody>

					@foreach ($skill->company as $companies)

						<tr>
							<th>{{ $companies->id }}</th>
							<td>{{ $companies->company_name}}</td>
              <td>{{ $companies->experience}}</td>
              <td>@foreach ($companies->skills as $skill)
              <a href="{{ route('skills.show', $skill->id) }}"><span class="btn btn-info">{{ $skill->name }}</span></a>				@endforeach</td>
				<td>{!! Form::open(['route' => ['companies.destroy', $companies->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

						{!! Form::close() !!}</td>
						</tr>

					@endforeach

				</tbody>
			</table></div></div>
			
			@include('partials._foot')
