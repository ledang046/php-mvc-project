<?php
use MVC\Controllers\SinhvienController;
if (isset($_POST['submit'])) {
    $object = new SinhvienController;
    $object->create();
}
?>
<h1>Create task</h1>
<form method='post' action='<?php $_SERVER['PHP_SELF'] ?>'>
    <div class="form-group">
        <label for="ten">Tên</label>
        <input type="text" class="form-control" id="ten" placeholder="Nhap ten" name="ten">
    </div>

    <div class="form-group">
        <label for="title">Địa chỉ</label>
        <input type="text" class="form-control" id="title" placeholder="Nhap đỉa chỉ" name="diachi">
    </div>

    <div class="form-group">
        <label for="description">Tuổi</label>
        <input type="text" class="form-control" id="description" placeholder="Nhap tuoi" name="tuoi">
    </div>
    <div class="form-group">
        <label for="description">Giới tính</label>
        <input type="text" class="form-control" id="description" placeholder="Nhap gioi tinh" name="gioitinh">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>