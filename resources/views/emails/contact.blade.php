<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	@include('layouts.partials.css-email')
</head>
<body>
	<p>Email: {{ $contact['email'] }}</p>
	<p>Name: {{ $contact['name'] }}</p>
	<p>Message:</p>
	{!! nl2br($contact['message']) !!}
</body>
</html>
