<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "app";
        $password = "BBv9FhR8Cubcb2cs";
        $dbname = "protfolio";
    
        // Create Connection
        $connection = new mysqli($servername, $username, $password, $dbname);
    
        //Check connection
        if($connection->connect_error){
        die("Connection failed: " + $connection->connect_error);
        }
    
        //echo("Connected........... ");
    
        //prepare  and bind statement to create a project
        $statement = $connection->prepare("CALL CreateProject(?, ?, ?, ?)");
        $statement->bind_param("ssss", $name, $description, $start, $end);

        $name =  $description = $start = $end = '';

        if (empty($_POST["name"])) {
            die('Name is required');
        } else {
            $name = $_POST["name"];
        }

        if (empty($_POST["description"])) {
            die('Description is required');
        } else {
            $description = $_POST["description"];
        }

        if (empty($_POST["start"])) {
            die('Start Date is required');
        } else {
            $start = $_POST["start"];
        }

        if (empty($_POST["end"])) {
            die('End Date is required');
        } else {
            $end = $_POST["end"];
        }

        //set parameters and execute
        $statement->execute();

        $statement->close();
        $connection->close();
      }
    ?>

    <h1>You have succsesfuily created a new project</h1>
</body>
</html>