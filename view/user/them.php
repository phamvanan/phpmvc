<div class="page-header">
        <h1 class="page-title">User</h1>
        <div class="page-header-actions">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=user">Danh sách User </a></li>
            <li class="breadcrumb-item"><a href="../index.html">Them</a></li>
          </ol>
        </div>
      </div>

      <div class="page-content">

        <!-- Panel Table Add Row -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Them user</h3>
          </header>
          <div class="panel-body">
            <div class="row">
            <div class="col-md-12 col-lg-6">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">
                  <h4 class="example-title">Nhap thong tin user</h4>
                
                  <div class="example">
                    <form method="POST" action="?controller=user&action=themuser" enctype="multipart/form-data" >
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">User Name: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="username" placeholder="User Name" autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Name: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Phone: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="phone" placeholder="Phone" autocomplete="off"
                          />
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Your Email: </label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" name="email" placeholder="@email.com"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Password: </label>
                        <div class="col-md-9">
                          <input type="password" class="form-control" name="password" placeholder="Password"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Confirm Password: </label>
                        <div class="col-md-9">
                          <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Role Id: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="role" placeholder="Role" autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Status: </label>
                        <div class="col-md-9">
                        <select class="form-control" name="status">
                            <option value="0">An het</option>
                            <option value="1">Hien</option>
                            <option value="2">An Front</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Image: </label>
                        <div class="col-md-9">
                        <div class="input-group input-group-file" data-plugin="inputGroupFile">
                            <input type="text" class="form-control" readonly="">
                            <span class="input-group-btn">
                                <span class="btn btn-success btn-file">
                                <i class="icon wb-upload" aria-hidden="true"></i>
                                <input type="file" name="image" multiple="">
                                </span>
                            </span>
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
      