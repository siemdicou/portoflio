

<div class="work">
<?php require 'work_modals.html'; ?>

	<h1>Mijn werk</h1>
	<div class="work_container">
		<!-- new order -->
		<div class="work_item" id="work_item_7" onmouseenter="work_animtaion_enter(7)" onmouseleave="work_animtaion_leave(7)">
			<div class="work_item_text" id="work_item_text_7">
				<div class="work_item_text_title">Bert Dicou</div>
				<div class="work_item_text_date">Mei 2017</div>
			</div>
		</div>
		<div class="work_item" id="work_item_6" onmouseenter="work_animtaion_enter(6)" onmouseleave="work_animtaion_leave(6)">
			<div class="work_item_text" id="work_item_text_6">
				<div class="work_item_text_title">Daley</div>
				<div class="work_item_text_date">November 2016</div>
			</div>
		</div>
		<div class="work_item" id="work_item_5" onmouseenter="work_animtaion_enter(5)" onmouseleave="work_animtaion_leave(5)">
			<div class="work_item_text" id="work_item_text_5">
				<div class="work_item_text_title">Remon van Gemeren</div>
				<div class="work_item_text_date">Oktober 2016</div>
			</div>
		</div>
		<div class="work_item" id="work_item_4" onmouseenter="work_animtaion_enter(4)" onmouseleave="work_animtaion_leave(4)">
			<div class="work_item_text" id="work_item_text_4">
				<div class="work_item_text_title">Map App</div>
				<div class="work_item_text_date">Juni 2016</div>
			</div>
		</div>
		<div class="work_item" id="work_item_3" onmouseenter="work_animtaion_enter(3)" onmouseleave="work_animtaion_leave(3)">
			<div class="work_item_text" id="work_item_text_3">
				<div class="work_item_text_title">ACME</div>
				<div class="work_item_text_date">Februari 2015</div>
			</div>
		</div>
		<div class="work_item" id="work_item_2" onmouseenter="work_animtaion_enter(2)" onmouseleave="work_animtaion_leave(2)">
			<div class="work_item_text" id="work_item_text_2">
				<div class="work_item_text_title">Raad van Kerken Hoorn</div>
				<div class="work_item_text_date">september 2014</div>
			</div>
		</div>
		<a href="#" onclick="open_work_overlay(1)">
			<div class="work_item work_item_alone" id="work_item_1" onmouseenter="work_animtaion_enter(1)" onmouseleave="work_animtaion_leave(1)">
				<div class="work_item_text" id="work_item_text_1">
					<div class="work_item_text_title">Menno Simons Fleas</div>
					<div class="work_item_text_date">Juli 2014</div>
				</div>
			</div>
		</a>
	</div>
</div>
<!-- <section id="cd-timeline" class="cd-container">

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/website_white.png" alt="Picture">
			</div>

			<div class="cd-timeline-content">
				<div class="row">
					<div class="col-md-6">
						<h1>Menno Simons Fleas</h1>
						<p></p>
                    	<button type="button" class="btn btn-primary btn-lg modal-trig read_more" data-target=".bs-example-modal-lg6">Bekijk project</button>				
					</div>
					<div class="col-md-6">
						<img src="img/menno.png">
					</div>


				</div>

				<span class="cd-date">Juli 2014</span>
			</div>
		</div> 

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="img/website_white.png" alt="Movie">
			</div>

			<div class="cd-timeline-content">
				<div class="row">
					<div class="col-md-6">
						<h1>Raad van kerken</h1>
                    	<button type="button" class="btn btn-primary btn-lg modal-trig read_more" data-target=".bs-example-modal-lg5">Bekijk project</button>	
					</div>
					<div class="col-md-6">
						<img src="img/rvk.png">
					</div>
				</div>
				<span class="cd-date">September 2014</span>
			</div>		
		</div> 

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/website_white.png" alt="Picture">
			</div>

			<div class="cd-timeline-content">
				<div class="row">
					<div class="col-md-6">
						<h1>ACME</h1>
                    	<button type="button" class="btn btn-primary btn-lg modal-trig read_more" data-target=".bs-example-modal-lg4">Bekijk project</button>	
					</div>
					<div class="col-md-6">
						<img src="img/acme.png">
					</div>
				</div>
				<span class="cd-date">Februari 2015</span>
			</div>
		</div> 

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/website_white.png" alt="Location">
			</div>

			<div class="cd-timeline-content">
				<div class="row">
					<div class="col-md-6">
						<h1>Map App</h1>
						<p></p>
                    	<button type="button" class="btn btn-primary btn-lg modal-trig read_more" data-target=".bs-example-modal-lg2">Bekijk project</button>	
					</div>
					<div class="col-md-6">
						<img src="img/digitalmap.png">
					</div>
				</div>
				<span class="cd-date">Juni 2016</span>
			</div>
		</div> 

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="img/website_white.png" alt="Location">
			</div>

			<div class="cd-timeline-content">
				<div class="row">
					<div class="col-md-6">
						<h1>Remon van Gemeren</h1>
                    	<button type="button" class="btn btn-primary btn-lg modal-trig read_more" data-target=".bs-example-modal-lg7">Bekijk project</button>	
					</div>
					<div class="col-md-6">
						<img src="img/remon.png">
					</div>
				</div>
				<span class="cd-date">Oktober 2016</span>
			</div> 
		</div> 


		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/website_white.png" alt="Movie">
			</div>

			<div class="cd-timeline-content">
				<div class="row">
					<div class="col-md-6">
						<h1>Daley</h1>
                    	<button type="button" class="btn btn-primary btn-lg modal-trig read_more" data-target=".bs-example-modal-lg3">Bekijk project</button>	
					</div>
					<div class="col-md-6">
						<img src="img/daley.png">
					</div>
				</div>
				<span class="cd-date">November 2016</span>
			</div> 
		</div> 
	 	
	 	<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/website_white.png" alt="Movie">
			</div>

			<div class="cd-timeline-content">
				<div class="row">
					<div class="col-md-6">
						<h1>Bert Dicou</h1>
                    	<button type="button" class="btn btn-primary btn-lg modal-trig read_more" data-target=".bs-example-modal-lg8">Bekijk project</button>	
					</div>
					<div class="col-md-6">
						<img src="img/bertdicou.png">
					</div>
				</div>
				<span class="cd-date">Mei 2017</span>
			</div> 
		</div> 
	 

</div>
</section> -->

