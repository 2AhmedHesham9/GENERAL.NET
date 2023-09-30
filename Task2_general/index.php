
<!-- problem 1 =============================================-->
<?php

function reverse($x){
    try{
         if(is_string($x))throw new Exception('Numbers');
      
    $i=0;
    for($i;floor($x)>0;$x=$x/10)
    {
        $i=$i*10;
        $i=$i+(floor($x)%10);
     
    }
         echo $i;
    }
    catch(Exception $e)
    {
        echo ' Just take: ',  $e->getMessage(), "\n";
    }
}
// reverse(123321);
?>

<!-- problem 2================================================= -->

<?php
function order($s){
    
   try{

   if(!is_string($s))throw new Exception('string');
    for( $i=0;$i<strlen($s);$i++)
    {
        for( $j=$i+1;$j<strlen($s);$j++)
        {
            
            if($s[$i]>$s[$j])
            {
                $temp=$s[$i];
                $s[$i]=$s[$j];
                $s[$j]=$temp;
             
                
            }
        }
    }
   echo ($s);
}
catch(Exception $e){
    echo ' Just take: ',  $e->getMessage(), "\n";
}
}
 
// order("webmaster");

?>

<!-- problem 3 =============================================== -->
<?php



function countvaulss($v)
{
    try{

        if(!is_string($v))throw new Exception('string');
    $c=0;
    for($i=0;$i<strlen($v);$i++)
    {
        if(($v[$i]=='i'||$v[$i]=='o')||($v[$i]=='e'||$v[$i]=='a')||($v[$i]=='u')||($v[$i]=='I'||$v[$i]=='O')||($v[$i]=='E'||$v[$i]=='A')||($v[$i]=='U '))
        {
            $c++;
        }
    }
    echo ($c);
           }
    catch(Exception $e){
    echo ' Just take: ',  $e->getMessage(), "\n";
     }
}

//  countvaulss("aaouieee");

?>


<!-- problem 4 ================================================================= -->
<?php

function uppercase($x)
{
   
  try{
    if(!is_string($x)) throw new Exception('string');
    if(is_numeric(ord($x)))throw new Exception('THis is Number and just take string');
     $x[0]=chr(ord($x[0])-32); 
     for($i=1;$i<strlen($x);$i++)
     {
        if($x[$i]==" ")
        {
            $i++;
            $x[$i]=chr(ord($x[$i])-32);
           
        }
     
     }
    echo $x;

    }
    catch(Exception $e){
        echo ' Just take: ',  $e->getMessage(), "\n";
         }
}
$x="ahmed hesham atsh";

// uppercase($x)
?>


<!-- problem 5 ==================================================== -->
<?php
// function largenumber()
{
    $arr=[1,3,10,-1,5];
    $large=$arr[0];
    for($i=1;$i<sizeof($arr);$i++)
    {
        if($arr[$i]>$large)
        {
            $large=$arr[$i];
        }
    }
    // echo "The largest number is: ".$large;
   
}
?>

<!-- problem 6 ==================================== -->

<?php
function sortt($arr = array())
{
    try{
   
    for( $i=0;$i<sizeof($arr);$i++)
    {
        for( $j=$i+1;$j<sizeof($arr);$j++)
        {
            
            if($arr[$i]>$arr[$j])
            {
                $temp=$arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j]=$temp;
             
                
            }
        }
    }
     print_r($arr);
}
catch(Exception $e){
    echo ' Just take: ',  $e->getMessage(), "\n";
     }


}

    $arr=[9,-1,0,3,5,120,10,3,6];
    $arr2=['a','c','d','a','z','e','b'];
    // sortt($arr);

?>

<!-- problem 7====================================================== -->
<?php


function palandrom($p)
{
    try{
        if(!is_string($p)) throw new Exception('just take string');
        if(is_numeric(($p)))throw new Exception('This is Number and just take string');
   
    $cp="";
    for($i=strlen($p)-1;$i>-1;$i--)
    {
        $cp.=$p[$i];
    }
    if($p==$cp)
    echo("Palandrom");
    else
    echo("NOT Palandrom " . $p ." not equql ". $cp);
        }
        catch(Exception $e){
            echo '  ',  $e->getMessage(), "\n";
             }
}
   


    // palandrom("exe");



?>
<!-- problem 8 ======================================================= -->
<?php



function factorial($n){

    try{ 
        if(is_string(($n)))throw new Exception('This is not a string and just take number');   
     
        if(!is_numeric(($n)))throw new Exception('This is not a Number and just take number');   
        if($n<1) return -1;
        if($n==1)return   1;
        else
        return ($n*factorial($n-1));

    }
    catch(Exception $e){
        echo '  ',  $e->getMessage(), "\n";
         }
}


    $f="1";
    // echo(factorial($f));

?>