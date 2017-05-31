<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
 <div class="page-header">
        <h1>Create a Car</h1>
      </div>
{!! Form::model($car, ['action' => 'CarController@store']) !!}

    <div class="form-group">
      {!! Form::label('make', 'Make') !!}
      {!! Form::text('make', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('model', 'Model') !!}
      {!! Form::text('model', '', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success" type="submit">Add the Car!</button>

  {!! Form::close() !!}
 
  @if (count(session('errors')) > 0)
      <div class="alert alert-danger">
        @foreach (session('errors')->all() as $error)
          {{ $error }}<br>
        @endforeach
      </div>
      @endif

      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif

  </body>
</html>