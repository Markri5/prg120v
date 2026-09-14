<!DOCTYPE html>
<html>
<head>
<title>Intro</title>
</head>
<body>
    <h1>God morgen</h1>
    <br><br/>
    <p1>Dette er nettsiden for Programerings faget</p1>
    <br><br/>
    <!-- Fornavn og etternavn skjema -->
    <form method="post" action="navn.php" id="godmorgen" name="godmorgen">
            Fornavn <input type="text" id="fornavn" name="fornavn" required />
        <br />
            <!-- Mellomnavn -->
            Etternavn <input type="text" id="etternavn" name="etternavn" required />
        <br />
            <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
            <input type="reset" value="Nullstill" id="nullstill" name="nullstill" />
        <br />
    </form>
    <!-- Tall kalkulator skjema -->
    <br><br/>
        <form method="post" action="tall.php" id="tall" name="tall">
            Tall 1 <input type="text" id="tall1" name="tall1" required />
        <br />
            Tall 2 <input type="text" id="tall2" name="tall2" required />
        <br />
            <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
            <input type="reset" value="Nullstill" id="nullstill" name="nullstill" />
        <br />
    </form>
</body>
</html>

<?php    /* Navn eksempel */
/*
Dette henter fra boksene der du fyller inn Fornavn og etternavn i filen index.html
*/
  $fornavn=$_POST ["fornavn"];
  $etternavn=$_POST ["etternavn"];

  print ("God dag $fornavn $etternavn <br />");
?>

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
