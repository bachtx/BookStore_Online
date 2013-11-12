<?php
if(isset($_SESSION['CART'])):
	if(isset($_GET['proid'])){
		$n=count($_SESSION['CART']);
		$cart=array();
		for($i=0;$i<$n;$i++){
			$item=$_SESSION['CART'][$i];
			if($item['proid']!=$_GET['proid']){
				$cart[count($cart)]=$item;
			}
		}
		$_SESSION['CART']=$cart;
	}
endif;
?>
<script type='text/javascript'>
window.location.href="index.php?com=products&&viewtype=cart";
</script>