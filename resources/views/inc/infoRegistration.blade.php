<div class="jumbotron mt-5">
    <div class="container">
        <h3>Здравствуйте <?= Illuminate\Support\Facades\Auth::user()->name ?? 'Noname' ?></h3>
        <p>Регистрация прошла успешно, заполните заявку</p>
    </div>
</div>
