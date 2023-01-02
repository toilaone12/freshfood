<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa quảng cáo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa quảng cáo</li>
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
                <h3 class="card-title">Sửa quảng cáo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data"> 
                <div class="card-body">
                  <div class="form-group mb-0">
                      <label>Ảnh gốc</label><br>
                      <img width="150" src="upload/slide/<?php echo $data['image']?>">
                      <input type="hidden" value="<?php echo $data['image']?>" name="image_old">
                  </div>
                  <div class="form-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    <div class="my-2">
                      <?php
                        if(isset($errors['image'])){
                          echo $errors['image'];
                        }
                      ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên quảng cáo</label>
                    <input type="text" class="form-control" value="<?php echo $data['name'];?>" name="name" id="exampleInputEmail1" placeholder="Tên quảng cáo">
                    <div class="my-2">
                      <?php
                        if(isset($errors['name'])){
                          echo $errors['name'];
                        }
                      ?>
                    </div>    
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="editSlide" class="btn btn-primary">Sửa quảng cáo</button>
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