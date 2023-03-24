<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller {
    public function index()
    {
        // echo "About Page Index";
        // $this->load->model('Users_model'); 
        // //โหลด Model
        // $this->load->database();
        // //โหลด database

        // $result = $this->Users_model->get_lists();
        // //เรียกใช้ฟังกชั่นใน model ตัวนั้น โดยตั้งชื่อเป็น $result = $this -> ชื่อไฟล์model->ชื่อฟังก์ชั่นที่เราโหลด

        // //print_r($result);
        // //ในฟังก์ชั่นนี้เราต้องเชื่อมต่อ database ก่อนถึงจะแสดงผลลัพธิ์

        // echo "<br><Br><br>";
        // //เว้นบรรทัด
        // echo "<pre>";
        // //จัด Format ให้ดูดี
        // print_r($result);
        // echo "<pre>";
        // //จัด Format ให้ดูดี
        // echo $result[0]["username"];

        // $this->db->close();
        // //เป็นการปิด database

        $this->load->view('header');
        $this->load->view('home');

    }

    public function social() {
        $data = array();
        $data['facebook_page'] = "chadapohn.com99999";
        $data['twitter'] = "@chadapohn";
        $data['youtube'] = "chadapohn";
        $this->load->view('about_social', $data);
    }

} 