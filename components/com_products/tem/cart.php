<?php
if(isset($_GET['viewtype']) && $_GET['viewtype']='random'){	
	$total_rows="0";
	if(!isset($_SESSION["CUR_PAGE_PRO"]))
		$_SESSION["CUR_PAGE_PRO"]=1;
	if(isset($_POST["txtCurnpage"])){	
		$_SESSION["CUR_PAGE_PRO"]=$_POST["txtCurnpage"];
	}
	$cur_page=$_SESSION["CUR_PAGE_PRO"];
}
if(isset($_POST['update_car'])){ //update
	$ids=$_POST['txt_id'];
	$qua=$_POST['txt_quan'];
	for($i=0;$i<count($ids);$i++){
		$item=array('proid'=>$ids[$i],'quan'=>$qua[$i]);
		$_SESSION['CART'][$i]=$item;
	}
}
?>
<div class="detail_jumlink">
	<p>Home  <span class="bg_jumlink"></span>  <?php echo "Cart";?></p>
</div><!--detail_jumlink-->
<div class="main_wrap">
	<div class="sidebar">
		<h3>Categories</h3>
		<ul class="ul_all"  >
			<li class="all"><a href="#" alt ="all">
				ALL
			</a></li>
		</ul>
		<!-- Lấy dữ liệu động từ cơ sở dữ liệu ra bên ngoài trang chính-->
		<?php
			$catalogs=new CLS_CATALOGS();
			$catalogs->getListCatalogs();
		?>
		<!--Kết thúc catalogs -->
	</div><!--sidebar-->
	<div class="primary" id = "product_page">
		<div id="tabs_products">
			<h3><?php echo 'Cart';?></h3>
			<div id="tabs-1">
				<fieldset style="background: #fff; margin-bottom:11px;"><legend><strong>Your Cart</strong></legend>
				<form method='POST' action='' id='frm_cart'>
				<table width='100%' class='list' cellspacing="0" cellpadding='3'>
					<tr>
						<th width="60">TT</th>
						<th width="">Name</th>
						<th width="110" align='center'>Img</th>
						<th width="80">Price</th>
						<th width="90">Quantity</th>
						<th width="80">Amount</th>							
						<th width="60">Delete</th>
					</tr>
					<?php
					$n=count($_SESSION['CART']);
					$total=0;
					$objmysql= new CLS_MYSQL();
					for($i=0;$i<$n;$i++):						
						$proid=$_SESSION['CART'][$i]['proid'];						
						$sql="SELECT `pro_id`,`name`,`thumb`,`cur_price`  FROM tbl_products WHERE `pro_id`='$proid'";
						$objmysql->Query($sql);	
						$row=$objmysql->Fetch_Assoc();
						$amount=$row['cur_price']*$_SESSION['CART'][$i]['quan'];
						$total+=$amount;
						$img=$row['thumb'];
					?>
					<tr>
						<td align='center' width="30"><?php echo ($i+1);?>
							<input type='hidden' name='txt_id[]' value='<?php echo $_SESSION['CART'][$i]['proid'];?>'/>
						</td>
						<td align='center'><?php echo $row['name'];?></td>
						<td align='center'><?php echo "<img src='".$img."' width='60' height='85'/>";?></td>
						<td align='center'><?php echo number_format($row['cur_price']);?> $</td>		
						<td align='center'><input style='text-align:center;' type='text' value='<?php echo $_SESSION['CART'][$i]['quan'];?>' name='txt_quan[]' size='4'/></td>
						<td align='center'><?php echo number_format($amount);?> $</td>												
						<td align='center'><a href='<?php echo ROOTHOST;?>index.php?com=products&&viewtype=delcart&&proid=<?php echo $_SESSION['CART'][$i]['proid'];?>' title='Xóa'><strong class='star'><img src="<?php echo ROOTHOST;?>images/del.png"/></strong></a></td>
					</tr>
					<?php endfor; ?>
					<tr>
						<td colspan='2' align='center'><strong>Total&nbsp;&nbsp;</strong></td><td colspan='5' align='center'><strong style='font-size:17px;'><?php echo number_format($total);?> $</strong></td>
					</tr>
					<tr>
						<td colspan='5' align='right'><strong><input type="submit" value="Update Cart" name="update_car"/></strong></td>
						<td colspan='2'><strong class='star' style='font-size:16px;'><input type='button' id='continue' value='Buy Continue'/></strong></td>
					</tr>					
				</table>
				</fieldset>				
				</form>			
			</div>
		</div><!--.tabs_product-->
	</div><!--.primary-->
</div><!--.main_wrapp-->
<script type='text/javascript'>
$(document).ready(function(){
	$('.pagin a').click(function(){
		$('.pagin a').removeClass('selected');
		$(this).addClass('selected');
	})
})
</script>
<style>
table.list tr td, table.list tr th {
    border-bottom: 1px solid #DDDDDD;
    border-right: 1px solid #DDDDDD;
    height: 25px;
    overflow: hidden;
}
table.list tr th{background:#eee;}
table.list td img{margin:5px;}
</style>