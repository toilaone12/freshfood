
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách tài khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách tài khoản</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="content-message mx-2 mb-4">
      <div class="container-fluid">
        <?php
          if(isset($_SESSION['message_account'])){
            echo $_SESSION['message_account'];
            $_SESSION['message_account'] = '';
          }
        ?>
      </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Danh sách tài khoản</h3>
    
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên tài khoản</th>
                            <th>Tên thành viên</th>
                            <th>Giới tính</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Chức vụ</th>
                            <th>Khởi tạo lúc</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 0;
                            foreach($lists as $key => $list){  
                        ?>
                        <tr>
                            <td><?php echo ++$i;?></td>
                            <td><?php echo $list['username']?></td>
                            <td><?php echo $list['name']?></td>
                            <td><?php echo $list['sex']?></td>
                            <td><?php echo $list['email']?></td>
                            <td><?php echo $list['phone']?></td>
                            <td><?php echo $list['address']?></td>
                            <td><?php echo $list['name_role']?></td>
                            <td><?php echo date('d/m/Y H:i:s',strtotime($list['created_at']))?></td>
                            <td>
                              <a href="?action=edit-account&id=<?php echo $list['id_admin']?>" class="btn btn-success">
                                <i class="fa-solid fa-pen-to-square"></i>
                              </a>
                              <a href="?action=delete-account&id=<?php echo $list['id_admin']?>" class="btn btn-danger">
                                <i class="fa-solid fa-trash-can"></i>
                              </a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>