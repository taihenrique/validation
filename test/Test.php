<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use brunoconte3\Validation\Validator;

$datas = [
    'sexo' => '',
    'cnpjComMascara' => '33.452.731/0001-59',
    'telefone' => '44999696',
    'cpf' => '12547845874',
    'nome' => 'a',
    'numero' => 12345678,
    'email' => 'bruno.com',
    'msgCustom' => 'abc',
    'validarPassandoJson' => '@&451',
    'idade' => 'a',
];

$rules = [
    'sexo' => 'required',
    'cnpjComMascara' => 'required|min:18|max:18|companyIdentificationMask',
    'telefone' => 'required|phone',
    'cpf' => 'required|identifier',
    'nome' => 'required|min:2',
    'numero' => 'max:5',
    'email' => 'email',
    'msgCustom' => 'required|min:5, Mensagem customizada aqui|max:20',
    'validarPassandoJson' => '{"required":"true","type":"alpha"}',
    'idade' => 'numeric',
];

$validator = new Validator();
$validator->set($datas, $rules);

echo 'Itens a validar: ' . count($rules) . '<hr>';
if (!$validator->getErros()) {
    echo 'Dados válidados com sucesso!';
} else {
    echo '<pre>';
    echo 'Itens Validados: ' . count($validator->getErros()) . '<hr>';
    print_r($validator->getErros());
}
