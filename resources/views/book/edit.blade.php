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

<div class="container w-50">
<form action="{{route('book.update',$book->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h4>Chi tiết sách</h4>
    <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $book->id }}">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">title</label>
      <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $book->title }}" name="title">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">thumbnail:</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $book->thumbnail }}" name="thumbnail">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">author</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $book->author }}" name="author">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">publisher</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $book->publisher }}" name="publisher">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Publication</label>
        <input type="datetime" class="form-control" id="exampleInputPassword1" value="{{ $book->Publication }}" name="Publication">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleInputPassword1" value="{{ $book->Price }}" name="Price">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="exampleInputPassword1" value="{{ $book->Quantity }}" name="Quantity">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Category_id</label>
        <select name="category_id" id="" class="form-control" >
            @foreach ($categories as $cate )
            <option value="{{$cate->id}}" class="form-control" @if ($cate->id === $book->Category_id) selected @endif> 
                {{$cate->name}}</option>
            @endforeach
           </select>
      </div>
      <a class="btn btn-primary" href="/">back</a>
      <button type="submit" class="btn btn-success">Update book</button>   
  </form>
</div>
</body>
</html>