<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Category Edit
    </h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/admin/product/category/update" method="POST">
        @csrf
        <label for="">name</label>
        <input type="text" name="name" value="<?=$category->name ?>">
        <label for="">description</label>
        <input type="text" name="description" value="{{$category->description}}">
        <input type="submit" value="submit">
    </form>

</body>

</html>