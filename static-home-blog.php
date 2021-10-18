<?php if (!defined('PLX_ROOT')) exit; ?>
<?php 
 // on valide le template si cette page statique s'affiche en page d'accueil.
 if ($_SERVER['REQUEST_URI'] !=='/') {
	 include __DIR__.'/static.php';
	 exit;
	 }
?>

<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
<?php
	$plxShow->meta('description');
	$plxShow->meta('keywords');
	$plxShow->meta('author');
?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/plucss.css?v=1.3.1" media="screen,print"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css?v=<?php echo PLX_VERSION ?>" media="screen"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" media="screen"/>
<?php
	$plxShow->templateCss('css/');
	$plxShow->pluginsCss();
?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlPostsRssFeed($plxShow->plxMotor->mode) ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body id="top" class="page mode-<?php $plxShow->mode(true) ?> home-blog">

<header>
  <h1><?php $plxShow->mainTitle(); ?></h1>
  <h2><?php $plxShow->subTitle(); ?></h2>
</header>
<nav>

		<?php $plxShow->pageBlog('<a href="#page_url" title="#page_name"><i class="fab fa-readme fa-2x"></i></a>'); ?>
</nav>
<main>
  <h2><?php $plxShow->staticTitle(); ?></h2>
  <section><?php $plxShow->staticContent(); ?></section>
</main>
<aside>
	<ul>
		<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>
		<li style="min-width:100%;"></li>
		<?php $plxShow->staticList('','<li><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
	</ul>

</aside>
<footer>
  <p class="text-center"><a href="<?= PLX_URL_REPO?>" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>"><i class="fas fa-server"></i></a>
				<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>				
				<br><i class="far fa-copyright" title="&copy; about CSS" > 2008 - <?php echo date('Y'); ?></i>  <a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><i class="fas fa-toolbox">&nbsp;</i></a></p>
</footer>

</body>
</html>