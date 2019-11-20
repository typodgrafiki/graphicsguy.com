<?php   
    define('BASE_PATH', '');
    include (BASE_PATH.'assets/reset_var.php');
    $homepage = 1;
    $menu1_active = 1;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Graphics Bro - Graphic freelancer / Front-end Developer</title>
        <?php include (BASE_PATH.'assets/head.php'); ?>
        <link rel="stylesheet" type="text/css" href="css/homepage.css">
    </head>
    <body class="bg-white">
        <?php include (BASE_PATH.'assets/top.php'); ?>
        <section id="section1" class="section text-center">
            <div class="container">
                <h1 class="title">
                    Designer & <span class="nowrap">Front-end</span> Developer
                </h1>
                <p class="subtitle">
                    I design beautiful things, code and like what I do.
                </p>
                <p>
                    <img class="img-profile img-responsive" src="images/my_face.jpg">
                </p>
            </div>
            <p>
                <img class="hidden-xs img-skills img-responsive" src="images/my-skils-ui.png">
                <img class="visible-xs img-skills img-responsive" src="images/my-skils-ui-xs.png">
            </p>
        </section>
        <section id="about-me" class="section text-center">
            <div class="container">
                <h3>Hi! I am Grzegorz.</h3>
                <p>My birthday dates back to the time people were watching empty store shelves, and Pripyat was empty before it struck midnight. Today I am already an adult, but I am still moved looking at the beauty of nature, how many beautiful moments we pass by at my own request and I learn to notice each of them. Because science is our whole life, every day brings us something new, sometimes challenges and sometimes only new thoughts. Thoughts are very important because every idea begins with them. The idea of creating something that will give joy and happiness will please the eye and give information.</p>
                <p>The time that has passed since the 1980s was full of information, including Freddie's death, Dolly's birthday, or internet development. And this last point took my curiosity for longer. This road led me to an art college, where, apart from designing, we also dealt with painting, in which I realize myself at home. Designing, however, took my professional sphere, of which I am extremely happy, because it gives me great joy. And so we can not part today. Designing visual identity along with Key Visual and creativity and transparent information oriented websites remains particularly close to my heart.</p>
            </div>
        </section>
        <section id="skils" class="section text-center">
            <div class="flex">
                <div class="thumbnail">
                    <h2>Designer</h2>
                    <img class="img-responsive" src="images/web-designer.png">
                    <p>I value a simple content structure, clean design patterns and thoughtful interactions.</p>
                    <h4>I like to design</h4>
                    <p>UI, Web, Apps, Logo, Key Visual</p>
                    <h4>Design tools</h4>
                    <ul>
                        <li>Paper and pencil</li>
                        <li>Photoshop</li>
                        <li>Illustrator</li>
                        <li>Indesign</li>
                        <li>Balsamiq Mockups</li>
                        <li>Invision</li>
                    </ul>
                </div>
                <div class="thumbnail">
                    <h2>Front-end Developer</h2>
                    <img class="img-responsive" src="images/frontend-developer.png">
                    <p>I like to code things from scratch and enjoy implementing ideas.</p>
                    <h4>Used technologies</h4>
                    <p>HTML, CSS, jQuery, Less</p>
                    <h4>Developer Tools</h4>
                    <ul>
                        <li>Sublime Text</li>
                        <li>Bootstrap</li>
                        <li>Bulma</li>
                        <li>Codepen</li>
                        <li>Github</li>
                    </ul>

                </div>
            </div>
        </section>
        <section id="last-projects" class="section text-center">
            <div class="container">
                <h3>Recent projects</h3>
                <p>Look at the projects I completed.</p>
                <div class="flex">
                    <div class="thumbnail">
                        <a href="portfolio/mountain">
                            <img class="img-responsive" src="images/last-project/mountain-bag.jpg" alt="Project - Mountain Bag" title="Mountain Bag" width="385" height="267">
                        </a>
                    </div>
                    <div class="thumbnail">
                        <a href="portfolio/bulkibezbibulki">
                            <img class="img-responsive" src="images/last-project/bulki-bez-bibulki.jpg" alt="Project - Bułki bez bibułki" title="Bułki bez bibułki" width="385" height="267">
                        </a>
                    </div>
                    <div class="thumbnail">
                        <a href="portfolio/sincere-feelings">
                            <img class="img-responsive" src="images/last-project/sincere-feelings.jpg" alt="Project - Sincere Feelings" title="Sincere Feelings" width="385" height="267">
                        </a>
                    </div>
                </div>
                <p>
                    <a href="https://www.behance.net/grzegorz-kocik" target="_blank" class="btn btn-primary">See more on <b>Behance</b><span></span></a>
                </p>
            </div>
        </section>
        <?php include (BASE_PATH.'assets/start-project.php'); ?>
        <?php include (BASE_PATH.'assets/copyright.php'); ?>
    </body>
</html>