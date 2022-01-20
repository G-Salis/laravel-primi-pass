<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test Laravel</title>
</head>
<body>

  <h1 style="text-align: center">
    IL MIO PRIMO LARAVEL
  </h1>
  <h1 style="text-align: center">
    {{$name}}
  </h1>

  <div><a href="{{route('home')}}">home</a></div>
  <div><a href="{{route('about')}}">about</a></div>
  <div><a href="{{route('contact')}}">contatti</a></div>

  <ul>
  

    @foreach ($film as $films)

    @if ($loop->first)
     <strong>
    @endif
    @if ($loop->last)
     <strong>
    @endif

      <li>{{$films}}</li>

    @if ($loop->first)
      </strong>
    @endif
    @if ($loop->last)
      </strong>
    @endif

    @endforeach

   
  </ul>

  <div>
    @if ($stampa)

      <h4>Posso Stampare</h4>
      
    @else  

    <h4>NON Posso Stampare</h4>
      
    @endif
  </div>
  
</body>
</html>