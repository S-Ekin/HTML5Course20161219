<?php
$chengji = ["yuwen" => 100, "shuxue" => 99, "yingyu" => 44];
print_r($chengji);
//echo $chengji[0];//����

foreach($chengji as $k => $v) {
	echo $k . " => " . $v . "\n";
}
?>

<a href="02_get.php?shuzi=8">�ж������Ƿ�Ϊż��</a>
