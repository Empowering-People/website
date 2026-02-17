<?php
$pageTitle = "Error 404 | Empowering People Scotland";
$activePage = "404";
$heroTitle = "Error 404";
$heroSubtitle = "Page not found";
?>
<!doctype html>

<html lang="en-GB">
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/includes/head.php"; ?>
    <body>
        <?php require $_SERVER["DOCUMENT_ROOT"] .
            "/includes/dyslexic-font-toggle.php"; ?>
        <?php require $_SERVER["DOCUMENT_ROOT"] .
            "/includes/hero-banner.php"; ?>
        <div class="content-container-white">
            <h1 style="text-align: center">There's nothing interesting here.</h1>
            <h2 style="text-align: center">It's just a 404 page.</h2>
            <h3 style="text-align: center">You've likely seen plenty before.</h3>
            <h4 style="text-align: center">I'm only bothering to type all this,</h4>
            <h5 style="text-align: center">in order to fill out the page with meaningless waffle.</h5>
            <h6 style="text-align: center">So that you're not sat here staring at a whole load of nothingness.</h6>
        </div>
        <?php require $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php"; ?>
        <?php require $_SERVER["DOCUMENT_ROOT"] . "/includes/scripts.php"; ?>
    </body>
</html>
