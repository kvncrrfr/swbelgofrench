<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/master.css">
	<title>Document</title>
  <link rel="stylesheet" href="<?= VIEW . 'css/reset.css' ?>" >
	<link rel="stylesheet" href="<?= VIEW . 'css/bootstrap.min.css' ?>" >
  <link rel="stylesheet" href="<?= VIEW . 'css/font-awesome.min.css' ?>" >
  <link rel="stylesheet" href="<?= VIEW . 'css/style.css' ?>" >
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="Flogo">&nbsp;F </span>&nbsp;&nbsp;FRESH'R</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php?action=home"><span class="glyphicon glyphicon-home"></a></li>
        <li><a href="index.php?action=login">Login</a></li>
        <li><a href="index.php?action=inventaire">Inventaire</a></li>
        <li><a href="index.php?action=liste-lot">Liste des lots</a></li>
        <li><a href="index.php?action=recette">Recette</a></li>
        <li><a href="index.php?action=home">Déconnexion</a></li>
    </ul>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?action=login"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="index.php?action=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
