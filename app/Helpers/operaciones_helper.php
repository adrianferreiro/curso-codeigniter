<?php
//codigo estructurrado .. siempre _helper para que reconozca codeigniter
//ATENCION .. vamos a BaseController.php y agregamos "helper('operaciones') para que cuando llamemos a base controller se extienda para la clase que estamos llamando. HEREDAN
function suma($val1, $val2){
    return $val1+$val2;
}
function resta($val1, $val2){
    return $val1-$val2;
}
