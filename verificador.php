<?php


$quantidade = count(file("frase.txt"));
$arquivo = file("frase.txt");


for ($i=0; $i < $quantidade ; $i++) { 
  $plinha = explode("-", $arquivo[$i]);
  
  

  if(

    (
    $plinha[0][0] == "c" ||
    $plinha[0][0] == "C" ||
    $plinha[0][(strlen($plinha[0]))-1] == "C" ||
    $plinha[0][(strlen($plinha[0]))-1] == "c"
    ) &&

    ($plinha[1][0] == "o" ||
    $plinha[1][0] == "O" ||
    $plinha[1][(strlen($plinha[1]))-1] == "O" ||
    $plinha[1][(strlen($plinha[1]))-1] == "o") &&

    ($plinha[2][0] == "b" ||
    $plinha[2][0] == "B" ||
    $plinha[2][(strlen($plinha[2]))-1] == "B" ||
    $plinha[2][(strlen($plinha[2]))-1] == "b") &&

    ($plinha[3][0] == "o" ||
    $plinha[3][0] == "O" ||
    $plinha[3][(strlen($plinha[3]))-1] == "O" ||
    $plinha[3][(strlen($plinha[3]))-1] == "o") &&

    (
    ($plinha[4][0] == "l") ||
    ($plinha[4][0] == "L") ||
    (rtrim($plinha[4])[(strlen(rtrim($plinha[4])))-1] == "L") ||
    (rtrim($plinha[4])[(strlen(rtrim($plinha[4])))-1] == "l")
    )

){
    echo $arquivo[$i]  . ": Palavra 'cobol' formada! <br>";
  }else{
      echo $arquivo[$i]   . ": Erro!  <br>";
  }


}












?>
