<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="CSS\utility-reset.css">
        <link rel="stylesheet" href="CSS\utility-layout.css">
        <link rel="stylesheet" href="CSS\utility-typeography.css">
        <link rel="stylesheet" href="CSS\utility-colors.css">
        <link rel="stylesheet" href="CSS\project-form.css">
    </head>
    <body>
        <div class="content">
            <h3>Using CSS to style an HTML Form</h3>

            <div class="form-box">
                <form action="conformation.php" method="post">
                    <label for="name">Project Name</label>
                    <input type="text" id="name" name="name" placeholder="Project Name....">

                    <label for="description">Project Description</label>
                    <input type="text" id="description" name="description" placeholder="Project Description.....">

                    <label for="start">Start Date</label>
                    <input type="date" name="start">

                    <label for="end">End Date</label>
                    <input type="date" name="end">
                
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>