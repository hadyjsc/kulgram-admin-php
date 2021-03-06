<div class="row">
    <div class="col-md-12">
        <div class="card border-primary">
            <div class="card-header">Create Data User</div>
            <div class="card-body">
                <form class="form-horizontal" id="form" action="" method="POST">
                    <div class="form-group row">
                      <label class="control-label col-md-3">Name</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" name="fname" placeholder="Enter full name" data-validation="[NOTEMPTY]">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-3">Username</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Enter User Name" name="uname" data-validation="[NOTEMPTY]">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-3">Password</label>
                      <div class="col-md-8">
                        <input class="form-control" type="password" placeholder="Enter Password" name="password" data-validation="[NOTEMPTY]">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-3">Level</label>
                      <div class="col-md-8">
                        <select class="form-control" placeholder="Select Level" name="level" data-validation="[NOTEMPTY]">
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                            <option value="member">Member</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-3">Status</label>
                      <div class="col-md-8">
                        <select class="form-control" placeholder="Select Status" name="status" data-validation="[NOTEMPTY]">
                            <option value="actived">Actived</option>
                            <option value="deactived">Deactived</option>
                            <option value="blocked">Blocked</option>
                            <option value="deleted">Deleted</option>
                        </select>
                      </div>
                    </div>
                    <a class="btn btn-info icon-btn" href="index.php?page=users/index">
                        <i class="fa fa-arrow-left"></i>Back
                    </a>
                    <button type="submit" class="btn btn-success btn-icon" name="save"><i class="fa fa-save"></i>Save</button>
                  </form>
            </div>
        </div>
    </div>
</div>