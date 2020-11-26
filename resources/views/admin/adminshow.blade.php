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


<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ძაღლები
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">საკვები</a>
    <a class="dropdown-item" href="#">ვიტამინი</a>
    <a class="dropdown-item" href="#">ჰიგიენა</a>
    <a class="dropdown-item" href="#">დესერტი</a>
    <a class="dropdown-item" href="#">საყელოები და საბელები</a>
    <a class="dropdown-item" href="#">გადამზიდები და ჩანთები</a>
    <a class="dropdown-item" href="#">ჯამები</a>
    <a class="dropdown-item" href="#">სახლები და საწოლები</a>
    <a class="dropdown-item" href="#">სათამაშოები</a>
    <a class="dropdown-item" href="#">გრუმინგი</a>
    <a class="dropdown-item" href="#">ტანსაცმელი</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    კატები
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">საკვები</a>  
    <a class="dropdown-item" href="#">ვიტამინი</a>  
    <a class="dropdown-item" href="#">ჰიგიენა</a>  
    <a class="dropdown-item" href="#">დესერტი</a>  
    <a class="dropdown-item" href="#">სათამაშოები</a>  
    <a class="dropdown-item" href="#">ჯამები</a>  
    <a class="dropdown-item" href="#">საყელოები და საბელები</a>  
    <a class="dropdown-item" href="#">გრუმინგი</a>  
    <a class="dropdown-item" href="#">სახლები და საწოლები</a>  
    <a class="dropdown-item" href="#">გადამზიდები და ჩანთები</a>  
</div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    მღრღნელები
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">საკვები</a>
    <a class="dropdown-item" href="#">გალიები</a>
    <a class="dropdown-item" href="#">აქსესუარები</a>
    <a class="dropdown-item" href="#">ჯამები</a>
    <a class="dropdown-item" href="#">სათამაშოები</a>
    <a class="dropdown-item" href="#">ქვიშა</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ფრინველები
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">საკვები</a>
    <a class="dropdown-item" href="#">გალიები</a>
    <a class="dropdown-item" href="#">აქსესუარები</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    რეპტილიები
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">რეპტილიები</a> 
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ზოოქარდი
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">ზოოქარდი</a>
  </div>
</div>
<div>
  <a href="{{ route('addproduct') }}" class="btn btn-primary">Add New Product</a>
</div>



<table>
  @foreach ($products as $product)
    <tr>
      
        <div class="column">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">{{ $product->title }}</h3>
                <p class="card-text">Category - {{$product->category}}</p>
                <p class="card-text">Brand - {{$product->brand}}</p>
                <p class="card-text">Category_ID - {{$product->category_id}}</p>
                <h2 class="card-title">Price - {{ $product->price }}</h2><br>
                <a href="{{ route('editproduct',["id"=>$product->id]) }}" class="btn btn-primary">Edit</a>
                <form method="POST" action="{{route('deleteproduct')}}">
                  @csrf
                  <input type="hidden" name="id" value="{{$product->id }}">
                  <button class="btn btn-primary">Delete</button>
                </form>

              </div>
            </div> 
          </div>
        </div>
      
    </tr>
  @endforeach

  
</table>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>