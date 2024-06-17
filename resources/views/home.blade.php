<h1>This is the home page</h1>
@if($userGroup == "admin")
<p>Welcome to {{ $companyName }}.</p>
@else
<p>Please login for {{$companyName}}.</p>
@endif