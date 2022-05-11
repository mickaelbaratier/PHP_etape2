<?php
setcookie(
    'LOGGED_USER',
    'Visiteur1',
    [
        'expires' => time() + 24 * 3600,
        'secure' => true,
        'httponly' => true,
    ]
);
include 'header.php';
include 'multidimentional_catalog.php';
include_once 'my-function.php';
?>
<div class="container-xl accueil">
        <div class="row g-0 bg-blue text-justify">
            <div class="col">
                <img src="image/Web Dev-Blog.png" class="img-fluid titi" alt="dessin ordinateur">
            </div>
            <div class="col">
                <div>
                    <h1>WELCOME</h1>
                    <p>
                        Vous souhaitez développer votre notoriété et valoriser en ligne votre entreprise,
                        les produits et services que vous commercialisez afin d'engendrer de nouveaux contacts et
                        prospects, générer des demandes de devis ?<br></p>
                    <p> Nous sommes source de propositions,
                        vous accompagnons et créons votre site web de présentation d'activité (site internet
                        institutionnel,présentation de catalogue produits et services)
                        afin qu'il soit le reflet de l'image de votre entreprise et dispose des fonctionnalités
                        dont vous avez fait état dans votre définition de besoin (cahier de charges).
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php
include 'print-product-for-command.php';
include 'footer.php';
?>