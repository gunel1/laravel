<!DOCTYPE html>
<html>
  <head>
   
  </head>
  <body>


  @foreach($car as $r)
 <h1>Car {{ $r->id }}</h1>
 <ul>
      <li>Make: {{ $r->make }}</li>
      <li>Model: {{ $r->model }}</li>
      <li>Produced on: {{ $r->produced_on }}</li>
    </ul>
@endforeach
 
  </body>
</html>