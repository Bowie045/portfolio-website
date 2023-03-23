<!DOCTYPE html>
<html>

<head>
    <title>Over mij</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script type="text/javascript" src="main.js"></script>
</head>

<body id="Over-mij">
    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">
            Menu
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="over-mij.php">Over mij</a></li>
            <li><a href="cv.php">Curriculum Vitae</a></li>
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
    <div class="Over-mij">
        <div class="Linker-blokje">
            <div class="img-hover-zoom img-hover-zoom--brightness">
                <img src="test.jpg" alt="Ik" style="width:500px;height:700px;margin-top:10%;">
            </div>
        </div>

        <div class="rechter-blokje">
            <h1 style="margin-bottom: 10px;">Over mij</h1>
            <h3>Hallo, Mijn naam is Bowie Korff en ben 18 jaar oud. Ik loop stage bij SEOLab. Bij SEOLab ben ik vooral
                bezig met feedback verwerken op de website van de klanten en zelf website's maken voor de klanten. Ik
                gebruik hiervoor CSS,PHP,HTML,(klein beetje javascript) en Wordpress. </h3>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>

</html>