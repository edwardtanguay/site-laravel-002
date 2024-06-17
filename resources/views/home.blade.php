@extends('layouts.base')

@section('content')
<h1 class="text-2xl text-red-500">This is the home page</h1>
@if($userGroup == "admin")
<p>Welcome to {{ $companyName }}.</p>
@else
<p>Please login for {{$companyName}}.</p>
@endif
@endsection