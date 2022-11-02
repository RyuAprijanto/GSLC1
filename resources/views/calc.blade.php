@extends('main')

@section('Title', 'Main')

@section('calcu')
    @for ($x = 0;  $x <= 100 ; $x+= 10)
    The number is: {{ $x }} <br>
    @if ($x == 100)
        <br>This is the final number <br>
        @break
    @endif
    @endfor
@stop

