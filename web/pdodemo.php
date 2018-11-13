<?php
$dbms='mysql';     //数据库类型
$host='localhost'; //数据库主机名
$dbName='library';    //使用的数据库
$user='root';      //数据库连接用户名
$pass='';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";  // $dsn="mysql:host=localhost;dbname=library"

header('Content-type:application/json;charset=utf-8;');

try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
    // echo "连接成功<br/>";
    $dbh->exec("set names utf8");
    foreach ($dbh->query('SELECT * from `book`')->fetchAll(PDO::FETCH_ASSOC) as $row) {
        // PDO::FETCH_ASSOC —— 关联数组形式；
        // PDO::FETCH_NUM   —— 数字索引数组形式；
        // PDO::FETCH_BOTH  —— 两种数组形式都有，这是默认的；
        // PDO::FETCH_OBJ   —— 按照对象的形式，类似于以前的 mysql_fetch_object()。
        echo json_encode($row);  //你可以用 echo($GLOBAL); 来看到这些值
    }
    $dbh = null;  //关闭连接
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
// $db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));
?>