<?php 
header("content-type:text/html;charset=utf-8");
if(empty($_POST['zhuce'])){
	$text = "";
	$password = "";
	$rand = "获取验证码";
	$rands=rand(1000,9999);
	if(!empty($_POST['ccc'])){
		$rand = $rands;
		$text = $_POST['zhanghao'];
		$password = $_POST['mima'];
	}
	}
	else{
		$yanzhengma1 = $_POST['yanzhengma1'];
		$yzm = $_POST['yzm'];

		if ($yzm != $yanzhengma1){
			$rand="不通过";
				$text = $_POST['zhanghao'];
				$password = $_POST['mima'];
			}
		else{
				$rand="通过";
				$text = "";
				$password = "";
			}
			}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>登陆注册</title>
</head>
<body>
	<form method="post" action="">
	<input type="text" name="zhanghao" value="<?php echo $text ?>">
	<input type="password" name="mima" value="<?php echo $password ?>">
	<input type="text" name="yzm" value="">
	<input type="hidden" name="yanzhengma1" value="<?php echo $rand ?>">
	<input type="submit" name="ccc" value= "<?php echo $rand ?>">
	<br>

	<input type="submit" name="denglu" value="登陆">
	<input type="submit" name="zhuce" value="注册">
	</form>

</body>
</html>