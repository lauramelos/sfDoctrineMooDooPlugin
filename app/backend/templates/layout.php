<?php use_helper('I18N') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>

    <div id="wrapper">

      <section id="header">
        <img id="logo" src="/images/logo-bkend.png" />
        <div id="shine"></div>

        <?php include_partial('global/menu') ?>
        <?php include_partial('global/mini-panel') ?>
      </section>
       <?php echo $sf_content ?>
       <?php include_partial('global/footer') ?>

    </div>
    
  </body>
</html>
