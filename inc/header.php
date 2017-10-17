<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?php
  // ### TODO ###
  // NEED SET DEFAULTS IF VAR IS NOT SET
  if(isset($title)) echo $title; ?> • Rob Sturgill</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php if(isset($description)) echo $description; ?>" />
  <meta name="author" content="Rob Sturgill">
  <meta name="theme-color" content="#ffffff">
  <link rel="icon" type="image/ico" href="favicon.ico" />
  <link href="/assets/css/style.min.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Poppins:500,600" rel="stylesheet">
  <?php if(isset($canonical)) echo '<link rel="canonical" href="' .$canonical. '">'; ?>

  <!--
   For efficiency sake, this was a purchased theme that has been extended for my needs.

   xxxxx    xxxxx   xxxxx
   xx   x  xx   xx  xx   x
   xx  xx  xx   xx  xx xx
   xx xx   xx   xx  xx   x
   xx  xx   xxxxx   xx xx


    xxxx xxxxxx  xx   xx  xxxxx    xxxx   xx  xx    xx
   xx      xx    xx   xx  xx   x  xx      xx  xx    xx
     xx    xx    xx   xx  xx  xx  xx  xx  xx  xx    xx
      xx   xx    xx   xx  xx xx   xx   x  xx  xx    xx
   xxxx    xx     xxxxx   xx  xx   xxxxx  xx  xxxx  xxxx

  -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3887215-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-3887215-1');
  </script>
</head>