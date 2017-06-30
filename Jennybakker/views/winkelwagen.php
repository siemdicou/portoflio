<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

<script src="sweetalert-master/dist/sweetalert.min.js"></script>


<div class="container padding-top">
    <div class="col-md-7">
    <div id="userProducts"></div>
    </div>
    <div class="col-md-5">

    <form method="POST" action="webshop/index.php">
<div class="wrap">
  <div class="mat-div">
    <label for="first-name" class="mat-label">Voornaam</label>
    <input type="text" name="name" class="mat-input" id="first-name" required>
  </div>  
    <div class="mat-div">
    <label for="first-name" class="mat-label">Achternaam</label>
    <input type="text" name="lastname" class="mat-input" id="last-name" required>
  </div>

    <div class="mat-div">
    <label for="email" class="mat-label">E-mail</label>
    <input type="email" name="email" class="mat-input" id="email" required>
  </div>

    <div class="mat-div">
    <label for="tel" class="mat-label">Mobiele nummer</label>
    <input type="tel" class="mat-input" name="mobile" id="email" required>
  </div>

    <div class="mat-div">
    <label for="street" class="mat-label">Straat</label>
    <input type="text" name="street" class="mat-input" id="street" required>
  </div>

    <div class="mat-div">
    <label for="street" class="mat-label">Huisnummer</label>
    <input type="number" name="number" class="mat-input" id="street" required>
  </div>

      <div class="mat-div">
    <label for="add" class="mat-label">aanvullende info</label>
    <input type="text" name="add" class="mat-input" id="add" required>
  </div>

        <div class="mat-div">
    <label for="zip" class="mat-label">Postcode</label>
    <input type="text" name="zip" class="mat-input" id="zip" required>
  </div>

  <input type="hidden" name="price" id="total" value="">

  <label class="mat-label">Prijs</label>
  <br>
  <div id="cashtotal"> </div>

    <!-- <input type="submit" name=""> -->
    <button>Submit</button>
</div>
    </form>

    </div>
</div>


<!--aangeven hoeveel er nog beschibaar zijn -->
<!-- komt het lijstje van producten in $user-id mantje -->


<!-- 
<br><br>
<br><br>
<br><br> -->




<!-- <button onclick="whywouldyoudothis()">sadsad</button> -->
<script type="text/javascript">

window.addEventListener("load", getItems);

  function delCart(delClicked){
// console.log(delClicked);

     var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(xhttp.responseText);
                getItems();
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
                xhttp.open("GET", "model/deleteCart.php?delClicked=" + delClicked, true);
                xhttp.send();  
              swal("Deleted!", "Your imaginary file has been deleted.", "success");
            });
}

function getItems() {
// console.log("test3");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("userProducts").innerHTML = xhttp.responseText;
                var cashHtml = document.getElementById('cash').innerHTML;
                // console.log(cashHtml);
                document.getElementById('cashtotal').innerHTML = cashHtml;
                document.getElementById('total').value = cashHtml;
            }
        };
        xhttp.open("GET", "model/getShoppingcart.php", true);
        xhttp.send();
    // var clicked = document.getElementById("").click
};
// var hi = document.getElementById("hi");
// hi.addEventListener("click", delCart);


</script>
