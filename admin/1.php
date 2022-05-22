<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<style>
			.table {
				width: 100%;
				margin-bottom: 20px;
				border: 15px solid #f2f8f8;
				border-top: 5px solid #f2f8f8;
				border-collapse: collapse;
			}
			.table th {
				font-weight: bold;
				padding: 5px;
				background: #f2f8f8;
				border: none;
				border-bottom: 5px solid #f2f8f8;
			}
			.table td {
				padding: 5px;
				border: none;
				border-bottom: 5px solid #f2f8f8;
			}
		</style>
		<title>Document</title>
	</head>
	<body>
		<table class="table">
			<?php

$host = "localhost";
$log = "root";
$pass = "root";
$dataname = "online store";

$link = mysqli_connect($host, $log, $pass, $dataname);

							 
                            
							 $data_link = mysqli_query($link,"SELECT * FROM `zakaz`");
							 $data_mass = mysqli_fetch_assoc($data_link);
                             echo("<tr>");
                                    echo("<td> ИМЯ</td>");
                                     echo("<td>НОМЕР</td>");
                                      echo("<td>ЗАКАЗ</td>");
                                       echo("<td>ФАМИЛИЯ</td>");
                                        echo("<td>АДРЕС</td>");
                                         echo("<td>ПОЧТА</td>");
                                    echo("</tr>");
                            
							 while($data_mass[id]){
									echo("<tr>");
                                    echo("<td>".$data_mass[name]."</td>");
                                     echo("<td>".$data_mass[kontragent]."</td>");
                                      echo("<td>".$data_mass[number]."</td>");
									  echo("<td>".$data_mass[zakaz]."</td>");
									  echo("<td>".$data_mass['mesto kontragenta']."</td>");
									   echo("<td>".$data_mass[post]."</td>");
                                    echo("</tr>");
				                    $data_mass = mysqli_fetch_assoc($data_link);
									}
							?>
		</table>
	</body>
</html>
