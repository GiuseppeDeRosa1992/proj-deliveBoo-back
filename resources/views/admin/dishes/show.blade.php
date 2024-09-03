@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 p-0">
				<img src="{{ asset('storage/' . $dishes->image) }}" class="w-50" style="height:50vh" />
			</div>
			<div class="col-12 p-4">

				<h2>{{ $dishes->name }}</h2>
				<p> {{ $dishes->description }} </p>
				<p> {{ $dishes->price }} </p>

			</div>
		</div>
	</div>
@endSection
