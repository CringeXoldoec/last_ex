@extends('layout.main')
@section('content')
    <section>
        <form action="{{ route('login') }}" method="POST">
            @csrf


            <input type="email" name="email" placeholder="Почта" required>
            @error('email')
                <span class="error">
                    {{$message}}
                </span>
            @enderror
            

            <input type="password" name="password" placeholder="Пароль" required>
            @error('password')
                <span class="error">
                    {{$message}}
                </span>
            @enderror

            <button type="submit">Войти</button>
        </form>
    </section>
@endsection