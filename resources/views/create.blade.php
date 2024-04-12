<h1>Format to add a book</h1>
<h2>Add New Book</h2>
<form class="book-form" action="{{ route('books.store')}}" method="post">
{{-- Inicio del formulario para argregar un curso, cuando se envie el 
    formulario, hara una solicitud POST  a la URL generada por  route('courses.store')--}}
    @csrf

    <label for="">Title</label><br>
    <input type="text" name="title" id="title">
    <br>
    <label for="">Author Name</label><br>
    <input type="text" name="author_name" id="author_name">
    <br>
    <label for="">ISBN</label><br>
    <input type="text" name="isbn" id="isbn"> 
    <br>
    <label for="">Published Year</label><br>
    <input type="number" name="published_year" id="published_year"> 
    <br>
    <input type="submit" value="Add Book">

</form>