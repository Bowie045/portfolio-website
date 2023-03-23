<!DOCTYPE html>
<html>

<head>
   <title>Home</title>
   <link rel="stylesheet" href="style.css">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
         <li class="active"><a href="index.php">Home</a></li>
         <li><a href="over-mij.php">Over mij</a></li>
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
   <div class="Homepage">
      <div class="content">
         <h2>Welkom op de portfolio website van Bowie Korff </h2>
         <p>Hier kun je mijn werk en vaardigheden bekijken en meer te weten komen over mij.</p>
         <img src="Regio collegethumb.png" alt="Ik" style="margin-top:10%;">

      </div>
   </div>
   <?php include 'footer.php';?>
</body>

</html>