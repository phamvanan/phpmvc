<div class="page-header">
        <h1 class="page-title">User</h1>
        <div class="page-header-actions">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=user">Danh sách User </a></li>
            <li class="breadcrumb-item"><a href="../index.html">Sửa</a></li>
          </ol>
        </div>
      </div>

      <div class="page-content">

        <!-- Panel Table Add Row -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Sửa user</h3>
          </header>
          <div class="panel-body">
            <div class="row">
            <div class="col-md-12 col-lg-6">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">
                  <h4 class="example-title">Nhap thong tin user</h4>
                
                  <div class="example">
                    <form method="POST" action="?controller=user&action=suauser" enctype="multipart/form-data" >
                        <input type="hidden" value="<?=$data->id?>" name="id">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">User Name: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="username" placeholder="User Name" readonly value="<?=$data->username?>" autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Name: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" value="<?=$data->name?>" name="name" placeholder="Name" autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Phone: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" value="<?=$data->phone?>" name="phone" placeholder="Phone" autocomplete="off"
                          />
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Your Email: </label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" value="<?=$data->email?>" name="email" placeholder="@email.com"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Role Id: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" value="<?=$data->role_id?>" name="role" placeholder="Role" autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Status: </label>
                        <div class="col-md-9">
                        <select class="form-control" name="status">
                            <option value="0" <?=$data->status=='0'?'selected':''?>>An het</option>
                            <option value="1" <?=$data->status=='1'?'selected':''?>>Hien</option>
                            <option value="2" <?=$data->status=='2'?'selected':''?>>An Front</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Image: </label>
                        <div class="col-md-9">
                        <div class="input-group input-group-file" data-plugin="inputGroupFile">
                          
                             <!-- Example Default -->
                            <div class="example-wrap">
                            <div class="example">
                                <input type="file" name="image" id="input-file-now" data-plugin="dropify" data-default-file="upload/<?=$data->image?>"
                                />
                            </div>
                            </div>
                            <!-- End Example Default -->
                        </div>
                      </div>
                    </div>
                      <div class="form-group row">
                        <div class="col-md-9">
                          <button type="submit" class="btn btn-primary">Submit </button>
                          <button type="reset" class="btn btn-default btn-outline">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Horizontal Form -->
              </div>
           
          </div>
        </div>
        <!-- End Panel Table Add Row -->
       

      </div>
      