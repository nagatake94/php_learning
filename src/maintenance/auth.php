<?php
//パスワードを記録したファイルの場所
echo __FILE__;
// /Applications/MAMP/htdocs/php_learning/src/maintenance/test.php

echo "<br>";
//パスワード暗号化
echo(password_hash('password123', PASSWORD_BCRYPT));
//$2y$10$yWOrWB5W4BY3kKwsQ8abzOPzsjXErLD3xtMhe4Pan5Hs0DFq/bgpO

