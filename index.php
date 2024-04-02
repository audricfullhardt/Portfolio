<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <title>Audric Fullhardt</title>
</head>
<body>
    <div id="landing-page">
        <header>
            <nav>
                <ul>
                    <li><a href="https://audric-fullhardt.fr/">HOME</a></li>
                    <li><a href="#skills-page">SKILLS</a></li>
                    <li><a href="#contact-page">CONTACT</a></li>
                </ul>
            </nav>
            <div id="dark-light-mode-container" onclick="toggleDarkMode()"></div>
        </header>
        <div id="titles">
            <h1 id="titre1">AUDRIC FULLHARDT</h1>
            <h1 id="titre2">Junior Developer</h1>
        </div>
    </div>
    <div id="presentation-page">
        <div id="presentation-grid">
            <div id="img-grid"><img src="images/audric.jpg" alt=""></div>
            <div id="txt-grid"><p>My name is Audric FULLHARDT, I am 19 years old and I am currently a student in the BUT MMI program at the IUT of Troyes.<br><br> As part of my training, I am looking for an apprenticeship in front-end web development for my second and third years, which will take place from September 2024 to August 2026.<br><br> I am open to opportunities in both Paris and Troyes.</p></div>
        </div>
    </div>
    <div id="skills-page">
        <h1>MY SKILLS</h1>
        <div id="main-skill">
            <h2>Front-End</h2>
            <div id="frontend-skills" class="skills">
                <ul>
                    <li><div><img src="images/frontend/html.svg" alt="" class="skills-img"></div></li>
                    <li><div><img src="images/frontend/css.svg" alt="" class="skills-img"></div></li>
                </ul>
            </div>
            <h2>Back-End</h2>
            <div id="backend-skills" class="skills">
                <ul>
                    <li><div><img src="images/backend/php.svg" alt="" class="skills-img"></div></li>
                    <li><div><img src="images/backend/sql.svg" alt="" class="skills-img"></div></li>
                </ul>
            </div>
            <h2>Tools</h2>
            <div id="tools-skills" class="skills">
                <ul>
                    <li><div><img src="images/tools/docker.svg" alt="" class="skills-img"></div></li>
                    <li><div><img src="images/tools/figma.svg" alt="" class="skills-img"></div></li>
                    <li><div><img src="images/tools/vscode.svg" alt="" class="skills-img"></div></li>
                </ul>
            </div>
            <h2>Design and Audio-Visual</h2>
            <div id="design-skills" class="skills">
                <ul>
                    <li><div><img src="images/audio-visual/photoshop.svg" alt="" class="skills-img"></div></li>
                    <li><div><img src="images/audio-visual/illustrator.svg" alt="" class="skills-img"></div></li>
                    <li><div><img src="images/audio-visual/premiere.svg" alt="" class="skills-img"></div></li>
                    <li><div><img src="images/audio-visual/after-effect.svg" alt="" class="skills-img"></div></li>
                </ul>
            </div>
            <h2>Office</h2>
            <div id="office-skills" class="skills">
                <ul>
                    <li><div><img src="images/office/word.svg" alt="" class="skills-img"></div></li>
                    <li><div><img src="images/office/powerpoint.svg" alt="" class="skills-img"></div></li>
                    <li><div><img src="images/office/excel.svg" alt="" class="skills-img"></div></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="works-page">
        <h1>MY WORKS</h1>
        <div id="works-grid">
            <div><a href="http://mmi23a09.sae105.ovh" target=_blank><img src="images/works/sae105.jpg" alt="" class="works-img"></a></div>
            <div><p>During this project, I had to create a website on a subject of my choice. This site had to contain a specific page with 50 data using the DataTable library, a gallery page with the possibility of uploading images, and a contact page with a mail sending form. All of this had to be secured and only accessible with a password.</p></div>
            <div><a href="https://youtu.be/D3bpEEzLWsM" target=_blank><img src="images/works/sae104.jpg" alt="" class="works-img"></a></div>
            <div><p>During this project,  in groups of 4-5 students,  we had to conduct a 3-minute maximum interview focusing on the passion of a group member. We interviewed Pauline about Padel. This interview had to be shot in angle/reverse-angle style with an introduction, graphics, and English subtitles.</p></div>
            <div><a href="https://mmi23a09.sae203.ovh" target=_blank><img src="images/works/sae203.png" alt="" class="works-img"></a></div>
            <div><p>During this project, I had to create a website individually presenting data of my choice. The data is stored in a MySQL database for easy manipulation. There is a back office allowing an administrator to easily manage this data (add data, modify data, delete data).</p></div>
        </div>
    </div>
    <div id="contact-page">
        <h1>YOU CAN CONTACT ME HERE !</h1>
        <ul>
            <li><a href="https://www.linkedin.com/in/audric-fullhardt/" target=_blank><button id="button-linkedin"><div class="flex-img"><img src="images/linkedin.svg" alt=""></div></button></a></li>
            <li><a href="mailto:audric.fullhardt.pro@gmail.com" target=_blank><button id="button-email"><div class="flex-img"><img src="images/email.svg" alt=""></div></button></a></li>
            <li><a href="tel:0783629498"><button id="button-phone"><div class="flex-img"><img src="images/phone.svg" alt=""></div></button></a></li>
        </ul>
    </div>
    <footer>
        <ul>
            <li><p>© audric fullhardt 2024</p></li>
            <li><a href="#landing-page">go to top</a></li>
        </ul>
    </footer>
    <script src="scripts/scripts.js"></script>
</body>
</html>