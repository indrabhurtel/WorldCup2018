<html>
<head>
</head>


<body> 
<body style="background-color:white">
<h1> <font color ="#00FF00" > World Cup 2018 </font> </h1>
<?php
include"db_connect.php";
?>

<form action= "search_keyword.php">
Enter a country name to retrieve GameID, in which  country played, followed by the player name, who was in the
starting lineup for this game, and the player playerID of the player.<br>
  <input type="text" name="keyword"<br><br>
  <input type="submit" value="Search">
</form>

<hr>

<form action="search_countryANDcard.php">
Enter a country name (Russia, Brazil etc) and card color (Yellow, Red) to retrieve and
display the results of all games and player names that played in that game and
received a card of that color.<br><br>
  Country Name<br>
  <input type="text" name="Team"><br>
  Card Color<br>
  <input type="text" name="color"><br>
  <input type="submit" value="Search">
</form>

<?php

$mysqli->close();

?>


</body>
</html>