<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Circle Solutions | Home</title>
</head>

<body>
    <header>
        <?php
        $lang = "eng";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $lang = filter_input(INPUT_POST, "language");

        }
        ?>

        <img src="images/circle solutions_logo_02.png" alt="Circle Solutions logo in black" id="logo1">
        <input type="checkbox" id="menuToggle" class="menu-toggle">
        <label for="menuToggle" class="menu-icon">
            <!-- Hamburger icon -->
            &#9776;
        </label>
        <div id="navBar" class="hidden">
            <input type="checkbox" id="darkmode-toggle"/>
            <label for="darkmode-toggle"></label>
            <ul>
                <li><a href="#HomeSec">Home</a></li>
                <li><a href="#ServiceSec">Services</a></li>
                <li><a href="#AboutSec">About</a></li>
                <li><a href="#ContactSec">Contact</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="HomeSec" id="HomeSec">
            <section>
                <div class="opening container no-pad-x">
                <div class="container">
                            <div class="button-container">
                                <a href="index.php">
                                    <button class="dot-button" id="btn1">English</button>
                                </a>
                                <a href="nederlands.php">
                                    <button class="dot-button" id="btn2">Dutch</button>
                                </a>
                                <a href="deutsch.php">
                                    <button class="dot-button" id="btn3">German</button>
                                </a>
                            </div>
                        </div>
                    <h1>just connect the dots</h1>
                    <p>to develop software solutions that fit like a glove.</p>
                </div>
            </section>
            <section>
                <div class="basic-info1">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="images/product-manager.png" alt="product manager" class="image1">
                            </div>
                            <div class="col">
                                <div class="vision-mission">
                                    <p>We envision a world where using software is as easy and natural as breathing.</p>
                                    <p>Our purpose is to develop software that fit the individual qualities of
                                        individual
                                        needs.
                                    </p>
                                    <p>To empower people & businesses with software solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="basic-info2">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/why.png" alt="why">
                                    <p>We think everyday tasks should be no hassle.</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/how.png" alt="how">
                                    <p>By developing software that makes life easier</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/what.png" alt="what">
                                    <p>Software solutions that fit the individual campaigns</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="basic-info3-section">
                <div class="container pad-1">
                    <div class="row">
                        <div class="col">
                            <div class="basic-info3">
                                <div class="subtext3">
                                    <h2>down to earth</h2>
                                    <p>We love to keep things simple. <br> No big gestures, no theatre or promising
                                        utopias.</p>
                                    <h2>user friendly</h2>
                                    <p>With our solution we build bridges between user and systems.</p>
                                    <h2>quality driven</h2>
                                    <p>Our professionalism doesn't follow hypes: it follows quality. <br>We believe in
                                        ever
                                        growing
                                        and
                                        striving for the best.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="images/reminder.png" alt="Woman taking notes" class="image4">
                        </div>
                    </div>
                </div>
        </div>
        </section>
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="ServiceSec" id="ServiceSec">
                        <h1>Services</h1>
                        <div class="packages  ">
                            <div class="package1">
                                <div class="package-title">
                                    <img src="images/documentMan.jpg" alt="people in a workspace" class="iconPlaceholder packageContent">
                                    <h2>circle workspace</h2>
                                </div>
                                <p>
                                    App Management:
                                    Quickly create a role-based workplace that integrates all current and future
                                    technologies.
                                </p>
                                <p>
                                    Communication & Information:
                                    View unread emails, appointments, news, and more at a glance in Circle Workspace.
                                </p>
                                <p>
                                    Document Management:
                                    Centralize documents from Office 365, OneDrive, SharePoint, and more for easy online
                                    or
                                    offline
                                    access.

                                </p>
                                <p>
                                    Pricing: 1-50 users €140,00 per month, 51-500 users €760,00 per month
                                </p>
                                <p>
                                    Call: +31 6 567788234 or e-mail :  info@circlesolutions.com
                                </p>
                            </div>
                            <div class="package2">
                                <div class="package-title">
                                    <img src="images/knowledge.jpg" alt="picture for circle D.O.t.S." class="iconPlaceholder packageContent">
                                    <h2>circle D.O.T.S.</h2>
                                </div>
                                <p>
                                    Internal Communications:
                                    Keep everyone informed by targeting and distributing news efficiently, ensuring
                                    alignment
                                    across
                                    the organization
                                </p>
                                <p>
                                    Connect and Engage:
                                    Enable teams to connect and collaborate by creating Channels and Pages for projects
                                    or
                                    interests, fostering trust and teamwork.
                                </p>
                                <p>

                                    Knowledge Management:
                                    Centralize resources and information for easy access, reducing time spent searching
                                    and
                                    increasing productivity.
                                </p>
                                <p>
                                    Pricing: 1-50 users €140,00 per month, 51-500 users €760,00 per month
                                </p>
                                <p>
                                    Call: +31 6 567788234 or e-mail :  info@circlesolutions.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="AboutSec" id="AboutSec">
                <h1>About</h1>
                <div class="employee-cards">
                    <div class="employee-card1">
                        <img src="images/Raymond.jpg" alt="raymond the Ceo" class="employee-photo">
                        <div class="employee-info">
                            <p>Raymond</p>
                            <p>ceo</p>
                        </div>
                    </div>
                    <div class="employee-card2">
                        <img src="images/Kevin.png" alt="Kevin the lead developer" class="employee-photo">
                        <div class="employee-info">
                            <p>Kevin</p>
                            <p>lead developer</p>
                        </div>
                    </div>
                    <div class="employee-card3">
                        <img src="images/Theresa.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>Theresa</p>
                            <p>project manager</p>
                        </div>
                    </div>
                    <div class="employee-card4">
                       <img src="images/Sander.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>Sander</p>
                            <p>developer</p>
                        </div>
                    </div>
                    <div class="employee-card5">
                       <img src="images/Rene.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>René </p>
                            <p>cloud solution specialist</p>
                        </div>
                    </div>
                    <div class="employee-card6">
                        <img src="images/John.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>John</p>
                            <p>developer and security officer</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section>

            <div class="ContactSec" id="ContactSec">
                <h2>Contact Us</h2>

                <?php
            if (isset($_POST['language'])) {
                $selectedLanguage = $_POST['language'];
                header("Location: $selectedLanguage");
                exit();
            }
            $name = "";
            $email = "";
            $message = "";

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $name = filter_input(INPUT_POST, 'name');
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $message = filter_input(INPUT_POST, 'name');

                if (!empty($name) && !empty($email) && !empty($message)) {
                    echo "<p class='success'>Thank you, $name! Your message has been received. We will contact you at $email soon.</p>";
                } else {
                    echo "<p class='error'>Please fill out all fields correctly.</p>";
                }
            }
            ?>

                <form action="#ContactSec" method="POST">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter a valid email address" required>
                    <textarea name="message" placeholder="Enter your message" rows="5" required></textarea>
                    <button type="submit" name="submit">Submit</button>
                </form>
                <div class="ContactInfo">
                    <div class="socials">
                        <a href="https://www.facebook.com"><img src="images/facebook.png" class="image-size-s"
                                alt="facebook icon"></a>
                        <a href="https://www.instagram.com/"><img src="images/insta-icon.png" class="image-size-s"
                                alt="instagram icon"></a>
                    </div>
                    <h2>Find us at:</h2>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2413.4371501859314!2d6.910882176834876!3d52.778424972130026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7e61f3ec72443%3A0xbe9d297b3e4fbcc7!2sNHL%20Stenden%20Hogeschool!5e0!3m2!1snl!2snl!4v1729240238545!5m2!1snl!2snl"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
        </section>
        <footer></footer>
    </main>
</body>

</html>