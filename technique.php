<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Blog culture du numérique</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
  </head>
  <body>
    <?php require 'templates/header.php'; ?>
    <div class="wrapper">
        <h2>Démarche technique</h2>
              <!-- Démarche -->
        <div class="article-contain">
            <h3>Usage du Flat Design</h3> 
            <p>Tout d'abord, après avoir pris connaissance du code HTML, nous avons décidé de revoir la structure afin d'optimiser le SEO et le CSS. Nous voulions un design épuré et simple (Flat Design), qui mette en avant les articles. Cela favorise l'accessibilité du site, optimise le parcours utilisateur (en diminuant le nombre d'étapes.) et réduit la consommation à travers des ressources inutiles.</p>
            <h3>Technologies adaptées</h3>
            <p>Pour réduire la consommation d'énergie, nous avons choisi des technologies peu consommatrices d'énergie, telles que le HTML et le CSS, plutôt que des technologies plus gourmandes. Toutefois, nous avons utilisé du PHP et du Javascript en faible quantité, en prenant soin de ne pas surcharger le code avec des fonctionnalités complexes et superflues.</p>
            <h3>Mobile First</h3> 
            <p>Notre premier but était de rendre avant tout le site accessible, et nous avons opté pour un développement en "Mobile First". En effet, en privilégiant cette approche, nous pouvions sélectionner et adapter nos ressources en fonction des besoins.</p> 
            <h3>Compression des images</h3> 
            <p>Ensuite, pour minimiser les émissions de carbone, nous avons compressé et converti en .webp (un format optimisé pour le web) les images afin de réduire drastiquement leurs poids (certaines sont passées de 900 ko à 40 ko) et leur impact sur la bande passante.</p> 
            <h3>Un code épuré et compressé</h3>
            <p>Toujours dans le but de réduire l’impact environnemental et minimiser la quantité de données transférées lors des chargements de page, nous avons optimisé notre code HTML et créé des variables dans notre CSS afin d’éviter les répétitions. De plus, le code a été minimisé avec un outil qui permet de supprimer tous les caractères inutiles.</p>
            <div class="source">
            <h2>Sources</h2>
            <li><a href="https://github.com/cnumr/best-practices/tree/main/chapters">Best Practices - Dépot Github</a></li>
        </div>
        </div>
       
    </div>

    <!-- Footer -->
    <footer>
      <p>
        Par
        <span style="font-weight: bold; text-transform: uppercase"
          >Guillaume GORVEL / Thibaut Therouetin - TPF</span
        >
        - BUT MMI 2023 - Culture du numérique
      </p>
    </footer>
    <script src="javascript/script.js"></script>
  </body>
</html>
