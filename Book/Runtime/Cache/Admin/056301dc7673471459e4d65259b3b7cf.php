<?php if (!defined('THINK_PATH')) exit();?>
		<center>
		<table>
			<tr>
				<th>ID</th>
				<th>编号</th>
				<th>标题</th>
				<th>分类</th>
				<th>图片</th>
				<th>操作</th>
			</tr>
			<?php foreach($list as $key=>$v){ ?>
			<tr>
			<td><input type="checkbox" name="check" value="<?php echo $v['id']?>"></td>
			<td><?php echo $v['id']?></td>
			<td><?php echo $v['title']?></td>
			<td><?php echo $v['c_name']?></td>
			<td><img src="/tp23/Public/Uploads/<?php echo ($v['g_img']); ?>" style="height:50px;width:50px;"></td>
			<td><a href="javascript:void(0)" onclick="del(<?php echo $v['id']?>)">删除</a></td>
			</tr>
			<?php } ?>
		</table>
		<?php echo ($page); ?> <input type="button" value="Ajax批量删除" onclick="delall()">
		</center>