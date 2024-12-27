@extends('layout.main')
@section('content')
    <section>
        <ul>
            @foreach($options as $option)
                <li>
                    <h2>{{ $option->id }}</h2>
                    <span>Время: {{ $option->time }}</span>
                    <span>Адрес: {{ $option->adress }}</span>
                    <span>Способ оплаты: {{ $option->payment }}</span>
                    <div>
                        <span>Статус: {{ $option->status }}</span>
                        @if ($option->status !== 'end')
                            <form action="{{ route('options.update', $option->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit">Обновить</button>
                            </form>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
