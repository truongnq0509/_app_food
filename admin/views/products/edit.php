<?php

$category = executeSingle("SELECT * FROM categorys WHERE id != 15");

?>
<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="card radius-15">
                <div class="card-body">
                    <form action="index.php?controller=product&action=update" method="POST" enctype="multipart/form-data" id="product-form--edit">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <h4 class="mb-0 text-white">CẬP NHẬT SẢN PHẨM</h4>
                            </div>
                            <hr />
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select id="" name="category_id" class="form-control">
                                        <?php foreach ($category as $value) : ?>
                                            <option value="<?php echo $value['id'] ?>" <?php echo $value['id'] === $product['category_id'] ? "selected" : '' ?>><?php echo $value['name'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="name" id="name" rules="required" class="form-control" value="<?php echo $product['name'] ?>" />
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="text" name="price" id="price" rules="required|number" class="form-control" value="<?php echo $product['price'] ?>" />
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Giảm giá</label>
                                    <input type="text" name="sale" id="sale" rules="required|number" class="form-control" value="<?php echo $product['sale'] ?>" />
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <br>
                                    <img src="../upload/<?php echo $product['image'] ?>" alt="" style="width: 100px; height: 100px;" class="img-thumbnail">
                                    <input type="file" name="image" id="image" />
                                    <input type="text" name="hinhcu" value="<?php echo $product['image'] ?>" hidden>
                                </div>
                                <div class="form-group">
                                    <label>Miêu tả</label>
                                    <textarea name="description" class="form-control" rows="3" cols="3"><?php echo $product['description'] ?></textarea>
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input type="text" name="quantity" id="quantity" rules="required|number" class="form-control" value="<?php echo $product['quantity'] ?>" />
                                    <span class="form-message"></span>
                                </div>

                                <input type="text" name="id" value="<?php echo $product['id'] ?>" hidden>
                                <button type="submit" class="btn btn-light px-5">Cập Nhật</button>
                                <button type="reset" class="btn btn-light px-5">Nhập lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>