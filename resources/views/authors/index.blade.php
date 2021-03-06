<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Authors</title>
</head>
<body>
    <div class="container">
    <h1>Index</h1>



@if (count($authors) == 0)
    <p>There is no authors</p>
@endif

{{-- create forma - mums reikia nuorodos ar mygtuko --}}
<a class="btn btn-primary" href="{{route('author.create')}}">Create new author</a>
<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Description</th>
    <th>Phone</th>
    <th>Actions</th>
</tr>


@foreach ($authors as $author)
    <tr>
        <td>{{$author->id}}</td>
        <td>{{$author->name}}</td>
        <td>{{$author->surname}}</td>
        <td>{{$author->description}}</td>
        <td>{{$author->phone}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('author.edit', [$author])}}">Edit</a>
            <a class="btn btn-secondary" href="{{route('author.show', [$author])}}">Show</a>

            <form method="post" action='{{route('author.destroy', [$author])}}''>
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>