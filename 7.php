<?php
// Database name
$database_name = "hobi.db";
// Database Connection
$db = new SQLite3($database_name);
// Makes query with rowid
$query = "SELECT categories.id, categories.name, GROUP_CONCAT(hobbies.name) FROM categories,hobbies WHERE categories.id = hobbies.person_id GROUP BY hobbies.person_id ORDER BY categories.name;";
 
// Run the query and set query result in $result
// Here $db comes from "db_connect.php"
$result = $db->query($query);
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>7 : Data List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">HOBBY MEREKA</h1>
        <table width="100%" class="table table-striped">

            <thead class="thead-dark">
            <tr>
                <td scope="col">person_id</td>
                <td scope="col">name</td>
                <td scope="col">person_hobbies</td>
            </tr>
            </thead>
            <?php while($row = $result->fetchArray()) {?>
            <tr>
                <td><?php echo $row[0];?></td>
                <td><?php echo $row[1];?></td>
                <td><?php echo $row[2];?></td>
            </tr>

            <?php } ?>

        </table>

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>