<?php
$pageTitle = "About Us | Empowering People Scotland";
$activePage = "about";
$heroTitle = "About Us";
$heroSubtitle = "Everything you need to know about Empowering People.";
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
        <div class="content-container-beige">
            <h1 style="text-align: center">Meet The Team:</h1>
            <h3 style="text-align: center">
                Headshots taken by
                <a href="https://www.linkedin.com/in/lee-mcclounnan-35467b282/"
                    >Lee McClounnan</a
                >
            </h3>
            <br />
            <div class="employee-headshots-and-bios">
                <div class="employee-profile">
                    <img
                        class="employee-headshot"
                        src="https://placehold.co/1200x1200"
                    />
                    <br />
                    <br />
                    <h4 style="text-align: center">Ayana Ritchie</h4>
                    <h6 style="text-align: center">
                        Recruitment, Sales & Employment Engagement Executive
                    </h6>
                    <p class="footer-info-center">
                        <a
                            href="https://www.linkedin.com/in/ayana-ritchie-890a9114/"
                            target="_blank"
                        >
                            <i class="fa fa-linkedin fa-fw"></i>
                        </a>
                    </p>
                    <br />
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit.
                        Quisque faucibus ex sapien vitae pellentesque sem
                        placerat. In id cursus mi pretium tellus duis convallis.
                        Tempus leo eu aenean sed diam urna tempor. Pulvinar
                        vivamus fringilla lacus nec metus bibendum egestas.
                        Iaculis massa nisl malesuada lacinia integer nunc
                        posuere. Ut hendrerit semper vel class aptent taciti
                        sociosqu. Ad litora torquent per conubia nostra inceptos
                        himenaeos.
                    </p>
                </div>
                <div class="employee-profile">
                    <img
                        class="employee-headshot"
                        src="https://placehold.co/1200x1200"
                    />
                    <br />
                    <br />
                    <h4 style="text-align: center">Jodi Codona</h4>
                    <h6 style="text-align: center">Founder and CEO</h6>
                    <p class="footer-info-center">
                        <a
                            href="https://www.linkedin.com/in/jodi-codona-504213285/"
                            target="_blank"
                        >
                            <i class="fa fa-linkedin fa-fw"></i>
                        </a>
                    </p>
                    <br />
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit.
                        Quisque faucibus ex sapien vitae pellentesque sem
                        placerat. In id cursus mi pretium tellus duis convallis.
                        Tempus leo eu aenean sed diam urna tempor. Pulvinar
                        vivamus fringilla lacus nec metus bibendum egestas.
                        Iaculis massa nisl malesuada lacinia integer nunc
                        posuere. Ut hendrerit semper vel class aptent taciti
                        sociosqu. Ad litora torquent per conubia nostra inceptos
                        himenaeos.
                    </p>
                </div>
                <div class="employee-profile">
                    <img
                        class="employee-headshot"
                        src="https://placehold.co/1200x1200"
                    />
                    <br />
                    <br />
                    <h4 style="text-align: center">Gabriel Sykes</h4>
                    <h6 style="text-align: center">Social Media Manager</h6>
                    <p class="footer-info-center">
                        <a href="https://gabriel-sykes.com" target="_blank">
                            <i class="fa fa-globe fa-fw"></i>
                        </a>
                    </p>
                    <br />
                    <p>
                        I do many things here, I manage Empowering People's
                        variety of social media accounts, I film, photograph,
                        and edit media for the company, I compose music to put
                        in the background of social media posts, and I code and
                        maintain this website.<br />
                        <br />
                        <!-- And I only get minimum wage :/ -->
                        I have a HND in Digital Film and Television, I have
                        years of experience messing about with custom websites,
                        and I have years of experience making incredibly
                        mediocre music.
                    </p>
                </div>
            </div>
        </div>
        <div class="content-container-blue">
            <h2 style="width: 80%; margin: auto">About Empowering People</h2>
            <p>
                Empowering People was formed for one simple reason; To enable
                individuals with additional support needs and hidden
                disabilities to find employment and secure the correct support
                (both personally and professionally), and empower them to live
                their best lives.<br />
                <br />
                Our founding members have lived with disabilities and know first
                hand some of the many challenges in living a fulfilling life.
                Our 3 key milestones are –
                <b>Understanding, Ambition & Enablement</b>.
            </p>
            <br />
            <br />
            <h4 style="width: 80%; margin: auto">
                So what does that all mean?
            </h4>
            <p>
                Through developing a clear understanding of what independence
                looks like for our candidates, we work with them to achieve
                their personal goals and ambitions, through bespoke support
                plans which are tailored to their specific needs.
            </p>
        </div>
        <div class="content-container-beige">
            <h4 style="width: 80%; margin: auto">Why Empowering People?</h4>
            <p>
                Diversity, Inclusion, and Equality are hugely important to our
                team. We want to ensure that we represent the very best
                interests of each and every individual we support.<br />
                <br />
                Our team reflects the diversity of our candidates and employers,
                and the many communities and markets where we work. We strive to
                understand, value, and incorporate differences that are woven
                into our culture. It is a journey we are taking with each new
                candidate and with each new team member.
            </p>
            <hr />
            <h4 style="width: 80%; margin: auto">
                Our Core Values and Beliefs
            </h4>
            <br />
            <div class="values-and-beliefs-grid">
                <div class="values-and-beliefs-item">
                    <h5>Self Awareness</h5>
                    <br />
                    <hr style="width: 25%; margin: 0" />
                    <br />
                    <p style="margin: 0">
                        Self confidence, self belief, and self worth are key
                        qualities everyone should possess, and we believe in
                        Empowering People to see their value and worth.
                    </p>
                    <br />
                </div>
                <div class="values-and-beliefs-item">
                    <h5>Independence</h5>
                    <br />
                    <hr style="width: 25%; margin: 0" />
                    <br />
                    <p style="margin: 0">
                        Independence is a key factor in personal growth and
                        should be encouraged.
                    </p>
                    <br />
                </div>
                <div class="values-and-beliefs-item">
                    <h5>Equality</h5>
                    <br />
                    <hr style="width: 25%; margin: 0" />
                    <br />
                    <p style="margin: 0">
                        Equality should be available to everyone.
                    </p>
                    <br />
                </div>
                <div class="values-and-beliefs-item">
                    <h5>Support</h5>
                    <br />
                    <hr style="width: 25%; margin: 0" />
                    <br />
                    <p style="margin: 0">
                        Everyone should have access to support that enriches
                        their life.
                    </p>
                    <br />
                </div>
                <div class="values-and-beliefs-item">
                    <h5>Uniqueness</h5>
                    <br />
                    <hr style="width: 25%; margin: 0" />
                    <br />
                    <p style="margin: 0">
                        Everyone is unique, everyone is different, there is
                        never just one workable approach.
                    </p>
                    <br />
                </div>
                <div class="values-and-beliefs-item">
                    <h5>Ambition</h5>
                    <br />
                    <hr style="width: 25%; margin: 0" />
                    <br />
                    <p style="margin: 0">
                        Ambition drives personal growth and development,
                        developing ambition in individuals helps them work
                        towards both short and long term goals.
                    </p>
                    <br />
                </div>
            </div>
        </div>
        <div class="content-container-grey">
            <h4 style="width: 80%; margin: auto">Testimonials</h4>
            <br />
            <div class="testimonials-grid">
                <div class="testimonials-item">
                    <h5 style="margin-bottom: 0.5rex">Michael Houghton</h5>
                    <h6>The Hub Café</h6>
                    <h6>Front of House/Waiter</h6>
                    <br />
                    <hr style="width: 25%; margin: 0" />
                    <br />
                    <p style="margin: 0">
                        "My name is Michael, I'm 32 years of age, and I suffer
                        from Asperger's Syndrome, a form of Autism. I've been
                        working at The Hub Auckley for nearly two years now."<br />
                        <br />
                        "Since then I have developed many new skills, undertaken
                        some training involved through the employment and been
                        able to work as part of a team by working front of
                        house, and sometimes back of house."<br />
                        <br />
                        "They all love me for who I am, as I've been told by
                        some of them, making the customers feel a lot more
                        welcome when they arrive and they all seem to like my
                        service, by making them laugh and making them feel more
                        comfortable."<br />
                        <br />
                        "I've been getting along with everybody, making many new
                        friends, they all love me for who I am."
                    </p>
                </div>
                <div class="testimonials-item">
                    <h5 style="margin-bottom: 0.5rex">Paige Weaver</h5>
                    <h6>The Hub Café</h6>
                    <h6>Head Chef</h6>
                    <br />
                    <hr style="width: 25%; margin: 0" />
                    <br />
                    <p style="margin: 0">
                        "I am Paige Weaver. I am Head Chef at The Hub coffee
                        shop & bistro. I have worked here for over 2 years,
                        working my way up from Kitchen Assistant."<br />
                        <br />
                        "Since I can remember we have always employed
                        individuals with hidden disabilities and I take a direct
                        role in the process, helping to train/coach/manage them
                        on a daily basis."<br />
                        <br />
                        "It is something that is close to my heart and an
                        important part of my responsibilities. It is a beautiful
                        thing to see our employees develop their skills and
                        confidence."<br />
                        <br />
                        "They feel they are part of the Hub family and are a big
                        part of our company ethos. I very much enjoy working
                        with our Access to Work staff. They are so committed, I
                        am proud that we are an all-inclusive employer."
                    </p>
                </div>
                <div class="testimonials-item">
                    <h5 style="margin-bottom: 0.5rex">Harry Smith</h5>
                    <h6>The Hub Café</h6>
                    <h6>Kitchen Assistant/Porter</h6>
                    <br />
                    <hr style="width: 25%; margin: 0" />
                    <br />
                    <p style="margin: 0">
                        "I first heard about The Hub when another chef used to
                        work there, telling me about them wanting their food
                        photographed, and a few weeks later there was a job
                        available for kitchen porter."<br />
                        <br />
                        "Fast forward to a year and a half later, I had to leave
                        due to unforseen circumstances. My next job
                        unfortunately wasn't giving me the hours I wanted."<br />
                        <br />
                        "I managed to get my job back at The Hub, and am back
                        happy again with my Hub family. Working here has given
                        me confidence to do lots more stuff, and has helped my
                        photography."<br />
                        <br />
                        "I even have a new dishwasher to help me in my role. I'm
                        enjoying this job now more than when I first started. I
                        feel I've gained a lot of confidence through this job
                        and made lots of new friends through it as well."
                    </p>
                </div>
            </div>
            <hr />
            <h3 style="width: 80%; margin: auto">Case Study</h3>
            <br />
            <center>
                <!-- "Waaa <center> is deprecated!!!1!!1!11!"
                I don't care, it still works and I'm not making
                a whole new div class just cause iframes don't
                center when you set the width to under 100% and
                the margin to auto in CSS for whatever reason.

                If I see a single issue or pull request about
                this, I will make sure I haunt you after I die.

                Seriously though, if you submit an issue or pull
                request about getting rid of the center tag just
                because it's deprecated, regardless of whether
                you're deeply terrified of using deprecated HTML
                tags, or you just find it funny because of this
                comment, I will block you from contributing to
                this site's repo.-->
                <iframe
                    src="https://www.youtube-nocookie.com/embed/pGq84wUoAhY?si=ro2yXRil0AtOxjuE"
                    title="YouTube Video Player"
                    frameborder="0"
                    allow="
                        accelerometer;
                        autoplay;
                        clipboard-write;
                        encrypted-media;
                        gyroscope;
                        picture-in-picture;
                        web-share;
                    "
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    class="yt-embed"
                ></iframe>
            </center>
        </div>
        <?php require $_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php"; ?>
        <script src="/scripts/opendyslexic.js"></script>
    </body>
</html>
