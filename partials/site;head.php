<!doctype html>
<html lang="en">
<?
$charset = $site_settings->charset;
$meta_description = ($meta_description = strlen(h($this->page->description)) > 0) ? $meta_description : $site_settings->meta->default_description;
$meta_keywords = ($meta_keywords = strlen(h($this->page->keywords))) > 0 ? $meta_keywords : $site_settings->meta->default_keywords;
?>
  <head>
    <title><?= h($this->page->title) ?> - <?= $site_settings->company->title ?></title>
    <meta charset="<?= $charset ?>" />
    <meta name="description" content="<?= $meta_description ?>" />
    <meta name="keywords" content="<?= $meta_keywords ?>" />
    
    <script>
      // send people with javascript to the Ajax navigation
      if(window.location.pathname !== '/')
        window.location = '/#' + window.location.pathname;
    </script> 
    
    <link rel="shortcut icon" href="<?= site_url('/') ?>resources/favicon.ico" />
    
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?= site_url($site_settings->blog->path) ?>feed/" />
    
    <!--[if lte IE 6]><script src="http://letskillie6.googlecode.com/svn/trunk/letskillie6.pack.js"></script><![endif]-->
    <!--[if lt IE 8]><script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js"></script><![endif]--> 
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <?= $this->css_combine(array(
      '@vendor/reset.css',
      '@vendor/typographic.css',
      '@vendor/generic.css',
      '@vendor/form.css',
      'http://fonts.googleapis.com/css?family=Ubuntu',
      '@css/plugins.css',
      '@css/main.css'
    )) ?>
    
    <?= $this->js_combine(array(
      'jquery', 
      '@vendor/jquery-ui-1.8.5.custom.min.js',
      'ls_core_jquery',
      '@vendor/jquery.mousewheel.js',
      '@vendor/innershiv.js',
      '@vendor/wheelintent.js',
      '@vendor/jScrollPane.js',
      '@vendor/jquery.address-1.4.js',
      '@vendor/jquery.scrollTo-1.4.2-min.js',
      '@vendor/jquery.bar.js',
      '@vendor/jquery.ls_alert.js',
      '@js/menu.js',
      '@js/main.js'
		)) ?>

    <?= $this->render_head() ?>
