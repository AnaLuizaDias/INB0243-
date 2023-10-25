<?php
$servidor = "191.52.55.104";
$base = "dbinb0243";
$usuario = "inb0243user";
$senha = "alunos";
try {
$conn = new PDO("mysql:host=$servidor;dbname=$base", $usuario, $senha);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<center><h1>Conectado do servidor Wev com sucesso a base:</h1>" .$base;
echo "<br><h2><font color=red>2021324505</font></h2></br>";
echo "<br><h2><font color=red>2021324935</font></h2></center>";


} catch(PDOException $e){
echo "Falha na conexão:" .$e->	getMessage();
}
?>
