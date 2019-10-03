# Site web
http://libre-en-fete-tregor.fr/

## Pour modifier
* index.php : routage des différentes pages
* data.php : tableaux de données à afficher (j'aime pas écrire dans du HTML)
* views/layout.php : architecture (entête et pied de page) le body sera inclu dedans
* views/*.php : body des différentes pages

## Pour tester le site "en local"

Il faut installer un moteur pour propulser les pages PHP:
```sh
sudo apt install php7.2-cli
```

Propulsion des pages PHP :
```sh
cd www
php -S localhost:8000
```

Ouvrir l'index du site en local: http://localhost:8000

## Sources
* template: http://startbootstrap.com/template-overviews/landing-page/
* framework: http://flightphp.com/
* "PHP server on local machine ?": https://stackoverflow.com/questions/1678010/php-server-on-local-machine
* Drop down menu inspiré de https://www.pierre-giraud.com/html-css-apprendre-coder-cours/creation-menu-deroulant/
