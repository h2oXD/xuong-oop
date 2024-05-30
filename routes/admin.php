<?php

/**
 *  GET      -> USER/INDEX   -> INDEX       -> Danh sách
 *  GET      -> USER/CREATE  -> CREATE      -> Hiển thị form thêm mới
 *  POST     -> USER/STORE   -> STORE       -> Lưu dữ liệu từ form tạo mới vào DB
 *  GET      -> USER/ID      -> SHOW($id)   -> Xem chi tiết
 *  PUT      -> USER/ID/EDIT -> EDIT($id)   -> Hiển thị form cập nhật
 *  PUT      -> USER/ID      -> UPDATE($id) -> Lưu dữ liệu từ form cập nhật
 *  DELETE   -> USER/ID      -> DELETE($id) -> Xoá bản ghi trong DB
 */

use Fixbu\XuongOop\Controllers\Admin\UserController;

$router->mount('/admin', function () use ($router) {
    $router->mount('/users', function () use ($router) {
        $router->get('/',             UserController::class . '@index');
        $router->get('/create',       UserController::class . '@create');
        $router->post('/store',       UserController::class . '@store');
        $router->get('/{id}',         UserController::class . '@show');
        $router->put('/{id}/edit',    UserController::class . '@edit');
        $router->put('/{id}',         UserController::class . '@update');
        $router->delete('/{id}',      UserController::class . '@delete');
    });
});
