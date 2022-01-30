<!DOCTYPE html>
<html>
<head>
    <title>Portfolio - Tighiouart</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="Portfolio" content="Site web de Portfolio d'un développeur web ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="script.js"></script>
</head>
<body>

<header>
    <div>
        <img src="img/MT.png" alt="Icon du site web"> 
        <h2 id="header-name">Moncef Tighiouart</h2>
    </div>
    <div>
        <a href="CV Tighiouart Moncef.pdf" target="_black"><button id="cv">Mon CV</button></a>
        <a href="https://github.com/Moncef-Tighi" target="_black"><img src="img/GitHub-logo.png" alt="Lien vers ma page gitHub"></a>
    </div>
</header>


<section id="introduction">
    <div>
        <h1>Bienvenue ! </h1>
        <h3>Je suis un développeur web à Alger qui construit des sites web depuis quelques années. 
            <a href="#portfolio-section">Voici quelques exemples.</a>
        </h3>    
    </div>
</section>

<section id="portfolio-section">
    <h1>Mes derniers projets : </h1>
    <div id="portfolio">
        <article>
            <a href="https://basic-chat-box.herokuapp.com/"><img src="img/chatapp.PNG" alt="Miniature d'application chat app">
            <h2>Chat-app</h2></a>
            <p>Un site web de messagerie en temps réel réalisé avec SocketIo.
            </p>
            <ul>
                <li class="tags node">NodeJs</li>
                <li class="tags express">Express</li>
                <li class="tags socket">Websocket</li>
            </ul>
            <div class="links">
                <a href="https://github.com/Moncef-Tighi/Chat-App" ><img src="img/GitHub-logo.png" alt="Lien vers la page github du projet"></a>
                <a href="https://basic-chat-box.herokuapp.com/" ><img src="img/link.svg" alt="Lien vers le projet"></a>
            </div>
        </article>

        <article>
            <a href="https://bibliotheque-api.herokuapp.com/"><img src="img/bibliotheque.PNG" alt="Miniature de l'application Bibliothèque">
            <h2>La Bibliothèque</h2></a>
            <p>Mon meilleur projet. Utilise un dataset de 100K livres stockés via atlas et une API de google
            </p>
            <ul>
                <li class="tags node">NodeJs</li>
                <li class="tags express">Express</li>
                <li class="tags rest">RestfulAPI</li>
                <li class="tags mongo">MongoDB</li>
            </ul>
            <div class="links">
                <a href="https://github.com/Moncef-Tighi/bibliotheque" ><img src="img/GitHub-logo.png" alt="Lien vers la page github du projet"></a>
                <a href="https://bibliotheque-api.herokuapp.com/" ><img src="img/link.svg" alt="Lien vers le projet"></a>
            </div>
        </article>

        <article>
            <a href="https://projet-cms-blog.herokuapp.com/"><img src="img/cms.PNG" alt="Miniature de l'application CMS">
            <h2>CMS - Blog</h2></a>
            <p>Un site plus standard avec une page administrateur avancé.
            </p>
            <ul>
                <li class="tags php">PHP</li>
                <li class="tags sql">SQL</li>
            </ul>
            <div class="links">
                <a href="https://github.com/Moncef-Tighi/CMS" ><img src="img/GitHub-logo.png" alt="Lien vers la page github du projet"></a>
                <a href="https://projet-cms-blog.herokuapp.com/" ><img src="img/link.svg" alt="Lien vers le projet"></a>
            </div>
        </article>
    </div>  


</section>

<section id="contact">
    <h1>Contact : </h1>

    <div id='addresse'>
        <div>
            <h2>Adresse email : </h2>
            <h3>monceftighiouart@gmail.com</h3>
        </div>
        <div>
            <h2>Numéro de téléphone : </h2>
            <h3>0667536033</h3>    
        </div>
    </div>

    <div id="form">
        <h3>Formulaire pour me contacter rapidement : </h3>
        <?php 
            if(isset($_GET["mailsend"])) {
                echo "<h4 style='color:green;'>Votre email a bien été envoyé !</h4>";
            }
        ?>
        <form action="mail.php">
            <input type="text" name="nom" placeholder="Votre nom">
            <input type="mail" name="email" placeholder="Adresse Email">
            <input type="text" name="titre" placeholder="Titre">
            <textarea name="message" cols="30" rows="10" placeholder="Votre message"></textarea>
            <button name="submit" type="submit">Envoyer</button>
        </form>
    </div>

</section>
</body>
</html>
