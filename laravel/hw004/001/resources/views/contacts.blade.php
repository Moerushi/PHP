@extends('layouts.default')

@section('content')
	<div>
		<h3>Address: {{ $address }}</h3>
		<h3>Post code: {{ $post_code }}
		</h3>
		 
			@if($email == '')
				<h3>The email address is not specified</h3> 
			@else
				<h3>E-mail: {{ $email }}</h3>
			@endif
		
		<h3>Phone: {{ $phone }}</h3>
	</div>

@endsection