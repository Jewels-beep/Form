<?php
if (isset($_POST['action'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    //Validate name and email
    if(empty($name) || empty($email) || empty($gender) || empty($country)) {
        $msg = 'All fields must be provided';
        header('Location: Form.php?msg='.$msg);
    }

    $file = fopen('userdata.csv', 'r+');
    fputcsv($file, array_values($_POST));
    fclose($file);
    echo 'User data saved successfully';
} 





?>