<h2>Edit Book</h2>

<form class="book-form" action="{{ route('books.update', $book -> id)}}" method="POST">
    {{-- Inicio del formulario para argregar un curso, cuando se envie el 
        formulario, hara una solicitud POST  a la URL generada por  route('courses.store')--}}
        @csrf
        
        @method('PUT') 
        {{-- Este se pone cuando se usa put o delete --}}

        <label for="">Title</label><br>
        <input type="text" name="title" id="title" value="{{$book->title}}">
        <br>
        <label for="">Author Name</label><br>
        <input type="text" name="author_name" id="author_name" value="{{$book->description}}">
        <br>
        <label for="">ISBN</label><br>
        <input type="text" name="isbn" id="isbn" value="{{$book->Instructor}}">
        <br>
        <label for="">Published Year</label><br>
        <input type="number" name="published_year" id="published_year" value="{{$book->email}}">
        <br>
        <input type="submit" value="Add Book">
    
    </form>