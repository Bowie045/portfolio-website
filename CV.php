<!DOCTYPE html>
<html>

<head>
    <title>CV</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script type="text/javascript" src="main.js"></script>
    <?php include 'footer.php';?>
</head>


<body id="CV">
    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">
            Menu
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="over-mij.php">Over mij</a></li>
            <li class="active"><a href="cv.php">Curriculum Vitae</a></li>
            <li><a href="projecten.php">Projecten</a></li>
            <li>
                <a href="#" class="serv-btn">Bestanden
                    <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="serv-show">
                    <li><a href="#">Examenplan</a></li>
                    <li><a href="#">Uren formulier</a></li>
                    <li><a href="#">Stagebeoordeling</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="cv-container">
        <div class="cv-header">
            <a href="Over-mij.php"><img style="float: left; margin: 0px 0px 15px 15px;" href="Over-mij"
                    src="CV-plaatje.jpg" width="125" height="125"></a>
        </div>
        <div class="cv-header">
            <h2>Bowie Korff</h2>
        </div>
        <div class="cv-body">
            <div class="cv-section">
                <div class="cv-section-header">
                    <h3>Opleiding</h3>
                </div>
                <div class="cv-section-body">
                    <div class="cv-item">
                        <h4>Opleiding, ICT Regio College in Zaandam.</h4>
                        <p>2020 - heden</p>
                        <p>Software developer, mbo niveau 4, diploma verwacht in 2023.<br> Vakken: Communicatie, Engels,
                            Python, Rekenen en PHP</br></p>
                    </div>
                    <div class="cv-item">
                        <h4>Vmbo-T over-Y College in Amsterdam.</h4>
                        <p>2016 - 2020</p>
                        <p>Diploma gehaald.</p>
                    </div>
                </div>
            </div>
            <div class="cv-section">
                <div class="cv-section-header">
                    <h3>Werkervaring</h3>
                </div>
                <div class="cv-section-body">
                    <div class="cv-item">
                        <h4>Project ICT Regio College.</h4>
                        <p>3 november 2020 - 19 januari 2021</p>
                        <p>Ik heb met 3 klasgenoten een opdracht gekregen om een website te maken. In deze opdracht
                            moesten we ook gebruik maken van een Python code. Deze Python code zorgt ervoor dat de
                            gegevens opgeslagen worden in een logboek.</p>
                    </div>
                    <div class="cv-item">
                        <h4>Stage Holy Smartphone.</h4>
                        <p>23 augustus 2021 - 28 januari 2022</p>
                        <p>Werkzaamheden repareren smartphones en tablets, scherm vervangen smartphones en tablets,
                            reparaties PlayStation en controllers, spiegelen en aanvullen van hoesjes voor smartphones
                            en tablets. Telefonisch contact met klanten.</p>
                    </div>
                    <div class="cv-item">
                        <h4>Albert Hein Oostzaan.</h4>
                        <p>16 februari 2022 - heden</p>
                        <p>Tijdens mijn werk in de AH ben ik aan het vakkenvullen en soms moet ik kassa zitten.</p>
                    </div>
                    <div class="cv-item">
                        <h4>Stage SEOLab</h4>
                        <p>02 januari 2023 - heden</p>
                        <p>Wordpress website's van klanten verbeteren naar wens klant.</p>
                    </div>
                </div>
            </div>
            <div class="cv-section">
                <div class="cv-section-header">
                    <h3>Contact</h3>
                </div>
                <div class="cv-section-body">
                    <div class="cv-item">
                        <h4>Telefoon</h4>
                        <p><a href="tel:0636461299">06-36461299</a></p>
                    </div>
                    <div class="cv-email">
                        <h4>E-mail</h4>
                        <p><a href="mailto:B.korff@ziggo.nl">B.korff@ziggo.nl</a></p>
                        <p><a href="mailto:BowieKorff@gmail.com">BowieKorff@gmail.com</a></p>
                        <a class="knop-cv" href="Curricium-Vitea.pdf" target="_blank" class="knop-cv">Open in PDF</a>
                    </div>
                </div>
            </div>
        </div>
  </div>
</body>
</html>