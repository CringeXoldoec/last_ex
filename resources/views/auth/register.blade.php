@extends('layout.main')
@section('content')
    <section>
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <input type="text" name="full_name" placeholder="ФИО" required>
            @error('full_name')
                <span class="error">
                    {{$message}}
                </span>
            @enderror
            
            <input type="email" name="email" placeholder="Почта" required>
            @error('email')
                <span class="error">
                    {{$message}}
                </span>
            @enderror

            <input type="tel" name="phone" placeholder="Телефон" required>
            @error('phone')
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

            <input type="password" name="password_confirmation" placeholder="Повторите пароль" required>
            @error('password_confirmation')
                <span class="error">
                    {{$message}}
                </span>
            @enderror
            

            <button type="submit">Зарегистрироваться</button>
        </form>
    </section>
@endsection
