<?php

require_once './connection.php';

$estados = $connection -> query("SELECT * FROM estados");

require_once './estados.php';