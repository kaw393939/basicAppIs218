<?php

  class userformview {

     public function getHTML() {

       $form = '
           <form action="index.php?controller=carController" method="post">
             <div>
	         <label for="user">User:</label>
	         <input type="text" id="user" name="user" />
	     </div>
	     <div>
	         <label for="password">password:</label>
	         <input type="text" id="password" name="password" />
	     </div>
	     <div class="button">
	        <button type="submit">Save</button>
	     </div>
	   </form>
	   
	   ';
        return $form;
     }

  }
