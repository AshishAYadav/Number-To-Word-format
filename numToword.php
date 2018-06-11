<?php 
function numToword($input){
	$list =[Zero,One,Two,Three,Four,Five,Six,Seven,Eight,Nine,Ten,Eleven,Twelve,Thirteen,Fourteen,Fifteen,Sixteen,Seventeen,Eighteen,Nineteen,Twenty,Thirty,Forty,Fifty,Sixty,Seventy,Eighty,Ninety];
	if($input>0 && $input<=1000)
	{
		if($input<=20)
		{
			echo"$list[$input] ";
		}else 
		{	
			if($input>=1000)
			{
				$var=$input/1000;
				echo"$list[$var] thousand ";
			}
			if($input>=100 && $input<1000){
				$var=$input/100;
				if($input%100!=0)
				  echo"$list[$var] hundred and ";
				else
				  echo"$list[$var] hundred ";
				$var=$input-100*(int)($input/100);
				if($var!=0)
				numToword($var);
			}
			if($input <100){
				$var=18+(int)($input/10);
				echo"$list[$var] ";
				$var=$input%10;
				if($var!=0)
				numToword($var);
			}
			
		}
	}
	else
		echo"Out of Range!";
};
$num=$_POST["number"];
numToword($num);
?>
<form method="POST" >
<input type="number"  name="number" Placeholder="Enter Any no:" /><br>
<input type="submit"   value="convert"/>
</form>