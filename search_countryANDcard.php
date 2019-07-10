<?php

include "db_connect.php";
$keywordfromCountry = $_GET["Team"];
$keywordfromCard = $_GET["color"];

// Searching  the database for Russia  to display the GameID, FIFA_Popular_Name and playerID

echo "<h2> Showing GameId and the Player Name combination, such that the Player from that country $keywordfromCountry  played in that game and received a card of color $keywordfromCard. </h2>";

$sql = "SELECT cards.GameID, player.FIFA_Popular_Name
FROM player,cards,team
WHERE player.TeamID=cards.TeamID AND player.TeamID =team.TeamID AND cards.TeamID= team.TeamID AND cards.PlayerID= player.PlayerID AND team.Team LIKE '%". $keywordfromCountry."%' AND Color_Card LIKE '%". $keywordfromCard."%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // outputing data of each row
    while($row = $result->fetch_assoc()) {
        echo "  <tr><td>    " . $row["GameID"]. "    <tr><td>      " . $row["FIFA_Popular_Name"]. "<br>". "<br>";
    }
} else {
    echo "Sorry, No results found:(";
}

?>
<a href ="index.php" > Return to main page </a>