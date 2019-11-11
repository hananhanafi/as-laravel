{{ Form::open(['route' => 'categories.store']) }}
{{ Form::text('name') }} 
<button type="submit" class="btn btn-primary">Submit</button>
{{ Form::close() }}