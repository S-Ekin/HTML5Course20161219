<?php
//�������ݿ⣬�ܸ��˵ĸ�����PHP��MySQL�Ǻ��ֵܣ�ֻ��Ҫһ����������������ݿ⣡
//phpstudyѡ�ֵ�Ĭ�ϵ��û�����root��������root
//$con����һ����������ʾһ������
$con = mysqli_connect("localhost","root","", "frontend");

//ѡ�������ĸ��⣿
//mysqli_select_db($con);

//�������ݲ����ַ���
mysqli_query($con, "SET NAMES UTF8");

//ִ��SQL��䣬�ͰѼ�������ŵ���$result������
$result = mysqli_query($con, "SELECT * FROM tongxue");

//ѭ����ȡ
while($row = mysqli_fetch_array($result)){
    echo $row['id'];
    echo $row['name'];
    echo $row['age'];
    echo $row['sex'];
    echo "<br />";
}

//�ر����ݿ�
mysqli_close($con);
?>