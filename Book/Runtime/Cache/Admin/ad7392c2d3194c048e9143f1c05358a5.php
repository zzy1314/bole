<?php if (!defined('THINK_PATH')) exit();?><center>
<table>
			<tr>
			<?php foreach($list as $key=>$v){ ?>
			<?php if($key%2==0&&$key!=0){ echo "</tr><tr>";} ?>
				<td>
				<table>
					<tr>
						<td colspan="2"><img src="/tp23/Public/Uploads/<?php echo ($v['g_img']); ?>" style="height:50px;width:50px;"></td>
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
						<td><a href="/tp23/index.php/Admin/Shu/del/id/<?php echo ($v['id']); ?>">删除</a></td>
					</tr>
				</table>
				</td>
				<?php }?>
			</tr>
		</table>
		<?php echo ($page); ?>
		</center>