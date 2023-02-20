<?php

\\ Script for redirect url

$domain = 'https://oxeimoveis.com.br/';

$email = $_GET['email'];

$page = 'redefinir-senha?email=';

header("Location: .$domain.$page.$email");

die();
