# Exercices MVC

_Dans le cas où votre instance docker n'est pas initialisée, ouvrez un terminal dans VSCode et déplacez vous dans le dossier docker (rappel : commande `cd docker`) et relancez le container à l'aide de la commande `docker-compose up` (ou `docker-compose up -d`). Vérifiez tout de même que Docker Desktop est lancé_

A partir de tout ce qu'on a vu jusqu'ici, créez un nouveau controller qui affichera 2 nouvelles pages.

Ce controller se nommera WhaleController et contiendra deux méthodes index() et image()

- Ne pas oublier de créer le fichier correspondant au controller.

- Déclarer les routes nouvellement créées dans index.php avec la méthode associée.

- Créez des views pour chaque page.

=============================

## Partie 2 :

Rajoutez une requête post sur la page whale/image qui réceptionnera les informations entrées dans un formulaire présent sur la page whale/image. Nommez cette nouvelle page (Celle qui reçoit la requête POST) whale/container.
