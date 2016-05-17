<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>
	<center>
		<form action="/tp23/index.php/Admin/Books/updateok" method="post" enctype="multipart/form-data">
		<input type="hidden" name="b_id" value="<?php echo $arr1['b_id']?>">
			<table>
				<tr>
					<td>图书名称</td>
					<td><input type="text" name="b_name" value="<?php echo $arr1['b_name']?>"></td>
				</tr>
				<tr>
					<td>图书价格</td>
					<td><input type="text" name="b_price" value="<?php echo $arr1['b_price']?>"></td>
				</tr>
				<tr>
					<td>图书数量</td>
					<td><input type="text" name="b_num" value="<?php echo $arr1['b_num']?>"></td>
				</tr>
				<tr>
					<td>是否热卖</td>
					<td><input type="checkbox" value="1" name="is_hot"
					<?php
 if($arr1[is_hot]==1){ echo "checked"; } ?>
					>热卖</td>
				</tr>
				<tr>
					<td>图书类型</td>
					<td>
					<select name="c_id" id="">
					<?php foreach($arr as $v){ ?>
					<option value="<?php echo $v['c_id']?>"
					<?php
 if($arr1['c_id']==$v['c_id']){ echo "selected"; } ?>
					><?php echo $v['c_name']?></option>
					<?php } ?>
					</select>
					</td>
				</tr>
				<tr>
				<td>图片</td>
				<td><input type="file" name="myfile"></td>
				</tr>
				<tr>
					<td><input type="submit" value="提交"></td>
					<td></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>