<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$data = ["name" => "Vu Quoc Khanh",
    "phone" => "090.xxx.xxx",
    "email" => "Example@email.com",
    "trial_time" => "DD/MM/YYYY"
];
?>
<html>
    <head>
        <title>EM-01</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="font-family: 'Myriad Pro', arial, tahoma;">
        <div style="width: 600px; margin: 0 auto; font-family: Myriad Pro; font-size: 18px;">
            <div style="width: 100%; height: 73px; display: inline-block;">
                <img src="./img/LOGO.png" alt="" style="margin: 0 15px 13px 14px;">
                <img src="./img/header-map.png" alt="">
            </div>
            <h1 style="font-size: 25px; color: #810c15; font-weight: bold; text-align: center;">XÁC NHẬN THÔNG TIN HỌC THỬ</h1>
            <div style="margin-left: 25px;">
                <p><strong>Chào anh/chị,</strong> <br>Topica Native xác nhận việc đăng ký học thử của anh/chị
                </p>
            </div>
            <div style="width: 552px; height: 200px; margin-left: 25px; background-color: #e5e5e5;">
                <div style="width: 100%; height: 40px; background-color: #810c15; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                    <p style="color: #fff; margin-left: 15px; padding: 12px 5px;">Thông tin học thử của anh/chị<p>
                </div>
                <div style="width: 47%; float: left; margin-left: 25px; clear: both; margin-top: 13px; line-height: 15px;">
                    <p>Họ và tên</p>
                    <p style="margin-left: 25px;"><?php echo $data['name']; ?></p>
                    <p>Email</p>
                    <p style="margin-left: 25px;"><?php echo $data['email']; ?></p>
                </div>
                <div style="width: 47%; float: right; margin-top: 13px; line-height: 15px;">
                    <p>Số điện thoại</p>
                    <p style="margin-left: 25px;"><?php echo $data['phone']; ?></p>
                    <p>Thời gian học thử</p>
                    <p style="margin-left: 25px;"><?php echo $data['trial_time']; ?></p>
                </div>
            </div>

            <div style="width: 552px; height: 372px;; margin-left: 25px; background-color: #e5e5e5; margin-top: 30px;">
                <div style="width: 100%; height: 40px; background-color: #810c15; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                    <p style="color: #fff; margin-left: 15px; padding: 12px 5px;">3 bước để học cùng Topica Native<p>
                </div>
                <div style=" margin-bottom: 25px;">
                    <img src="./img/3-steps.png" alt="" style="margin-left: 25px; margin-top: 20px;">
                    <p style="text-align: center">Anh/chị chưa thực hiện thanh toán. Click vào nút bên dưới để <br> thanh toán và hoàn thành đăng ký</p>
                </div>
                <a  href="#" style="

                    text-align: center;
                    background-color: #810c15;
                    border-radius: 25px;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    margin-left: 160px;
                    color: #fff;
                    font-size: 14pt;
                    text-decoration: none;
                    padding: 15px 20px;">Thực hiện thanh toán</a>
                <p style="color: #810c15;
                   text-align: center;
                   font-weight: bold;
                   margin-top: 40px;"><img src="./img/tick-rec.png" alt="" style="margin-right: 10px;">Học trực tuyến 1 THẦY 1 TRÒ trong 45 phút</p>
                <p style="color: #810c15; text-align: center; margin-top: -10px; font-weight: bold;"><img src="./img/tick-rec.png" alt="" style="margin-right: 10px;">HOÀN HỌC PHÍ THỬ khi đăng ký học chính thức</p>
            </div>
            <p style="color: #810c15; text-align: center; font-size: 25px; font-weight: bold; margin-bottom: 95px; margin-top: 25px;">GIỚI THIỆU VỀ TOPICA NATIVE</p>

            <div style=" background-image: url(./img/footer-bg.png)">
                <iframe style="width: 552px; height: 320px; margin-left: 25px; margin-top: -80px;border:none" src="https://www.youtube.com/embed/dgQnNF8giWY"></iframe>
                <p style="margin-left: 25px;">Cảm ơn anh/chị đã đến với TOPICA Native. Để được hỗ trợ khi cần, anh/chị vui lòng liên hệ:</p>
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
                <!--                <div style="width: 100%; height: 50px; line-height: 55px; font-size: 11pt; background-color: #000; opacity: 0.8;">
                                    <ul style="list-style-type: none;">
                                        <li style="display: inline-block; color: #fff; margin-left: -30px; margin-right: 10px;">Hotline:0981.228.979</li>
                                        <li style="display: inline-block; color: #fff;">|</li>
                                        <li style="display: inline-block; color: #fff; margin-left: 10px; margin-right: 10px;">Email:topica.native@topica.edu.vn</li>
                                        <li style="display: inline-block; color: #fff;">|</li>
                                        <li style="display: inline-block; color: #fff; margin-left: 10px;">Website:topicanative.edu.vn</li>
                                    </ul>
                                </div>-->
            </div>
        </div>
    </body>
</html>
