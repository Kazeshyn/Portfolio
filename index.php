<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens et Plugins -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <title>Merouane Idriss</title>
</head>

<body>
    <nav>
        <a href="./index.php" class="logoheaderlink"><img src="./images/logo-header.png" alt="Logo, retour à l'accueil (page actuelle)." class="logoheader"></a>
        <ul>
            <li>
            <a href="./portfolio-index.php">Portfolio</a>
            <a href="./contact.php" class="endflexgap">Contact</a>
            </li>
        </ul>
    </nav>
    <main>
        <section class="first-section">
            <img src="./images/acceuil.jpg" alt="" class="accueilimg">
            <h1><img src="./images/h1img.png" alt="" class="h1img"></h1>
            <a href="#s2"><div style="width: 2em; height: 2em; background-color: transparent; z-index: 80; 
            bottom: 25px; position: absolute; border-width: 0 0.25em 0.25em 0; border-style: solid; border-color: black; animation: scrolldown 1.2s ease-in-out infinite 0.15s;" class="scroll"></div></a>
            <a href="#s2"><div style="width: 2em; height: 2em; background-color: transparent; z-index: 80; 
            bottom: 40px; position: absolute; border-width: 0 0.25em 0.25em 0; border-style: solid; border-color: black; animation: scrolldown 1.2s ease-in-out infinite;"class="scroll"></div></a>
        </section>
        <section class="second-section" id="s2">
            <div>
                <img src="./images/apropos.png" alt="" class="apropos">
                <img src="./images/imgapropos.jpg" alt="" class="imgapropos">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, veniam quod repudiandae ipsum quidem illum perferendis magnam in quo ratione. Dolor accusantium corporis ipsa aperiam laboriosam, beatae sint amet laudantium! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore error perspiciatis voluptas neque molestiae deleniti delectus nihil cum quam eaque, minus dolores, exercitationem at sed praesentium mollitia molestias repellendus tempora!</p>
        </section>
        <section class="third-section" id="s3">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, veniam quod repudiandae ipsum quidem illum perferendis magnam in quo ratione. Dolor accusantium corporis ipsa aperiam laboriosam, beatae sint amet laudantium!
            </p>
            <div>
                <img src="./images/cvvtext.png" alt="CV Vidéo" class="cvimage">
                <iframe width="80%" height="40vh" src="https://www.youtube.com/embed/InMcm5gqHUs" title="CV Vidéo - Benjamin Croizet" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </section>
        <section class="fourth-section">
            <img src="./images/portfoliotext.png" alt="Portfolio" class="imageportfolio">
            <div class="gridportfolio">
                <!-- slider -->
                <div id="slider">
                    <figure>
                        <img src="./images/sliderfill.png" alt>
                        <img src="./images/sliderfill.png" alt>
                        <img src="./images/sliderfill.png" alt>
                        <img src="./images/sliderfill.png" alt>
                        <img src="./images/sliderfill.png" alt>
                    </figure>
                    <!-- fin slider -->
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non doloribus impedit cupiditate fuga ut sint animi commodi ducimus quam, nostrum odit ea labore, adipisci dignissimos iste quia dolorem libero perspiciatis!</p>
                    <div class="divbutton">
                        <a href="" class="textbutton">Portfolio > </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <a href="" class="gapfooter">Plan du site</a>
        <a href="">Mentions légales</a>
        <a href="./contact.php">Contact</a>
        <a href="./index.php" class="logoheaderlink"><img src="./images/logo-header.png" alt="Logo, retour à l'accueil (page actuelle)." class="logofooter"></a>
    </footer>
</body>

</html>