<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> 
<head>
 
<title>Fissic GYM</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" type="text/css" href="./css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" href="./css/style_nivo.css" media="screen">
		<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("rpc.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestions').show();
					$('#autoSuggestionsList').html(data);
				}
			});
		}
	} // lookup
	
	function fill(thisValue) {
		$('#inputString').val(thisValue);
		setTimeout("$('#suggestions').hide();", 200);
	}
</script>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/hoverIntent.js"></script>
<script type="text/javascript" src="./js/superfish.js"></script>
<script type="text/javascript" src="./js/placeholder.js"></script>
<script type="text/javascript" src="./js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
// Slider stuff
$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'slideInLeft', // Specify sets like: 'fold,fade,sliceDown'
        animSpeed:300, // Slide transition speed
        pauseTime:6000, // How long each slide will show
        directionNav:true, // Next & Prev navigation
        keyboardNav:true, // Use left & right arrows
        pauseOnHover:true // Stop animation while hovering
    });
});
</script>
<script type="text/javascript">
// Initialise menu plugin
jQuery(function(){
	jQuery('ul.sf-menu').superfish();
});
</script>
       
<meta charset="UTF-8"></head>

<body>

<div id="container">

		<!--Header begins-->
		<div id="headerContainer">
			
				<a class="logo" href="./index.html" >FISSIC GYM</a>
		
				<!--Personal File begins-->
				<div id="filenrContainer">
						<img src="images/icon_quickSearch.png" width="81" height="78">
						<h4>Registrar Entrada</h4>
						<h4>&nbsp;</h4>
						<h4>SOCIO</h4>
						<span>Escriba su identificador como socio</span>
		         
						<form action="registrodias.php" method="post">
                        <input type="text" size="30" value="" id="inputString" onKeyUp="lookup(this.value);" onBlur="fill();"  autofocus="autofocus" autocomplete="off" name="numero" style="font-size:18px"/>
							
								<input type="submit" value="" name="submit-search">
						</form>
                        <div class="suggestionsBox" id="suggestions" style="display: none;">
				<img src="upArrow.png" style="position: relative; top:-30px; left: 30px;" alt="upArrow" />
				<div class="suggestionList" id="autoSuggestionsList"></div>
				
			</div>
				</div>
				<!--Personal File ends-->
				
				<div class="clear"></div>
	
		</div>
		<!--Header ends-->
		
		<div id="contentContainer">
				
					<!--Menu begins-->
					<div id="menubarborder">
					<div id="menubar">
					
							<ul class="sf-menu">
									<li class="current"><a href="./index.php">Principal</a></li>
									<li><a href="nuevomiembro.php">Socio Nuevo</a></li>
									<li><a href="pagos.php">Pagos</a></li>
									<li><a href="vencimientos.php">Vencidos</a></li>
									<li><a href="record.php">Registro X Dia</a></li>
									<li><a href="versocios.php">Ver Socios</a>
                                                               <li><a href="verpagos.php">Ver Pagos</a></li>
											<li><a href="admin.php">Administrativo</a></li>
															</ul>
													</li>
											</ul>
									</li>
									
							</ul>
							
					</div>
					</div>
					<!--Menu ends-->
						
				<!--Content begins-->		
				<div id="content">
						
						<!--Slider begins-->
						<div id="sliderContainer">
						
								<div id="slider">
  										<a href="#" title=""><img src="./images/slider1.jpg" alt="" /></a>
    									<a href="#" title=""><img src="./images/slider2.jpg" alt="" /></a>
    							
								</div>
								
						</div>
						<!--Slider ends-->
						
						<!--Middle part begins-->
						<div id="middlePart">
						
								<!--Welcome begins-->
								<div id="middleTwoColumn">
								  <p>&nbsp;</p>	
								</div>
								<!--Welcome ends-->
								
								<!--Sidebar begins-->
								<div id="sidebar">
								
										<!--Quick search #1 begins--><!--Quick search #2 ends-->
										
								</div>
								<!--Sidebar ends-->
								
						</div>
						<!--Middle part ends-->

						<div class="clear"></div>
						
						<!--Bottom part begins-->	
						<div class="bottomPart mt30">
						
								<!--Medical Services begins--><!--Medical Services ends-->
								
								<!--Executive Health begins--><!--Executive Health ends-->
						
						</div>
						<!--Bottom part ends-->
						
						<div class="clear"></div>
						
				</div>
				<!--Content ends-->	
				
				<!--Footer begins-->	
				<div id="footerPart">Datos del local</div>
				<!--Footer ends-->	
				
		</div>
		<!--ContentContainer ends-->	

</div>
<!--Container ends-->	

</body>
</html>
