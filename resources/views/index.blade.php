<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

@extends('layouts.app')

@section('content')

    <div class="container">
      <h1>Elenco dei treni in partenza</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa minus fugit earum molestiae eos repellendus incidunt doloremque! Nisi illo ipsa culpa? Iusto magni corrupti maxime alias quia quidem accusantium fugiat.</p>
    </div>

    <div class="container">
      <table>
        <tbody>
          @foreach ($trains as $train)
              <tr>
                <td>{{ $train->id }}</td>
                <td>{{ $train->departure_station}}</td>
                <td>{{ $train->arrival_station}}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection