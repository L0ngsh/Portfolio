<?php
include "requestAPI.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gilberson Junior's Portfolio.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Portfolio | Gilberson</title>
    
    <link rel="shortcut icon" href="./assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/4d79059ebf.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="name"><span class="aquamarine">Gilberson Junior</span></div>
        <ul class="menuList">
            <li class="menuOptions">
                <nav><a href="#home">Home</a></nav>
            </li>
            <li class="menuOptions">
                <nav><a href="#projects">Projects</a></nav>
            </li>
        </ul>
    </header>

    <section id="home">
        <div class="container">
            <div class="homeDescription">
                <h2>
                        <span class="aquamarine">&lt;b&gt;</span>Hello<span class="aquamarine">&lt;/b&gt;</span><br>
                        I'm <spam class="aquamarine">Gilberson</spam>, back-end and front-end Web Developper
                </h2>
                <div class="desc">
                    <p>
                        Lover of programming and cyber security, check my projects on github and feel free to contact me by <span class="aquamarine">email</span> or <span class="aquamarine">instagram</span>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div class="title aquamarine">&lt;projects /&gt;</div>
            <div class="projectsWidgetArea">

                <?php
                    $side = 1;

                    foreach ($response as $project): ?>
                        <div class="<?php echo ($side == 1 ? 'left':'right'); ?>">
                            <div class="projectWidget">
                                <div class="projectTitle">
                                    <a href="<?php echo $project["html_url"]; ?>" class="aquamarine">
                                        &lt;<?php echo strtoupper($project['name']); ?>&gt;
                                    </a>
                                </div> 
                                <div class="projectInfo">   
                                    <div class="projectDesc">
                                        <?php
                                            if (!empty($project["description"])) {
                                                echo $project["description"];
                                            } else {
                                                echo "No description, website, or topics provided.";
                                            }
                                        ?>
                                    </div>
                                    <div class="projectLanguage aquamarine"><?php echo $project['language']; ?></div>
                                </div>        
                            </div>        
                        </div>
                
                <?php 
                    $side *= -1;
                    endforeach; 
                ?>

            </div>
        </div>
    </section>

    <footer>© Gilberson Junior</footer>

    
    <div class="social">
        <a href="<?php echo $githubProfileLink; ?>"><i class="fab fa-github"></i></a>
        <a href="<?php echo 'mailto:'.$email; ?>"><i class="far fa-envelope-open"></i></a>
        <a href="<?php echo $instagramProfileLink; ?>"><i class="fab fa-instagram"></i></a>
    </div>

    <script src="assets/js/scroll.js"></script>
    <script src="assets/js/projectWidget.js"></script>
</body>
</html>