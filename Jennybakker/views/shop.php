<!-- <div class="filterbar mb2 mt2">

  <button class="btn fil-cat" href="" data-rel="all">All</a>
  <button class="btn fil-cat" data-rel="sier">Sieraden</a>

  <button class="btn fil-cat" data-rel="anskaart">Ansichtkaarten</a>
  <button class="btn fil-cat" data-rel="illus">Illustraties</a>
  <button class="btn fil-cat" data-rel="boeken">Boeken</a>
</div>  -->
 <div class="container">
  <div class="filterbar mb2 mt2">
  <ul>
      <li><a class="btn fil-cat" data-rel="books">boeken</a></li>
      <li><a class="btn fil-cat" data-rel="cards">kaarten</a></li>
      <li><a class="btn fil-cat" data-rel="jewelry">sieraden</a></li>
      <li><a class="btn fil-cat" data-rel="lifestyle">lifestyle</a></li>
      <li><a class="btn fil-cat" data-rel="cadeaus">cadeaus</a></li>
      <li><a class="btn fil-cat" data-rel="workshops">workshops</a></li>
  </ul>
</div>

<!-- <div style="clear:both;"></div>    -->
<div class="shop-in" id="shop-in">
<?php include 'model/getAmbience.php';
include 'model/getProduct.php'; ?>
 <div class="hometile scale-anm all home">

    <a href="Productpage.php?id=5">
    <img src="img/webwinkelshop.jpg"></a>

</div>

</div>



<div style="clear:both;"></div>   

<script>
$('.filterbar a').on('click', function(){
    $('.filterbar a').removeClass('selected');
    $(this).addClass('selected');
});
</script>
