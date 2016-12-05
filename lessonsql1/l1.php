<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>homework n1</title>
</head>

<body>

<? php
error_reporting(E_ALL);
$pdo = new PDO("mysql:host=localhost;dbname=global",'shupletsov','neto0700');
$sql = "SELECT * FROM books";
var_dump($sql);
foreach($pdo->query($sql) as $row) {
echo $row['name']."<br />"
}
?>

</body>

</html>
