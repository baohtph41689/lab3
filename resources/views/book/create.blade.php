<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container  w-50">
        <form action="{{route('book.store')}}" method="POST">
            @csrf
            <h4>Add book</h4>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">title</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="title" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">thumbnail</label>
                <input type="file" class="form-control" id="exampleInputPassword1" name="thumbnail" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">author</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="author" >
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">publisher</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="publisher" >
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Publication</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="Publication" >
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Price</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Price" >
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Quantity" >
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Category</label>
               <select name="category_id" id="" class="form-control" >
                <option value="0">Chon danh muc</option>
                @foreach ($categories as $cate )
                <option value="{{$cate->id}}" class="form-control"> {{$cate->name}}</option>
                @endforeach
               </select>
              </div>
            <a class="btn btn-primary" href="/">back</a>
            <button type="submit" class="btn btn-success">Add book</button>               
    </div>
</body>
</html>