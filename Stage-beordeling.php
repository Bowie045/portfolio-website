<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script type="text/javascript" src="main.js"></script>
</head>

<body id="Homepage">
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
            <li><a href="cv.php">Curriculum Vitae</a></li>
            <li><a href="projecten.php">Projecten</a></li>
            <li>
                <a href="#" class="serv-btn">Bestanden
                    <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="serv-show">
                    <li><a href="examenplan.php">Examenplan</a></li>
                    <li><a href="stage-uren.php">Uren formulier</a></li>
                    <li><a href="Stage-beordeling.php">Stagebeoordeling</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="Homepage">
        <div style="top: 40%" class="content">
            <h2 style="font-size: 3em;;">Stage beordeling</h2>
            <div><img src="images/stagebeordeling.png" alt="Stage beordeling" style="margin-top:5%; max-width:600px;">

            </div>
            <div>
            <a class="knop-stagebeordeling" href="beoordeling.pdf" target="_blank" class="knop-cv">Open in PDF</a>
        </div>
        </div>

        <?php include 'footer.php';?>
</body>

</html