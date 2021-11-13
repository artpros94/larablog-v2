<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="{{ route('home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none h1">
            <span class="fs-4 ">LaraBlog-V2</span>
        </a>

        <ul class="nav nav-pills">


            
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link @if(Request::url() == route('home')) active  @endif" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="{{ route('post.create') }}" class="nav-link ">Добавить пост</a></li>
            <li class="nav-item"><a href="{{ route('showUserPosts', ['id' => 1]) }}" class="nav-link @if(Request::url() == route('showUserPosts', ['id' => 1])) active  @endif ">Мои посты</a></li>

        </ul>
    </header>
</div>