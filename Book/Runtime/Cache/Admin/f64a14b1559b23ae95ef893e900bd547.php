<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>
	<center>
			<table>
				<tr>
				    <th>ID</th>
				    <th>图书ID</th>
					<th>图书名称</th>
					<th>图书价格</th>
					<th>图书数量</th>
					<th>是否热卖</th>
					<th>图书分类</th>
					<th>图书封面</th>

					<th>操作</th>
				</tr>
				<?php foreach($list as $v){ ?>
				<tr>
				<td><input type="checkbox" name="check" value="<?php echo $v['b_id']?>"></td>
				<td><?php echo $v['b_id']?></td>
				<td><?php echo $v['b_name']?></td>
				<td><?php echo $v['b_price']?></td>
				<td><?php echo $v['b_num']?></td>
				<td>
				<?php if($v['is_hot']==1){ echo '√'; }else{ echo '×'; } ?>
				</td>
				<td><?php echo $v['c_name']?></td>
				<td><img src="../../../Public/Uploads/<?php echo ($v['g_img']); ?>" style="height:50px;width:50px;"></a></td>
				<td><a href="/tp32/index.php/Admin/Books/del/id/<?php echo ($v['b_id']); ?>">删除</a>||<a href="/tp32/index.php/Admin/Books/back/id/<?php echo ($v['b_id']); ?>">还原</a></td>
				</tr>
				<?php  }?>
 			</table>
			<?php echo ($page); ?> <a href="/tp32/index.php/Admin/Books/list1">返回主页面</a>
 	</center>
</body>
</html>