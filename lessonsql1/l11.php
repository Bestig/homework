<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>homework n1</title>
</head>

<body>

<? php
$mysqli = new mysqli("localhost", "shupletsov", "neto0700", "global");
$res = $mysqli->query("SELECT name FROM books");
$res->data_seek(0);
while ($row = $res->fetch_assoc()) {
    echo " name = " . $row['name'] . "\n";
}
?>

</body>

</html>
