<?php
//������ � ���������
$a=1; $b=3; $c=4; $d=6;

if($a>$b){
	echo "a>b <br/>";
	$a+=$c;
	if($a>$d)
		echo "a+c>d <br/>";
	else 
		echo "d>a+ca <br <br/>";
}

else {
	echo "b>a <br/>";
	$b+=$c;
	if($b>$d)
		echo "b+c>d <br/>";
	else 
		echo "d>b+c <br/>";
}
//������ �� ��������

$str1="hello"; $str2=" world";

$str1.=$str2; //���������� �����

echo "$str1 <br/>";

//������ � �������
$arr = [
	'a'=>1,
	'b'=>2,
	'c'=>3,
	'd'=>4,
	'e'=>5
];

foreach($arr as $k => $v){
	echo " $k - $v <br/>";
	
}

$Arr= [10,20,30,40,50];

for($i=0;$i<5;$i++){
	echo "$Arr[$i]-";
	$Arr[$i]*=1.5;
	echo "$Arr[$i] <br/>";
}

while($Arr[2]<100){
	$Arr[2]*=1.5;
	echo "$Arr[2] <br/>";
}

//������ � ���������
$Arr[]=999;//���������� �������� � �����

for($i=0;$i<6;$i++){
	echo "$Arr[$i] ";
}
echo "<br/>";

unset($Arr[5]);//�������� ���������� ��������

for($i=0;$i<5;$i++){
	echo "$Arr[$i] ";
}
echo "<br/>";

//������ � �������������� ���������
$ARR["name1"]=array(
	"parameter1" => 1,
	"parameter2" => 2,
	"parameter3" => 3,
);
$ARR["name2"]=array(
	"parameter1" => 11,
	"parameter2" => 22,
	"parameter3" => 33,
);
$ARR["name3"]=array(
	"parameter1" => 100,
	"parameter2" => 200,
	"parameter3" => 300,
);

foreach($ARR as $v1){
	foreach($v1 as $v2)
		echo "$v2\n";
}

//�������� json ������ � �����
echo "<br/>";
echo json_encode($ARR);

echo "file modified";
echo "ehse razochek";