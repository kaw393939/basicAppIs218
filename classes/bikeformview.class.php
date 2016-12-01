<?php

  class bikeformview {

     public function getHTML() {

       $form = 'Bike Form </p>
           <form action="index.php?controller=bikeController" method="post">
             <div>
	         <label for="make">Make:</label>
	         <input type="text" id="make" name="make" />
	     </div>
	     <div>
	         <label for="model">Model:</label>
	         <input type="text" id="mail" name="model" />
	     </div>
	     <div class="button">
	        <button type="submit">Save</button>
	     </div>
	   </form>
	   
	   ';
        return $form;
     }

  }
