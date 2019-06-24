<?php
      
echo "<body style='background-color:#9999ff'>";
 $word=0;$sent=0;$para=0;
 $a=0; $b=0;
  $s=$_POST["input"];
  $l=strlen($s);
  
  for($i=0;$i<$l;$i++)
 {
  $word= str_word_count($s);
  if(substr($s,$i,1)=='.' || (substr($s,$i-1,1)!=' ' & substr($s,$i,1)=='!') || (substr($s,$i-1,1)!=' ' & substr($s,$i,1)=='?'))
  {
     $sent=$sent+1;
}

}
?>

<html>
<center>

<h1> Text Statistics </h1>
<style>
div {
    width: 500px;
    padding: 25px;
    border: 25px solid navy;
    margin: 25px;
}
</style>
<div>
<?php

echo" Number of words are ".$word."<br>";
echo" Number of sentences are ".$sent."<br>";
 echo "<br>";
echo"<strong> Details of lower-case letters a-z<br> </strong>";

  for( $i='a';$i<'z';$i++)
  {
	  $count= substr_count($s,$i);
	   if($count!=0)
	   {
		   $a=$a+1;
	  echo "The number of times '".$i."' occurs in given text is ".$count."<br>";
	   }
  }
  
  if($a==0)
  {
	  echo "No lower-case letters";
  }
  echo "<br>";
  echo"<strong>Details of upper-case letters A-Z<br> </strong>";
   for( $i='A';$i<'Z';$i++)
  {
	  $count= substr_count($s,$i);
	  if($count!=0)
	  {
		  
	  $b=$b+1;
	  echo "The number of times '".$i."' occurs in given text is ".$count."<br>";
	  }
  }
  if($b==0)
  {
	  echo "No upper-case letters";
  }
  echo "<br>";
  echo "<strong>Details of special characters ($,*,#,@,&)<br> </strong>" ;
  $count1= substr_count($s,'$');
   if($count1!=0)
   echo "The number of times '$' occurs in given text is ".$count1."<br>";
     $count2= substr_count($s,'@');
	  if($count2!=0)
	 echo "The number of times '@' occurs in given text is ".$count2."<br>";
	 $count3= substr_count($s,'#');
	  if($count3!=0)
	 echo "The number of times '#' occurs in given text is ".$count3."<br>";
  $count4= substr_count($s,'*');
	  if($count4!=0)
	 echo "The number of times '*' occurs in given text is ".$count4."<br>";
  $count5= substr_count($s,'&');
	  if($count5!=0)
	 echo "The number of times '*' occurs in given text is ".$count5."<br>";
 
 if($count1==0 & $count2==0 & $count3==0 & $count4==0 & $count5==0)
	 echo "No specical characters!"
  
  
 ?>
</div>
</center>
</html>