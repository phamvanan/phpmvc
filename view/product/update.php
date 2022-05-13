<div class="page-header">
  <h1 class="page-title">Sản phẩm</h1>
  <div class="page-header-actions">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?controller=product">Danh sách sản phẩm </a></li>
      <li class="breadcrumb-item"><a href="../index.html">Sửa</a></li>
    </ol>
  </div>
</div>

<div class="page-content">

  <!-- Panel Table Add Row -->
  <div class="panel">
    <header class="panel-heading">
      <h3 class="panel-title">Sửa sản phẩm</h3>
    </header>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <!-- Example Horizontal Form -->
          <div class="example-wrap">
            <h4 class="example-title">Thong tin sản phẩm</h4>

            <div class="example">
              <form method="POST" action="?controller=product&action=suaproduct" enctype="multipart/form-data">
                <input type="hidden" value="<?= $data["product"]->id ?>" name="id">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Category Id: </label>
                  <div class="col-md-9">

                    <select class="form-control" name="categoryid">
                      <?php
                      foreach ($data["category"] as $key => $value) {
                      ?>
                        <option <?= $value->id === $data["product"]->category_id ? "selected" : '' ?> value="<?= $value->id ?>"><?= $value->name ?></option>
                      <?php
                      }
                      ?>

                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Name: </label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" value="<?= $data["product"]->name ?>" name="name" placeholder="Name" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Price: </label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" value="<?= $data["product"]->price ?>" name="price" placeholder="Price" />
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Quality: </label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" value="<?= $data["product"]->qty ?>" name="quality" placeholder="Quality" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Content: </label>
                  <div class="col-md-9">
                    <textarea id="content" name="content" class="form-control" value="<?= $data["product"]->content ?>"></textarea>
                    <script>
                      var editor = ClassicEditor
                        .create(document.querySelector('#content'), {
                          ckfinder: {
                            uploadUrl: 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                          },
                          toolbar: ['ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', 'link', '|', 'undo', 'redo']
                        })
                        .then(val => {
                          window.editor = val;
                          val.setData('<?= $data["product"]->content ?>');
                        })
                        .catch(error => {
                          console.error(error);
                        });

                      CKFinder.setupCKEditor(editor);
                    </script>
                  </div>
                </div>
                <div class=" form-group row">
                  <label class="col-md-3 col-form-label">Summary: </label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" value="<?= $data["product"]->summary ?>" name="summary" />
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Status: </label>
                  <div class="col-md-9">
                    <select class="form-control" name="status">
                      <option <?= $data["product"]->status === 1 ? "selected" : '' ?> value="1">Hien</option>
                      <option <?= $data["product"]->status === 0 ? "selected" : '' ?> value="0">An</option>
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
                          <input type="file" name="image" id="input-file-now" data-plugin="dropify" data-default-file="upload/<?= $data["product"]->image ?>" />
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