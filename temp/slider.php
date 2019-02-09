<?php
function slider(){
	echo '

  <link href="css/slider.css" rel="stylesheet">
  

  <div class="slider" style="height:50vh; width:90vw; margin: 0 auto">
    <div class="slider__wrapper">
      <div class="slider__item">
        <div style="height: 250px; background: orange;">1</div>
      </div>
      <div class="slider__item">
        <div style="height: 250px; background: green;">2</div>
      </div>
      <div class="slider__item">
        <div style="height: 250px; background: violet;">3</div>
      </div>
      <div class="slider__item">
        <div style="height: 250px; background: coral;   
background-image: url(2.png)">4</div>
      </div>
    </div>
    <a class="slider__control slider__control_left" href="#" role="button"></a>
    <a class="slider__control slider__control_right" href="#" role="button"></a>
  </div>
  <script src="js/slider.js"></script> ';
}
?>