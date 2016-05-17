<?php if (!defined('THINK_PATH')) exit();?></select>
<select name="id" id="id">
<?php foreach($data1 as $v){ ?>
<option value="<?php echo $v['id'];?>"><?php echo $v['goodsname'];?></option>
<?php }?>
</select>