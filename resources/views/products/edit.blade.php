<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Product Info</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="container mt-2">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left mb-2">
					<h2>Edit New Product</h2>
				</div>
				<div class="pull-right">
					<a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
				</div>
			</div>
		</div>

		@if(session('status'))
		<div class="alert alert-success mb-1 mt-1">
			{{session('status')}}
		</div>
		@endif

		<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<b>Product Name:</b>
						<input type="text" name="title" class="form-control" placeholder="Enter product name" value="{{$product->title}}">
						@error('title')
						<div class="alert alert-danger mt-1 mb-1">
							{{$message}}
						</div>
						@enderror
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<b>Product Description:</b>
						<textarea name="description" class="form-control" placeholder="Enter product description" rows="10">{{$product->description}}</textarea>
						@error('description')
						<div class="alert alert-danger mt-1 mb-1">
							{{$message}}
						</div>
						@enderror
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<b>Product Image:</b>
						<input type="file" name="image" class="form-control" placeholder="Upload Product Image">
						@error('image')
						<div class="alert alert-danger mt-1 mb-1">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="form-group">
						<img src="{{Storage::url($product->image)}}" width="200px">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<button type="Update" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>