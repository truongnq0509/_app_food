<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="card radius-15">
                <div class="card-body">
                    <form action="index.php?controller=blog&action=update" method="POST" enctype="multipart/form-data" id="blog-form--edit">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <h4 class="mb-0 text-white">SỬA BÀI VIẾT</h4>
                            </div>
                            <hr />
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="title" id="title" rules="required" class="form-control" value="<?php echo $blog['title'] ?>" />
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <br>
                                    <img src="../upload/<?php echo $blog['image'] ?>" alt="" style="width: 100px; height: 100px;" class="img-thumbnail">
                                    <input name="image" id="image" type="file" />
                                    <input type="text" name="hinhcu" value="<?php echo $blog['image'] ?>" hidden>
                                </div>
                                <div class="form-group">
                                    <label>Ngày Đăng</label>
                                    <input type="text" class="form-control" value="<?= $blog['created_date'] ?>" name="created_date">
                                </div>

                                <div class="form-group">
                                    <label>Miêu tả</label>
                                    <textarea name="description" id="description" rules="required|min:100" class="form-control" rows="3" cols="3"><?php echo $blog['description'] ?></textarea>
                                    <span class="form-message"></span>
                                </div>
                                <input name="id" id="id" type="text" value="<?php echo $blog['id'] ?>" hidden />
                                <button type="submit" class="btn btn-light px-5 radius-30">Update</button>
                                <button type="reset" class="btn btn-light px-5 radius-30">Nhập lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>