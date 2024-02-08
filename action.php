"INSERT INTO `task` (`id`, `Text`) VALUES ('1', 'task 1');"
"select Text from task";


<?php

include 'conn.php';

if(isset($_POST['task'])){
    $task = $_POST['task'];
    $sql = "INSERT INTO `task` ( `Text`) VALUES ('$task');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

}

header("Location: index.php");

?>