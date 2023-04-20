<?php

    $name = $_POST["name"];
    $phone = $_POST["tel"];
    $mail = $_POST["mail"];
    $date = $_POST["date"];
    $doctor = $_POST["doctor"];
    $medicine = $_POST["medicine"];
    $photo = $_POST["photo"];

    $to = "yavuz-kuk@hotmail.com";

    $messeage = "<ul>
                    <li>Ad-Soyad: ".$name."</li>
                    <li>Telefon numarası: ".$phone."</li>
                    <li>Mail: ".$mail."</li>
                    <li>Doğum Tarihi: ".$date."</li>
                    <li>Takip Edildiğiniz Klinik/Doktor: ".$doctor."</li>
                    <li>Kullandığı ilaçlar: ".$medicine."</li>
                    <li>Fotoğraf: ".$photo."</li>
                </ul>"







?>