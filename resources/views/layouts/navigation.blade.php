<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #26a69a;">
    <a class="navbar-brand " href="#">MY LIBRARY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('buku.index') }}">Buku</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link" style="color: inherit; text-decoration: none;">Logout</button>
                </form>
            </li>
        </ul>
</div>
</nav>
