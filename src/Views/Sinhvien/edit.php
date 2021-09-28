<?php

use MVC\Controllers\SinhvienController;
$sv = $sinhvien->get();
$id = $sv['id'];
if (isset($_POST['submit'])) {
   $object = new SinhvienController;
   $object->edit($id);
}
?>
<h1>Edit Sinh Vien</h1>
<form method='post' action='<?php $_SERVER['PHP_SELF'] ?>'>
    <div class="form-group">
        <label for="ten">Ten</label>
        <input type="text" class="form-control" id="ten" placeholder="Nhap ten" name="ten" value ="<?php if (isset($sv["ten"])) echo $sv["ten"];?>">
    </div>

    <div class="form-group">
        <label for="diachi">Dia chi</label>
        <input type="text" class="form-control" id="diachi" placeholder="Nhap dia chi" name="diachi" value ="<?php if (isset($sv["diachi"])) echo $sv["diachi"];?>">
    </div>
    <div class="form-group">
        <label for="tuoi">Tuoi</label>
        <input type="text" class="form-control" id="tuoi" placeholder="Nhap tuoi" name="tuoi" value ="<?php if (isset($sv["tuoi"])) echo $sv["tuoi"];?>">
    </div>
    <div class="form-group">
        <label for="tuoi">Gioi Tinh</label>
        <input type="text" class="form-control" id="gioitinh" placeholder="Nhap gioi tinh" name="gioitinh" value ="<?php if (isset($sv["gioitinh"])) echo $sv["gioitinh"];?>">
        
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>