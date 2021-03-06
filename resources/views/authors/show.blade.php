
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2> {{$author->name}} {{$author->surname}}  </h2>
            <p>Id : {{$author->id}}</p>
        <p>Name : {{$author->name}}</p>
        <p>Surname : {{$author->surname}}</p>
        <p>Description : {{$author->description}}</p>
        <p>Phone : {{$author->phone}}</p>

        <form method="post" action='{{route('author.destroy', [$author])}}''>
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        <a class="btn btn-secondary" href="{{route('author.index')}}">Back</a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
