<!-- Implementation in php 
   Server Used IIS 10
   Browser Used Google Chrome
   make sure server is already running for proper execution and this file doesn't requires any other files or dependency to running -->

<!Doctype html>
<html style="background:DarkSlateGrey ;padding:100px">
<head>
<center>	
<h1 style="color:white;background:DeepPink ;padding:10px">Number To Word Format</h1>
</head>
<body>


<h3 style="color:white">Convert any number into it's equivalent word format. Enter any number between 1-1000(including both) and press enter for the result<h3>
<br>
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
numToword( $num );

?>
<form method="POST" >
<input type="number" style="color:blue;" name="number" Placeholder="Enter Any no:" /><br><br>
<input type="submit"  style="background:DeepPink;color:white;" value="convert"/>
</form>

</center>
</body>
</html>



