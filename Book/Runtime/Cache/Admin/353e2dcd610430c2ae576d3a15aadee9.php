<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>
	<center>
	   <input type="text" id="name"><input type="button" value="搜索" onclick="sou()">
	   <div id="div1">
		<table>
			<tr>
			<?php foreach($list as $key=>$v){ ?>
			<?php if($key%2==0&&$key!=0){ echo "</tr><tr>";} ?>
				<td>
				<table>
					<tr>
						<td colspan="2"><img src="/tp32/Public/Uploads/<?php echo ($v['g_img']); ?>" style="height:50px;width:50px;"></td>
					</tr>
					<tr>
						<td>书名</td>
						<td><?php echo $v['b_name'] ?></td>
					</tr>
					<tr>
						<td>价格</td>
						<td><?php echo $v['b_price'] ?></td>
					</tr>
					<tr>
						<td>作者</td>
						<td><?php echo $v['b_author'] ?></td>
					</tr>
					<tr>
						<td>类别</td>
						<td><?php echo $v['c_name'] ?></td>
					</tr>
					<tr>
						<td><a href="/tp32/index.php/Admin/Shu/del/id/<?php echo ($v['id']); ?>">删除</a></td>
					</tr>
				</table>
				</td>
				<?php }?>
			</tr>
		</table>
		<?php echo ($page); ?>
		</div>
	</center>
</body>
</html>
<script type="text/javascript">
function sou(){
	var name=document.getElementById('name').value;
	var zxl=new XMLHttpRequest();
	zxl.open('get','/tp32/index.php/Admin/Shu/sou/name/'+name);
	zxl.send();
	zxl.onreadystatechange=function(){
		if(zxl.readyState==4&&zxl.status==200){
			//alert(zxl.responseText);
			document.getElementById('div1').innerHTML=zxl.responseText;
		}	
	}


}
</script>