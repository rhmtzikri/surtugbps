
<?php
$fin_title = "";
if (isset($title)) {
  $fin_title = " | ".$title;
};
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#00bcd4">
  <title>Sistem Informasi Surat Tugas<?=esc($fin_title);?></title>
  <link rel="icon" href="<?=base_url('/assets/images/logo-bps.png');?>" sizes="32x32">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/assets/fontawesome/css/all.css');?>">
  <link rel="stylesheet" href="<?=base_url('/assets/css/materialize.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('/assets/css/main.css');?>">

  <!-- Compiled and minified JavaScript -->
  <script src="<?=base_url('/assets/js/materialize.min.js');?>"></script>
</head>

<body class=" teal lighten-2">
