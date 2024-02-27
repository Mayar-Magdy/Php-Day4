<?php
$db_host ="us-cluster-east-01.k8s.cleardb.net";
$db_user ="b5897f6a86e7fd";
$db_pass ="efc38be5";
$db_name ="heroku_c3cd9cf31aea44d";

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die ("database connect error");
