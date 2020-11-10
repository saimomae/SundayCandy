<?php
$id = $_GET['id'];
require_once('connect.php');
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno . ": " . $mysqli->connect_error;
}
$q = "SELECT * FROM movie where m_id=$id";
$result = $mysqli->query($q);
echo "<form action='updateinfo.php' method='post'>";
while ($row = $result->fetch_array()) {
    echo "m_id: <input type=text name=id
value=" . $row['m_id'] . " Disabled><br>";
    echo "<input type=hidden name=m_id value='" . $row['m_id'] . "'>";
    echo "title: <input type=text name=title
value=" . $row['title'] . "><br>";
    echo "time: <input type=text name=time
value=" . $row['time'] . "><br>";
    echo "price_rent: <input type=text name=price_rent
value=" . $row['price_rent'] . "><br>";
    echo "price_buy: <input type=text name=price_buy
value=" . $row['price_buy'] . "><br>";
    echo "g_id: <input type=text name=g_id
value=" . $row['g_id'] . "><br>";

    echo "</select><br>";
    echo "<input type=submit value=submit>";
}
$mysqli->close();
?>