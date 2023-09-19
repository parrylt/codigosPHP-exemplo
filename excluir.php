<meta charset="utf-8"> 
<?php
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
    $base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);
	$res = mysqli_query($con,"select * from tb_aluno"); 
	/*Executa o comando SQL, no caso para pegar todos os usuarios
	do sistema e retorna o valor da consulta em uma variavel ($res)  */
echo "<table border=3px><tr><td>Codigo do Usuário</td><td>Nome do Usuário</td><td>Email do Usuário</td></tr>";
/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res)){
/*Escreve cada linha da tabela*/
echo "</td><td>" . $escrever['id'] . "</td><td>" . $escrever['nome'] . "</td><td>" . $escrever['email'] . "</td></tr>";
}/*Fim do while*/

echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</br></br>";



mysqli_close($con);
?>

<html>
<body>
</form>
<form action="valida_exclusao.php" method="POST">
	<fieldset>
	<table>
	   <tr>
	   <td> Informe o codigo do registro a ser excluido: </td>
	   <td><input size="15" name="codigo"></td>
	  </tr>
	  <tr>
	   <td colspan=2><input type="SUBMIT"  value="Confirmar exclusão"></td>
	  </tr>
	  </table>
	  </fieldset>
	  
	  </form>
</body>
</html>




	  