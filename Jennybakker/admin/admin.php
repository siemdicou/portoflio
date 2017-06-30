<?php
 
 if (isset($_SESSION['login_user'])) {

$action = (empty($_GET['action'])) ? '' : $_GET['action'];

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

<script src="sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="views/bootstrap-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="views/css/main.css">

</head>
<body>
<div class="container contadmin">
<div class="row">




<?php

switch ($action){
case 'sfeer': 

?>
 <h1><a href="index.php?page=admin"><i class="fa fa-backward" aria-hidden="true"></i></a>  Sfeerfoto's</h1>
<div class="col-md-12">
    <div class="col-md-4">
        <div class="sfeerList" id="sfeerList">
            hier komt een lijstje met sfeerfoto's
        </div>
    </div>
    <div class="col-md-8" id="edit">
        <div id="sfeerhi"></div> 
    </div>
</div>    
<?php
break;
case 'producten': ?>

 <h1><a href="index.php?page=admin"><i class="fa fa-backward" aria-hidden="true"></i></a>  Producten </h1>
    <div onclick="makeNew()">nieuw Product toevoegen</div>
        <div class="col-md-12">
                    <div class="col-md-4">
        <div class="productList" id="productList">
            hier komt een lijstje met alle producten
            <div id="hi2"></div>
        </div>  
    </div>
        <div class="col-md-8" id="add">
        <h3>Product toevoegen</h3>
        <form action="model/addproduct.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="title" name="title"  required>
        <input type="text" placeholder="content" name="content" required>       
        <input type="number" placeholder="amount" name="amount" required>
        <input type="text" placeholder="category" name="category" required>
        <input type="text" placeholder="price" name="price" required>
        <input type="text" placeholder="size" name="size" required>
<br><br>
        <p>Multiple image upload</p>
        <input type="file" name="files[]" multiple="multiple" accept="image/*">
        <br><br>
        <p>single image upload</p>
        <input type="file" name="filess[]" accept="image/*">
        <br>
        <br>
        <input type="button" name="annuleren" value="annuleren" onclick="makeNew()">
        <input type="submit" name="toevoegen" value="Toevoegen">
        </form>
    </div>

       <div class="col-md-8" id="edit">
<div id="hi"></div>
    </div>
    
<?php
break;


default:
echo '
<div class= "col-md-4" style="margin:120px 0px 400px 0px;">
<a href="index.php?page=admin&action=sfeer">sfeer foto aanpassen</a>
</div>
';
echo '
<div class= "col-md-4" style="margin:120px 0px 400px 0px;">
<a href="index.php?page=admin&action=producten">producten aanpassen</a>
</div>
';
break;
		}?>

</div>

</div>



<script type="text/javascript">
$(document).ready(function () {//1
    productList();
    sfeerList();
    getsfeerData(1);
    if(window.location.href.indexOf("update") > -1) {//2
      swal({ //3
    				title: "Uw product is geupdate!",
    				html: true,
                    showConfirmButton: false,
    				timer:1250
				});//3
    }//2

    if(window.location.href.indexOf("new") > -1) {
				swal({ 
    				title: "U heeft een product toegevoegd",
    				html: true,
                    showConfirmButton: false,
    				timer:1250

				});
    };
    if(window.location.href.indexOf("first") > -1) {
				swal({ 
    				title: "Welkom <?php echo $_SESSION['login_user']?>!",
    				html: true,
                    showConfirmButton: false,
    				timer:1250
				});
	};
});//1


function deleteProduct(productid){
    console.log(productid);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                  // console.log(productid + "het heeft gevist");
                  productList();
            }
        };



                swal({
                  title: "Are you sure?",
                  text: "You will not be able to recover this imaginary file!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonDisplay: 'inline',
                  confirmButtonText: "Yes, delete it!",
                  closeOnConfirm: false
                },
            function(){
                xhttp.open("GET", "model/delete.php?id=" + productid, true);
                xhttp.send();  
              swal("Deleted!", "Your imaginary file has been deleted.", "success");
            });
      
    // var clicked = document.getElementById("").click
};

function productList() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("productList").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "model/getProduct_names.php", true);
        xhttp.send();

};

function sfeerList() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("sfeerList").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "model/getSfeer.php", true);
        xhttp.send();
};


// 	function clickevent(clicked) {
// 	getData(clicked);
// }
function makeNew() {
			$("#edit").fadeOut(500);
            setTimeout(function(){$("#add").fadeIn(500);}, 500);
}
     function getData(clicked) {
     	 var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
            	$("#add").fadeOut(500);
            	$("#edit").fadeOut(500);
//            	$("#add").style.display = inline;
                setTimeout(function(){$("#edit").fadeIn(500);}, 500);
                var hi = document.getElementById("hi");
                hi.innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "model/getProduct_content.php?clicked=" + clicked, true);
        xhttp.send();
     }
        function getsfeerData(clicked) {

                
         var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // $("#add").fadeOut(100);
                $("#edit").fadeOut(100);
//              $("#add").style.display = inline;
            setTimeout(function(){$("#edit").fadeIn(500);}, 500);
            var hi = document.getElementById("sfeerhi");
            hi.innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "model/getSfeer_content.php?clicked=" + clicked, true);
        xhttp.send();
    }



</script>

<?php  
}else{
   		header("Location: index.php?page=admin");
	} ?>




