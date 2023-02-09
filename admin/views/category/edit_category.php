<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa danh mục</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa danh mục</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-7">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa danh mục</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                <?php
                foreach($getCategory as $key => $category){
                ?>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Tên danh mục</label>
                      <input type="text" class="form-control" value="<?php echo $category['name']?>" name="name_category" id="exampleInputEmail1" placeholder="Tên danh mục">
                      <div class="my-2">
                        <?php
                          if(isset($errors['name'])){
                            echo $errors['name'];
                          }
                          ?>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="parent">Thuộc danh mục</label>
                      <select id="parent" name="parent_id" class="form-control">
                        <option value="0">Danh mục gốc</option>
                        <?php
                          foreach($lists as $key => $cate){
                            if($cate['parent_id'] == 0){
                        ?>
                        <option value="<?= $cate['id_category']?>" <?= ($cate['id_category'] == $category['parent_id']) ? 'selected' : ''?>><?= $cate['name']?></option>
                        <?php
                            }
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <?php
                }
                ?>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="editCategory" class="btn btn-primary">Sửa danh mục</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>