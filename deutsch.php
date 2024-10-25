<?php
//check is the style is set before accessing it.
if (isset($_GET['style']) && $_GET['style'] == 'stylesDark.css') {
    $style = 'stylesDark.css';
    $style2 = 'styles.css';
} else {
    $style = 'styles.css';
    $style2 = 'stylesDark.css';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $style ?>">
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


        <a href="/"><img src="images/circle solutions_logo_02.png" alt="Circle Solutions logo in black" id="logo1"></a>
        <input type="checkbox" id="menuToggle" class="menu-toggle">
        <label for="menuToggle" class="menu-icon">
            <!-- Hamburger icon -->
            &#9776;
        </label>
        <div id="navBar" class="hidden">

            <ul>
                <li><a href="#HomeSec">Startseite</a></li>
                <li><a href="#ServiceSec">Dienste</a></li>
                <li><a href="#AboutSec">Über uns</a></li>
                <li><a href="#ContactSec">Kontakt</a></li>
                <li><a href="?style=<?php echo $style2 ?>">Thema</a></li>
                <li>
                    <a href="<?php echo 'index.php?style=' . $style ?>">
                        <button class="dot-button" id="btn1"><img src="images/UK.svg" alt="English"></button>
                    </a>
                </li>
                <li>
                    <a href="<?php echo 'nederlands.php?style=' . $style ?>">
                        <button class="dot-button" id="btn2"><img src="images/NL.svg" alt="Nederlands"></button>
                    </a>
                </li>
                <li>
                    <a href="<?php echo 'deutsch.php?style=' . $style ?>">
                        <button class="dot-button" id="btn3"><img src="images/DE.svg" alt="Deutsch"></button>
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <div class="HomeSec" id="HomeSec">
            <section>
                <div class="opening container no-pad-x">
                    <!-- <div class="container">
                        <div class="button-container">
                            <a href="<?php echo 'index.php?style=' . $style ?>">
                                <button class="dot-button" id="btn1">English</button>
                            </a>
                            <a href="<?php echo 'nederlands.php?style=' . $style ?>">
                                <button class="dot-button" id="btn2">Dutch</button>
                            </a>
                            <a href="<?php echo 'deutsch.php?style=' . $style ?>">
                                <button class="dot-button" id="btn3">German</button>
                            </a>
                        </div>
                    </div> -->
                    <h1>einfach die Punkte verbinden</h1>
                    <p>um Softwarelösungen zu entwickeln, die wie angegossen passen.</p>
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
                                    <p>Wir stellen uns eine Welt vor, in der die Nutzung von Software so einfach und
                                        natürlich ist wie das Atmen.</p>
                                    <p>Unser Ziel ist es, Software zu entwickeln, die zu den individuellen Eigenschaften
                                        der
                                        individuellen
                                        Bedürfnisse passt.
                                    </p>
                                    <p> Menschen und Unternehmen mit Softwarelösungen zu unterstützen.</p>
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
                                    <p>Wir denken, dass alltägliche Aufgaben kein Problem sein sollten.</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/how.png" alt="how">
                                    <p>Durch die Entwicklung von Software, die das Leben leichter macht</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/what.png" alt="what">
                                    <p>Softwarelösungen, die zu den einzelnen Kampagnen passen</p>
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
                                    <h2>bodenständig</h2>
                                    <p>Wir lieben es, die Dinge einfach zu halten. <br> Keine großen Gesten, kein
                                        Theater oder vielversprechende
                                        Utopien.</p>
                                    <h2>benutzerfreundlich</h2>
                                    <p>Mit unserer Lösung schlagen wir die Brücke zwischen Anwender und System.</p>
                                    <h2>qualitätsorientiert</h2>
                                    <p>Unsere Professionalität folgt keinem Hype, sondern der Qualität. <br>Wir glauben
                                        an
                                        immer
                                        wachsende
                                        und
                                        das Streben nach dem Besten.</p>
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
                        <h1>Dienstleistungen</h1>
                        <div class="packages  ">
                            <div class="package1">
                                <div class="package-title">
                                    <img src="images/documentMan.jpg" alt="people in a workspace"
                                        class="iconPlaceholder packageContent image-size-m">
                                    <h2>circle workspace</h2>
                                </div>
                                <p>
                                    App-Verwaltung:
                                    Schaffen Sie schnell einen rollenbasierten Arbeitsplatz, der alle aktuellen und
                                    zukünftigen
                                    Technologien integriert.
                                </p>
                                <p>
                                    Kommunikation & Information:
                                    Sehen Sie ungelesene E-Mails, Termine, Nachrichten und mehr auf einen Blick im
                                    Circle Workspace.
                                </p>
                                <p>
                                    Dokumentenverwaltung:
                                    Zentralisieren Sie Dokumente aus Office 365, OneDrive, SharePoint und mehr für eine
                                    einfache Online
                                    oder
                                    offline
                                    Zugriff.

                                </p>
                                <p>
                                    Preisgestaltung: 1-50 Benutzer €140,00 pro Monat, 51-500 Benutzer €760,00 pro Monat
                                </p>
                                <p>
                                    Anrufen: +31 6 567788234 oder E-Mail: info@circlesolutions.com
                                </p>
                            </div>
                            <div class="package2">
                                <div class="package-title">
                                    <img src="images/knowledge.jpg" alt="picture for circle D.O.t.S."
                                        class="iconPlaceholder packageContent image-size-m">
                                    <h2>circle D.O.T.S.</h2>
                                </div>
                                <p>
                                    Interne Kommunikation:
                                    Halten Sie alle auf dem Laufenden, indem Sie Nachrichten gezielt und effizient
                                    verbreiten und sicherstellen, dass
                                    Ausrichtung
                                    über
                                    der Organisation
                                </p>
                                <p>
                                    Verbinden und einbinden:
                                    Ermöglichen Sie es Teams, sich zu verbinden und zusammenzuarbeiten, indem Sie Kanäle
                                    und Seiten für Projekte erstellen
                                    oder
                                    Interessen, um Vertrauen und Teamarbeit zu fördern.
                                </p>
                                <p>

                                    Wissensmanagement:
                                    Zentralisierung von Ressourcen und Informationen für einen einfachen Zugriff,
                                    wodurch sich der Zeitaufwand für die Suche verringert
                                    und
                                    Steigerung der Produktivität.
                                </p>
                                <p>
                                    Preisgestaltung: 1-50 Benutzer €140,00 pro Monat, 51-500 Benutzer €760,00 pro Monat
                                </p>
                                <p>
                                    Anrufen: +31 6 567788234 oder E-Mail: info@circlesolutions.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="AboutSec" id="AboutSec">
                <h1>Über uns</h1>
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
                <h2>Kontakt</h2>

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
                    $name = filter_input(INPUT_POST, 'name', );
                    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                    $message = filter_input(INPUT_POST, 'message');

                    if (!empty($name) && !empty($email) && !empty($message)) {
                        echo "<p class='success'>Thank you, $name! Your message has been received. We will contact you at $email soon.</p>";
                    } else {
                        echo "<p class='error'>Please fill out all fields correctly.</p>";
                    }
                }
                ?>

                <form action="#ContactSec" method="POST">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Ihren Namen eingeben" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Geben Sie eine gültige E-Mail Adresse ein"
                        required>

                    <label for="message">Nachricht</label>
                    <textarea name="message" id="message" placeholder="Ihre Nachricht eingeben" rows="5"
                        required></textarea>

                    <button type="submit" name="submit">Einreichen</button>
                </form>
                <div class="ContactInfo">
                    <div class="socials">
                        <a href="https://www.facebook.com"><img src="images/facebook.png" class="image-size-s"
                                alt="facebook icon"></a>
                        <a href="https://www.instagram.com/"><img src="images/insta-icon.png" class="image-size-s"
                                alt="instagram icon"></a>
                    </div>
                    <h2>Sie finden uns unter:</h2>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2413.4371501859314!2d6.910882176834876!3d52.778424972130026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7e61f3ec72443%3A0xbe9d297b3e4fbcc7!2sNHL%20Stenden%20Hogeschool!5e0!3m2!1snl!2snl!4v1729240238545!5m2!1snl!2snl"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
        </section>
        <footer>
            <div class="AboutSec"><small class="subtext3">
                    &copy; 2024 Circle Solutions. Alle Rechte vorbehalten.</small>
            </div>
        </footer>
    </main>
</body>

</html>