<?PHP
function menu(){
	echo'
  sdfghj
	<div class="header">
	
		<div class="logo">
			<img src="1.jpg" width="100%"> 
			
		</div>
		<div class="top-menu">
			<div class ="buttons" >
				<div class= "menu-button">
					<div class="menu-icon" style="width: 43px; margin: 0 auto;" onclick="showMenu()">
	<div class="container">


        <input type="checkbox" id="checkbox4" class="checkbox4 visuallyHidden">
        <label for="checkbox4"  onclick="showMenu()">
            <div class="hamburger hamburger4">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
                <span class="bar bar4"></span>
                <span class="bar bar5"></span>
            </div>
        </label>

    </div>
					</div>
					<div class="button-setting" id="menu">

  						 <ul type="none">
   						 <li ><a href="1.html"> <div class="home-img" style="display: inline;">
        						<img class="home-pic" src="1.jpg"  >
  							  </div>Home</a>
   						 </li>
   						 <li><a href="1.html">Work</a></li>
   						 <li><a href="1.html">About</a></li>
   						 <li><a href="1.html">Blog</a></li>
   						 <li style="border-right: 1px solid #ADC0CE"><a href="1.html">Contact</a></li>
  						</ul>
					</div>


				<div class = "menu-fall">
					
					<div id="menu-drop" class="button-drop" style="display: none;">

  						 <ul type="none">
   						 <li >
   						 	<a href="1.html"> 
   						 		<div class="home-img" style="display: inline;">
        							<img class="home-pic" src="1.jpg"  >
  							  	</div>Home
  							</a>
   						 </li>
   						 <li><a href="1.html">Work</a></li>
   						 <li><a href="1.html">About</a></li>
   						 <li><a href="1.html">Blog</a></li>
   						 <li style="border-right: 1px solid #ADC0CE"><a href="1.html">Contact</a></li>
  						</ul>
					</div>
				</div>
				
			</div>

			
		</div>
	</div>



<script type="text/javascript">
	function showMenu() {
   // document.getElementById("menu-drop").style.display = "";
    if ( document.getElementById("menu").style.display =="none") 
    {
    	document.getElementById("menu").style.display = "block";
    }else
    {
    	document.getElementById("menu").style.display = "none";
    }

}
</script>';}

function menu2(){
	echo'
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
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
					<div class="menu-icon" style="width: 43px; margin: 0 auto;" onclick="showMenu()">
	<div class="container">


        <input type="checkbox" id="checkbox4" class="checkbox4 visuallyHidden">
        <label for="checkbox4"  onclick="showMenu()">
            <div class="hamburger hamburger4">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
                <span class="bar bar4"></span>
                <span class="bar bar5"></span>
            </div>
        </label>

    </div>
					</div>
					<div class="button-setting" id="menu">

  						 <ul type="none">
   						 <li ><a href="1.html"> <div class="home-img" style="display: inline;">
        						<img class="home-pic" src="1.jpg"  >
  							  </div>Home</a>
   						 </li>
   						 <li><a href="1.html">Work</a></li>
   						 <li><a href="1.html">About</a></li>
   						 <li><a href="1.html">Blog</a></li>
   						 <li style="border-right: 1px solid #ADC0CE"><a href="1.html">Contact</a></li>
  						</ul>
					</div>


				<div class = "menu-fall">
					
					<div id="menu-drop" class="button-drop" style="display: none;">

  						 <ul type="none">
   						 <li >
   						 	<a href="1.html"> 
   						 		<div class="home-img" style="display: inline;">
        							<img class="home-pic" src="1.jpg"  >
  							  	</div>Home
  							</a>
   						 </li>
   						 <li><a href="1.html">Work</a></li>
   						 <li><a href="1.html">About</a></li>
   						 <li><a href="1.html">Blog</a></li>
   						 <li style="border-right: 1px solid #ADC0CE"><a href="1.html">Contact</a></li>
  						</ul>
					</div>
				</div>
				
			</div>

			
		</div>
	</div>



<script type="text/javascript">
	function showMenu() {
   // document.getElementById("menu-drop").style.display = "";
    if ( document.getElementById("menu").style.display =="none") 
    {
    	document.getElementById("menu").style.display = "block";
    }else
    {
    	document.getElementById("menu").style.display = "none";
    }

}
</script>
</body>
';}
?>