@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-8">
			<img src="/storage/{{ $post->image }}" class="w-100" alt="">
		</div>
		<div class="col-4">
			<div class="d-flex align-items-center">
			<div class="pr-3">
				<img src="{{ $post->user->profile->profileImage() }}" draggable="false" class="rounded-circle w-100" style="max-width: 40px;" >
			</div>
			<div>
				<div class="font-weight-bold">
					<a href="/profile/{{ $post->user->id }}">
						<span class="text-dark">
							{{ $post->user->username}}
						</span>
					</a>
					<a href="#" >• Follow</a>
						</div>
			</div>
			</div>

			<hr>
		<p>
			<span class="font-weight-bold">
				<a href="/profile/{{ $post->user->id }}">
					<span class="text-dark">
						{{ $post->user->username }}
					</span>
				</a>
			</span>{{ $post->caption }}
		</p>
	</div>
		<div class="row">
			<div class="col-8">
			<p>Posted {{ $post->created_at->format('F d') }}</p>
			</div>
	</div>
	</div>
</div>

@endsection
