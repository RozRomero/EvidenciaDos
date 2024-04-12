<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Directory</title>
</head>
<body>
    <h1>    INDEX   </h1>
    {{-- {{$books}} --}}

    {{-- <div>[{$coursesObject}]</div>
    <div>[{$coursesObject -> title}]</div> --}}

    @foreach ($books as $book)
</br>
    {{$book -> title}}
</br>
    {{$book -> author_name}}
</br>
    {{$book -> isbn}}   
</br>
    {{$book -> published_year}}
</br>
<a class="add-book-button" href=" {{ route('books.edit', $book -> id) }}">Edit This Book</a>


<form action="{{route('books.destroy', $book->id)}}" method="post">
    @method('DELETE')
    @csrf

    <button class="delete" type="submit">Delete</button>
</form>
    @endforeach
    <br>
<a class="add-book-button" href=" {{ route('books.create') }}">Add New Book</a>


</body>
</html>