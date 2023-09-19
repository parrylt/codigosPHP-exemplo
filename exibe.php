<html>
<head>
	<title>Exibindo dados</title>
	<meta charset="utf-8">
</head>
<body>


<?php

    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "pw2";
    $con = mysqli_connect ($host, $user, $pass, $base);
    $res = mysqli_query ($con, "select* from tb_aluno");

    echo "<table border=3px> <tr><td>Código do Usuário</td><td>Nome do Usuário</td><td>E-mail do Usuário</td></tr>";

    while ($escrever = mysqli_fetch_array ($res)) {
        echo "</td><td>" . $escrever ['id'] . "</td><td>" . $escrever['nome'] . "</td><td>" . $escrever ['email'] . "</td><tr>";
    }

    echo "</table>";
    echo "</br></br>";

    mysqli_close ($con);

?>

</body>
</html>