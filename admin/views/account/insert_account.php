<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Đăng ký tài khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Đăng ký tài khoản</li>
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
                <h3 class="card-title">Đăng ký tài khoản</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="username">Tên tài khoản</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Nhập tài khoản">
                    <div class="my-2">
                      <?php
                        if(isset($errors['username'])){
                          echo $errors['username'];
                        }
                      ?>
                    </div>    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Họ & tên</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Nhập họ và tên">
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
                      <option value="Nam">Nam</option>
                      <option value="Nữ">Nữ</option>
                      <option value="Khác">Khác</option>
                    </select>
                    <div class="my-2">
                      <?php
                        if(isset($errors['sex'])){
                          echo $errors['sex'];
                        }
                      ?>
                    </div> 
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email">
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
                    <input type="number" min=0 class="form-control" name="phone" id="phone">
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
                    <textarea name="address" class="form-control" id="address" placeholder="Nhập địa chỉ" cols="30" rows="10"></textarea>
                    <div class="my-2">
                      <?php
                        if(isset($errors['address'])){
                          echo $errors['address'];
                        }
                      ?>
                    </div>    
                  </div>
                  <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" id="password">
                    <div class="my-2">
                      <?php
                        if(isset($errors['password'])){
                          echo $errors['password'];
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
                      <option value="<?php echo $role['id_role']?>"><?php echo $role['name']?></option>
                      <?php
                      }
                      ?>
                    </select>
                    <div class="my-2">
                      <?php
                        if(isset($errors['idRole'])){
                          echo $errors['idRole'];
                        }
                      ?>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="insertAccount" class="btn btn-primary">Đăng ký</button>
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