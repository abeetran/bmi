<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function inchuoi_config($tenchuoi){
    echo config_item($tenchuoi);
}

function inchuoi_duongdanfile($tenfile){
    echo base_url($tenfile);
}

function inchuoi_nhomthanhvien($role) {
	$nhomthanhvien;
	switch ($role) {
		case '0':
            // Quyền cao nhất và được ẩn đi trong hệ thống
			$nhomthanhvien = 'Điều hành';
			break;
		case '1':
            // Nhóm thành viên có thể thêm bài viết và chỉ chỉnh sửa bài viết của chính mình 
            // 1 . mặc định bài viết khi được thêm mới hoặc chỉnh sửa sẽ trở về trạng thái 'chờ kiểm duyệt'
            // 2 . mặc định không có quyền xóa và không có quyền kiểm duyệt bài viết  
            // 3 . không thể truy cập bài viết 'chức năng'
            // 4 . không thể truy cập chức năng 'trang nội dung'
            // 5 . không thể truy cập trang thống kê
            // 6 . không thể truy cập trang công cụ
            // 7 . không thể truy cập trang thiết lập
            // 8 . không thể truy cập trang thành viên
            // 9 . có thể truy cập trang thông tin và chỉnh sửa thông tin cá nhân
			$nhomthanhvien = 'Cộng tác viên';
			break;
		case '2':
            // Nhóm thành viên có thể thêm bài viết và chỉnh sửa bài viết của tất cả thành viên
            // 1 . mặc định bài viết khi được thêm mới hoặc chỉnh sửa sẽ trở về trạng thái 'chờ kiểm duyệt'
            // 2 . mặc định có quyền xóa và có quyền kiểm duyệt bài viết  
            // 3 . không thể truy cập bài viết 'chức năng'
            // 4 . không thể truy cập chức năng 'trang nội dung'
            // 5 . không thể truy cập trang thống kê
            // 6 . không thể truy cập trang công cụ
            // 7 . không thể truy cập trang thiết lập
            // 8 . không thể truy cập trang thành viên
            // 9 . có thể truy cập trang thông tin và chỉnh sửa thông tin cá nhân
			$nhomthanhvien = 'Biên tập viên';
			break;
		case '3':
            // Nhóm thành viên có thể thêm bài viết và chỉ chỉnh sửa bài viết của tất cả thành viên
            // 1 . mặc định bài viết khi được thêm mới hoặc chỉnh sửa sẽ trở về trạng thái 'chờ kiểm duyệt'
            // 2 . mặc định có quyền xóa và có quyền kiểm duyệt bài viết  
            // 3 . có thể truy cập bài viết 'chức năng'
            // 4 . có thể truy cập chức năng 'trang nội dung'
            // 5 . có thể truy cập trang thống kê
            // 6 . không thể truy cập trang công cụ
            // 7 . không thể truy cập trang thiết lập
            // 8 . có thể truy cập trang thành viên
            // 9 . có thể truy cập trang thông tin và chỉnh sửa thông tin cá nhân
			$nhomthanhvien = 'Quản lý viên';
			break;
		case '4':
            // Nhóm thành viên có thể thêm bài viết và chỉ chỉnh sửa bài viết của tất cả thành viên
            // 1 . mặc định bài viết khi được thêm mới hoặc chỉnh sửa sẽ trở về trạng thái 'chờ kiểm duyệt'
            // 2 . mặc định có quyền xóa và có quyền kiểm duyệt bài viết  
            // 3 . có thể truy cập bài viết 'chức năng'
            // 4 . có thể truy cập chức năng 'trang nội dung'
            // 5 . có thể truy cập trang thống kê
            // 6 . có thể truy cập trang công cụ
            // 7 . có thể truy cập trang thiết lập
            // 8 . có thể truy cập trang thành viên
            // 9 . có thể truy cập trang thông tin và chỉnh sửa thông tin cá nhân
			$nhomthanhvien = 'Quản trị viên';
			break;
		default:
			$chucvu = 'Cộng tác viên';
			break;
	}

	return $nhomthanhvien;
}

function message($tag = 'span', $type = 'normal', $msg = NULL) {
	switch ($type) {
		case 'normal':
			$class = 'text-info';
			break;
		case 'error':
			$class = 'text-danger';
			break;
		case 'warning':
			$class = 'text-warning';
			break;
		case 'success':
			$class = 'text-success';
			break;
		default:
			$class = 'text-info';
			break;
	}
	return "<$tag class=\"$class\">$msg</$tag>";
}