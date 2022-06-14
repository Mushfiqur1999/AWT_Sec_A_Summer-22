<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center p-5">
            Welcome To,
            <small class="text-muted">Product Managment</small>
          </h3>
          <table class="table caption-top">
            <caption class="h5">Product List</caption>
            <a href="{{route('createpage')}}"><button type="button" class="btn btn-primary float-end">Create Product</button></a>
            <thead>
              <tr>
                <th scope="col">Product Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
            @foreach($it as $s)
                <tr>
                    <th scope="row">{{$s->p_id}}</td>
                    <td><a href="{{route('product.details',['id'=>$s->p_id])}}">{{$s->p_name}}</a></td>
                    <td>{{$s->price}}</td>
                </tr>
            @endforeach
            </tbody>
          </table>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>