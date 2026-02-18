<?php
$pageTitle = "Contact Us | Empowering People Scotland";
$activePage = "contact";
$heroTitle = "Contact Us";
$heroSubtitle = "Our contact information.";
?>
<!doctype html>

<html lang="en-GB">
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/includes/head.php"; ?>
    <body>
        <?php require $_SERVER["DOCUMENT_ROOT"] .
            "/includes/dyslexic-font-toggle.php"; ?>
        <?php require $_SERVER["DOCUMENT_ROOT"] .
            "/includes/hero-banner.php"; ?>
        <div class="content-container-beige" style="min-height: 50vh">
            <p>
                To contact Empowering People, please send an email to: info@empowering-people.co.uk<br />
                Or phone: 0141-763-6668
            </p>
        </div>
        <?php require $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php"; ?>
        <?php require $_SERVER["DOCUMENT_ROOT"] . "/includes/scripts.php"; ?>
    </body>
</html>
