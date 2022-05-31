<?php 
if(empty($_GET)){
	return 'Ничего не передано!';
}

if (empty($_GET['operation'])) {
	return 'Не передана операция!';
}

if ($_GET['operation'] == '/' && $_GET['x2'] == 0){
	return 'На ноль нельзя поделить!';
}

$x1 = $_GET['x1'] ?? null;
$x2 = $_GET['x2'] ?? null;

if($x1 == null || $x2 == null){
	return 'Аргументы не переданы!';
}

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        $result = $x1 / $x2;
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;