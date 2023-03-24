<!DOCTYPE html>
<html>

<head>
    <title>Over mij</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
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
                    <li><a href="examenplan.php">Examenplan</a></li>
                    <li><a href="#">Uren formulier</a></li>
                    <li><a href="#">Stagebeoordeling</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="Over-mij">
        <div>
            <div class="img-hover-zoom img-hover-zoom--brightness">
                <img src="Bowie.png" alt="Ik" class="img-overmij">
            </div>
        </div>
        <div class="title-overmij">
            <h1>Over mij</h1>
        </div>
        <div class="rechter-blokje">
            <p id="typed-text"></p>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>

</html>