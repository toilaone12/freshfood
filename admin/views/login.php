<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FreshFood</title>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/backend/dist/css/style.css">
    </head>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Đăng nhập</h2>
                                <p class="text-white-50 mb-5"><?= ((isset($errors['error'])) ? $errors['error'] : "")?></p>
                                <form method="POST">
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="username" id="typeEmailX" placeholder=" " class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Tài khoản</label>
                                    </div>
        
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" id="typePasswordX" placeholder=" " class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Mật khẩu</label>
                                    </div>
        
                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="?action=forgot">Quên mật khẩu?</a></p>
        
                                    <button class="btn btn-outline-light btn-lg px-5" name="login" type="submit">Đăng nhập</button>
                                </form>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</html>
