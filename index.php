<?php
include "requestAPI.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Short description about your site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="application-name" content="Portfolio">

    <link rel="shortcut icon" href="./assets/img/favicon.ico">

    <title>Portfolio</title>
</head>
<body>
    <section class="topbar">
        <div class="container row">
            <div class="name">Name</div>
        </div>
    </section>

    <section class="main">
        <div class="container colunm">
            <div class="projectsList">
                <ul>
                    <?php
                        foreach ($response as $project) {
                            ?>
                                <li class="project">
                                    <a class="projectTitle" href="<?php print($project["html_url"]);?>">
                                        <?php print(strtoupper($project["name"]));?>
                                    </a>
                                    <div class="projectDescription">
                                        <?php
                                            if (!empty($project["description"])) {
                                                print($project["description"]);
                                            } else {
                                                print("No description, website, or topics provided.");
                                            }
                                        ?>
                                    </div>
                                    <div class="projectLanguage"><?php print($project["language"]);?></div>
                                </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="contact">
                <div class="social">        
                    <div class="socialItem">
                        <a href="<?php print($githubProfileLink);?>">
                            <img src="assets/img/github.svg" alt="<?php print($githubUserName);?>">
                        </a>
                    </div>
                    <div class="socialItem">
                        <a href="<?php print($instagramProfileLink);?>">
                            <img src="assets/img/instagram.svg" alt="<?php print("@".$instagramUserName);?>">
                        </a>
                    </div>
                </div>
                <div class="email"><?php print($email);?></div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="./assets/js/footerAdjust.js"></script>
</body>
</html>