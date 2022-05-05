<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>page accueil</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light" id="navbar">
    <div class="container-xxl">
        <a href="index.html" class="navbar-brand">
            <img src="image/logo.png" alt="Logo retour acceuil">
        </a>
        <!-- button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav justify-content-around col-12 text-size-50">
                <li class="nav-item" id="link">
                    <a href="index.html" class="nav-link d-flex flex-column flex-md-row align-items-center">
                        <img src="image/logo.png" alt="logo" class="logo_link">
                        <h3 class="nav-title">Accueil</h3>
                    </a>
                </li>
                <svg class="svg_equipe" width="5" height="60">
                    <line x1="0" y1="0" x2="0" y2="110" stroke="#459DCA" stroke-width="3"></line>
                </svg>
                <li class="nav-item" id="link">
                    <a href="comparatif.html" class="nav-link d-flex flex-column flex-md-row  align-items-center">
                        <img src="image/logo.png" alt="logo" class="logo_link">
                        <h3 class="nav-title">Service</h3>
                    </a>
                </li>
                <svg class="svg_equipe" width="5" height="60">
                    <line x1="0" y1="0" x2="0" y2="110" stroke="#459DCA" stroke-width="3"></line>
                </svg>
                <li class="nav-item" id="link">
                    <a href="equipe.html" class="nav-link d-flex flex-column flex-md-row  align-items-center">
                        <img src="image/logo.png" alt="logo" class="logo_link">
                        <h3 class="nav-title">L'équipe</h3>
                    </a>
                </li>
                <svg class="svg_equipe" width="5" height="60">
                    <line x1="0" y1="0" x2="0" y2="110" stroke="#459DCA" stroke-width="3"></line>
                </svg>
                <li class="nav-item" id="link">
                    <a href="contact.html" class="nav-link d-flex flex-column flex-md-row  align-items-center">
                        <img src="image/logo.png" alt="logo" class="logo_link">
                        <h3 class="nav-title">Contact</h3>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>