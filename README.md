# plx-custom-static-home

exemple d'utilisation d'un template customisé pour une page statique dans pluxml .

complément par l'exemple pour https://wiki.pluxml.org/docs/develop/templates.html .

**Usage:** *Dezipper cette archive dans le repertoire de votre théme , exemple pour le théme par défaut*, ou 
* Ajouter le fichier `statique-home-blog-php` dans le repertoire de votre thème.
* Ajouter le fichier `home-static.css` dans le repertoire CSS de votre thème.
* Dans la partie édition de votre page statique, choissisez le template `statique-home-blog.php`.

NOTE:
Ce template ne sera utilisé que si votre page statique se trouve en page d'acceuil, sinon ce sera le template `statique.php` qui sera chargé.

Cette vérification est faites au début du fichier du template :
```
<?php 
 # on valide le template si la page statique s'affiche en acceuil.
 if ($_SERVER['QUERY_STRING'] !=='') {
	 include __DIR__.'/static.php';exit;
	 }
?><!DOCTYPE html>
```

exemple d'utilisation visible à http://gcyrillus.alwaysdata.net/ 

<img src="https://i.stack.imgur.com/qJolo.jpg">
