<?php if (!defined('THINK_PATH')) exit();?>	<table>
		<tr>
			<th><input type="checkbox">编号</th>
			<th>商品名称</th>
			<th>货号</th>
			<th>价格</th>
			<th>上架</th>
			<th>新品</th>
			<th>库存</th>
			<th>操作</th>
		</tr>
		<?php foreach($data as $v){ ?>
		<tr>
			<td><input type="checkbox" name="check" value="<?php echo $v['id']?>"><?php echo $v['id']?></td>
			<td><?php echo $v['goodsname']?></td>
			<td><?php echo $v['g_id']?></td>
			<td><?php echo $v['price']?></td>
			<td><?php
 if($v['is_new']==1){ echo "<font color='red'>√</font>"; }else{ echo "<font color='green'>×</font>"; } ?></td>
			<td><?php
 if($v['is_hot']==1){ echo "<font color='red'>√</font>"; }else{ echo "<font color='green'>×</font>"; } ?></td>
			<td><?php echo $v['num']?></td>
			<td><a href="">删除</a></td>
		</tr>
		<?php }?>
	</table>
	<?php echo ($page); ?>