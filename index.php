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
        <link rel="stylesheet" href="CSS\app.css">
    </head>
    <body>
        <header>
            <a href="index.php"><img src="Images\profile-image.png" alt="Profile Image Not Found""></a>
            <h1>Dakoata Tyson</h1>
        </header>

        <nav>
            <ul>
                <li><a href="#content"><h2>CONTACT</h2></a></li>
                <li><a href="#education"><h2>EDUCATION</h2></a></li>
                <li><a href="#projects"><h2>PROJECTS</h2></a></li>
                <li><a href="#jobs"><h2>WORK HISTORY</h2></a></li>
            </ul> 
        </nav>

        <div class="content">
            <section id="contact">
                <h1>Contact</h1>
                <div class="contact-box">
                    <img src="Images\profile-image.png" alt="Profile Image Not Found">

                    <!-- to verticaly center elements that arnt divs you need to put them individualy put them into containers and vertical center containers. -->
                    <div class="contact-bar">
                        <div class="h2 container">
                            <div class="vertical-center">
                                <h2>NAME</h2>
                            </div>
                        </div>
                        <div class="p container">
                            <div class="vertical-center">
                                <p>Dakoata Tyson</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-bar">
                        <div class="h2 container">
                            <div class="vertical-center">
                                <h2>ADDRESS</h2>
                            </div>
                        </div>
                        <div class="p container">
                            <div class="vertical-center">
                                <p>Abilene TX, 79605</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-bar">
                        <div class="h2 container">
                            <div class="vertical-center">
                                <h2>PHONE NUMBER</h2>
                            </div>
                        </div>
                        <div class="p container">
                            <div class="vertical-center">
                                <p>(325)***-2977</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-bar">
                        <div class="h2 container">
                            <div class="vertical-center">
                                <h2>EMAIL</h2>
                            </div>
                        </div>
                        <div class="p container">
                            <div class="vertical-center">
                                <p>dakoatatyson@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="education">
                <h1>Education</h1>

                <div class="education-box">
                    <div class="education-degree">
                        <div class="education-img"><img src="https://www.coconutbayonline.com/wp-content/uploads/surprising-certificate-of-degree-templates-ideas.jpg" alt="Education Image Not Found"></div>
                        <div class="education-name"><h2>Sul Ross State University</h2></div>
                        <div class="education-date">2016</div>
                        <div class="education-date">2018</div>
                    </div>

                    <div class="education-degree">
                        <div class="education-img"><img src="https://www.coconutbayonline.com/wp-content/uploads/surprising-certificate-of-degree-templates-ideas.jpg" alt="Education Image Not Found"></div>
                        <div class="education-name"><h2>Maryville University</h2></div>
                        <div class="education-date">2019</div>
                        <div class="education-date">2020</div>
                    </div>
                </div>
            </section>

            <section id="projects">
                <div class="heading-box">
                    <h1>Projects</h1>
                    <a href="project-form.php" target="_blank"><img class="project-form-btn" src="http://pluspng.com/img-png/free-png-plus-sign-plus-icon-512.png" alt="Project Form Button Icon Not Found"></a>
                </div>
                
                <div class="projects-box">
                    <?php 
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

                        //prepare  and bind statement to get all the projects
                        $sql = "CALL GetProjects()";
                        $result = $connection->query($sql);

                        //make sure there are rows from the table
                        if($result->num_rows > 0){
                            //for each row in the table create a generated html project with the tables colums and data
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                    <div class="project">
                                        <div class="project-img"><img src="http://help.crossbrowsertesting.com/wp-content/uploads/2016/10/2018-11-02-15_01_26-.png" alt="Project Image Not Found"></div>
                                        <div class="description-box">
                                            <div class="project-name"><h2>'.$row["project_name"].'</h2></div>
                                            <div class="project-description"><p>'.$row["project_description"].'</p></div>
                                            <div class="project-date">'.$row["date_started"].'</div>
                                            <div class="project-date">'.$row["date_ended"].'</div>
                                        </div>
                                    </div>
                                ';
                            }
                        } else {
                            echo("0 results");
                        }

                        $connection->close();
                    ?>
                </div>
            </section>

            <section id="jobs">
                <h1>Work History</h1>

                <table style="width:100%">
                    <tr>
                        <th>Job Title</th>
                        <th>Job Description</th>
                        <th>Employer</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                    <tr>
                        <td>Work Study</td>
                        <td>Answered calls</td>
                        <td>Sul Ross</td>
                        <td>2016</td>
                        <td>2018</td>
                    </tr>
                    <tr>
                        <td>Summer Staff</td>
                        <td>Cleaned camp, served food, and worked activities</td>
                        <td>Plains Baptist Summer Camp and Retreat</td>
                        <td>2018</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <td>Tech</td>
                        <td>Installed machine images</td>
                        <td>Kforce</td>
                        <td>2019</td>
                        <td>Current</td>
                    </tr>
                </table> 
            </section>
        </div>
        <footer></footer>
    </body>
</html>