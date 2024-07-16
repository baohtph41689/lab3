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
    <div class="container">
        <h4>Danh Sách Books</h4>
        <a class="btn btn-warning mb-2" aria-current="page" href="/create">Add book</a>
        <table border="1" class="table table-striped">
            <thead>
                <th>ID</th>
                <th>title</th>
                <th>thumbnail</th>
                <th>author</th>
                <th>publisher</th>
                <th>Publication</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Acttion</th>
            </thead>
            <tbody>
                 @foreach($books as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->title }}</td>
                        <td><img width="60" height="60" src="{{$c->thumbnail}}" alt=""></td>
                        <td>{{ $c->author }}</td>
                        <td>{{ $c->publisher }}</td>
                        <td>{{ $c->Publication }}</td>
                        <td>{{ $c->Price }}</td>
                        <td>{{ $c->Quantity }}</td>
                        <td>{{ $c->name }}</td>  
                        <td>
                        <a class="btn btn-warning mb-1" href="{{route('book.edit',$c->id)}}">Edit</a>
                        <form action="{{route('book.destroy',$c->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning" onclick="return confirm('ban co muon xoa khong?')">Delete</button>
                        </form>
                        </td>                 
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>
</body>
</html>