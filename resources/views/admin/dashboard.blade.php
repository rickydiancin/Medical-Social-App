@extends('admin_template')
@section('content')
	<section class="row mew-post">
		@include('message-block')
		<div class="col-md-6 col-md-offset-3">
				<header><h3>What do you want to say?</h3></header>
				<form action="{{ route('post.create') }}" method="post">
					<div class="form-group">
						<textarea class="form-control" name="body" row="5" placeholder="..."></textarea>
						<input type="hidden" value="{{ Session::token() }}" name="_token">
					</div>
					<button type="submit" class="btn btn-primary">Create Post</button>
				</form>
		</div>
	</section>

	<section class="row posts">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What other people say...</h3></header>
			@foreach($posts as $post)
			<article class="post">
				<p>{{ $post->body }}</p>
				<div class="info">
					Posted by {{ $post->user->name }} on {{ $post->created_at }}
				</div>
				<div class="interaction">
					<a href="#">Like</a> |
					<a href="#">Dislike</a> |
					<a href="#">Edit</a> |
					<a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a> <!-- passing the posted id -->
				</div>
			</article>
			@endforeach

		</div>
	</section>
@endsection
