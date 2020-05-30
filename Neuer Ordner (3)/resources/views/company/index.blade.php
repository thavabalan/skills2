@include('partials._head')
@include('partials._nav',compact('auth'))
@include('partials._massage')

<div class="row">
		<div class="col-md-12">
      <table id="example1" class="table table-striped" cellspacing="0" width="100%">
				<thead>
					<th>#</th>
					<th>Company Name</th>
					<th>experience</th>
					<th>Skills</th>
					<th>Option</th>
				</thead>

				<tbody>

					@foreach ($companies as $companies)

						<tr>
							<th>{{ $companies->id }}</th>
							<td>{{ $companies->company_name}}</td>
              <td>{{ $companies->experience}}</td>
              <td>@foreach ($companies->skills as $skill)
			  <a href="{{ route('skills.show', $skill->id) }}"><span class="btn btn-info">{{ $skill->name }}</span></a>
				@endforeach</td>
				<td>{!! Form::open(['route' => ['companies.destroy', $companies->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

						{!! Form::close() !!}</td>
						</tr>

					@endforeach

				</tbody>
			</table><a href="{{action('CompanyController@export')}}"><button type="button" class="btn btn-success">Export To excel</button></a></div></div>
			@include('partials._foot')
