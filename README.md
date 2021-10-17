# plx-custom-static-home

exemple d'utilisation d'un template customisé pour une page statique dans pluxml .
complément par l'exemple pour https://wiki.pluxml.org/developper/developpement/#creer-un-template .

Usage:
* Ajouter le fichier `statique-home-blog-php` dans le repertoire de votre thème.
* Ajouter le fichier `home-static.css` dans le repertoire CSS de votre thème.
* Dans la partie édition de votre page statique, choissisez le template `statique-home-blog.php`.

NOTE:
Ce template ne sera utilisé que si PluXml est configuré avec une page statique en page d'acceuil, si ce n'est pas le cas, le template `statique.php` sera chargé.

Cette vérification est faites au début du fichier du template :
```
<?php 
 // on valide le template si la configuration de PluXml à une page statique en acceuil.
 if ($_SERVER['REQUEST_URI'] !=='/') {
	 include __DIR__.'/static.php';
	 exit;
	 }
?>
```
