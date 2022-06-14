<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Product</title>
</head>
<body>
    <div class="container mt-5">
        <a href="{{route('home')}}"><button type="button" class="btn btn-primary">Home</button></a>
        <h3 class="text-center p-5">Create Product</h3>
        <form action="" method="post" class="form-control mt-5">
            {{@csrf_field()}}
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="prod_name" id="exampleFormControlInput1" placeholder=" ">
              </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder=" ">
              </div>
              <button type="submit" class="btn btn-secondary mt-5 float-center">Save</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>