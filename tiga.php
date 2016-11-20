<?php
$hasil1=3+5;
$hasil2=11-4.5;
$hasil3=10/4;
$hasil4=3*5;
$hasil5=10 % 4;

echo "Operator Aritmatika";
echo "<br \>";
echo "hasil1:"; var_dump($hasil1); 
echo "<br \>";                   
echo "hasil2:"; var_dump($hasil2); 
echo "<br \>";
echo "hasil3:"; var_dump($hasil3); 
echo "<br \>";
echo "hasil4:"; var_dump($hasil4);
echo "<br \>";
echo "hasil5:"; var_dump($hasil5);
echo "<br \>";
echo "<br \>";

echo "Operator Logika";
echo "<br \>";
$hasil1 = true and false;
echo '$hasil1 = '; var_dump($hasil1);
echo "<br \>";
$hasil2 = true or false;
echo '$hasil2 = '; var_dump($hasil2);
echo "<br \>";
$hasil3 = true xor false;
echo '$hasil3 = '; var_dump($hasil3);
echo "<br \>";
$hasil4 =true;
echo '$hasil4 = '; var_dump(!$hasil4);
echo "<br/>";
$a=true;
$b=false;
$hasil5 = ($a and $b || $a or b);
echo '$hasil5 = ';
echo var_dump($hasil5);
echo "<br \>";
echo "<br \>";

echo "Operator Perbandingan";
echo "<br \>";
echo "1. 12 > 14 = "; var_dump(12>14); 
echo "<br />";
 
echo "2. 14 >= 14 = "; var_dump(14>=14);
echo "<br />";
 
echo "3. 14 < 14 = "; var_dump(14<14); 
echo "<br />";
 
echo "4. 10 <= '10' = "; var_dump(10<='10');
echo "<br />";
 
echo "5. 10 == '10' = "; var_dump(10=='10');
echo "<br />";
 
echo "6. 10 != '10' = "; var_dump(10!='10');
echo "<br />";
 
echo "7. '150' === '1.5e2' = "; var_dump('150'==='1.5e2'); 
echo "<br />";
 
echo "8. 'TiaFitriyah' !== 0 = "; var_dump('TiaFitriyah'!==0);
echo "<br />";
?>