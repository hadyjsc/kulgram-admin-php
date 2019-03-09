<div class="row">
    <div class="col-md-12">
      	<div class="card border-primary">
        	<div class="card-header">Data User <?= $data[0]->fname ?></div>
        	<div class="card-body">
        		<p>
        			<a class="btn btn-info icon-btn" href="index.php?page=users/index">
        				<i class="fa fa-arrow-left"></i>Back
        			</a>
        			<a class="btn btn-warning icon-btn" href="index.php?page=users/edit/<?= $data[0]->id ?>">
        				<i class="fa fa-edit"></i>Edit
        			</a>
        		</p>
        		<table class="table table-bordered">
        			<tr>
        				<th>Fullname</th>
        				<td><?= $data[0]->fname ?></td>
        			</tr>
        			<tr>
        				<th>Username</th>
        				<td><?= $data[0]->uname ?></td>
        			</tr>
        			<tr>
        				<th>Password</th>
        				<td><?= $data[0]->password ?></td>
        			</tr>
        			<tr>
        				<th>Level</th>
        				<td><?= $data[0]->level ?></td>
        			</tr>
        			<tr>
        				<th>Status</th>
        				<td><?= $data[0]->status ?></td>
        			</tr>
        			<tr>
        				<th>Created At</th>
        				<td><?= $data[0]->createdAt ?></td>
        			</tr>
        			<tr>
        				<th>Updated At</th>
        				<td><?= $data[0]->updatedAt ?></td>
        			</tr>
        		</table>
        	</div>
        </div>
    </div>
</div>