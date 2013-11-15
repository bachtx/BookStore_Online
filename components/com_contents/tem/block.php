<?php 
include('libs/cls.contents.php');
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
		if ($id!=0){
		?>
		<div id="contents_page">		
		<?php
			echo "<h1><a href='index.php?com=contents&&viewtype=block&id=".$id."'>".$objcontents-> getNameCat($id)."</a></h1>";
			echo "<p class='intro'>".$objcontents-> getDescCat($id)."</p>";
			$limit='';
			$objcontents -> getBlock ($id,$limit);
		?>
		</div>
		<?php
		} else {
			for($i=1;$i<=3;$i++){
		?>
		<div id="contents_page">
		<?php
			echo "<h1><a href='index.php?com=contents&&viewtype=block&id=".$i."'>".$objcontents-> getNameCat($i)."</a></h1>";
			echo "<p class='intro'>".$objcontents-> getDescCat($i)."</p>";
			$limit=' LIMIT 0,2';
			$objcontents -> getBlock ($i,$limit);
			echo "<div class='link'><p><a href='index.php?com=contents&&viewtype=block&id=".$i."'>See more</a></p><br/></div>";
			echo "</div>";
			}
		}
		?>
	</div>
</div>