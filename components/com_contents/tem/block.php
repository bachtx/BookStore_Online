<?php 
if(isset($_GET['id'])){
	$id=$_GET['id'];
} else {
	$id=0;
}
?>
<div class="main_wrap">
	<div class="sidebar">
		<h3>Categories</h3>
		<ul class="ul_all"  >
			<li class="all"><a href="#" alt ="all">
				ALL
			</a></li>
		</ul>
		<?php
			$catalogs=new CLS_CATALOGS();
			$catalogs->getListCatalogs();
		?>
	</div><!--sidebar-->
<div class="primary" id = "product_page">
	<?php 
		$objcontents = new CLS_CONTENTS;
		echo $objcontents-> getTotalCat();
		echo $objcontents-> getNameCat($id);
		echo $objcontents-> getDescCat($id);
		$objcontents->getList(' AND `cat_id` =1',"",' LIMIT 0,7');
		while($row=$objcontents->Fetch_Assoc()){
	?>
			<div>
			<?php 
				echo $row['title'];
				echo $row['author'];
				echo date("d - m - Y",strtotime($row['cdate']));
				echo $row['intro'];
			?>
			</div>
	<?php } ?>

	
</div>