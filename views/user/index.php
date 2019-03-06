<table class="table">
<?php foreach ($data as $key => $value): ?>
	<tr>
		<td><?= $value->fname ?></td>
		<td><?= $value->uname ?></td>
		<td><?= $value->level ?></td>
		<td><?= $value->status ?></td>
	</tr>		
<?php endforeach ?>
</table>