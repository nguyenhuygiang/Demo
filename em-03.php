
<?php
$data = ["name" => "Ngant",
    "account" => "Nga cá sấu",
    "learn_time" => "20/10/2015",
    "trial_time" => "DD/MM/YYYY"
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
        <title>EM-03</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="font-family: 'Myriad Pro', arial, tahoma;">
        <div style="width: 600px; margin: 0 auto; font-family: Myriad Pro; font-size: 18px;">
            <div style="width: 100%; height: 73px; display: inline-block;">
                <img src="./img/LOGO.png" alt="" style="margin: 0 15px 13px 14px;">
                <img src="./img/header-map.png" alt="">
            </div>
            <h1 style="font-size: 25px; color: #810c15; font-weight: bold; text-align: center;">HƯỚNG DẪN HỌC THỬ</h1>
            <div style="margin-left: 25px;">
                <p><b>Chào anh/chị,</b> <br>Topica Native xác nhận việc đăng ký học thử của anh/chị
                </p>
            </div>
            <div style="width: 552px; height: 200px; margin-left: 25px; background-color: #e5e5e5;">
                <div style="width: 100%; height: 40px; background-color: #810c15; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                    <p style="color: #fff; margin-left: 15px; padding: 12px 5px;">Thông tin học thử<p>
                </div>
                <div style="width: 47%; float: left; margin-left: 25px; clear: both; margin-top: 13px; line-height: 15px;">
                    <p>Địa chỉ đăng nhập</p>
                    <p style="margin-left: 25px;"><?php echo $data['name']; ?></p>
                    <p>Thời gian học</p>
                    <p style="margin-left: 25px;"><?php echo $data['learn_time']; ?></p>
                </div>
                <div style="width: 47%; float: right; margin-top: 13px; line-height: 15px;">
                    <p>Account</p>
                    <p style="margin-left: 25px;"><?php echo $data['account']; ?></p>
                    <p>Thời gian học thử</p>
                    <p style="margin-left: 25px;"><?php echo $data['trial_time']; ?></p>
                </div>
            </div>

            <div style="width: 552px; height: 240px;; margin-left: 25px; background-color: #e5e5e5; margin-top: 30px;">
                <div style="width: 100%; height: 40px; background-color: #810c15; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                    <p style="color: #fff; margin-left: 15px; padding: 12px 5px;">Thiết bị cần có<p>
                </div>
                <img src="./img/thiet-bi.png" alt="" style="margin: 20px 0 25px 25px;">
                <a  href="#" style="

                    text-align: center;
                    background-color: #810c15;
                    border-radius: 25px;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    margin-left: 150px;
                    color: #fff;
                    font-size: 14pt;
                    text-decoration: none;
                    padding: 15px 20px;">Click để kiểm tra kỹ thuật
                </a>
                <p style="text-align: center;margin-top: 25px;">Lưu ý: Kiểm tra kỹ thuật là bước bắt buộc trước khi học thử</p>
            </div>

            <div style="width: 552px; height: 190px;; margin-left: 25px; background-color: #e5e5e5; margin-top: 30px;">
                <div style="width: 100%; height: 40px; background-color: #810c15; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                    <p style="color: #fff; margin-left: 15px; padding: 12px 5px;">3 bước để học thử cùng TOPICA Native<p>
                </div>
                <div>
                    <img src="./img/3-steps.png" alt="" style="margin-left: 25px; margin-top: 20px;">
                </div>
            </div>
            <p style="color: #810c15; text-align: center; font-size: 25px; font-weight: bold; margin-bottom: 95px; margin-top: 25px;">VIDEO HƯỚNG DẪN HỌC THỬ</p>

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
