<?php
include 'config/config.php';
include 'config/connectie.php';
$clicked = "bla";
?>

<?php 
    include 'views/head.php';
    include 'views/readmore.php'; 
    include 'views/nav.php'; 
    include 'views/header.php'; 
    include 'views/about.php'; 
    include 'views/work.php'; 
    include 'views/skils.php';
    // include 'views/contact.php';
    include 'views/footer.php';

?>




    
    <!-- /.container -->

    <!-- jQuery -->
    
</body>

</html>
<script src="js/index.js"></script>
<script type="text/javascript">


function openAnimation() {
    
    var slidertextHtml = document.querySelector(".backSkillbar");
    slidertextHtml.style.animationDuration = "3s";
    slidertextHtml.style.animationName= "hide";
    setTimeout(function(){ slidertextHtml.style.visibility= "hidden"; }, 2990);

    
    // skilbar html animatie
    var html = document.querySelector(".skillHtml");
    html.style.animationDuration = "4s";
    html.style.animationName= "skillbarHtml";
    html.style.visibility= "visible";

    // skilbar css animatie
    var slidertextCss = document.querySelector(".backSkillbarCss");
    slidertextCss.style.animationDuration = "3s";
    slidertextCss.style.animationName= "hide";
    setTimeout(function(){ slidertextCss.style.visibility= "hidden"; }, 2990);


    var css = document.querySelector(".skillCss");
    css.style.animationDuration = "4s";
    css.style.animationName= "skillbarCss";
    css.style.visibility= "visible";

    // skilbar javascript animatie
    var slidertextJava = document.querySelector(".backSkillbarJava");
    slidertextJava.style.animationDuration = "3s";
    slidertextJava.style.animationName= "hide";
    setTimeout(function(){ slidertextJava.style.visibility= "hidden"; }, 2990);


    var javascript = document.querySelector(".skillJava");
    javascript.style.animationDuration = "4s";
    javascript.style.animationName= "skillbarJava";
    javascript.style.visibility= "visible";

        // skilbar php animatie
    var slidertextPhp = document.querySelector(".backSkillbarPhp");
    slidertextPhp.style.animationDuration = "3s";
    slidertextPhp.style.animationName= "hide";
    setTimeout(function(){ slidertextPhp.style.visibility= "hidden"; }, 2990);

    var php = document.querySelector(".skillPhp");
    php.style.animationDuration = "4s";
    php.style.animationName= "skillbarPhp";
    php.style.visibility= "visible";

    // skillbar sql animatie
    var slidertextSql = document.querySelector(".backSkillbarSql");
    slidertextSql.style.animationDuration = "3s";
    slidertextSql.style.animationName= "hide";
    setTimeout(function(){ slidertextSql.style.visibility= "hidden"; }, 2990);

    var sql = document.querySelector(".skillSql");
    sql.style.animationDuration = "4s";
    sql.style.animationName= "skillbarSql";
    sql.style.visibility= "visible";

    // skillbar ajax animatie
    var slidertextAjax = document.querySelector(".backSkillbarAjax");
    slidertextAjax.style.animationDuration = "3s";
    slidertextAjax.style.animationName= "hide";
    setTimeout(function(){ slidertextAjax.style.visibility= "hidden"; }, 2990);

    var ajax = document.querySelector(".skillAjax");
    ajax.style.animationDuration = "4s";
    ajax.style.animationName= "skillbarAjax";
    ajax.style.visibility= "visible";




}

 

 




    // body...

setInterval(function () { 
    if(document.URL.indexOf("info1") != -1) {
        // document.querySelector(".more-info1").style.visibility= "visible";
        $(".more-info1").fadeIn();
        // window.alert("hi");
    }
    else{
        // document.querySelector(".more-info1").style.visibility= "hidden";
        $(".more-info1").fadeOut();
    }
    if(document.URL.indexOf("info2") != -1) {
    $(".more-info2").fadeIn();
        // window.alert("hi");
    }
    else{
        // document.querySelector(".more-info1").style.visibility= "hidden";
        $(".more-info2").fadeOut();
    }
    if(document.URL.indexOf("info3") != -1) {
            $(".more-info3").fadeIn();
        // window.alert("hi");
        }
     else{
        // document.querySelector(".more-info1").style.visibility= "hidden";
        $(".more-info3").fadeOut();
    }
 }, 1);

// document.getElementById('body').onCLick();

</script>
