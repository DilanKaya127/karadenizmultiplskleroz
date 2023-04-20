<?php

    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $city = $_POST["city"];
    $date = $_POST["date"];
    $past = $_POST["message"];
    $disability = $_POST["disability"];


    $to = "info@muratterzi.com.tr";

    $messeage = "<ul>
                    <li>Ad-Soyad: ".$name."</li>
                    <li>Telefon: ".$tel."</li>
                    <li>Bulunduğu İl/İlçe: ".$city"</li>
                    <li>MS Teşhis Tarihi: ".$date."</li>
                    <li>Müzik ve Koro Geçmişi: ".$past."</li>
                    <li>Engel Durumu: ".$disability."</li>
    
    

                </ul>"


    mail($to,"Koro Başvuru",)


?>