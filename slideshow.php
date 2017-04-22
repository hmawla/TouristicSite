<style>
.w3-content{
	max-width:60%;
	margin:auto
}
.w3-display-container{
	position:relative
}
.w3-button{
	border:none;
	display:inline-block;
	outline:0;
	padding:8px 16px;
	vertical-align:middle;
	overflow:hidden;
	text-decoration:none;
	color:inherit;
	background-color:inherit;
	text-align:center;
	cursor:pointer;
	white-space:nowrap
}
.w3-button{
	-webkit-touch-callout:none;
	-webkit-user-select:none;
	-khtml-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	user-select:none
}
.w3-button:disabled{
	cursor:not-allowed;
	opacity:0.3
}
.w3-button:hover{
	color:#000!important;
	background-color:#ccc!important
}
.w3-black,.w3-hover-black:hover{
	color:#fff!important;
	background-color:#000!important
}
.w3-display-left{
	position:absolute;
	top:50%;
	left:0%;
	transform:translate(0%,-50%);
	-ms-transform:translate(-0%,-50%)
}
.w3-display-right{
	position:absolute;
	top:50%;
	right:0%;
	transform:translate(0%,-50%);
	-ms-transform:translate(0%,-50%)
}
</style>
<div class="container">
	<div class="w3-content w3-display-container">
		<img class="mySlides" src="images/1.jpg" style="width:100%;">
		<img class="mySlides" src="images/3.jpg" style="width:100%;">

		<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
		<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
	</div>

	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			if (n > x.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			x[slideIndex-1].style.display = "block";  
		}
		var slideIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none"; 
		}
		slideIndex++;
		if (slideIndex > x.length) {slideIndex = 1} 
		x[slideIndex-1].style.display = "block"; 
		setTimeout(carousel, 3000); // Change image every 2 seconds
		}
	</script>
</div>