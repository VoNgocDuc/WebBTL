<?php
	function calculate($a,$b){
		$a = (float) $a;
		$b = (float) $b;
		echo $a+$b;
	}
	if(isset($_GET['A'])){
		$A = $_GET['A'];
	}else{
		$A = 0;
	}
	if(isset($_GET['B'])){
		$B = $_GET['B'];
	}else{
		$B = 0;
	}
?>
<form>
A <input type = 'number' step = 0.0000001 name = "A" value = '<?php echo $A;?>'>
<br><input type = "summit" value ='+'>
<input type = "submit" value ='-'>
<input type = "submit" value ='*'>
<input type = "submit" value ='/'><br>
B <input type = 'number' step = 0.000000001 name ="B" value = '<?php echo $B;?>'>
<br><input type = Submit
</form>