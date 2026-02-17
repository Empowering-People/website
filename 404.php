<?php
$pageTitle = "Error 404 | Empowering People Scotland";
$activePage = "404";
$heroTitle = "Error 404";
$heroSubtitle = "Page not found";
?>
<!doctype html>

<html lang="en-GB">
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/includes/head.php"; ?>
    <!--
        To whomever has the job of maintaining this site when I'm gone:

        This version of the Empowering People website came about in early 2026,
        shortly after my tenure as social media manager began. One of my many
        tasks was editing and maintaining the company's existing website, which
        was created using a site builder. Due to my general disdain for site
        builders, as well as the particular one that was in use giving me a ton
        of grief (couldn't get custom favicon to work, stylesheet just wouldn't
        load in a lot of the time, they put direct modification of the code
        behind a paywall, etc), I decided that it was a far better use of my
        time writing an entirely new website from scratch, and convincing Jodi
        to switch to that one, as even though the initial process of getting
        the site laid out would take some time, once it was ready, I could make
        modifications a lot faster, have more control, and knew for a fact that
        less things would break less often for reasons out of my control.

        Now that the site actually exists and is entirely laid out, modifying it is easy enough:

        This site is mostly made up of HTML and CSS, just plain vanilla HTML and CSS,
        with a little bit of JS to make things like the OpenDyslexic font toggle work.
        No overengineered JS or CSS frameworks, I don't like working with them, in some
        cases they slow things down, and this site doesn't need them.

        Because it's all mostly plain HTML and CSS, there's not a massive learning curve,
        they're among the easiest forms of programming to learn. https://w3schools.com is
        a good resource for learning (and stealing snippets of code from), it's where I
        learned more or less all of my HTML and CSS skills. In theory you won't ever have
        to interact with the JS code, or add any new JS, but if you do, w3schools has
        resources for learning JS too, I just don't like making sites overly reliant on
        JS, and I also generally don't like working with it.

        All of the site's code is hosted on https://github.com/Empowering-People/website
        GitHub is a website for hosting git repositories, git is software for managing
        programming projects. This website having a git repo allows the code to be backed
        up somewhere just in case, and allows you to work on it from any computer anywhere
        in the world without having to worry about having a newer version on one computer
        than you do on the other. Just download the repository, make whatever changes need
        making, and reupload the files you changed. Additionally, at the time of writing,
        hosting for this site hasn't been sorted yet because it's still a work in progress,
        but I'm likely going to push for a hosting solution that pulls from the git repo's
        master branch, as that heavily simplifies things. Instead of making changes then
        needing to upload to the git repo and the hosting site, I'd just have to upload
        to the git repo, the hosting provider detects a change, automatically pulls the
        repo, and hosts it without any manual intervention.

        Other than that, I can't really think of anything I need to tell you. Leave this
        comment present on the site so the person who comes after you can use it to their
        benefit, but feel free to add to it if you can think of any instructions or
        explanations I forgot to include.

        - Gabriel Sykes, Social Media Manager at Empowering People, 2026-02-13
    -->
    <body>
        <button
            id="dyslexicFontToggle"
            class="dyslexic-font-toggle"
            aria-label="Toggle Dyslexia Friendly Font"
        >
            <p class="toggle-text">Toggle Dyslexia<br />Friendly Font</p>
        </button>
        <?php require $_SERVER["DOCUMENT_ROOT"] .
            "/includes/hero-banner.php"; ?>
        <div class="content-container-grey">
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.<br />
                <br />
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.
            </p>
        </div>
        <div class="content-container-white">
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.<br />
                <br />
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.
            </p>
        </div>
        <div class="content-container-beige">
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.<br />
                <br />
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.
            </p>
        </div>
        <div class="content-container-black">
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.<br />
                <br />
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.
            </p>
        </div>
        <div class="content-container-blue">
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.<br />
                <br />
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.
            </p>
        </div>
        <div class="content-container-light-grey">
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.<br />
                <br />
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
                faucibus ex sapien vitae pellentesque sem placerat. In id cursus
                mi pretium tellus duis convallis. Tempus leo eu aenean sed diam
                urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum
                egestas. Iaculis massa nisl malesuada lacinia integer nunc
                posuere. Ut hendrerit semper vel class aptent taciti sociosqu.
                Ad litora torquent per conubia nostra inceptos himenaeos.
            </p>
        </div>
        <?php require $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php"; ?>
        <script src="/scripts/opendyslexic.js"></script>
    </body>
</html>
