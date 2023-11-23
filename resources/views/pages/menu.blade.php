<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="{{ route('pages.index') }}">AWLO<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.index') }}">Accueil</a>
                </li>
                <li><a class="nav-link" href="{{ route('pages.hote') }}">Nos Hôtes</a></li>
                <li><a class="nav-link" href="{{ route('pages.about') }}">A propos de nous</a></li>
                <li><a class="nav-link" href="{{ route('pages.service') }}">Nos Services</a></li>
                <li><a class="nav-link" href="{{ route('pages.blog') }}">Nos Logements</a></li>
                <li><a class="nav-link" href="{{ route('pages.contact') }}">Nos contacts</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="{{ route('hote.login') }}"><img src="images/user.svg"></a></li>
        <!--<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>-->
            </ul>
        </div>
    </div>
        
</nav>