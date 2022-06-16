<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Samsung</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $page === 'home' ? 'text-warning fw-bold' : '' ?>" href="home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $page === 'shop' ? 'text-warning fw-bold' : '' ?>" href="shop">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $page === 'cart' ? 'text-warning fw-bold' : '' ?>" href="cart">Cart</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $page === 'contact' ? 'text-warning fw-bold' : '' ?>" href="contact">Contact</a>
                </li>

            </ul>
            <ul class="navbar-nav d-flex">
                <li class="nav-item">
                    <a href="login" class="nav-link link-dark px-2 <?= $page === 'login' ? 'text-warning fw-bold' : '' ?>">Connection</a>
                </li>
                <li class="nav-item">
                    <a href="register" class="nav-link link-dark px-2 <?= $page === 'register' ? 'text-warning fw-bold' : '' ?>">Créer un compte</a>
                </li>

            </ul>

        </div>
    </div>
</nav>