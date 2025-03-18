<script language="JavaScript">
    function confirmUpdate() {
        return confirm('Are you sure you want to Update this?');
    }
</script>

<?php
$connect = mysqli_connect("localhost", "root", "", "hotel");

$sql = 'SELECT * FROM `room`';
$result = mysqli_query($connect, $sql);

if (!$result) {
    echo mysqli_error() . '<br>';
    die('Can not access database!');
} else {
    echo '<table border="1" cellpading="0" cellspacing="0" >';
    echo '<tr>';
    echo '<td>';
    echo 'RoomID';
    echo '</td>';
    echo '<td>';
    echo 'Floor';
    echo '</td>';
    echo '<td>';
    echo 'Price';
    echo '</td>';
    echo '<td>';
    echo 'Single/Double';
    echo '</td>';
    echo '<td>';
    echo 'RoomType';
    echo '</td>';
    echo '<td>';
    echo 'Update?';
    echo '</td>';
    echo '</tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['Room_id'] . '</td>';
        echo '<td>' . $row['Floors'] . '</td>';
        echo '<td>' . $row['Price'] . '</td>';
        echo '<td>' . $row['SD'] . '</td>';
        echo '<td>' . $row['Room_Type'] . '</td>';

        echo '<td>';
        echo '<form action="update2.php" method="post">';
        echo '<input type="text" name="Room_id" id="Room_id" value="' . $row['Room_id'] . '" hidden>';
        echo '<input type="submit" value="Update" onclick="return confirmUpdate()">';
        echo '</form>';
        echo '</td>';

        echo '</tr>';
    }
    echo '</table>';
    mysqli_close($connect);
}
?>