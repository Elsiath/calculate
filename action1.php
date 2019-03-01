<?php
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'calculator');

$input = filter_input_array(INPUT_POST);

$headphone_name = mysqli_real_escape_string($connect, $input["headphone_name"]);
$adult_price = mysqli_real_escape_string($connect, $input["adult_price"]);
$student_price = mysqli_real_escape_string($connect, $input["student_price"]);

if($input["action"] === 'edit')
{
    $query = "
 UPDATE headphones
 SET headphone_name = '".$headphone_name."', 
 adult_price = '".$adult_price."', 
 student_price = '".$student_price."'
 WHERE id = '".$input["id"]."'
 ";

    mysqli_query($connect, $query);

}

echo json_encode($input);

?>
