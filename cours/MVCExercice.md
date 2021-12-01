# Exercices MVC

_Dans le cas où votre instance docker n'est pas initialisée, ouvrez un terminal dans VSCode et déplacez vous dans le dossier docker (rappel : commande `cd docker`) et relancez le container à l'aide de la commande `docker-compose up` (ou `docker-compose up -d`). Vérifiez tout de même que Docker Desktop est lancé_

A partir de tout ce qu'on a vu jusqu'ici, créez un nouveau controller qui affichera 2 nouvelles pages.

Ce controller se nommera WhaleController et contiendra deux méthodes index() et image()

- Ne pas oublier de créer le fichier correspondant au controller.
  **Créer un fichier src/Controllers/WhaleController.php**
  **Ajouter méthodes index() et image() à l'intérieur de la classe WhaleController**

- Déclarer les routes nouvellement créées dans index.php avec la méthode associée.
  **Sur src/public/index.php, utiliser $router pour déclarer deux nouvelles routes /whale et /whale/image qui vont exécuter les méthodes nouvellement créées `$router->get('/whale' ...)`**

- Créez des views pour chaque page.
  **Dans le dossier views, on va créer des fichiers correspondant au nom des méthodes créées dans le WhaleController (views/whale/index.php et views/whale/image.php). Ces fichiers seront les views des méthodes**

**Implémenter les views à l'aide de la classe View qui reçoit un chemin de view et qui render la view en question. Il faudra ensuite la mettre en return de chaque méthode**
_Dans la fonction index() de notre WhaleController, on fera un return de la classe en précisant que la view à afficher est celle située dans le fichier views/whale/index.php. Le chemin n'est pas à taper en entier puisque la classe View part du principe que tout ce qu'elle va afficher est situé dans le dossier views, et se termine par .php_

```php
    public function index(): string
    {
        return (new View('whale/index'))->render();
    }
```

=============================

## Partie 2 :

Rajoutez une requête post sur la page whale/image qui réceptionnera les informations entrées dans un formulaire présent sur la page whale/image. Nommez cette nouvelle page (Celle qui reçoit la requête POST) whale/container.

**On va créer une nouvelle route post qui aura l'adresse whale/image, cette route aura pour fonction container() (qu'il faudra définir dans le WhaleController). On peut se limiter à un return var_dump($\_POST). Sur la view de la page whale/image, il y aura un formulaire à créer qui va avoir pour action /whale/image. Après avoir vérifié que la requête fonctionne (donc en envoyant le formulaire), on va renommer la route en /whale/container**

=============================

## Partie 3 :

A l'aide des schémas de ce matin, utilisez la page image (whale/image) et son formulaire pour afficher les informations entrées dans le formulaire sur la page container, dans une view container.php.
Le formulaire devra être étendu avec plusieurs champs : name,serveur,base de données, langage de base.
Il devra être affiché dans un tableau HTML/CSS (comme vous voulez) sur la page d'arrivée.
