<div class="page-header">
  <h1 class="page-title">DataTables</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item active">Users</li>
  </ol>
  <div class="page-header-actions">
    <a class="btn btn-sm btn-default btn-outline btn-round" href="http://datatables.net" target="_blank">
      <i class="icon wb-link" aria-hidden="true"></i>
      <span class="hidden-sm-down">Official Website</span>
    </a>
  </div>
</div>

<div class="page-content">

  <!-- Panel Table Add Row -->
  <div class="panel">
    <header class="panel-heading">
      <?php
      if (isset($_GET["id"])) {
        $id = $_GET["id"];
        if ($id > 0) {
      ?>
          <h3 class="panel-title">Thêm thành công!</h3>

        <?php
        } else {
        ?>
          <h3 class="panel-title">Thêm thất bại!</h3>
        <?php


        }
      } else {
        ?>
        <h3 class="panel-title"></h3>
      <?php } ?>
    </header>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-15">
            <a href="?controller=user&action=formthem" class="btn btn-outline btn-primary" type="button">
              <i class="icon wb-plus" aria-hidden="true"></i> Add
            </a>
          </div>
        </div>
      </div>
      <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Image</th>
            <th>GroupId</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($data as $key => $value) {
          ?>
            <tr class="gradeA">
              <td><?= $value->id ?></td>
              <td><?= $value->username ?></td>
              <td><?= $value->name ?></td>
              <td><?= $value->email ?></td>
              <td><?= $value->phone ?></td>
              <td><?= $value->image ?></td>
              <td><?= $value->role_id ?></td>
              <td><?= getStatusName($value->status) ?></td>

              <td class="actions">

                <a href="?controller=user&action=updateform&id=<?= $value->id ?>" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                <a href="#" data-id="<?= $value->id ?>" data-target="#examplePositionCenter" data-toggle="modal" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
          <?php
          }
          ?>

          <div class="modal fade" id="examplePositionCenter" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-simple modal-center">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title">Thông báo</h4>
                </div>
                <div class="modal-body">
                  <p>Bạn chắc xóa?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                  <button type="button" data-controller="user" data-action="xoauser" id="btnXoa" class="btn btn-danger">Xóa</button>
                </div>
              </div>
            </div>
          </div>
        </tbody>

      </table>
    </div>
  </div>
  <!-- End Panel Table Add Row -->


</div>