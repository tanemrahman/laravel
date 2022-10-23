<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Article</title>
</head>
<body>
	<h1>Article Heading</h1>
	@foreach($articleName as $articlename)
	<li>{{$articlename}}</li>
	@endforeach

	<span>{{$articlePublished}}</span>
</body>
</html>