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
  <link rel="icon" type="image/ico" href="favicon.ico" />
  <link href="style.css?<?php echo date('Y-m-d H:i:s'); ?>" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
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

</head>