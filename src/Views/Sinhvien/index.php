<h1>Sinh Viên</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
            <a href="/mvc/Sinhvien/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add Sinh Vien</a>
            <tr>
                <th>Tên</th>
                <th>Địa chỉ</th>
                <th>Tuổi</th>
                <th>Giới tính</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <?php
        foreach ($sinhvien as $sv) {
            $sv = $sv->get();
            echo '<tr>';
            echo "<td>" . $sv['ten'] . "</td>";
            echo "<td>" . $sv['diachi'] . "</td>";
            echo "<td>" . $sv['tuoi'] . "</td>";
            if($sv['gioitinh'] == "1"){
                $sv['gioitinh'] = "Nam";
            }else{
                $sv['gioitinh'] = "Nữ";
            }
            echo "<td>" . $sv['gioitinh'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/Sinhvien/edit/" . $sv["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/Sinhvien/delete/" . $sv["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>