<nav class="navbar">
    <div class="navbar-container">
        <a class="navbar-brand" href="{{ route('clothes.index') }}">
            <i class="bi bi-hanger"></i> Armário Virtual
        </a>
        <ul class="navbar-nav">
            <li>
                <a class="nav-link" href="{{ route('clothes.index') }}">
                    <i class="bi bi-list"></i> Minhas Roupas
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('clothes.create') }}">
                    <i class="bi bi-plus-circle"></i> Nova Roupa
                </a>
            </li>
        </ul>
    </div>
</nav>
