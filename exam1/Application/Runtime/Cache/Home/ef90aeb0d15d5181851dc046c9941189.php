<?php if (!defined('THINK_PATH')) exit();?><center>
	<table border="1">
			<tr>
				<td>id</td>
				<td>标题</td>
				<td>内容</td>
				<td>留言者</td>
			</tr>
		<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
		    	<td><?php echo ($v["id"]); ?></td>
		    	<td><?php echo ($v["title"]); ?></td>
		    	<td><?php echo ($v["content"]); ?></td>
		    	<td><?php echo ($v["author"]); ?></td>
		    </tr><?php endforeach; endif; ?>
	</table>
</center>