@extends('layout.main')
@section('content')
    <section>
        <form action="{{route('request.store')}}" method="POST">
            @csrf
            @method('POST')
            <h2>Оставить заявку</h2>

            <input type="text" name="adress" placeholder="Адрес" required>
            @error('adress')
                <span class="error">
                    {{$message}}
                </span>
            @enderror

            <input type="time" name="time" placeholder="Время">
            @error('time')
                <span class="error">
                    {{$message}}
                </span>
            @enderror

            <select name="payment">
                <option value="cash">Наличка</option>
                <option value="SBP">СБП</option>
            </select>

            <button type="submit">Отправить</button>
        </form>

        @if(session()->has('success'))
            <p>{{ session('success') }}</p>
        @endif

        <a href="{{route('show')}}">Посмотреть свои заявки</a>
    </section>
@endsection
