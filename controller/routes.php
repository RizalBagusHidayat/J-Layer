<?php
include_once 'config/static.php';
include_once 'config/conn.php';
include_once 'controller/main.php';
include_once 'function/main.php';

# GET
Router::url('', 'get', function () { 
    return view('home'); 
});
Router::url('login', 'get', 'authController::login');
Router::url('login', 'post', 'authController::login');
Router::url('register', 'get', 'authController::register');
Router::url('register', 'post', 'authController::register');
Router::url('logout', 'get', 'authController::logout');

Router::url('dashboard', 'get', 'dashboardController::showDashboard');

Router::url('pengajuan', 'get', 'pengajuanController::showPengajuan');

Router::url('tambahpengajuan', 'get', 'pengajuanController::showTambahPengajuan');
Router::url('tambahpengajuan', 'post', 'pengajuanController::storeTambahPengajuan');

Router::url('editpengajuan', 'get', 'pengajuanController::showEditPengajuan');
Router::url('editpengajuan', 'post', 'pengajuanController::storeEditPengajuan');

Router::url('detailpengajuan', 'get', 'pengajuanController::showDetailPengajuan');
Router::url('detailpengajuan', 'post', 'pengajuanController::storeDetailPengajuan');

Router::url('konfirmasi', 'get', 'pengajuanController::showKonfirmasi');
Router::url('konfirmasi', 'post', 'pengajuanController::storeKonfirmasi');

Router::url('berita', 'get', function () {
     return view('berita'); 
}); 

new Router();