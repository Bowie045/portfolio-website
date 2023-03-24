$(document).ready(function() {
   $('.btn').click(function () {
       $(this).toggleClass("click");
       jQuery('.sidebar').toggleClass("show");
   });
   $('.feat-btn').click(function () {
       $('nav ul .feat-show').toggleClass("show");
       $('nav ul .first').toggleClass("rotate");
   });
   $('.serv-btn').click(function () {
       $('nav ul .serv-show').toggleClass("show1");
       $('nav ul .second').toggleClass("rotate");
   });
   $('nav ul li').click(function () {
       $(this).addClass("active").siblings().removeClass("active");
   });
});

$(document).ready(function() {
   var typed = new Typed('#typed-text', {
     strings: ['Hallo, Mijn naam is Bowie Korff en ben 18 jaar oud. Ik loop stage bij SEOLab. Bij SEOLab ben ik vooral bezig met feedback verwerken op de website van de klanten en zelf website\'s maken voor de klanten. Ik gebruik hiervoor CSS, PHP, HTML, (klein beetje javascript) en Wordpress.'],
     typeSpeed: 30
   });
 });