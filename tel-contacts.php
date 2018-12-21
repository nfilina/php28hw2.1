<?php

$data = file_get_contents(__DIR__ . '/tel-contacts.json');
$contacts = json_decode($data, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Телефонная книжка-работа с json</title>
	<style>
		body {
            font-size: 16px;
        }
        table {
            width: 600px;            
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        } 
        th {
            text-align: left;   
        }
        th, td {
            padding: 5px;
        }
	</style>
</head>
<body>
	<table>
		<tr>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Адрес</td>
			<td>Телефон</td>
		</tr>
		<?php foreach ($contacts as $contact) {	?>
		<tr>
			<td><?php echo $contact['firstName'] ?></td>
			<td><?php echo $contact['lastName'] ?></td>
			<td><?php echo $contact['address'] ?></td>
			<td><?php echo $contact['phoneNumber'] ?></td>
		</tr>		
		<?php } ?>
	</table>
</body>
</html>