@extends('app.app')

@section('title')
    Заполните заявку
@endsection

@section('request')
    <h3>Заполните заявку</h3>

    <form action="{{  route('info-form')  }}" method="post" class="mt-4">
        @csrf
        <div class="form-group mt-2">
            <lable for="name">Введите имя:</lable>
            <label for="name"></label><input type="text" name="name" placeholder="Jon Week" id="name" class="form-control">
        </div>
        <div class="form-group mt-2">
            <lable for="company">Компания:</lable>
            <input type="text" name="company" placeholder="FIA Company" id="company" class="form-control">
        </div>
        <div class="form-group mt-2">
            <lable for="request">Название заявки:</lable>
            <input type="text" name="request" placeholder="Тест Laravel" id="request" class="form-control">
        </div>
        <div class="form-group mt-2">
            <lable for="message">Ваше сообщение:</lable>
            <textarea name="message" id="message" class="form-control" placeholder="И написал он слово своё..."></textarea>
        </div>
        <div class="form-group mt-2">
            <lable for="phone">Телефон:</lable>
            <input type="text" name="phone" placeholder="+7 900 777 55 99" id="phone" class="form-control">
        </div>
        <div class="form-group mt-2">
            <lable for="file">Файл:</lable>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-2">Отправить</button>
    </form>


@endsection
