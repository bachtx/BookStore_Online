<?php 
	include('libs/cls.contents.php');
	if(isset($_GET['id'])){ 
	$id = $_GET['id'];
	}
?>
<div class="main_wrap">
	<div class="sidebar">
		<h3>Categories</h3>
		<?php
			$catalogs=new CLS_CATALOGS();
			$catalogs->getListCatalogs();
		?>
	</div><!--sidebar-->
	<div class="primary" id = "product_page">
		<div class="contents_page" id = "contents_page">
			<?php
				$objcontents=new CLS_CONTENTS();
				$objcontents->getList(' AND `con_id` ='.$id," ORDER BY RAND()",' LIMIT 0,1');			
				$row=$objcontents->Fetch_Assoc();
				$cat_id=$row['cat_id'];
				$img = stripslashes($row["thumb"]);
				$imgtag='<img src="'.$img.'" class="img_block" width="300"/>';
				echo "<h1>".$row['title']."</h1>";
				echo "<p class='intro'>".$row['intro']."</p>";
				echo "<p class='intro'>".$imgtag."</p>";
				echo "<p class='title'>Author: ".$row['author']."</p>";
				echo "<p class='title'>Date published: ".date("d - m - Y",strtotime($row['cdate']))."</p>";
				echo "<br/>".$row['fulltext'];			
			?>
		</div><!--.content_page-->
	</div><!--.primary-->
