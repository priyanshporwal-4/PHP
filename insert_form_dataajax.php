<?php


$conn = mysqli_connect("localhost", "root", "", "form");


$name = $_POST['name'];
$email = $_POST['email'];


$query = "INSERT INTO ajax_form(name,email) VALUES ('$name','$email')";


$result = mysqli_query($conn, $query);
