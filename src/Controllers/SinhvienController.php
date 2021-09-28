<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\SinhVienModel;
use MVC\Models\SinhVienRepository;

class SinhVienController extends Controller
{
    function index()
    {
        $sinhvien = new SinhvienRepository();
        $d['sinhvien'] = $sinhvien->getAll([]);
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["ten"])) {
            $id = 0;
            $ten = $_POST["ten"];
            $diachi = $_POST["diachi"];
            $tuoi = $_POST["tuoi"];
            $gioitinh = $_POST["gioitinh"];
            $form = ['ten' => $ten, 'diachi' => $diachi, 'tuoi' => $tuoi , 'gioitinh' => $gioitinh];
            //secure form
            $form = $this->secure_form($form);
            $sinhvienModel_obj = new SinhVienModel;
            $sinhvienModel_obj->set($id,$form['ten'], $form['diachi'],$form['tuoi'],$form['gioitinh']);
            $sv = new SinhVienRepository();

            if ($sv->add($sinhvienModel_obj)) {
                header("Location: " . URL_WEBROOT . "Sinhvien/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $sinhvien = new SinhvienRepository();
        $d["sinhvien"] = $sinhvien->get($id);

        if (isset($_POST["ten"])) {
            //get form data
            $id = $id;
            $ten = $_POST["ten"];
            $tuoi = $_POST["tuoi"];
            $diachi = $_POST["diachi"];
            $gioitinh = $_POST["gioitinh"];
            $form = ['ten' => $ten, 'tuoi' => $tuoi, 'diachi' => $diachi ,'gioitinh' => $gioitinh];
            //secure form
            $form = $this->secure_form($form);
            $sinhvienModel_obj = new SinhvienModel;
            $sinhvienModel_obj->set($id,$form['ten'], $form['diachi'], $form['tuoi'],$form['gioitinh']);

            if ($sinhvien->add($sinhvienModel_obj)) {
                header("Location: " . URL_WEBROOT . "Sinhvien/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $sinhvien = new SinhVienRepository();

        if ($sinhvien->delete($id)) {
            header("Location: " . URL_WEBROOT . "Sinhvien/index");
        }
    }
}
