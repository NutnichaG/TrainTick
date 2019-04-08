<?php
  require __DIR__ ."/vendor/autoload.php";

  use Google\Cloud\BigQuery\BigQueryClient;

  $projectId = "studied-bounty-235113";

  $bigQuery = new BigQueryClient([
    "projectId" => $projectId,
  ]);
   
?>
