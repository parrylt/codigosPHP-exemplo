<html>
<head>
	<title>Teste de Conexão</title>
	<meta charset="utf-8">
</head>
<body>


<?php

	$host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "pw2";
    $con = mysqli_connect ($host, $user, $pass, $base);
    echo "<br>";
    echo "Conexão OK";

    mysqli_close ($con);

?>

</body>
</html>