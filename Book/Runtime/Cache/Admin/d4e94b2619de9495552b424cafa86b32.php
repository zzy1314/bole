<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>
	<center>
		<form action="/tp23/index.php/Admin/Shu/addok" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>书名</td>
					<td><input type="text" name="b_name"></td>
				</tr>
				<tr>
					<td>作者</td>
					<td><input type="text" name="b_author"></td>
				</tr>
				<tr>
					<td>分类</td>
					<td>
					<select name="c_id" id="">
					<?php foreach($data as $key=>$v){ ?>

					<option value="<?php echo $v['c_id']?>"><?php echo $v['c_name']?></option>
					<?php } ?>
					</select>
					</td>
				</tr>
				<tr>
					<td>价格</td>
					<td><input type="text" name="b_price" ></td>
				</tr>
				<tr>
					<td>封面</td>
					<td><input type="file" name="myfile"></td>
				</tr>
				<tr>
					<td>简绍</td>
					<td>
					<textarea name="b_content" id="" cols="30" rows="10"></textarea>					
					</td>
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