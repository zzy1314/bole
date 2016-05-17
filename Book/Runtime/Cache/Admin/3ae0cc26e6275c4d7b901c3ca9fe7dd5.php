<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<style type="text/css">
	#div2{
		display:inline;
	}
	</style>
</head>
<body>
<center>
<select name="c_id" id="c_id" onchange="fun1()">
<option value="0">--请选择分类--</option>
<?php foreach($s1 as $v){ ?>
<option value="<?php echo $v['c_id'];?>"><?php echo $v['c_name'];?></option>
<?php }?>
</select>
<div id='div2'>
<select name="id" id="id">
<option value="0">--请选择商品--</option>
</select>
</div>
<select name="is_new" id="is_new">
<option value="1">新品</option>
<option value="0">非新品</option>
</select>
<input type="text" id="name"><input type="button" value="搜索" onclick="sou()">
<div id="div1">
	<table>
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
			<td><a href="javascript:void(0)" onclick="sa(<?php echo $v['id']?>)">
			<?php
 if($v['is_hot']==1){ echo "<font color='red'>√</font>"; }else{ echo "<font color='green'>×</font>"; } ?></a></td>
			<td><?php echo $v['num']?></td>
			<td><a href="">删除</a></td>
		</tr>
		<?php }?>
	</table>
	<?php echo ($page); ?>
	</div>
	<p>
	<select name="cookie" id="cookie" onchange="fun()">
	<option value="0">--请选择--</option>
	<option value="1">回收站</option>
	<option value="2">上架</option>
	<option value="3">下架</option>
	<option value="4">批量删除</option>
	</select>
	</p>
	</center>
</body>
</html>
<script type="text/javascript">
function fun(){
	var cookie=document.getElementById('cookie').value;
	var check=document.getElementsByName('check');
	var str='';
	for(var i=0;i<check.length;i++){
		if(check[i].checked==true){
			str+=','+check[i].value;
		}
	}
	str=str.substr(1);
	//alert(str);
	//回收站
	if(cookie==1){
		//alert(cookie);
		var zxl=new XMLHttpRequest();
		zxl.open('get',"/tp32/index.php/Admin/Test/recycle/str/"+str);
		zxl.send();
		zxl.onreadystatechange=function(){
			if(zxl.readyState==4&&zxl.status==200){
				//alert(zxl.responseText);
				if(zxl.responseText==1){
					alert('回收成功');
					location.href="/tp32/index.php/Admin/Test/lists";
				}else{
					alert('回收失败');
					location.href="/tp32/index.php/Admin/Test/lists";				
				}
			}
		}
	}
	//上架
	if(cookie==2){
		//alert(cookie);
		var zxl=new XMLHttpRequest();
		zxl.open('get',"/tp32/index.php/Admin/Test/s1/str/"+str);
		zxl.send();
		zxl.onreadystatechange=function(){
			if(zxl.readyState==4&&zxl.status==200){
				//alert(zxl.responseText);
				if(zxl.responseText==1){
					alert('上架成功');
					location.href="/tp32/index.php/Admin/Test/lists";
				}else{
					alert('上架失败');
					location.href="/tp32/index.php/Admin/Test/lists";				
				}
			}
		}
	}
	//下架
	if(cookie==3){
		//alert(cookie);
		var zxl=new XMLHttpRequest();
		zxl.open('get',"/tp32/index.php/Admin/Test/s2/str/"+str);
		zxl.send();
		zxl.onreadystatechange=function(){
			if(zxl.readyState==4&&zxl.status==200){
				//alert(zxl.responseText);
				if(zxl.responseText==1){
					alert('下架成功');
					location.href="/tp32/index.php/Admin/Test/lists";
				}else{
					alert('下架失败');
					location.href="/tp32/index.php/Admin/Test/lists";				
				}
			}
		}
	}
	//删
		if(cookie==4){
		//alert(cookie);
		var zxl=new XMLHttpRequest();
		zxl.open('get',"/tp32/index.php/Admin/Test/s3/str/"+str);
		zxl.send();
		zxl.onreadystatechange=function(){
			if(zxl.readyState==4&&zxl.status==200){
				//alert(zxl.responseText);
				if(zxl.responseText==1){
					alert('删除成功');
					location.href="/tp32/index.php/Admin/Test/lists";
				}else{
					alert('删除失败');
					location.href="/tp32/index.php/Admin/Test/lists";				
				}
			}
		}
	}
}
//搜索
function sou(){
	var sou=document.getElementById('name').value;
	var c_id=document.getElementById('c_id').value;
	var id=document.getElementById('id').value;
	var is_new=document.getElementById('is_new').value;
	var zxl=new XMLHttpRequest();
	zxl.open('get',"/tp32/index.php/Admin/Test/sou/sou/"+sou);
	zxl.send();
	zxl.onreadystatechange=function(){
		if(zxl.readyState==4&&zxl.status==200){
			//alert(zxl.responseText);
			document.getElementById('div1').innerHTML=zxl.responseText;
		}
	}
}
//二级分类
function fun1(){
	var c_id=document.getElementById('c_id').value;
	var zxl=new XMLHttpRequest();
	zxl.open('get',"/tp32/index.php/Admin/Test/fun/c_id/"+c_id);
	zxl.send();
	zxl.onreadystatechange=function(){
		if(zxl.readyState==4&&zxl.status==200){
			//alert(zxl.responseText);
			document.getElementById('div2').innerHTML=zxl.responseText;
		}
	}
}
//即点即改
function sa(id){
	//alert(id);
	var zxl=new XMLHttpRequest();
	zxl.open('get',"/tp32/index.php/Admin/Test/sa/id/"+id);
	zxl.send();
	zxl.onreadystatechange=function(){
		//alert(zxl.responseText);				
		location.href="/tp32/index.php/Admin/Test/lists";
	
	}
}
</script>