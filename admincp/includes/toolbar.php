<div id="menus" class="toolbars">
  <form id="frm_menu" name="frm_menu" method="post" action="">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><h2 title="<?php echo $title_manager;?>"><?php echo $title_manager;?></h2></td>
        <td>
        <label>
          <input type="hidden" name="txtorders" id="txtorders" />
          <input type="hidden" name="txtids" id="txtids" />
          <input type="hidden" name="txtaction" id="txtaction" />
        </label>
        </td>
        <td align="right">
        <ul>
        <?php 
        if($_GET['com'] != 'group'){
			$task='';
            if(!isset($_GET["task"])){
			
        ?>
			<li><a class="edit" href="index.php?com=<?php echo COMS;?>" title="Danh sÃ¡ch">List</a></li>
            <li><a class="publish" href="#" onclick="dosubmitAction('frm_menu','public');" title="public">Public</a> </li>
            <li><a class="unpublish" href="#" onclick="dosubmitAction('frm_menu','unpublic');" title="unpublic">Unpublis</a></li>
            <li><a class="addnew" href="index.php?com=<?php echo COMS;?>&task=add" title="ThÃªm">Add</a></li>
            <li><a class="delete" href="#" onclick="javascript:if(confirm('Báº¡n cÃ³ cháº¯c cháº¯n muá»‘n xÃ³a thÃ´ng tin nÃ y khÃ´ng?')){dosubmitAction('frm_menu','delete'); }" title="Delete">Delete</a></li>
            <?php }else{?>
            <li><a class="save"  href="#" onclick="dosubmitAction('frm_action','save');" title="LÆ°u">Save</a></li>
            <li><a class="close"  href="index.php?com=<?php echo COMS;?>" title="Ä�Ã³ng">Close</a></li>
            <li><a class="help"  href="index.php?com=<?php echo COMS;?>&task=help" title="Help">Support</a></li>
        <?php }} ?>
        </ul>
        </td>
      </tr>
    </table>
  </form>
</div>