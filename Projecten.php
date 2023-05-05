<!DOCTYPE html>
<html>

<head>
    <title>Projecten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script type="text/javascript" src="main.js"></script>
</head>

<body id="Projecten">
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
            <li class="active"><a href="projecten.php">Projecten</a></li>
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
    <div class="Projecten">
        <div class="left-col">
            <ul>
                <li style="margin-bottom:5%;"><a href="https://lichtwerkt.seolabtest.nl/" target="_blank" class="titleimg">Lichtwerkt Nederland</a></li>
                <a href="https://lichtwerkt.seolabtest.nl/" target="_blank"><img src="images/lichtwerktthumb.png" alt="Ik" loading="lazy"></a>
                <h3 style="margin-bottom:4%;">Skills</h3>
                <div class="block">
                    <li><i class="fa-brands fa-css3-alt fa-2xl" style="color:#2AA4F4;"></i>CSS</li>
                    <li><i class="fa-brands fa-square-js fa-2xl" style="color: #ffd43b;"></i>JS</li>
                    <li><i class="fa-brands fa-php fa-2xl" style="color: #dcd5f2;"></i>PHP</li>
                    <li><i class="fa-brands fa-wordpress fa-2xl" style="color: #676767;"></i>WP</li>
                </div>
            </ul>
        </div>

        <div class="left-col">
            <ul>
                <li style="margin-bottom:5%;"><a href="https://feadshipheritagefleet.seolabtest.nl/" target="_blank" class="titleimg">Feadship Heritage Fleet</a></li>
                <a href="https://feadshipheritagefleet.seolabtest.nl/" target="_blank"><img src="images/feadthumb.png" alt="Ik" loading="lazy"></a>
                <h3 style="margin-bottom:4%;">Skills</h3>
                <div class="block">
                    <li><i class="fa-brands fa-css3-alt fa-2xl" style="color:#2AA4F4;"></i>CSS</li>
                    <li><i class="fa-brands fa-square-js fa-2xl" style="color: #ffd43b;"></i>JS</li>
                    <li><i class="fa-brands fa-php fa-2xl" style="color: #dcd5f2;"></i>PHP</li>
                    <li><i class="fa-brands fa-wordpress fa-2xl" style="color: #676767;"></i>WP</li>
                </div>
            </ul>
        </div>

        <div class="left-col">
            <ul>
                <li style="margin-bottom:5%;"><a href="https://webike.seolabtest.nl/" target="_blank" class="titleimg">We Bike Amsterdam</a></li>
                <a href="https://webike.seolabtest.nl/" target="_blank"><img src="images/webikethumb.png" alt="Ik" loading="lazy"></a>
                <h3 style="margin-bottom:4%;">Skills</h3>
                <div class="block">
                    <li><i class="fa-brands fa-css3-alt fa-2xl" style="color:#2AA4F4;"></i>CSS</li>
                    <li><i class="fa-brands fa-square-js fa-2xl" style="color: #ffd43b;"></i>JS</li>
                    <li><i class="fa-brands fa-php fa-2xl" style="color: #dcd5f2;"></i>PHP</li>
                    <li><i class="fa-brands fa-wordpress fa-2xl" style="color: #676767;"></i>WP</li>
                </div>
                </div>
            </ul>
        </div>
        <?php include 'footer.php';?>
</body>

</html>