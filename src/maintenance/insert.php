<?php

//DB接続
function insertContact($request){
require 'db_connection.php';

//入力 DB保存 prepare, bind, execute（配列（全て文字列））
//ダミーデータ
// $param =[
//     'id' => null,
//     'name' => 'なまえ123',
//     'email' => 'test123@test.com',
//     'url' => 'https://test123.com',
//     'gender' => '1',
//     'age' => '2',
//     'contact' => '問い合わせ（テスト123）',
//     'created_at' => null
// ];

$param =[
    'id' => null,
    'name' => $request['name'],
    'email' => $request['email'],
    'url' => $request['url'],
    'gender' => $request['gender'],
    'age' => $request['age'],
    'contact' => $request['contact'],
    'created_at' => null
];


$count = 0;
$columns = '';
$values = '';

foreach(array_keys($param) as $key){
    if($count++>0){
        $columns .= ',';
        $values .= ',';
    }

    $columns .= $key;   
    $values .= ':'. $key;
}


$sql = 'INSERT INTO contacts ('.$columns.')values('.$values.')';

//var_dump($sql);


$stmt = $pdo -> prepare($sql);
//$stmt -> bindValue('id', 2, PDO::PARAM_INT); //紐付け
$stmt -> execute($param);

}