<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa thông tin tài khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa thông tin tài khoản</li>
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa thông tin tài khoản</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Họ & tên</label>
                    <input type="text" class="form-control" value="<?php echo $data['name']?>" name="name" id="exampleInputEmail1" placeholder="Nhập họ và tên">
                    <div class="my-2">
                      <?php
                        if(isset($errors['name'])){
                          echo $errors['name'];
                        }
                      ?>
                    </div>    
                  </div>
                  <div class="form-group">
                    <label for="sex">Giới tính</label>
                    <select name="sex" id="sex" class="form-control">
                      <option value="">--Giới tính--</option>
                      <option value="Nam" <?php echo ($data['sex'] == "Nam") ? 'selected' : "" ?>>Nam</option>
                      <option value="Nữ" <?php echo ($data['sex'] == "Nữ") ? 'selected' : "" ?>>Nữ</option>
                      <option value="Khác" <?php echo ($data['sex'] == "Khác") ? 'selected' : "" ?>>Khác</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="<?php echo $data['email']?>" name="email" id="email" placeholder="Nhập email">
                    <div class="my-2">
                      <?php
                        if(isset($errors['email'])){
                          echo $errors['email'];
                        }
                      ?>
                    </div>    
                  </div>
                  <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="number" value="<?php echo $data['phone']?>" min=0 class="form-control" name="phone" id="phone">
                    <div class="my-2">
                      <?php
                        if(isset($errors['phone'])){
                          echo $errors['phone'];
                        }
                      ?>
                    </div>    
                  </div>
                  <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <textarea name="address" class="form-control" id="address" placeholder="Nhập địa chỉ" cols="30" rows="10"><?php echo $data['address']?></textarea>
                    <div class="my-2">
                      <?php
                        if(isset($errors['address'])){
                          echo $errors['address'];
                        }
                      ?>
                    </div>    
                  </div>
                  <div class="form-group">
                    <label for="id_role">Quyền quản lý</label>
                    <select name="id_role" id="id_role" class="form-control">
                      <option value="">--Quyền quản lý--</option>
                      <?php
                      foreach($roles as $key => $role){
                      ?>
                      <option <?php echo ($data['id_role'] == $role['id_role']) ? 'selected' : "" ?> value="<?php echo $role['id_role']?>"><?php echo $role['name']?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="editAccount" class="btn btn-primary">Sửa thông tin tài khoản</button>
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