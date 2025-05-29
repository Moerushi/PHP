@extends('layouts.default')

@section('content')
	<div>
		<h3>Name: {{ $name }}</h3>
		 
			@if ( $age > 18)
				<h3>Age:{{ $age }}</h3>
			@else
				<h3>Person is too young</h3>
			@endif
		
		<h3>Position: {{ $position }}</h3>
		<h3>Address: {{ $address }}</h3>
	</div>

@endsection