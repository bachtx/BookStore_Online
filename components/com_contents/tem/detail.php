<?php 
	if(isset($_GET['id'])){ 
	$id = $_GET['id'];
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
			$objcontents=new CLS_CONTENTS();
			$objcontents->getList(' AND `con_id` ='.$id," ORDER BY RAND()",' LIMIT 0,1');			
			$row=$objcontents->Fetch_Assoc();
			$cat_id=$row['cat_id'];
			$name=$objcontents->getNameCat($cat_id);
			echo $name. " >> ";
			echo $row['title'];
				echo "<p>".$row['title']."</p>";
				echo "<p>".$row['author']."</p>";
				echo "<p>".date("d - m - Y",strtotime($row['cdate']))."</p>";
				echo "<p>".$row['intro']."</p>";
				echo "<p>".$row['fulltext']."</p>";			
		?>
	</div><!--.primary-->
</div><!--.main_wrapp-->
