<div class="content-wrapper rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="profile-event p-3 py-5">
                <div class="bg-event text-dark pl-3 py-2 mx-3 c-pointer click profile-info position-relative">
                    <i class="fa-solid fa-user text-icon mr-2"></i>
                    <span class="text-event">Thông tin cá nhân</span> 
                </div>
                <div class="bg-event text-dark pl-3 py-2 mt-2 mx-3 c-pointer click profile-password position-relative">
                    <i class="fa-solid fa-lock text-icon mr-2"></i>
                    <span class="text-event">Thay đổi mật khẩu</span> 
                </div>
            </div>
            <!-- <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div> -->
        </div>
        <div class="col-md-8 form-profile">
            <div class="row">
                <div class="col-md-5 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <div class="border-success border rounded">
                            <label for="imageProfile">
                                <img class="rounded-circle mx-3 my-4 img-profile" width="150px" height="185px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            </label>
                            <input type="file" name="image" id="imageProfile" class="d-none">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Thông tin cá nhân</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8">
                                <label class="labels">Họ và tên</label>
                                <input type="text" name="name" class="form-control" placeholder="Họ và tên" value="">
                            </div>
                            <div class="col-md-4"><label class="labels">Giới tính</label>
                                <select name="sex" id="" class="form-control">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Số điện thoại</label>
                                <input type="phone" name="phone" min=1 class="form-control" placeholder="Số điện thoại" value="">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Địa chỉ nhà</label>
                                <input type="text" name="address" class="form-control" placeholder="Địa chỉ" value="">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit" name="save_profile">Lưu thông tin</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 form-password d-none">
            <div class="row">
                <div class="col-md-10 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Thay đổi mật khẩu</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8">
                                <label class="labels">Họ và tên</label>
                                <input type="text" name="name" class="form-control" placeholder="Họ và tên" value="">
                            </div>
                            <div class="col-md-4"><label class="labels">Giới tính</label>
                                <select name="sex" id="" class="form-control">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Số điện thoại</label>
                                <input type="phone" name="phone" min=1 class="form-control" placeholder="Số điện thoại" value="">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Địa chỉ nhà</label>
                                <input type="text" name="address" class="form-control" placeholder="Địa chỉ" value="">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit" name="save_profile">Lưu thông tin</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>