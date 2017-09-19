@extends('main')

@section('title', '| Create New Post')

@section('content')

	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h1 class="text-center">Creat New Post</h1>
			<hr>
			{!! Form::open(array('route' => 'posts.store')) !!}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class' => 'form-control')) }}

				<br>

				{{ Form::label('body', 'Post Body:') }}
				{{ Form::textarea('body', null, array('class' => 'form-control')) }}

				<br>

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
			{!! Form::close() !!}
		</div>
	</div>

@endsection