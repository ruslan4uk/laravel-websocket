@extends('layouts.app')

@section('content')
    @if(Auth::check())
        @verbatim
            <chat></chat>
        @endverbatim
            <chat></chat>
    @else
        <h3 class="text-center">Для просмотра чата необходима авторизация</h3>
    @endif
@endsection
