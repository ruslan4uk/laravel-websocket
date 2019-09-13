@extends('layouts.app')

@section('content')
    @if(Auth::check())
        @verbatim

        @endverbatim
    @else
        <h3 class="text-center">Для просмотра чата необходима авторизация</h3>
        @verbatim
            <chat></chat>
        @endverbatim
    @endif
@endsection
