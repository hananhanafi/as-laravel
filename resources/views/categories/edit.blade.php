{{ Form::model($item, ['route' => ['categories.update', $item->id],'method' => 'put']) }}
{{ Form::text('name') }} 
<button type="submit" class="btn btn-primary">Submit</button>
{{ Form::close() }}