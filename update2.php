<?php
$Room_id = $_POST["Room_id"];

$connect = mysqli_connect("localhost", "root", "", "hotel");
$sql = "SELECT * FROM `room` WHERE `Room_id` = $Room_id";
$result = mysqli_query($connect, $sql);

echo "<style>";
echo ".form-group { display: flex; align-items: center; margin-bottom: 5px; }";
echo ".form-group label { width: 120px; text-align: left; margin-right: 5px; }";
echo ".form-group input { width: 200px; }";
echo "</style>";

while ($row = mysqli_fetch_assoc($result)) {
    echo '<form action="update3.php" method="post">';
    echo '<div class="form-group">';
    echo '<label for="Room_id">Room ID:</label>';
    echo '<input type="text" id="Room_id" name="Room_id" value="' . $row['Room_id'] . '" disabled>';
    echo '<input type="text" id="Room_id" name="Room_id" value="' . $row['Room_id'] . '" hidden>';
    echo '</div>';

    echo '<div class="form-group">';
    echo '<label for="Floors">Floors:</label>';
    echo '<input type="text" id="Floors" name="Floors" value="' . $row['Floors'] . '">';
    echo '</div>';

    echo '<div class="form-group">';
    echo '<label for="Price">Price:</label>';
    echo '<input type="text" id="Price" name="Price" value="' . $row['Price'] . '">';
    echo '</div>';

    echo '<div class="form-group">';
    echo '<label for="SD">Single/Double:</label>';
    echo '<input type="text" id="SD" name="SD" value="' . $row['SD'] . '">';
    echo '</div>';

    echo '<div class="form-group">';
    echo '<label for="Room_Type">Room Type:</label>';
    echo '<input type="text" id="Room_Type" name="Room_Type" value="' . $row['Room_Type'] . '">';

    echo '</div>';
    echo '<input type="submit" value="update">';
    echo '</form>';
}
mysqli_close($connect);
?>