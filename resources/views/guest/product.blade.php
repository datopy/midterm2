<!DOCTYPE html>
<html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<head>
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('mainpage') }}">Zoomart.ge</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('mainpage') }}">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Registration</button>

    </form>
    <form class="form-inline my-0 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>






	<div>
		<div>Title - {{$product->title}}</div>
		<div>Category - {{$product->category}}</div>
		<div>Brand - {{$product->brand}}</div>
		<div>Price - {{$product->price}}</div>
	</div>
    <hr>
	<form method="POST" action="{{ route('storecomment') }}">
		@csrf
		<h4>Comments</h4>
		<input type="hidden" name="product_id" value="{{ $product->id }}">
		<textarea name="comment"></textarea>
        <button class="btn btn-primary">Post</button>
        

	</form>

	<table>
		@foreach ($comments as $comment)
	    <tr>{{$comment->comment}}</tr><br><br>
	   
    @endforeach

	</table>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>