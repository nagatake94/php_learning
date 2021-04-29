<?php

require 'db_connection.php';

//ユーザー入力なし query
$sql = 'SELECT * FROM contacts WHERE id = 1';//sql
$stmt = $pdo -> query($sql);//sql実行

$result = $stmt -> fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';


//ユーザー入力あり prepare, bind, execute 悪意あるユーザー DELETE * SQLインジェクション防止
$sql = 'SELECT * FROM contacts WHERE id = :id';//名前つきプレースホルダー
$stmt = $pdo -> prepare($sql);
$stmt -> bindValue('id', 2, PDO::PARAM_INT); //紐付け
$stmt -> execute(); //実行

$result = $stmt -> fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';

//トランザクション　まとまって処理 begintransaction, commit, rollback
//ex)銀行　残高残高を確認->Aさんから引き落とし->Bさんに振込

$pdo -> beginTransaction();
try{

}catch(PDOException $e){
    $pdo -> rollBack(); //更新のキャンセル
}
