<?php
// include 'config/config.php';
// include 'config/connectie.php';
// $clicked = "bla";
?>

<?php 
    include 'views/head.php';
    // include 'views/readmore.php'; 
    include 'views/nav.php'; 
    include 'views/header.php'; 
    include 'views/about.php'; 
    include 'views/work3.php'; 
    include 'views/work_overlay.php'; 
    include 'views/skils.php';
    include 'views/contact.php';
    include 'views/footer.php';
?>




    
    <!-- /.container -->

    <!-- jQuery -->
    
</body>

</html>
<script src="bla/js/index.js"></script>
<script type="text/javascript">
    $.fn.isVisible = function() {
    var rect = this[0].getBoundingClientRect();
    return (
        (rect.height > 0 || rect.width > 0) &&
        rect.bottom >= 0 &&
        rect.right >= 0 &&
        rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.left <= (window.innerWidth || document.documentElement.clientWidth)
    );
};

</script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('.modal-trig').on('click', function(){
        var modal = $(this).data('target');
       $(modal).modal('show');
    })
})
var contact_visit = false;
setInterval(function(){ 
    // if ($('#work').isVisible()) {
    // open3();
    // };
    if ($('#info_name').isVisible()) {
    openAnimation();
    };
    if ($('#contact').isVisible()) {
        if (contact_visit != true) {
            animation_contact();
            contact_visit = true;
        }
    };

}, 100);



function animation_contact(){
        
        TweenMax.to(title_contact,  0,       {y:50, opacity:0});
        TweenMax.to(phone,    0,       {y:50, opacity:0});
        TweenMax.to(email,     0,       {y:50, opacity:0});
        TweenMax.to(adress,    0,       {y:50, opacity:0});


        TweenMax.to(title_contact,    1 ,      {delay:.5,y:0, opacity:1});
            
        TweenMax.to(phone,    1 ,      {delay:1,y:0, opacity:1});
        TweenMax.to(email,    1 ,      {delay:1.3,y:0, opacity:1});
        TweenMax.to(adress,    1 ,      {delay:1.6,y:0, opacity:1});
        
        // TweenMax.to(title_contact,    0.1 ,      {_alpha:20});


}
function open3(){

        var sla = document.querySelector(".portofolio_items");
        sla.style.animationDuration = "3s";
        sla.style.animationName= "show5";

        var sla = document.querySelector(".portofolio_items2");
        sla.style.animationDuration = "3s";
        sla.style.animationName= "show5";

        var sla = document.querySelector(".portofolio_items3");
        sla.style.animationDuration = "3s";
        sla.style.animationName= "show5";
                var sla = document.querySelector(".portofolio_items4");
        sla.style.animationDuration = "3s";
        sla.style.animationName= "show5";
        //         var sla = document.querySelector(".portofolio_items5");
        // sla.style.animationDuration = "3s";
        // sla.style.animationName= "show5";
        //         var sla = document.querySelector(".portofolio_items6");
        // sla.style.animationDuration = "3s";
        // sla.style.animationName= "show5";


}
// $('#skillButton').visible();

function openAnimation() {
        
        var sla = document.querySelector("#skillInfo");
        sla.style.animationDuration = "3s";
        sla.style.animationName= "show3";
        // setTimeout(function(){ slidertextHtml.style.visibility= "hidden"; }, 2990);

        var slidertextHtml = document.querySelector(".backSkillbar");
        slidertextHtml.style.animationDuration = "3s";
        slidertextHtml.style.animationName= "hide";
        setTimeout(function(){ slidertextHtml.style.visibility= "hidden"; }, 2990);

    setTimeout(function(){ 
    // skilbar html animatie
        var html = document.querySelector(".skillHtml");
        html.style.animationDuration = "4s";
        html.style.animationName= "skillbarHtml";
        html.style.visibility= "visible";
    }, 0);    
    // skilbar css animatie
    var slidertextCss = document.querySelector(".backSkillbarCss");
    slidertextCss.style.animationDuration = "3s";
    slidertextCss.style.animationName= "hide";
    setTimeout(function(){ slidertextCss.style.visibility= "hidden"; }, 2990);

    setTimeout(function(){ 
    var css = document.querySelector(".skillCss");
    css.style.animationDuration = "4s";
    css.style.animationName= "skillbarCss";
    css.style.visibility= "visible";
    }, 500);    

    // skilbar javascript animatie
    var slidertextJava = document.querySelector(".backSkillbarJava");
    slidertextJava.style.animationDuration = "3s";
    slidertextJava.style.animationName= "hide";
    setTimeout(function(){ slidertextJava.style.visibility= "hidden"; }, 2990);

    setTimeout(function(){ 
    var javascript = document.querySelector(".skillJava");
    javascript.style.animationDuration = "4s";
    javascript.style.animationName= "skillbarJava";
    javascript.style.visibility= "visible";
    }, 1000);    
        // skilbar php animatie
    var slidertextPhp = document.querySelector(".backSkillbarPhp");
    slidertextPhp.style.animationDuration = "3s";
    slidertextPhp.style.animationName= "hide";
    setTimeout(function(){ slidertextPhp.style.visibility= "hidden"; }, 2990);

    setTimeout(function(){ 
    var php = document.querySelector(".skillPhp");
    php.style.animationDuration = "4s";
    php.style.animationName= "skillbarPhp";
    php.style.visibility= "visible";
    }, 1500);    
    // skillbar sql animatie
    var slidertextSql = document.querySelector(".backSkillbarSql");
    slidertextSql.style.animationDuration = "3s";
    slidertextSql.style.animationName= "hide";
    setTimeout(function(){ slidertextSql.style.visibility= "hidden"; }, 2990);

    setTimeout(function(){ 
    var sql = document.querySelector(".skillSql");
    sql.style.animationDuration = "4s";
    sql.style.animationName= "skillbarSql";
    sql.style.visibility= "visible";
    }, 2000);    
    // skillbar ajax animatie
    var slidertextAjax = document.querySelector(".backSkillbarAjax");
    slidertextAjax.style.animationDuration = "3s";
    slidertextAjax.style.animationName= "hide";
    setTimeout(function(){ slidertextAjax.style.visibility= "hidden"; }, 2990);

    setTimeout(function(){ 
    var ajax = document.querySelector(".skillAjax");
    ajax.style.animationDuration = "4s";
    ajax.style.animationName= "skillbarAjax";
    ajax.style.visibility= "visible";
    }, 2500);    



}

 

 




    // body...

// document.getElementById('body').onCLick();

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87937805-1', 'auto');
  ga('send', 'pageview');

</script>