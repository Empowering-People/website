<div class="hero-banner">
    <div class="hero-header">
        <ul class="navbar">
            <li><a href="/index.php" class="<?= $activePage === "home"
                ? "nav-active"
                : "nav-inactive" ?>">Home</a></li>
            <li><a href="/about.php" class="<?= $activePage === "about"
                ? "nav-active"
                : "nav-inactive" ?>">About Us</a></li>
            <li><a href="/our-work.php" class="<?= $activePage === "our-work"
                ? "nav-active"
                : "nav-inactive" ?>">What We Do</a></li>
            <li><a href="/contact.php" class="<?= $activePage === "contact"
                ? "nav-active"
                : "nav-inactive" ?>">Contact Us</a></li>
            <li><a href="/hidden-disability.php" class="<?= $activePage ===
            "hidden-disability"
                ? "nav-active"
                : "nav-inactive" ?>">What We Mean By Hidden Disability</a></li>
        </ul>
        <div class="logo-container">
            <a class="logo-anchor" href="/index.php">
                <img
                    class="logo-image"
                    src="/images/logo.png"
                    alt="Empowering People Logo"
                />
            </a>
        </div>
    </div>
    <div class="hero-cover-text">
        <h2><?= $heroTitle ?? "" ?></h2>
        <h5><i><?= $heroSubtitle ?? "" ?></i></h5>
    </div>
</div>
