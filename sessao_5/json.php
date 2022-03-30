<?php 

    // Java Script Object Notation
    // json_encode = transforma array em modo json para trabalhar com array em javascript
    // json_decode = transforma json em array para o php

    $pessoas = array();

    array_push($pessoas, array(
        'nome' => 'Raí',
        'idade'=> '34',
    ));
    array_push($pessoas, array(
        'nome' => 'Bernard',
        'idade'=> '36',
    ));

    echo json_encode($pessoas);

    $data = json_decode('[{"nome":"Ra\u00ed","idade":"34"},{"nome":"Bernard","idade":"36"}]', true);

    var_dump($data);

?>