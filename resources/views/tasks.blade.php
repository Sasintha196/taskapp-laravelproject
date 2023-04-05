<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>YOUR_TASKS</title>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



    <div class="container">
        <div class="text-center">
            </br></br>
            <h1>Task App</h1>
        </div>

        </br>

        <div class="row" >
            <div class="col-md-12">

                <!-- foreach kiyanne ek ek data eka loop karanawa kiyana eka.
                ($errors->all() as $yourcapturederrors) karanne errors wala okkoma"all()" $yourcapturederrors kiyana ekata daganima.
                {{" "}} eken samanyen krnne data output consol eke hri e wage mokaka hri developerta balaganimata display krna eka. -->
                @foreach ($errors->all() as $yourcapturederrors)
                    <div class="alert alert-danger" role="alert">
                        {{ $yourcapturederrors}}
                    </div>
                @endforeach


                <form method="post" action="/saveTask">
                    {{csrf_field()}}
                    <input type="text" class="form-control" placeholder="Enter your Task Here" name="task"></br>
                    <input type="submit" class="btn btn-primary" value="Save">
                    <input type="button" class="btn btn-warning" value="Clear"><br></br><br></br>
                </form>

                <table class="table table-striped table-bordered table-responsive table-dark ">
                    <th>ID</th>
                    <th>TASK</th>
                    <th>COMPLETED</th>
                    <th>Image</th>

                    @foreach ($arraytypevariabletasks as $tsk )
                        <tr>
                            <td>{{$tsk->id}}</td>
                            <td>{{$tsk->task}}</td>
                            <td>
                                @if ($tsk->iscompleted)
                                    <button class="btn btn-success">completed</button>

                                    @else
                                    <button class="btn btn-warning">Not completed</button>
                                @endif
                            </td>
                            <td>
                                <img src="{{ asset('uploads/students/'.$item->profile_image) }}" width="70px" height="70px">
                            </td>
                        </tr>
                    @endforeach

            </div>
        </div>
    </div>
</body>
</html>
