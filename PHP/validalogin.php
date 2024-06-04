<?php
$nome = $_GET['nome']; 
$senha = $_GET['senha'];

#echo ('nao confere');
echo ('<script>alert("senha confere")</script>');
#aqui devemos ler o arquivo HTML retorno
$fie= fopen('../HTML/validalogin.html', 'r');
while(!feof($fie)){
  $line = fgets($fie);
  echo $line;
}
fclose($file);
  ?>