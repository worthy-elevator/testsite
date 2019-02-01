<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="header">
	
		<div class="logo">
			<img src="1.jpg" width="100%"> 
			
		</div>
		<div class="top-menu">
			<div class ="buttons" >
				<div class= "menu-button">
					
					<div class="button-setting">

  						 <ul type="none">
   						 <li ><a href="1.html"> <div class="home-img" style="display: inline;">
        						<img class="home-pic" src="1.jpg"  >
  							  </div>Home</a>
   						 </li>
   						 <li><a href="1.html">Work</a></li>
   						 <li><a href="1.html">About</a></li>
   						 <li><a href="1.html">Blog</a></li>
   						 <li style="border-right: 1px solid #ADC0CE"><a href="1.html">Contact</a></li>
  						</ui>
					</div>

				<div class = "menu-fall">
					<div class="menu-icon" style="width: 150px;margin: 0 auto;" onclick="showMenu()">
						<a href="#">
							<label>
								прикинь, это менюшка
							</label>
						</a> 
<!--						<button onclick="showMenu()"> МЕНЮ ЕПТА</button></div>
						<button onclick="hideMenu()"> МЕНЮ ЕПТА</button>--></div>
					<div id="menu-drop" class="button-setting" style="display: none;">

  						 <ul type="none">
   						 <li ><a href="1.html"> <div class="home-img" style="display: inline;">
        						<img class="home-pic" src="1.jpg"  >
  							  </div>Home</a>
   						 </li>
   						 <li><a href="1.html">Work</a></li>
   						 <li><a href="1.html">About</a></li>
   						 <li><a href="1.html">Blog</a></li>
   						 <li style="border-right: 1px solid #ADC0CE"><a href="1.html">Contact</a></li>
  						</ui>
					</div>
				</div>
				
			</div>

			
		</div>
	</div>
<script type="text/javascript">
	function showMenu() {
   // document.getElementById("menu-drop").style.display = "";
    if ( document.getElementById("menu-drop").style.display =="none") 
    {
    	document.getElementById("menu-drop").style.display = "";
    }else
    {
    	document.getElementById("menu-drop").style.display = "none";
    }

}
</script>
</body>
