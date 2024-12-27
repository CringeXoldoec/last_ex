@extends('layout.main')
@section('content')
    <section>
        @foreach($options as $option)
            <li>
                <h2>{{ $option->id }}</h2>
                <span>Время: {{ $option->time }}</span>
                <span>Адрес: {{ $option->adress }}</span>
                <span>Способ оплаты: {{ $option->payment }}</span>
                <span>Статус: {{ $option->status }}</span>
            </li>
        @endforeach

        <a href="{{route('home')}}">Назад</a>
    </section>
@endsection