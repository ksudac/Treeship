<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Treeship Capital</title>
<link rel="stylesheet" type="text/css" href="tree_ship.css" />


	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#myform").validate({
			debug: false,
			rules: {
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				email: "A valid email will help us get in touch with you.",
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				$.post('process.php', $("#myform").serialize(), function(data) {
					$('#results').html(data);
				});
			}
		});
	});
	</script>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="fadeslideshow.js"></script>
<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [800, 563], 
	imagearray: [
		["prop1.jpg"],
		["prop2.jpg"],
		["prop3.jpg"],
		["prop4.jpg"] 
	],
	displaymode: {type:'auto', pause:3000, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 400, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})

</script>


</head>

<body>

<!-- Navigation -->
<div id="navbar">
<div class="center">
	<a href="index.html"> <img style="position:relative; top:15px; left:-300px" src="tree_ship_logo5.png"></a>
	<div class="navigation" style="position:relative; top:-30px; right:-150px">
		<a style="padding: 17px;" href="index.html"> HOME </a>
		<a style="padding: 17px;" href="pg_about.html"> ABOUT </a>
		<a style="padding: 17px;" href="pg_resources.html"> INVESTOR RESOURCES </a>
		<a style="padding: 17px;" href="pg_news.html"> REAL ESTATE NEWS </a>
		<a style="padding: 17px;" href="pg_contact.html"> CONTACT </a>
	</div>
</div>
</div>

<div class="center">	
<!-- Photo Section -->
	<div class="photos" >
		<div id="fadeshow1"></div>
	</div>
</div>

<!-- Content -->
<div class="center">
<table  id="table_content" border="0" cellpadding="10" >
	<tr valign=top>
	<!-- Investor Resources -->
	<td width=33%>
		<hr size=5px color=#303030>
		<div class="title">Investor Resources</div>
		<p>How to Invest in Multifamily Real Estate Through Your IRA</p>
		<p>10 Reasons to Invest in Multifamily Properties</p>
		<a href="pg_resources.html" style="text-decoration: none;">Read More...</a>
	</td>
	
	<!-- Newsletter -->
	<td width=33%>
		<hr size=5px color=#303030 >
		<div class="title">Newsletter</div>
		<br>




<form name="myform" id="myform" action="" method="POST">  

<!-- The Email form field -->
    <label for="email" id="email_label">Email</label>  
    <input type="text" name="email" id="email" size="30" value=""/> 
	<br>
<!-- The Submit button -->
	<input type="submit" name="submit" value="Submit"> 
</form>
<!-- We will output the results from process.php here -->
<div id="results"><div>




		<p>Enter your email to receive our monthly newsletters</p>
	</td><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><img src="http://www.treeshipcapital.com/prop4.jpg" style="border-width: 0px; display: inline-block; margin-left: 0px; margin-top: 0px;">
	
	<!-- Contact US -->
	<td width=33%>
		<hr size=5px color=#303030>
		<div class="title">Contact Us</div>
		<p>Phone: (718) 607-5154</p>
		<p>Fax: (888) 321-2368</p>
		<p>info@treeshipcapital.com</p>
	</td>	
	</tr>

	<!-- News Feed -->
	<tr>
	<td colspan="3">
		<hr size=5px color=#303030>
		<div class="title">Real Estate News</div>
		<p>Apartment Demand Maintains Strength - New 4Q Reports</p>
	</td>
	<tr></tr>
</table>
</div>

<!-- Footer -->		
<div id="footbar" >
<br />
&copy; 2012  BY TREESHIP CAPITAL
</div>

	
</div>
</body>
</html>