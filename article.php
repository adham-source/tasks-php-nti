<?php 
    # Check data from form method get
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Store data and print
        $titleEn = $_POST['titleEn'];
        $articleEn = $_POST['articleEn'];
        
        $titleAr = $_POST['titleAr'];
        $articleAr = $_POST['articleAr'];

        // if(strlen($titleEn) >= 10  && strlen($titleEn) <= 20) {
        //     echo $titleEn . '<br />';
        // } elseif (strlen($titleAr) >= 10  && strlen($titleAr) <= 20) {
        //     echo $titleAr . '<br />';
        // } elseif((strlen($titleEn) >= 10  && strlen($titleEn) <= 20) || (strlen($titleAr) >= 10  && strlen($titleAr) <= 20)){
        //     echo "once not <br >";
        // } else {
        //     echo 'Please enter text of ten to twenty characters <br />';
        // }

        //Check lenght value title ar && en
        if((strlen($titleAr) >= 10  && strlen($titleAr) <= 20) &&  (strlen($titleEn) >= 10  && strlen($titleEn) <= 20)) {
            echo $titleEn . '<br />';
            echo $titleAr . '<br />';
        } else {
            echo 'Please enter text of ten to twenty characters <br />';
        }

        // Check lenght value article ar && en
        if((strlen($articleAr) >= 20 && strlen($articleAr) <= 100) || (strlen($articleEn) >= 20  && strlen($articleEn) <= 100)) {
            echo $articleEn . '<br />';
            echo $articleAr . '<br />';
        } else {
            echo 'Please enter text of twenty to handred characters <br />';
        }
        
    }
