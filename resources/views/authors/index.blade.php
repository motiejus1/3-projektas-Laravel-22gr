<h1>Index</h1>

<table>
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
            <a href="{{route('author.edit', [$author])}}">Edit</a>
        </td>
    </tr>
@endforeach

</table>    