<?php require 'work_modals.html'; ?>
<div class="work" id="work">
<h1 id="title_work">Portfolio</h1>
	<div class="row workContainer workContainer1">
		<div class="col-md-3">
			<article class="caption">
        	<img class="caption__media" src="img/digitalmap3.png" />
        	<div class="caption__overlay">
            	<h1 class="caption__overlay__title">MapApp</h1>
            	<p class="caption__overlay__content">
                    <button type="button" class="btn btn-primary modal-trig read_more" data-target=".bs-example-modal-lg2">Read More</button>
            	</p>
        	</div>
    		</article>
    	</div>





		<div class="col-md-3">
			<article class="caption">
        	<img class="caption__media" src="img/daley.png" />
        	<div class="caption__overlay">
            	<h1 class="caption__overlay__title">Daley</h1>
                <p class="caption__overlay__content">
                    <button type="button" class="btn btn-primary read_more modal-trig" data-target=".bs-example-modal-lg3">Read More</button>
                </p>
        	</div>
    		</article>
    	</div>



		<div class="col-md-3">
			<article class="caption">
        	<img class="caption__media" src="img/acme.png" />
        	<div class="caption__overlay">
            	<h1 class="caption__overlay__title">ACME</h1>
            	<p class="caption__overlay__content">
                <button type="button" class="btn btn-primary read_more modal-trig " data-target=".bs-example-modal-lg4">Read More</button>
            	</p>
        	</div>
    		</article>
    	</div>



<!-- http://18363.hosts.ma-cloud.nl/acme/index.php -->
		<div class="col-md-3">
			<article class="caption">
        	<img class="caption__media" src="img/rvk.png" />
        	<div class="caption__overlay">
            	<h1 class="caption__overlay__title">RVK Hoorn</h1>
            	<p class="caption__overlay__content">
                <button type="button" class="btn btn-primary read_more modal-trig" data-target=".bs-example-modal-lg5">Read More</button>
            	</p>
        	</div>
    		</article>
    	</div>
	</div>
    <div class="row workContainer workContainer1">
    
        <div class="col-md-3">
            <article class="caption">
            <img class="caption__media" src="img/menno.png" />
            <div class="caption__overlay">
                <h1 class="caption__overlay__title">MSF Wormerveer</h1>
                <p class="caption__overlay__content">
                    <button type="button" class="btn btn-primary modal-trig read_more" data-target=".bs-example-modal-lg6">Read More</button>
                </p>
            </div>
            </article>
        </div>





        <div class="col-md-3">
            <article class="caption">
            <img class="caption__media" src="img/remon.png" />
            <div class="caption__overlay">
                <h1 class="caption__overlay__title">Remon van Gemeren</h1>
                <p class="caption__overlay__content">
                    <button type="button" class="btn btn-primary read_more modal-trig" data-target=".bs-example-modal-lg7">Read More</button>
                </p>
            </div>
            </article>
        </div>



<!--         <div class="col-md-3">
            <article class="caption">
            <img class="caption__media" src="img/acme.png" />
            <div class="caption__overlay">
                <h1 class="caption__overlay__title">ACME</h1>
                <p class="caption__overlay__content">
                <button type="button" class="btn btn-primary read_more modal-trig " data-target=".bs-example-modal-lg8">Read More</button>
                </p>
            </div>
            </article>
        </div> -->



<!-- http://18363.hosts.ma-cloud.nl/acme/index.php -->
<!--         <div class="col-md-3">
            <article class="caption">
            <img class="caption__media" src="img/rvk.png" />
            <div class="caption__overlay">
                <h1 class="caption__overlay__title">RVK Hoorn</h1>
                <p class="caption__overlay__content">
                <button type="button" class="btn btn-primary read_more modal-trig" data-target=".bs-example-modal-lg9">Read More</button>
                </p>
            </div>
            </article>
        </div> -->
    </div>



</div>

<script type="text/javascript">
$(document).ready(function(){
    $('.modal-trig').on('click', function(){
        var modal = $(this).data('target');
       $(modal).modal('show');
    })
})
</script>