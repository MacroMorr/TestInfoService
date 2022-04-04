<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Нельзя отправить данные без авторизацци на сайте при значении false
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name' => 'required|min:3|max:50',
                'company' => 'required|min:5|max:50',
                'request' => 'required|min:5|max:50',
                'message' => 'required|min:5|max:500',
                'phone' => 'required|regex:/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/',
                'file' => 'required',
        ];
    }

    /*Функция изменения тектса ошибок*/
    public function messages() {
        return [
            'name.required' => 'Поле "Имя" является обязательным',
            'name.min' => 'Поле "Имя" должно содержать не менее 3х символов',
            'name.max' => 'Максимальное колличество символов в поле "Имя" 50',

            'company.required' => 'Поле "Компания" является обязательным',
            'company.min' => 'Поле "Компания" должно содержать не менее 5 символов',
            'company.max' => 'Максимальное колличество символов в поле "Компания" 50',

            'request.required' => 'Поле "Название заявки" является обязательным',
            'request.min' => 'Поле "Название заявки" должно содержать не менее 5 символов',
            'request.max' => 'Максимальное колличество символов в поле "Название заявки" 50',

            'message.required' => 'Поле "Ваше сообщение" является обязательным',
            'message.min' => 'Поле "Ваше сообщение" должно содержать не менее 5 символов',
            'message.max' => 'Максимальное колличество символов в поле "Ваше сообщение" 500',

            'phone.required' => 'Поле "Телефон" является обязательным',
            'phone.regex' => 'Некорректно введен номер телефона',

            'file.required' => 'Обязатльно загрузите файл',
        ];
    }
}
