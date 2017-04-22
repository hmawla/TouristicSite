<!DOCTYPE html>

<style>
.w3l_header{
	font-size: 1.5em;
    color: #212121;
    letter-spacing: 5px;
    text-transform: uppercase;
    position: relative;
}
.w3l_header span{
	color:#00ba66;
}
.w3l_header:after{
	content: '';
    background: #212121;
    height: 2px;
    width: 13%;
    left: 14%;
    position: absolute;
    top: 49%;
}
.w3_agileits_header1:after{
	left:20% !important;
}

.banner-bottom,.testimonials,.services,.service-bottom,.stats-bottom{
	padding:5em 0;
}
.agileits_banner_bottom_grids,.w3layouts_work_grids,.wthree_testimonial_grids,.wthree_services_grids,.w3layouts_mail_grid{
	margin:3em 0 0;
}

input[type="submit"],input[type="reset"],a,.agileinfo_services_grid1_pos,.agileinfo_services_grid1 h4,.simplefilter li{
	-webkit-transition: 0.5s ease-in;
    -moz-transition: 0.5s ease-in;
    -ms-transition: 0.5s ease-in;
    -o-transition: 0.5s ease-in;
    transition:0.5s ease-in;
}
ul.simplefilter {
    text-align: center;
    margin-bottom: 2em;
}

.simplefilter li {
	color: black;
	border-bottom: 3px solid #00bbff;
	cursor: pointer;
	display: inline-block;
	text-transform: uppercase;
	border-radius: 25px; 
	padding: 0.8em 2em;
	margin: 0 0.3em;
    background-color: #f9feff;
}
.simplefilter li.active,.simplefilter li:hover {
    background-color: #00bbff;
	border-bottom: 3px solid grey
}
.agileits_banner_bottom_grids,.w3layouts_work_grids,.wthree_testimonial_grids,.wthree_services_grids,.w3layouts_mail_grid{
	margin:3em 0 0;
}
.filtr-item {
    padding: 1em;
}
.wthree_services_grids{
	margin:0 0 0;
}
.img-responsive{
	border-bottom:3px solid #00bbff;
	border-radius: 10px;
}

</style>
<div class="services">
		<div class="container">
			<div class="wthree_services_grids">	
				<ul class="simplefilter">
					<li class="active" data-filter="all">All</li>
					<li data-filter="1">Category 1</li>
					<li data-filter="2">Category 2</li>
					<li data-filter="3">Category 3</li>
					<li data-filter="3">Category 4</li>
					<li data-filter="3">Category 5</li>
					<li data-filter="3">Category 6</li>
				</ul>
				<div class="filtr-container">
					<div class="col-md-4 col-sm-4 filtr-item" data-category="1" data-sort="">
						<div class="agileits_portfolio_grid">
							<a class="group1" href="images/1.jpg" title="Viticulture">
								<img class="img-responsive" src="images/1.jpg" alt=""  /> 
								<div class="w3_textbox">
									<h4>Viticulture</h4>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
								</div>
							</a> 
						</div>
					</div>
					<div class="col-md-4 col-sm-4 filtr-item" data-category="2, 3" data-sort="">
						<div class="agileits_portfolio_grid">
							<a class="group1" href="images/2.jpg" title="Viticulture">
								<img src="images/2.jpg" alt="" class="img-responsive" />
								<div class="w3_textbox">
									<h4>Viticulture</h4>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 filtr-item" data-category="1" data-sort="">
						<div class="agileits_portfolio_grid">
							<a class="group1" href="images/3.jpg" title="Viticulture">
								<img src="images/3.jpg" alt="" class="img-responsive" />
								<div class="w3_textbox">
									<h4>Viticulture</h4>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 filtr-item" data-category="3" data-sort="">
						<div class="agileits_portfolio_grid">
							<a class="group1" href="images/4.jpg" title="Viticulture">
								<img src="images/4.jpg" alt="" class="img-responsive" />
								<div class="w3_textbox">
									<h4>Viticulture</h4>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 filtr-item" data-category="3" data-sort="">
						<div class="agileits_portfolio_grid">
							<a class="group1" href="images/6.jpg" title="Viticulture">
								<img src="images/3.jpg" alt="" class="img-responsive" />
								<div class="w3_textbox">
									<h4>Viticulture</h4>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 filtr-item" data-category="2" data-sort="">
						<div class="agileits_portfolio_grid">
							<a class="group1" href="images/7.jpg" title="Viticulture">
								<img src="images/1.jpg" alt="" class="img-responsive" />
								<div class="w3_textbox">
									<h4>Viticulture</h4>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
								</div>
							</a>	
						</div>
					</div>
				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>

<script src="js/jquery.filterizr.js"></script>  
<script src="js/controls.js"></script>
<script type="text/javascript">
	$(function() {
		$('.filtr-container').filterizr();
	});
</script>
<!-- ------------------------------------------------------------------- -->