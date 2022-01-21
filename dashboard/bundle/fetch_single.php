<?php
include('db.php');
include('function.php');
if(isset($_POST["merch_id"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM merch_eligibility
  WHERE id = '".$_POST["merch_eligibility_id"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["ticket_name"] = $row["ticket_name"];
  $output["merch_id"] = $row["merch_id"];
 }
 echo json_encode($output);
}
?>
   