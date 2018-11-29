<!DOCTYPE html>
<html lang="de-at">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>Suche</title>
    <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <nav class="mobile-nav">
        <div class="mobile-nav-logo">
            <a href="">
                <img src="images/LightFullLogo.svg" alt="Pixelshere Logo">
            </a>
        </div>
        <div class="mobile-nav-menu">
            <div class="mobile-nav-login">
                <a href="">Login</a>
            </div>
            <div class="mobile-nav-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    <input class="mobile-search" type="text" placeholder="Wonach suchst du?">
    <nav class="desktop-nav">
        <div class="desktop-nav-logo">
            <a href="">
                <img src="{{asset('img/LightFullLogo.svg')}}" alt="Pixelshere Full Logo">
            </a>
        </div>
        @include('partials.menus.search')
        <div class="desktop-nav-menu">
            <ul class="desktop-nav-controls">
                <li><a href="">Registrieren</a></li>
                <li><a href="">Login</a></li>
                <li>
                    <img src="images/user.png">
                    <a href="">Gast</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <section class="category-top-section">
        <h2>Suchergebnisse für: Beispielsuche/Kategorietitel</h2>
        <div>
            <h5>Sortieren nach: Beliebheit</h5>
            <img src="images/vote.png">
            <h5>Entfernung: 47km</h5>
        </div>

    </section>
    <div class="category-overview-section-mobile-filter">
        <a><img src="images/filter-solid.png"><h3>Filter</h3></a>
    </div>
    <section class="category-overview-section">
        <div class="category-overview-section-desktop-filter">
            <ul>
                <li><a>Grafik &amp; Webdesign</a></li>
                <li><a>Online Marketing</a></li>
                <li><a>Texten &amp; Übersetzungen</a></li>
                <li><a>Fotografie</a></li>
            </ul>
        </div>
        <div class="category-overview-section-results">
            <ul class="results">

                @foreach($portfolios as $portfolio)

                <li>
                    <a>
                        <img src="images/project.png">
                        <h5>{{$portfolio->name}}</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    </a>
                </li>

                @endforeach

            </ul>
            <div class="paginate">
                <ul>
                    <li>
                        <a href="">1</a>
                    </li>
                    <li>
                        <a href="">2</a>
                    </li>
                    <li>
                        <a href="">3</a>
                    </li>
                    <li>
                        <a href="">4</a>
                    </li>
                    <li>
                        <a href="">5</a>
                    </li>
                </ul>
                <img src="images/vote.png">
            </div>
            <div class="category-load-button-container">
                <input class="load-button" type="submit" value="Mehr Laden">
            </div>
        </div>
    </section>
</main>
<footer>
    <nav class="footer-nav">
        <div class="footer-nav-logo">
            <a href="">
                <img src="images/WhiteFullLogo.svg" alt="Pixelshere White Full Logo">
            </a>
            <span>&copy;Pixelshere 2018</span>
        </div>
        <div class="footer-nav-container">
            <h3>Kategorien</h3>
            <ul>
                <li><a>Grafik &amp; Webdesign</a></li>
                <li><a>Online Marketing</a></li>
                <li><a>Texten &amp; Übersetzungen</a></li>
                <li><a>Fotografie</a></li>
            </ul>
        </div>
        <div class="footer-nav-container">
            <h3>Pixelshere</h3>
            <ul>
                <li><a>Impressum</a></li>
                <li><a>Datenschutzerklärung</a></li>
                <li><a>Über Uns</a></li>
                <li><a>Kontakt</a></li>
            </ul>
        </div>
        <div class="footer-nav-container">
            <h3>Für Neue</h3>
            <ul>
                <li><a>Anfängerguides</a></li>
                <li><a>Registrierung</a></li>
            </ul>
            <div class="footer-nav-social">
                <ul>
                    <li><a><img src="images/iconmonstr-facebook.png"></a></li>
                    <li><a><img src="images/iconmonstr-instagram.png"></a></li>
                    <li><a><img src="images/iconmonstr-twitter.png"></a></li>
                </ul>
            </div>
        </div>

    </nav>
</footer>
</body>
</html>