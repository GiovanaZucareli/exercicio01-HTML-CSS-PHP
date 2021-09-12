<?php
error_reporting(0);

$prato = $_POST['rdoPrato'];
$sobremesas = $_POST['rdoSobremesa'];
$bebidas = $_POST['rdoBebida'];

$idade = $_POST['idade'];
$nome = $_POST['nome'];
$peso = $_POST['peso'];

/*-----------------------------------------------------------------------------------------------------------*/

echo "--------------------PEDIDOS--------------------";
echo "<br>";
echo "<br>";


if (isset($_POST['rdoPrato'])){
    echo "Prato escolhido: $prato";
}else{
    echo "Nenhum prato foi escolhido";
}

if ($prato == Vegetariano){
    $calprato = 180;
}
if ($prato == Peixe){
    $calprato = 230;
}

if ($prato == Frango){
    $calprato = 250;
}

if ($prato == Carne){
    $calprato = 350;
}





echo "<br>";




if (isset($_POST['rdoSobremesa'])){
        echo "Sobremesa escolhida: $sobremesas";
}else{
        echo "Nenhuma sobremesa foi escolhida";
}

if ($sobremesas == Abacaxi){
    $calsobremesa = 75;
}
if ($sobremesas == SorveteDiet){
    $calsobremesa = 110;
}

if ($sobremesas == MouseDiet){
    $calsobremesa = 170;
}

if ($sobremesas == Mousechocolate){
    $calsobremesa = 200;
}




echo "<br>";



if (isset($_POST['rdoBebida'])){
    echo "Bebida escolhida: $bebidas";
}else{
    echo "Nenhuma bebida foi escolhida";
}

if ($bebidas == Chá){
    $calbebida = 20;
}
if ($bebidas == Sucodelaranja){
    $calbebida = 70;
}

if ($bebidas == Sucodemelão){
    $calbebida = 100;
}

if ($bebidas == Refrigerantediet){
    $calbebida = 65;
}

echo "<br>";

echo "-----------------------------------------------------";

echo "<br>";
echo "<br>";



$totalcal = ($calbebida + $calprato + $calsobremesa);

echo "Total de calorias: $totalcal";


echo "<br>";
echo "<br>";


/*-----------------------------------------------------------------------------------------------------------*/

if ($totalcal > 600){
    echo "Quantidade de calorias elevada!!!";
}

/*-----------------------------------------------------------------------------------------------------------*/

if (($idade < 18 ) && ($peso > 75)){
    if (($bebidas == Refrigerantediet) && ($prato == Carne)){
        echo "Usuário acima do peso, opção nâo saudável!!";
        echo "<br>";
        echo "Escolha outra opção";
    }
}

/*-----------------------------------------------------------------------------------------------------------*/

if (($idade < 18 ) && ($peso < 75)){
    if (($bebidas == Chá) || ($bebidas == Refrigerantediet) && ($prato == Vegetariano)){
        echo "Opção de consumo nâo recomendável!!";
        echo "<br>";
        echo "Escolha outra opção";
    }
}










?>

