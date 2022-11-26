<div class="wrapper">
		
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					
					<div class="card radius-15">
						<div class="card-body">
							<div class="card">
								<div class="card-body">


									<div>
										<h5>DANH SÁCH NGƯỜI DÙNG</h5>
										<hr />
										<div class="table-responsive">
											<table class="table table-striped table-bordered mb-0" id="table1">
												<thead class="thead-light">
													<tr>
														<th scope="col">#</th>
                                                        <th scope="col">Chức vụ</th>
                                                        <th scope="col">Tên</th>
                                                        <th scope="col">Mật khẩu</th>
                                                        <th scope="col">Địa chỉ</th>
                                                        <th scope="col">Điện thoại</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Actions</th>

													</tr>
												</thead>
												
												<?php foreach ($users as $value) :?>
												<tbody>
													<tr>
														<th scope="row"><?php echo $value['id']?></th>
														<td><?php echo $value['role_id']?></td>
                                                        <td><?php echo $value['fullname']?></td>
                                                        <td><?php echo $value['password']?></td>
                                                        <td><?php echo $value['address']?></td>
                                                        <td><?php echo $value['phone']?></td>
                                                        <td><?php echo $value['email']?></td>
														<td>
															<a href="#"><p id="table2-new-row-button" class="btn btn-light btn-sm mb-2">Thay đổi chức vụ</p></a>
															
															<a href="index.php?controller=user&action=delete&id=<?php echo $value['id']?>"><p id="table2-new-row-button" class="btn btn-light btn-sm mb-2" onclick="return confirm('Bạn có muốn xóa không !')">Xóa</p></a>
														</td>
							
													</tr>
												</tbody>
												<?php endforeach?>
											</table>
										</div>
									</div>






									
								</div>
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
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
				class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>