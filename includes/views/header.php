<header class="header flex-center-between ">

    <div class="logo">
        <a href="<?= home_path() ?>"> <img src="<?= get_img() ?>new-logo-white.webp" alt="HireCoworker" loading="lazy"
                id="header-logo" /></a>
    </div>
    <nav>
        <ul class="links-list flex-center nav-list">
            <li class="links-list-items"><a href="<?= home_path() ?>services">Services</a></li>
            <li class="links-list-items"><a href="<?= home_path() ?>pricing">Pricing</a></li>
            <li class="links-list-items">
                <a href="<?= home_path() ?>about">About</a>
            </li>
            <li class="links-list-items"><a href="<?= home_path() ?>contact">Contact</a></li>
            <button class="basic-button flex-center" id="header_btn">
                <a href="tel:+1 (848) 200-0555" class="flex-center">
                    <ion-icon name="call-sharp"></ion-icon>Connect Us
                </a>
            </button>
        </ul>
    </nav>
    <div class="mobile-navbar-btn">
        <ion-icon name="menu-sharp" class="mobile-nav-icon" id="menu-icon"></ion-icon>
        <ion-icon name="close-sharp" class="mobile-nav-icon" id="close-icon"></ion-icon>
    </div>
</header>
