<?php

// connect to the bookdb database
    $host = '192.168.18.75:8056';
    $dbname = 'logistic_management';
    $username = 'root';
    $password = '';

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    
    $customer = [
	    'status' => 1,
];

$sql = 'UPDATE customer
        SET status = :status
        WHERE status = 0
        ';

// prepare statement
$statement = $conn->prepare($sql);

// bind params
$statement->bindParam(':status', $customer['status'], PDO::PARAM_INT);

// execute the UPDATE statment
if ($statement->execute()) {
	echo 'Status has been updated successfully!';
}
?>