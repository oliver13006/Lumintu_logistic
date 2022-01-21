<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $statement = $connection->prepare("
   INSERT INTO merch_eligibility (ticket_name, merch_id) 
   VALUES (:ticket_name, :merch_id)
  ");
  $result = $statement->execute(
   array(
    ':ticket_name' => $_POST["ticket_name"],
    ':merch_id' => $_POST["merch_id"],
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }
//  if($_POST["operation"] == "Edit")
//  {
//   $statement = $connection->prepare(
//    "UPDATE merch_eligibility
//    SET ticket_name = :ticket_name, total_stock = :total_stock  
//    WHERE id = :id
//    "
//   );
//   $result = $statement->execute(
//    array(
//     ':merch_name' => $_POST["merch_name"],
//     ':total_stock' => $_POST["total_stock"],
//     ':id'   => $_POST["user_id"]
//    )
//   );
//   if(!empty($result))
//   {
//    echo 'Data Updated';
//   }
//  }
}

?>