<?php
if(isset($_GET['style']) && $_GET['style'] == 'stylesDark.css'){
    $style = 'stylesDark.css';
    $style2 = 'styles.css';
}
 
 else{
    $style = 'styles.css';
    $style2 = 'stylesDark.css';
 }
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $style ?>">
    <title>Circle Solutions | Startseite</title>
</head>

<body>
    <header>
        <?php
        $lang = "de";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $lang = filter_input(INPUT_POST, "language");

        }
        ?>

        <img src="images/circle solutions_logo_02.png" alt="Circle Solutions Logo in Schwarz" id="logo1">
        <div id="navBar" class="hidden">
        
            <ul>
            <li><a href="?style=<?php echo $style2 ?>">Light/Dark mode</a></li>
                <li><a href="#HomeSec">Startseite</a></li>
                <li><a href="#ServiceSec">Dienstleistungen</a></li>
                <li><a href="#AboutSec">Über uns</a></li>
                <li><a href="#ContactSec">Kontakt</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="HomeSec" id="HomeSec">
            <section>
                <div class="opening">
                <div class="container">
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
                        </div>
                    <h1>Verbinden Sie einfach die Punkte</h1>
                    <p>um Softwarelösungen zu entwickeln, die wie angegossen passen.</p>
                </div>
            </section>
            <section>
                <div class="basic-info1">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="images/product-manager.png" alt="Produktmanager" class="image1">
                            </div>
                            <div class="col">
                                <div class="vision-mission">
                                    <p>Wir stellen uns eine Welt vor, in der die Nutzung von Software so einfach und
                                        natürlich ist wie das Atmen.</p>
                                    <p>Unser Ziel ist es, Software zu entwickeln, die den individuellen Qualitäten und
                                        Bedürfnissen entspricht.</p>
                                    <p>Menschen und Unternehmen mit Softwarelösungen zu stärken.</p>
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
                                    <img src="images/why.png" alt="Warum">
                                    <p>Wir denken, dass alltägliche Aufgaben mühelos sein sollten.</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/how.png" alt="Wie">
                                    <p>Indem wir Software entwickeln, die das Leben einfacher macht.</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/what.png" alt="Was">
                                    <p>Softwarelösungen, die zu individuellen Kampagnen passen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="basic-info3">
                <div class="subtext3">
                    <h2>Bodenständig</h2>
                    <p>Wir lieben es, die Dinge einfach zu halten. <br> Keine großen Gesten, kein Theater oder das
                        Versprechen von Utopien.</p>
                    <h2>Benutzerfreundlich</h2>
                    <p>Mit unserer Lösung schlagen wir Brücken zwischen Benutzer und Systemen.</p>
                    <h2>Qualitätsgetrieben</h2>
                    <p>Unser Professionalismus folgt keinen Trends: er folgt der Qualität. <br>Wir glauben an
                        kontinuierliches Wachstum und das Streben nach dem Besten.</p>
                </div>

                <img src="images/reminder.png" alt="Frau macht Notizen" class="image4">

            </div>



        </div>

        <div class="ServiceSec" id="ServiceSec">
            <h1>Dienstleistungen</h1>
            <div class="packages">
                <div class="package1">

                    <img src="images/documentMan.jpg" class="iconPlaceholder packageContent">
                    <h2>Circle Workspace</h2>
                    <p>
                        App-Verwaltung:
                        Erstellen Sie schnell einen rollenbasierten Arbeitsplatz, der alle aktuellen und zukünftigen
                        Technologien integriert.
                    </p>
                    <p>
                        Kommunikation & Informationen:
                        Sehen Sie ungelesene E-Mails, Termine, Nachrichten und mehr auf einen Blick in Circle Workspace.
                    </p>
                    <p>
                        Dokumentenmanagement:
                        Zentralisieren Sie Dokumente von Office 365, OneDrive, SharePoint und mehr für einen einfachen
                        Online- oder Offline-Zugriff.

                    </p>
                </div>
                <div class="package2">

                    <img src="images/knowledge.jpg" class="iconPlaceholder packageContent">
                    <h2>Circle D.O.T.S.</h2>
                    <p>
                        Interne Kommunikation:
                        Halten Sie alle informiert, indem Sie Nachrichten effizient verteilen und sicherstellen, dass
                        die Organisation auf dem Laufenden bleibt.
                    </p>
                    <p>
                        Verbinden und Einbinden:
                        Ermöglichen Sie Teams, sich zu vernetzen und zusammenzuarbeiten, indem Sie Kanäle und Seiten für
                        Projekte oder Interessen erstellen, um Vertrauen und Teamarbeit zu fördern.
                    </p>
                    <p>

                        Wissensmanagement:
                        Zentralisieren Sie Ressourcen und Informationen für einfachen Zugriff, reduzieren Sie die
                        Suchzeit und steigern Sie die Produktivität.
                    </p>

                </div>
            </div>
        </div>

        <div class="AboutSec" id="AboutSec">
            <h1>Über uns</h1>
            <p>Wir sind beepboop beep boop</p>
            <div class="employee-cards">
                    <div class="employee-card1">
                        <img src="images/Raymond.jpg" alt="raymond the Ceo" class="employee-photo">
                        <div class="employee-info">
                            <p>Raymond</p>
                            <p>Vorsitzender</p>
                        </div>
                    </div>
                    <div class="employee-card2">
                        <img src="images/Kevin.png" alt="Kevin the lead developer" class="employee-photo">
                        <div class="employee-info">
                            <p>Kevin</p>
                            <p>leitender Entwickler</p>
                        </div>
                    </div>
                    <div class="employee-card3">
                        <img src="images/Theresa.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>Theresa</p>
                            <p>Projektmanager</p>
                        </div>
                    </div>
                    <div class="employee-card4">
                       <img src="images/Sander.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>Sander</p>
                            <p>Entwickler</p>
                        </div>
                    </div>
                    <div class="employee-card5">
                       <img src="images/Rene.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>René </p>
                            <p>Spezialist für Cloud-Lösungen</p>
                        </div>
                    </div>
                    <div class="employee-card6">
                        <img src="images/John.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>John</p>
                            <p>Entwickler und Sicherheitsbeauftragter</p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="ContactSec" id="ContactSec">
            <h2>Kontaktieren Sie uns</h2>

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
                    echo "<p class='success'>Danke, $name! Ihre Nachricht wurde empfangen. Wir werden uns bald unter $email bei Ihnen melden.</p>";
                } else {
                    echo "<p class='error'>Bitte füllen Sie alle Felder korrekt aus.</p>";
                }
            }
            ?>

            <form action="#ContactSec" method="POST">
                <input type="text" name="name" placeholder="Geben Sie Ihren Namen ein" required>
                <input type="email" name="email" placeholder="Geben Sie eine gültige E-Mail-Adresse ein" required>
                <textarea name="message" placeholder="Geben Sie Ihre Nachricht ein" rows="5" required></textarea>
                <button type="submit" name="submit">Absenden</button>
            </form>
            <div class="ContactInfo">
                <div class="socials">
                    <a href="https://www.facebook.com"><img src="images/facebook.png" class="image-size-s"
                            alt="Facebook-Icon"></a>
                    <a href="https://www.instagram.com/"><img src="images/insta-icon.png" class="image-size-s"
                            alt="Instagram-Icon"></a>
                </div>
                <h2>Finden Sie uns hier:</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2413.4371501859314!2d6.910882176834876!3d52.778424972130026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7e61f3ec72443%3A0xbe9d297b3e4fbcc7!2sNHL%20Stenden%20Hogeschool!5e0!3m2!1snl!2snl!4v1729240238545!5m2!1snl!2snl"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        <footer>
            <div class="AboutSec"><small class="subtext3">
                &copy; 2024 Circle Solutions. All Rights Reserved.</small>
            </div>
        </footer>
    </main>
</body>

</html>