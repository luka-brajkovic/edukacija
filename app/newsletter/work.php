<?php
require '../../library/config.php';
// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=emais.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings


// fetch the data

$rows = Newsleatter::getAllEmails();
foreach ($rows as $row){
    
     fputcsv($output, array($row['first_name'],$row['last_name'],$row['email'],date("d.m.Y. H:i:s", $row['ctime'])),",","\r\n" );
     
}
// loop over the rows, outputting them

