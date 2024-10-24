<?php
if($_GET['style'] == 'stylesDark.css'){
    $style = 'stylesDark.css';
    $style2 = 'styles.css';
}
 
 else{
    $style = 'styles.css';
    $style2 = 'stylesDark.css';
 }
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $style ?>">
    <title>Circle Solutions | Home</title>
</head>

<body>
    <header>
        <?php
        $lang = "nl";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $lang = filter_input(INPUT_POST, "language");

        }
        ?>

        <img src="images/circle solutions_logo_02.png" alt="Circle Solutions logo in zwart" id="logo1">
        <div id="navBar" class="hidden">
       
            <ul>
                <li><a href="?style=<?php echo $style2 ?>">Light/Dark mode</a></li>
                <li><a href="#HomeSec">Home</a></li>
                <li><a href="#ServiceSec">Diensten</a></li>
                <li><a href="#AboutSec">Over Ons</a></li>
                <li><a href="#ContactSec">Contact</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="HomeSec" id="HomeSec">
            <section>
                <div class="opening">
                <div class="container">
                            <div class="button-container">
                                <a href="index.php?style=styles.css">
                                    <button class="dot-button" id="btn1">English</button>
                                </a>
                                <a href="nederlands.php?style=styles.css">
                                    <button class="dot-button" id="btn2">Dutch</button>
                                </a>
                                <a href="deutsch.php?style=styles.css">
                                    <button class="dot-button" id="btn3">German</button>
                                </a>
                            </div>
                        </div>
                    <h1>verbind gewoon de stippen</h1>
                    <p>om softwareoplossingen te ontwikkelen die perfect passen.</p>
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
                                    <p>Wij voorzien een wereld waarin het gebruik van software net zo eenvoudig en
                                        natuurlijk is als ademen.</p>
                                    <p>Ons doel is om software te ontwikkelen die past bij de individuele kwaliteiten
                                        van
                                        individuele behoeften.</p>
                                    <p>Om mensen en bedrijven te versterken met softwareoplossingen.</p>
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
                                    <img src="images/why.png" alt="waarom">
                                    <p>Wij denken dat dagelijkse taken geen gedoe zouden moeten zijn.</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/how.png" alt="hoe">
                                    <p>Door software te ontwikkelen die het leven makkelijker maakt</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="info-card">
                                    <img src="images/what.png" alt="wat">
                                    <p>Softwareoplossingen die passen bij de individuele campagnes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="basic-info3">
                <div class="subtext3">
                    <h2>nuchter</h2>
                    <p>We houden van eenvoud. <br> Geen grootse gebaren, geen theater of utopieën beloven.</p>
                    <h2>gebruikersvriendelijk</h2>
                    <p>Met onze oplossing bouwen we bruggen tussen gebruikers en systemen.</p>
                    <h2>kwaliteitsgericht</h2>
                    <p>Onze professionaliteit volgt geen hypes: het volgt kwaliteit. <br>We geloven in steeds beter
                        worden en streven naar het beste.</p>
                </div>

                <img src="images/reminder.png" alt="Vrouw die notities maakt" class="image4">

            </div>



        </div>

        <div class="ServiceSec" id="ServiceSec">
            <h1>Diensten</h1>
            <div class="packages">
                <div class="package1">

                    <img src="images/documentMan.jpg" class="iconPlaceholder packageContent">
                    <h2>circle workspace</h2>
                    <p>
                        Appbeheer:
                        Creëer snel een op rollen gebaseerde werkplek die alle huidige en toekomstige technologieën
                        integreert.
                    </p>
                    <p>
                        Communicatie & Informatie:
                        Bekijk ongelezen e-mails, afspraken, nieuws en meer in één oogopslag in Circle Workspace.
                    </p>
                    <p>
                        Documentbeheer:
                        Centraliseer documenten van Office 365, OneDrive, SharePoint en meer voor gemakkelijke online of
                        offline toegang.
                    </p>
                </div>
                <div class="package2">

                    <img src="images/knowledge.jpg" class="iconPlaceholder packageContent">
                    <h2>circle D.O.T.S.</h2>
                    <p>
                        Interne Communicatie:
                        Houd iedereen op de hoogte door efficiënt nieuws te verspreiden en ervoor te zorgen dat de
                        organisatie op één lijn zit.
                    </p>
                    <p>
                        Verbinden en Betrokkenheid:
                        Teams in staat stellen om verbinding te maken en samen te werken door Kanalen en Pagina's te
                        creëren voor projecten of interesses, wat vertrouwen en samenwerking bevordert.
                    </p>
                    <p>
                        Kennisbeheer:
                        Centraliseer bronnen en informatie voor gemakkelijke toegang, waardoor tijd wordt bespaard bij
                        het zoeken en de productiviteit wordt verhoogd.
                    </p>

                </div>
            </div>
        </div>

        <div class="AboutSec" id="AboutSec">
            <h1>Over Ons</h1>
            <p>Wij zijn beepboop beep boop</p>
            <div class="employee-cards">
                <div class="employee-card1">
                    <div class="employee-photo"></div>
                    <div class="employee-info">
                        <p>Werknemer #1</p>
                        <p>Freelancer</p>
                    </div>
                </div>
                <div class="employee-card2">
                    <div class="employee-photo"></div>
                    <div class="employee-info">
                        <p>Werknemer #2</p>
                        <p>Freelancer</p>
                    </div>
                </div>
                <div class="employee-card3">
                    <div class="employee-photo"></div>
                    <div class="employee-info">
                        <p>Werknemer #3</p>
                        <p>Freelancer</p>
                    </div>
                </div>
                <div class="employee-card4">
                    <div class="employee-photo"></div>
                    <div class="employee-info">
                        <p>Werknemer #4</p>
                        <p>Freelancer</p>
                    </div>
                </div>
                <div class="employee-card5">
                    <div class="employee-photo"></div>
                    <div class="employee-info">
                        <p>Werknemer #5</p>
                        <p>Freelancer</p>
                    </div>
                </div>
                <div class="employee-card6">
                    <div class="employee-photo"></div>
                    <div class="employee-info">
                        <p>Werknemer #6</p>
                        <p>Freelancer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ContactSec" id="ContactSec">
            <h2>Contacteer Ons</h2>

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
                    echo "<p class='success'>Dank je wel, $name! Je bericht is ontvangen. We nemen binnenkort contact met je op via $email.</p>";
                } else {
                    echo "<p class='error'>Vul alle velden correct in, alstublieft.</p>";
                }
            }
            ?>

            <form action="#ContactSec" method="POST">
                <input type="text" name="name" placeholder="Vul je naam in" required>
                <input type="email" name="email" placeholder="Vul een geldig e-mailadres in" required>
                <textarea name="message" placeholder="Voer je bericht in" rows="5" required></textarea>
                <button type="submit" name="submit">Verzenden</button>
            </form>
            <div class="ContactInfo">
                <div class="socials">
                    <a href="https://www.facebook.com"><img src="images/facebook.png" class="image-size-s"
                            alt="facebook icoon"></a>
                    <a href="https://www.instagram.com/"><img src="images/insta-icon.png" class="image-size-s"
                            alt="instagram icoon"></a>
                </div>
                <h2>Vind ons op:</h2>
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