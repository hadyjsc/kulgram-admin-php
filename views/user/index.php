<div class="row">
    <div class="col-md-12">
      	<div class="card border-primary">
        	<div class="card-header">Data Users</div>
        	<div class="card-body">
        		<p>
        			<a class="btn btn-success icon-btn" href="index.php?page=users/create">
        				<i class="fa fa-plus"></i>Register New User
        			</a>
        			<a class="btn btn-info icon-btn" href="index.php?page=users/export">
        				<i class="fa fa-refresh"></i>Generate Report
        			</a>
        		</p>
        		<table class="table table-bordered table-striped" id="table-user">
	        		<thead>
	        			<tr>
	        				<th>Full Name</th>
	        				<th>User Name</th>
	        				<th>Level</th>
	        				<th>Status</th>
	        				<th>Action</th>
	        			</tr>
	        		</thead>
	        		<tbody>
						<?php foreach ($data as $key => $value): ?>
							<tr>
								<td><?= $value->fname ?></td>
								<td><?= $value->uname ?></td>
								<td><?= $value->level ?></td>
								<td><?= $value->status ?></td>
								<td width="20%">
									<div class="btn-group" role="group">
										<a class="btn btn-info icon-btn" href="index.php?page=users/detail/<?= $value->id ?>"><i class="fa fa-eye"></i>
										</a>
										<a class="btn btn-warning icon-btn" href="index.php?page=users/edit/<?= $value->id ?>"><i class="fa fa-edit"></i>
										</a>
										<a class="btn btn-danger icon-btn" href="index.php?page=users/delete/<?= $value->id ?>"><i class="fa fa-trash"></i>
										</a>
									</div>
								</td>
							</tr>		
						<?php endforeach ?>
	        		</tbody>
				</table>
        	</div>
        	<div class="card-footer text-muted">
			    2 days ago
			</div>
        </div>
    </div>
</div>