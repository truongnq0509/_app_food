<?php
$users = findColumn('users', 'role_id', 1);
?>
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="card radius-15">
                <div class="card-body">
                    <form action="index.php?controller=blog&action=saveadd" method="POST" enctype="multipart/form-data" id="blog-form">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <h4 class="mb-0 text-white">THÊM BÀI VIẾT</h4>
                            </div>
                            <hr />
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="title" id="title" rules="required" class="form-control" />
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <br>
                                    <input name="image" id="image" type="file" rules="required" />
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Miêu tả</label>
                                    <textarea name="description" id="description" rules="required|min:100" class="form-control" rows="3" cols="3"></textarea>
                                    <span class="form-message"></span>
                                </div>
                                <button type="submit" class="btn btn-light px-5">Thêm</button>
                                <button type="reset" class="btn btn-light px-5">Nhập lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>