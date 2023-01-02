<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa sản phẩm</li>
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
                <h3 class="card-title">Sửa sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="category">Thuộc danh mục</label>
                    <select name="id_category" id="category" class="form-control">
                      <?php
                        foreach($categorys as $key => $category){
                      ?>
                      <option <?php echo ($data['id_category'] == $category['id_category']) ? 'selected' : '';?> value="<?php echo $category['id_category']?>">
                        <?php echo $category['name'];?>
                      </option>
                      <?php
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group mb-0">
                      <label>Ảnh gốc</label><br>
                      <img width="150" src="upload/product/<?php echo $data['image']?>">
                      <input type="hidden" value="<?php echo $data['image']?>" name="image_old">
                      <input type="hidden" value="<?php echo $data['code']?>" name="code">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="customFile">Hình ảnh</label>
                    <input type="file" class="form-control-file" name="image" id="customFile" />
                    <div class="my-2">
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" value="<?php echo $data['name']?>" class="form-control" name="name" id="name" placeholder="Tên sản phẩm">
                    <div class="my-2">
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="quantity">Số lượng</label>
                    <input type="text" value="<?php echo $data['quantity']?>" class="form-control" name="quantity" id="quantity" placeholder="Số lượng">
                    <div class="my-2">
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price">Giá tiền</label>
                    <input type="text" value="<?php echo $data['price']?>" class="form-control" name="price" id="price" placeholder="Giá tiền">
                    <div class="my-2">
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price">Mô tả</label>
                    <textarea name="description" placeholder="Mô tả" id="ckeditor1" class="form-control"><?php echo $data['description']?></textarea>
                    <div class="my-2">
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price">Nội dung</label>
                    <textarea name="content" placeholder="Nội dung" id="ckeditor2" class="form-control"><?php echo $data['content']?></textarea>
                    <div class="my-2">
                    
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="editProduct" class="btn btn-primary">Sửa sản phẩm</button>
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