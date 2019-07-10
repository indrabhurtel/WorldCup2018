<?php

include "db_connect.php";
$keywordfromfrom = $_GET["keyword"];



// Searching the database for Russia  to display the GameID, FIFA_Popular_Name and playerID

echo "<h2> Showing
Game ID, in which  Team $keywordfromfrom played, followed by the player name, who was in the
starting lineup for this game, and the player playerID of the player and the 
records are sorted by the Game ID and PlayerID </h2>";

$sql = "SELECT starting_lineups.GameID, player.FIFA_Popular_Name, player.PlayerID
FROM game, player, starting_lineups
WHERE game.GameID=starting_lineups.GameID AND player.playerID= starting_lineups.PlayerID AND player.TeamID= starting_lineups.TeamID AND Team LIKE '%". $keywordfromfrom."%'
ORDER BY GameID ASC, playerID ASC";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo  "  <tr><td>    " .  $row["GameID"]. "  <tr><td>    " . $row["FIFA_Popular_Name"]. "   <tr><td>     " . $row["PlayerID"]. "<br>". "<br>";
    }
} else {
    echo "Sorry, No results found:(";
}
?>
<a href ="index.php" > Return to main page </a>