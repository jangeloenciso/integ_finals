<?php session_start() ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles.css">
    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
</head>

<body>