<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm quảng cáo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm quảng cáo</li>
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
                <h3 class="card-title">Thêm quảng cáo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data"> 
                <div class="card-body">
                  <div class="form-group mb-0">
                    <label class="form-label" for="customFile">Hình ảnh</label>
                    <img src="../public/backend/image/nophoto.png" width="172"alt="" style="height: 170px !important;" class="img-thumbnail image d-block mb-3">
                    <input type="file" class="form-control-file" name="image" id="customFile" />
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
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Tên quảng cáo">
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
                  <button type="submit" name="insertSlide" class="btn btn-primary">Thêm quảng cáo</button>
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