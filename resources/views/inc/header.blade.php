<div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <strong>Test Info Service</strong>
        </a>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-white text-decoration-none" href="{{ route('home') }}">Главная</a>

            @guest
                <a class="me-3 py-2 text-white text-decoration-none" href="{{ route('registration') }}">Регистрация</a>
                <a class="me-3 py-2 text-white text-decoration-none" href="{{ route('aut') }}">Авторизация</a>
            @endguest
            @auth
                <a class="me-3 py-2 text-white text-decoration-none" href="{{ route('request') }}">Заявки</a>
                <a class="me-3 py-2 text-white text-decoration-none" href="{{ route('info-data') }}">Инфо</a>
                <a class="me-3 py-2 text-white text-decoration-none" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Выход</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @endauth


        </nav>
    </div>
</div>
