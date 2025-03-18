<?php
$Room_id = $_POST['Room_id'];
$Floors = $_POST["Floors"];
$Price = $_POST["Price"];
$SD = $_POST["SD"];
$Room_Type = $_POST["Room_Type"];

$connect = mysqli_connect("localhost", "root", "", "hotel");
$sql = "UPDATE `room` SET `Floors` = '$Floors',`Price` = '$Price',`SD` = '$SD',`Room_Type` = '$Room_Type' WHERE `Room_id` = $Room_id";
$result = mysqli_query($connect, $sql);

if (!$result) {
    echo "<div style='text-align: center; margin-top: 50px; color: red; font-size: 20px;'>Error updating record</div>";
} else {
    echo "<div style='text-align: center; margin-top: 50px; font-size: 20px;'>Congratulations! The record is updated.</div>";
}
mysqli_close($connect);
?>