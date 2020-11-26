<!DOCTYPE html>
<html lang="ka">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <title>ზოომარტი</title>

   

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
        <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
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

<body>
	<form method="POST" action="{{ route('storeproduct') }}">
		@csrf
		<input type="text" name="title" placeholder="Title"><br>
		<input type="text" name="category" placeholder="Category"><br>
		<input type="text" name="brand" placeholder="Brand"><br>
		<input type="text" name="price" placeholder="Price"><br>
		<input type="text" name="category_id" placeholder="Category_ID"><br>
		<button class="btn btn-primary">save</button>
	</form>

</body>
</html>