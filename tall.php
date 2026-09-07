<?php    /* Navn eksempel */
/*
Dette er tall kalkulator som henter info fra filen index.html
*/
  $tall1=$_POST ["tall1"];
  $tall2=$_POST ["tall2"];  

  $summen=$tall1 + $tall2;  
  $differansen=$tall1 - $tall2;  
			
  print ("Tall 1 er $tall1 <br />");
  print ("Tall 2 er $tall2 <br />");
  print ("Summen er $summen <br />");
  print ("Differansen er $differansen <br />"); 
?>
