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

                <li><a href="#HomeSec">Startpagina</a></li>
                <li><a href="#ServiceSec">Diensten</a></li>
                <li><a href="#AboutSec">Over ons</a></li>
                <li><a href="#ContactSec">Contact</a></li>
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
            <section class="bg">
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
                    <h1>verbind gewoon de punten</h1>
                    <p>om softwareoplossingen te ontwikkelen die als gegoten zitten.</p>
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
                                    <p>Wij zien een wereld voor ons waarin het gebruik van software net zo gemakkelijk
                                        en natuurlijk is als ademen.</p>
                                    <p>Ons doel is om software te ontwikkelen die past bij de individuele kwaliteiten
                                        van individuele behoeften.
                                    </p>
                                    <p>Mensen en bedrijven in staat stellen om te werken met softwareoplossingen.</p>
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
                                    <p>Wij vinden dat alledaagse taken geen gedoe moeten zijn.</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/how.png" alt="how">
                                    <p>Door software te ontwikkelen die het leven makkelijker maakt</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/what.png" alt="what">
                                    <p>Softwareoplossingen die passen bij de individuele campagnes</p>
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
                                    <h2>praktisch</h2>
                                    <p>We houden de dingen graag eenvoudig. <br> Geen grote gebaren, geen theater of
                                        veelbelovende
                                        utopieën.</p>
                                    <h2>gebruiksvriendelijk</h2>
                                    <p>Met onze oplossing bouwen we bruggen tussen gebruikers en systemen.</p>
                                    <h2>kwaliteit gedreven</h2>
                                    <p>Onze professionaliteit volgt geen hypes, maar kwaliteit. <br>Wij geloven in
                                        steeds
                                        groei
                                        en
                                        streven naar het beste.</p>
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
                        <h1>Diensten</h1>
                        <div class="packages  ">
                            <div class="package1">
                                <div class="package-title">
                                    <img src="images/documentMan.jpg" alt="people in a workspace"
                                        class="iconPlaceholder packageContent image-size-m">
                                    <h2>circle workspace</h2>
                                </div>
                                <p>
                                    App-beheer:
                                    Creëer snel een rolgebaseerde werkplek die alle huidige en toekomstige
                                    technologieën integreert.
                                </p>
                                <p>
                                    Communicatie en informatie:
                                    Bekijk ongelezen e-mails, afspraken, nieuws en meer in één oogopslag in Circle
                                    Workspace.
                                </p>
                                <p>
                                    Documentbeheer:
                                    Centraliseer documenten van Office 365, OneDrive, SharePoint en meer voor eenvoudig
                                    online of offline beheer.
                                    of
                                    offline
                                    toegang.

                                </p>
                                <p>
                                    Prijzen: 1-50 gebruikers €140,00 per maand, 51-500 gebruikers €760,00 per maand
                                </p>
                                <p>
                                    Bel: +31 6 567788234 of e-mail : info@circlesolutions.com
                                </p>
                            </div>
                            <div class="package2">
                                <div class="package-title">
                                    <img src="images/knowledge.jpg" alt="picture for circle D.O.t.S."
                                        class="iconPlaceholder packageContent image-size-m">
                                    <h2>circle D.O.T.S.</h2>
                                </div>
                                <p>
                                    Interne communicatie:
                                    Houd iedereen op de hoogte door nieuws efficiënt te richten en te verspreiden, zorg
                                    voor
                                    afstemming
                                    op
                                    de organisatie
                                </p>
                                <p>
                                    Verbinden en betrekken:
                                    Stel teams in staat om met elkaar in contact te komen en samen te werken door
                                    Kanalen en Pagina's te maken voor projecten
                                    of
                                    interesses, wat vertrouwen en teamwork bevordert.
                                </p>
                                <p>

                                    Kennisbeheer:
                                    Centraliseer bronnen en informatie voor eenvoudige toegang, zodat u minder tijd
                                    kwijt bent aan zoeken
                                    en
                                    productiviteit verhogen.
                                </p>
                                <p>
                                    Prijzen: 1-50 gebruikers €140,00 per maand, 51-500 gebruikers €760,00 per maand
                                </p>
                                <p>
                                    Bel: +31 6 567788234 of e-mail : info@circlesolutions.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="AboutSec" id="AboutSec">
                <h1>Over ons</h1>
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
                            <p>hoofdontwikkelaar</p>
                        </div>
                    </div>
                    <div class="employee-card3">
                        <img src="images/Theresa.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>Theresa</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="employee-card4">
                        <img src="images/Sander.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>Sander</p>
                            <p>ontwikkelaar</p>
                        </div>
                    </div>
                    <div class="employee-card5">
                        <img src="images/Rene.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>René </p>
                            <p>specialist cloudoplossingen</p>
                        </div>
                    </div>
                    <div class="employee-card6">
                        <img src="images/John.png" alt="" class="employee-photo">
                        <div class="employee-info">
                            <p>John</p>
                            <p>ontwikkelaar en beveiligingsmedewerker</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section>

            <div class="ContactSec" id="ContactSec">
                <h2>Neem contact met ons op</h2>

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
                        echo "<p class='success'>Dank u, $name! Uw bericht is ontvangen. We nemen contact met u op $email straks.</p>";
                    } else {
                        echo "<p class='error'>Vul alle velden correct in.</p>";
                    }
                }
                ?>

                <form action="#ContactSec" method="POST">
                    <label for="name">Naam</label>
                    <input type="text" name="name" id="name" placeholder="Voer uw naam in" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Voer een geldig e-mailadres in" required>

                    <label for="message">Berichten</label>
                    <textarea name="message" id="message" placeholder="Voer uw bericht in" rows="5" required></textarea>

                    <button type="submit" name="submit">Verzenden</button>
                </form>
                <div class="ContactInfo">
                    <div class="socials">
                        <a href="https://www.facebook.com"><img src="images/facebook.png" class="image-size-s"
                                alt="facebook icon"></a>
                        <a href="https://www.instagram.com/"><img src="images/insta-icon.png" class="image-size-s"
                                alt="instagram icon"></a>
                    </div>
                    <h2>Vind ons op:</h2>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2413.4371501859314!2d6.910882176834876!3d52.778424972130026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7e61f3ec72443%3A0xbe9d297b3e4fbcc7!2sNHL%20Stenden%20Hogeschool!5e0!3m2!1snl!2snl!4v1729240238545!5m2!1snl!2snl"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
        </section>
        <footer>
            <div class="AboutSec"><small class="subtext3">
                    &copy; 2024 Circle Solutions. Alle rechten voorbehouden.</small>
            </div>
        </footer>
    </main>
</body>

</html>