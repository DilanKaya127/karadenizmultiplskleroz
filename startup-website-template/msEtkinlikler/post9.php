<?php
    echo "<pre>";

    $name = $_POST["nick"];
    $age = $_POST["age"];
    $gender = $_POST["genderC"];
    $msDate = $_POST["MSdate"];
    $ill = $_POST["ill"];
    $illness = $_POST["illness"];
    $support = $_POST["support"];
    $phone = $_POST["phone"];
    $education = $_POST["education"];
    $job = $_POST["job"];
    $doctor = $_POST["doctor"];
    $medicine = $_POST["medicine"];
    $allergy = $_POST["allergy"];
    $allergy2 = $_POST["allergy2"];
    $companion = $_POST["companion"];

    $to = "yavuz-kuk@hotmail.com";

    $messegae = "<ul>
                    <li>".$name."-".$age."-".$gender."</li>
                    <li>Başka hastalağı var mı? ".($ill == "yes" ? "Evet":"Hayır")."</li>"
                    ($ill == "yes" ? "<li>Hastalığı: ".$illness."</li>": "Hastalığı yok");
                    "<li>Ms tanısı konulduğu tarih:".$msDate."</li>
                    <li>Telefon numarası: ".$phone."</li>
                    <li>Alerjisi var mı?".($allergy == "on"?"Evet":"Hayır")."</li>
                    <li>Alerji: ".$allergy2." </li>"
                    ($allergy == "on" ? "<li>Alerjisi: ".$allergy2."</li>": "Alerjisi yok");
                    "<li>Kullandığı ilaç: ".$medicine."</li>
                    <li>Yürüme desteği alıyor mu? ".$support."</li>
                    <li>Refakatçi ihtiyacı var mı? ".$companion."</li>
                    <li>Takip ettiği Doktor/Klinik: ".$doctor." </li>
                </ul>";

    
    mail($to,"9. Kamp Başvuru Formu",$messegae,$name);

?>
