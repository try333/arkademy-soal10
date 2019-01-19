<!--?php 

for($a = 1; $a <= $bin; $a++{
        for ($b = 1; $b <= $a; $b++{
echo"*";
    }
echo "
";
}

?-->
<?php 

function draw_kotak($baris) 
{ 
	echo "<font size=10>";
	if($baris%2==0)
    for ($i = 1; $i <= $baris/2; $i++) 
    { 
        for($j=1; $j<=4; $j++)
        echo "*"."&nbsp&nbsp&nbsp"; 
        echo "<br>";
        for($k=1; $k<=3; $k++)
        	echo "&nbsp&nbsp&nbsp"."*";
        
        echo "<br>";
    }
    else
    	for ($i = 1; $i <= $baris/2+0.5; $i++) 
    { 
        for($j=1; $j<=4; $j++)
        echo "*"."&nbsp&nbsp&nbsp"; 
        echo "<br>";
        for($k=1; $k<=3; $k++)
        	if($i>=$baris/2)
        		echo "";
        		else
        	echo "&nbsp&nbsp&nbsp"."*";
        
        echo "<br>";
    }

} 

    $baris = 5;
    draw_kotak($baris); 
?>