@extends('layouts.main')

@section('content')
  <main>
    
    @foreach ($movies as $movie)
      <div class="container">
        <ul>
          <li>
            <h3>Titolo Italiano:</h3>
            <h2>{{$movie['title']}}</h2>
          </li>
          <li>
            <h3>Titolo Originale:</h3> 
            <h2>{{$movie['original_title']}}</h2>
          </li>
          <li>
            <h3>Nazionalità:</h3>
            <h2>{{$movie['nationality']}}</h2>
          </li>
          <li>
            <h3>Data di uscita: </h3>
            <h2>{{$movie['date']}}</h2>
          </li>
          <li>
            <h3>Voto: </h3>
            <h2>{{$movie['vote']}}</h2>
          </li>
        </ul>
      </div>
    @endforeach
    
  </main>
@endsection