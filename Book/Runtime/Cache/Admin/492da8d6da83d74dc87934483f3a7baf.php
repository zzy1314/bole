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
			<td><img src="/tp32/Public/Uploads/<?php echo ($v['g_img']); ?>" style="height:50px;width:50px;"></td>
			<td><a href="javascript:void(0)" onclick="del(<?php echo $v['id']?>)">删除</a>||<a href="javascript:void(0)" onclick="update(<?php echo $v['id']?>)">修改</a></td>
			</tr>
			<?php } ?>
		</table>
		<?php echo ($page); ?>
		<p>
		<input type="button" value="Ajax批量删除" onclick="delall()"></p>
		</div>
	</center>
	<div id="div2"></div>
</body>
</html>
<script type="text/javascript">
function del(id){
	var zxl=new XMLHttpRequest();
	zxl.open('get','/tp32/index.php/Admin/News/del/id/'+id);
	zxl.send();
	zxl.onreadystatechange=function(){
		if(zxl.readyState==4&&zxl.status==200){
			//alert(zxl.responseText);
			if(zxl.responseText==1){
				location.href="/tp32/index.php/Admin/News/list1";
			}else{
				alert('删除失败');
				location.href="/tp32/index.php/Admin/News/list1";						
			}	
		}	
	}

}
function delall(){
	var check=document.getElementsByName('check');
	var str='';
	for(var i=0;i<check.length;i++){
		if(check[i].checked==true){
			str+=','+check[i].value;
		}
	}
	str=str.substr(1);
	var zxl=new XMLHttpRequest();
	zxl.open('get','/tp32/index.php/Admin/News/delall/id/'+str);
	zxl.send();
	zxl.onreadystatechange=function(){
		if(zxl.readyState==4&&zxl.status==200){
			//alert(zxl.responseText);
			if(zxl.responseText==1){
				location.href="/tp32/index.php/Admin/News/list1";
			}else{
				alert('删除失败');
				location.href="/tp32/index.php/Admin/News/list1";						
			}	
		}	
	}

}
function sou(){
	var name=document.getElementById('name').value;
	var zxl=new XMLHttpRequest();
	zxl.open('get','/tp32/index.php/Admin/News/sou/name/'+name);
	zxl.send();
	zxl.onreadystatechange=function(){
		if(zxl.readyState==4&&zxl.status==200){
			//alert(zxl.responseText);
			document.getElementById('div1').innerHTML=zxl.responseText;
		}	
	}
}
function update(id){
	var zxl=new XMLHttpRequest();
	zxl.open('get','/tp32/index.php/Admin/News/update/id/'+id);
	zxl.send();
	zxl.onreadystatechange=function(){
		if(zxl.readyState==4&&zxl.status==200){
			//alert(zxl.responseText);
			document.getElementById('div2').innerHTML=zxl.responseText;
		}	
	}
}
</script>