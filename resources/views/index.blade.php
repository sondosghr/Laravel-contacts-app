<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <br><br>
    <a class="btn btn-primary" href="{{ route('contact.create') }}" role="button">create contact</a>
    <br><br>
   <form action="{{ route('contact.search') }}" method="get">
    <input type="text" name="search" placeholder="Search">
    <input type="submit" value="Search">
    </form>



    <br><br><br><br><br><br><br>

         @foreach ($contacts as $contact)
  <!-- <li class="list-group-item">{{ $contact->name }}</li> -->
   <div class="list-group">
 
  <a href="{{ route('contact.edit', ['id' => $contact->id]) }}" class="list-group-item list-group-item-action">{{ $contact->name }}</a>
  
 
</div>
 
   @endforeach
</ul>


</body>        

 </html>   