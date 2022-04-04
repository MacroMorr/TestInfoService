@extends('app.app')

@section('title')
   Ваши заявки
@endsection

@section('info')
    <h3>Заявки пользователя</h3>
    @foreach($data as $element)
        <div class="alert alert-info">
            <h4>Имя: {{ $element->name }}</h4>
            <h5>Компания: {{ $element->company }}</h5>
            <p>Тема заявки: {{ $element->request }}</p>
            <p>Сообщение: {{ $element->message }}</p>
            <p>Телефон: {{ $element->phone }}</p>
            <p><small>Дата публикации: {{ $element->created_at }}</small></p>
        </div>
    @endforeach
@endsection

