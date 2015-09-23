<?php
$data = ["name" => "xxx",
    "account" => "Nga cá sấu",
    "learn_time" => "20h, ngày 20/10/2015",
    "pass" => "3 con sâu"
];
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>EM07</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="width: 597px;margin: 0 auto;font-family: 'Myriad Pro', arial, tahoma; font-size: 18px;">
        <div>
            <img src="./img/LOGO.png" alt="logo img" style="width: 40%;display: inline-block;margin-left: 10px;">
            <img src="./img/header-map.png" alt="map img" style="width: 55%;display: inline-block;float: right">
        </div>
        <div style="clear: both"></div>  
        <p style="color:#810c15; font-size: 25px;text-align: center;margin: 20px 0;font-weight: bold;text-transform: uppercase">Lớp học thử sẽ bắt đầu sau 1h nữa</p>
        <p style="text-align: left;padding-left:15px;"><span style="font-weight: bold;line-height: 2em;">Chào anh/chị,</span></br></br>

            Lớp học thử sẽ bắt đầu sau 1h nữa. Anh chị lưu ý đăng nhập vào lớp học
            đúng giờ.
        </p>
        <div style='background-color: #810c15;border-radius: 5px 5px 0 0;margin: 0 15px'>
            <p style='color:#fff;padding:10px 15px;margin-bottom: 0;'> Thông tin học thử của anh/chị</p>
        </div>
        <div style="background-color: #f2f2f2;margin: 0 15px;padding-top: 15px;">
            <div style='display: inline-block;width:50%;padding-left:15px'>
                <strong>Thời gian học:</strong>
                <p style='padding-left:20px'><?php echo $data['learn_time']; ?></p>

                <strong>Địa chỉ đăng nhập:</strong>
                <p style='padding-left:20px;'><?php echo $data['name']; ?></p>

            </div>

            <div style='display: inline-block;width:45%;float: right;'>
                <strong>Account:</strong>
                <p style='padding-left:20px'><?php echo $data['account']; ?></p>

                <strong>Pass:</strong>
                <p style='padding-left:20px'><?php echo $data['pass']; ?></p>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div>
            <button style="background-color: #810c15;
                    border-radius: 40px;
                    border: none;
                    color: #fff;
                    padding: 15px 36px;
                    float: right;
                    margin-top: 20px; 
                    margin-right: 15px;
                    ">
                <a href='#' style='text-decoration: none;
                   color: #fff;font-size:18px;'>Vào lớp học</a>
            </button>

        </div>
        <div style="clear: both;"></div>
        <div style="background:#810c15;border-radius: 5px 5px 0 0;margin: 0 15px;">
            <p style='color:#fff;padding:10px 15px; margin-bottom: 0;'>Thiết bị cần có</p>            
        </div>
        <div style='background:#f2f2f2;margin: 0 15px;'>
            <img src="./img/thiet-bi.png" alt="thiet-bi img" style='padding: 20px 38px;;'>
        </div>
        <h4 style='color: #810c15; text-align:center;font-weight:bold;text-transform:uppercase; font-size: 21px;'>Thương hiệu của chương trình đã được khẳng định</h4>
        <div style='margin: 0 33px;'>
            <div style='width: 49%;display: inline-block;margin-right: 10px'>
                <img src="./img/pic11.png" alt='pic11' style='display:inline-block'>
                <img src="./img/pic21.png" alt='pic12' style='display:inline-block'>
            </div>
            <div style='width: 48%;display: inline-block'>
                <img src="./img/pic12.png" alt='pic12' style='display:inline-block'>
                <img src="./img/pic14.png" alt='pic14' style='display:inline-block'>
            </div>

        </div>
        <div style='background:url(./img/footer-bg.png)'>
            <p style="padding:15px;">
                Chúc anh chị có trải nghiệm thú vị tại buổi học thử cùng TOPICA Native. Trong buổi học, anh/chị sẽ được:</br>
                ​- Trải nghiệm học trực tuyến 1 thầy 1 trò trong 45 phút</br>
                - Được giao tiếp nghe/nói với giáo viên bản ngữ, được sửa lỗi từ vựng, ngữ pháp, phát âm,...​​​</br>
                - Tìm hiểu thêm về phương pháp học ​của TOPICA Native
            </p>
            <div style=' background-color: #000;;opacity:0.8;'>
                <p style='padding: 15px;
                   color: #fff;
                   font-size: 14px;
                   text-align: center;'>
                    Hotline: 0981.228.979 &nbsp | &nbsp;	
                    Email: topica.native@topica.edu.vn &nbsp | &nbsp;	
                    Website: topicanative.edu.vn
                </p>

            </div>
        </div>
    </body>
</html>
