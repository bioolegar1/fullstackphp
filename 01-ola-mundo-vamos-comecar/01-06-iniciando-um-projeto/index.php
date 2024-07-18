<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

echo "<strong>camelCase</strong>";

$userFirstName = "Bio";
$userLastName = "Olegari";
echo "<h3> {$userFirstName} {$userLastName} </h3>";


echo "<strong>snake_case</strong>";

$user_fist_name = $userFirstName;
$user_last_name = $userLastName;
echo "<h3> {$user_fist_name} {$userLastName} </h3>";

$userAge = "35";
echo "<p> {$userFirstName} {$userLastName} <span class='tag'>tem {$userAge} anos.</span></p>";

$userEmail = "<p> bioolegari@gmail.com </p>";
echo $userEmail;

//Variável variável
$company = "Olegari";
$$company = "FullStack";
echo "<h3> {$company} {$Olegari}</h3>";

$calcA = 10;
$calcB = 20;
//$calcB = $calcA;
$calcB = &$calcA;
$calcB = 20;
var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;
var_dump($true,$false);

$bestAge = ($userAge > 50);
var_dump($bestAge);

//varaveis zeradas ou impositivas ou vazias são reconhecidas como false.
$a = 0;
$b = 0.0;
$c = "";
$d = []; //ou $d = array() ;
$e = null;
var_dump($a, $b, $c, $d, $e);

if($a || $b || $c || $d || $e) {
    var_dump(true);
}else {
    var_dump(false);
}


/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Function!</h1></article> ";
$codeClear = call_user_func("strip_tags",$code);
var_dump($code, $codeClear);

//funções anonimas:
$codeMore = function ($code){
  var_dump($code);
};
$codeMore("#BoraProgramar!");


/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);
$string = "Olá Mundo";
$array = [$string];
$object = new StdClass();
$null = null;
$int = 12132;
$float = 1.2312;
var_dump([
  $array,
  $object,
  $null,
  $int,
  $float]
);