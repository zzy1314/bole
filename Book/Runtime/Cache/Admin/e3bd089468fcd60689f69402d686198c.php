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
				<td><img src="/tp32/Public/Uploads/<?php echo ($v['g_img']); ?>" style="height:50px;width:50px;"></a></td>
				<td><a href="/tp32/index.php/Admin/Books/del/id/<?php echo ($v['b_id']); ?>">删除</a>||<a href="/tp32/index.php/Admin/Books/update/id/<?php echo ($v['b_id']); ?>">修改</a></td>
				</tr>
				<?php  }?>
 			</table>
			<p><input type="button" value="Ajax批量删除" onclick="del()">
			<input type="button" value="全选" onclick="qx()">			
			</p>
			<?php echo ($page); ?>
			<a href="javascript:void(0)" onclick="fun()">批量放入回收站</a>
			<a href="/tp32/index.php/Admin/Books/rubbish">回收站</a>
 	</center>
</body>
</html>
<script type="text/javascript">
function fun(){
	var check=document.getElementsByName('check');
	var str='';
	for(var i=0;i<check.length;i++){
		if(check[i].checked==true){
			str+=','+check[i].value;
		}
	}
	str=str.substr(1);
	var zxl=new XMLHttpRequest();
	zxl.open('get','/tp32/index.php/Admin/Books/recycle/id/'+str);
	zxl.send();
	zxl.onreadystatechange=function(){
		if(zxl.readyState==4&&zxl.status==200){
			//alert(zxl.responseText);
			if(zxl.responseText==1){
				location.href="/tp32/index.php/Admin/Books/list1";
			}else{
				alert('回收失败');
				location.href="/tp32/index.php/Admin/Books/list1";						
			}	
		}	
	}
}
function del(){
	var check=document.getElementsByName('check');
	var str='';
	for(var i=0;i<check.length;i++){
		if(check[i].checked==true){
			str+=','+check[i].value;
		}
	}
	str=str.substr(1);
	var zxl=new XMLHttpRequest();
	zxl.open('get','/tp32/index.php/Admin/Books/dell/id/'+str);
	zxl.send();
	zxl.onreadystatechange=function(){
		if(zxl.readyState==4&&zxl.status==200){
			//alert(zxl.responseText);
			if(zxl.responseText==1){
				location.href="/tp32/index.php/Admin/Books/list1";
			}else{
				alert('删除失败');
				location.href="/tp32/index.php/Admin/Books/list1";						
			}	
		}	
	}
}
//全选
function qx(){
	var check=document.getElementsByName('check');
	for(var i=0;i<check.length;i++){
		check[i].checked=true;
	}

}
</script>