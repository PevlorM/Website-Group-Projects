<?php
session_start();
if (!isset($_SESSION['username']))
    {
    require("htmlHead.inc");
    echo "<h1>You are not authorized to access this page</h1>";
    echo "<p>$message ";
    echo"<a href='maintenanceLogin.html'>Try Again</a></p>\n";
    require("htmlFoot.inc");
    die();   
    }// end !ISSET SESSION
?>
<!doctype html> <!-- Author:	  Jeff O'Connor           -->
<html lang="en"><!-- Date:	  05/05/2020          -->
<head>          <!-- Description: Step 1 of Inventory Update -->
 <title>The Nguvu: Inventory Lookup (Update)</title>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="nguvu.css" />
</head>
<body>
<div class="wrapper">
<header>
 <h1>The Nguvu: Inventory Lookup (Update)</h1>
</header>
<form action="updateItem2.php" method="post">
<fieldset>
<legend>Step 1: Lookup Record</legend>
<p>Which department would you like to update?</p>
<select  name="department">
    <option value="accessories">Accessories</option>
    <option value="clothing">Clothing</option>
    <option value="jewelry">Jewelry</option>
</select><br /><br>
<p>What is the part number for the record you wish to update?</p>
<label class="oneForty">Item ID: </label>
<input type="text" name="itemID" size="10" maxlength="10" autofocus />
</fieldset>
<input type="reset"  name="reset"  value="Clear" />
<input type="submit" name="submit" value="Search" />
</form>
<footer>&copy; 2019. Ivy Tech Community College.</footer>
</div><!-- wrapper -->
</body>
</html>
