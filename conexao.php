<?php
require "predis/autoload.php";
Predis\Autoloader::register();

$redis = new Predis\Client(array("host" => "127.0.0.1", "port" => 6379));

//criando um chave e atribuindo um valor
$redis->set('messagem', ' Hello world ');
//atribuindo a chave a uma variavel
$value = $redis->get('messagem');
//imprimindo a variavel
printf($value);

//Atualizando uma chave
$redis->set('messagem', ' ATUALIZANDO  ');
$value = $redis->get('messagem');
////imprimindo a variavel atualizada
printf($value);

//Deleta a chave

$value = $redis->get('messagem');
//imprimindo a variavel deletada
printf('tinha algo aki'); echo ($value);

$teste= 'natanna';
$redis->append('messagem', $teste); 
print_r($value = $redis->get('messagem'));

//deleta os elementos da chave
$redis->del("tutorial-list");
//adiciona um elemento ao início de uma lista
$redis->lpush("tutorial-list", "Redis"); 
$redis->lpush("tutorial-list", "Mongodb"); 
$redis->lpush("tutorial-list", "Mysql");  


$len = $redis->llen("tutorial-list"); 
$arList = $redis->lrange("tutorial-list", 0 , $len);
print('todos os valores do '); 
print_r($arList); 

