<div class="wrapper">
    <div class="page-wrapper">
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="card radius-15">
                    <div class="card-body">
                        <h5>DANH SÁCH BÀI VIẾT</h5>
                        <hr />

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered mb-0" id="table1">

                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col" style="width: 300px ;">Tiêu Đề</th>
                                        <th scope="col" style="width: 100px ;">Ảnh</th>
                                        <th scope="col">Ngày Viết</th>
                                        <th scope="col">Actions</th>

                                    </tr>
                                </thead>
                                <?php
                                $count = 0;
                                foreach ($blogs as $value) :
                                    $count++;
                                ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $count ?>
                                            </th>
                                            <td><?php echo $value['title'] ?></td>
                                            <td>

                                                <img style="min-width: 100px; height: 100px; " src="../upload/<?php echo $value['image'] ?>" class="img-thumbnail" alt="">

                                            </td>
                                            <td><?php echo $value['created_date'] ?></td>

                                            <td>
                                                <a href="index.php?controller=blog&action=edit&id=<?php echo $value['id'] ?>">
                                                    <p id="table2-new-row-button" class="btn btn-light btn-sm mb-2">
                                                        <i class="fadeIn animated bx bx-edit-alt"></i>

                                                    </p>
                                                </a>

                                                <a href="index.php?controller=blog&action=delete&id=<?php echo $value['id'] ?>">
                                                    <p id="table2-new-row-button" onclick=" return confirm('Bạn có muốn xóa không !')" class="btn btn-light btn-sm mb-2">
                                                        <i class="fadeIn animated bx bx-eraser"></i>
                                                    </p>
                                                </a>
                                            </td>

                                        </tr>
                                    </tbody>
                                <?php endforeach ?>

                            </table>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->
    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
</div>