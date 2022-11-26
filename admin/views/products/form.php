<?php

$category = all('categorys');


?>
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">

            <div class="card radius-15">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">

                            <form action="index.php?controller=product&action=saveadd" method="POST" enctype="multipart/form-data">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <h4 class="mb-0 text-white">THÊM SẢN PHẨM</h4>
                                    </div>
                                    <hr />
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label>danh mục</label>
                                            <select id="" name="category_id" class="form-control radius-30">
                                                <?php foreach ($category as $value) : ?>
                                                    <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tiêu đề</label>
                                            <input type="text" name="name" class="form-control radius-30" />
                                        </div>
                                        <div class="form-group">
                                            <label>Giá</label>
                                            <input type="text" name="price" class="form-control radius-30" />
                                        </div>
                                        <div class="form-group">
                                            <label>Giảm giá</label>
                                            <input type="text" name="sale" class="form-control radius-30" />
                                        </div>
                                        <div class="form-group">
                                            <label>Ảnh</label>
                                            <br>
                                            <input name="image" type="file" />
                                        </div>
                                        <div class="form-group">
                                            <label>Miêu tả</label>
                                            <textarea name="description" class="form-control radius-30" rows="3" cols="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng</label>
                                            <input name="quantity" type="text" class="form-control radius-30" />
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày nhập</label>
                                            <input name="created_date" type="text" class="form-control radius-30" />
                                        </div>



                                        <button type="submit" class="btn btn-light px-5 radius-30">Thêm</button>

                                        <button type="reset" class="btn btn-light px-5 radius-30">Nhập lại</button>

                                    </div>
                                </div>
                            </form>







                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>