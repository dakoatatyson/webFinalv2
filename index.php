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
            <a href="index.php"><img src="Images\profile-image.png" alt="Profile Image"></a>
            <h1>Dakoata James Tyson</h1>
        </header>
        <nav>
            <ul>
                <li><a href=""><h1>CONTACT</h1></a></li>
                <li><a href=""><h1>EDUCATION</h1></a></li>
                <li><a href=""><h1>PROJECTS</h1></a></li>
                <li><a href=""><h1>WORK HISTORY</h1></a></li>
                <li><a href=""><h1>SKILLS</h1></a></li>
            </ul> 
        </nav>
        <div class="content">
            <?php 
                print("Hellow World");
            ?>

            <section class="contact">
                <h2>Contact</h2>
            </section>

            <section class="education">
                <h2>Education</h2>
            </section>

            <section class="Projects">
                <h2>Projects</h2>
            </section>

            <section class="work-history">
                <h2>Work History</h2>
            </section>

            <section class="skills">
                <h2>Skills</h2>
            </section>
        </div>
        <footer></footer>
    </body>
</html>