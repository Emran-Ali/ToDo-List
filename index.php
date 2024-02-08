<?php
    include 'conn.php';

   $query= "select * from task";
    $result = $conn->query($query);


?>
<html>
    <head>
        <title>ToDo List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="body">
        <h1> Welcome to To Do List</h1>

        <form action="action.php"  method="post">
            <input class="input" type="text" name="task" placeholder="input your new task">
            <button type="submit" >Add</button>
        </form>
        <hr>
        <ul>
            <?php
            if($result-> num_rows < 0)
            {
               echo "<h3>No task todo </h3>";
            }
            else
                while($row = $result-> fetch_assoc())
                {
                $tsk=$row['Text'];
                $val= $row['id'];
                echo "<li> <input type=checkbox onclick=\"location.href = 'action2.php?id=$val'\"> <p>$tsk</p></li>";
                
                }
            
        ?>
        </ul>
        </div>
    </body>

</html>