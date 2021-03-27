<?php 

# Check reuest data
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    # Store data from form inputs
    $dataRegister = [
        'name'  => $_POST['name'],
        'email' => $_POST['email'],
        'userName' => $_POST['userName'],
        'password' => $_POST['password'],
        'phone' => $_POST['phone'],
        'url' => $_POST['url'],
        'avatar' => $_POST['avatar']
    ];

    // # Store all data from form inputs
    // $name = $_POST['name'];
    // $email = $_POST['email'];

    # Snitize all data
    $nameSanitize = trim(htmlspecialchars(filter_var($dataRegister['name'], FILTER_SANITIZE_STRING)));
    $emailSanitize =  trim((htmlspecialchars(filter_var($dataRegister['email'], FILTER_SANITIZE_EMAIL))));
    $userNameSanitize = trim(htmlspecialchars(filter_var($dataRegister['userName'], FILTER_SANITIZE_STRING)));
    $passwordSanitize = trim(htmlspecialchars(filter_var($dataRegister['password'], FILTER_SANITIZE_STRING)));
    $phoneSanitize = trim(htmlspecialchars(filter_var($dataRegister['phone'], FILTER_SANITIZE_STRING)));
    $urlSanitize = trim(htmlspecialchars(filter_var($dataRegister['url'], FILTER_SANITIZE_URL)));

    

    # Check input name
    if (filter_var($nameSanitize, FILTER_VALIDATE_INT)) {
        echo 
            '<div class="alert alert-warning" role="alert">
                Please write valid <strong>name !</strong>
            </div>';
    } elseif (empty($nameSanitize)) {
        echo 
            '<div class="alert alert-warning" role="alert">
            can\'t empty Please write your <strong>' . ucfirst('name') .  
            ' !</strong></div>';
    } else {
        echo 
            '<div class="alert alert-success" role="alert">
                Your name is <b>'  . $nameSanitize .
            '</b></div>';
    }
    
    
    # Check input email
    if (filter_var($emailSanitize, FILTER_VALIDATE_EMAIL)) {
        echo 
            '<div class="alert alert-success" role="alert">
                Your email is <b>'  . $emailSanitize .
            '</b></div>';
    } elseif (empty($emailSanitize)) {
        echo 
            '<div class="alert alert-warning" role="alert">
            can\'t empty Please write your <strong>' . ucfirst('email') .  
            ' !</strong></div>';
    } else {
        echo 
        '<div class="alert alert-warning" role="alert">
            Please write valid <strong>email !</strong>
        </div>';
    }

    # Check input user name
    if (filter_var($userNameSanitize, FILTER_VALIDATE_INT)) {
        echo 
            '<div class="alert alert-warning" role="alert">
                Please write valid <strong>user name !</strong>
            </div>';
    } elseif (empty($userNameSanitize)) {
        echo 
            '<div class="alert alert-warning" role="alert">
                can\'t empty Please write your <strong>' . ucfirst(' user name') .  
            ' !</strong></div>';
    } else {
        echo 
            '<div class="alert alert-success" role="alert">
                Your user name is <b>'  . $userNameSanitize .
            '</b></div>';
    }


    # Check input password
    if (filter_var($passwordSanitize, FILTER_VALIDATE_INT)) {
        echo 
            '<div class="alert alert-success" role="alert">
                Your password is <b>'  . $passwordSanitize .
            '</b></div>';
    } elseif (empty($passwordSanitize)) {
        echo 
            '<div class="alert alert-warning" role="alert">
            can\'t empty Please write your <strong>' . ucfirst(' password') .  
            ' !</strong></div>';
    } else {
        echo 
            '<div class="alert alert-warning" role="alert">
                Please write valid <strong>password !</strong>
            </div>';
    }

    # Check input phone
    if (filter_var($phoneSanitize, FILTER_VALIDATE_INT)) {
        echo 
            '<div class="alert alert-success" role="alert">
                Your phone is <b>'  . $phoneSanitize .
            '</b></div>';
    } elseif (empty($phoneSanitize)) {
        echo 
            '<div class="alert alert-warning" role="alert">
            can\'t empty Please write your <strong>' . ucfirst(' phone') .  
            ' !</strong></div>';
    } else {
        echo 
            '<div class="alert alert-warning" role="alert">
                Please write valid <strong>phone !</strong>
            </div>' ;
    }

    # Check input url 
    if (filter_var($urlSanitize, FILTER_VALIDATE_URL)) {
        echo 
            '<div class="alert alert-success" role="alert">
                Your url is <b>'  . $urlSanitize .
            '</b></div>';
    } elseif (empty($urlSanitize)) {
        echo 
            '<div class="alert alert-warning" role="alert">
            can\'t empty Please write your <strong>' . ucfirst(' url') .  
            ' !</strong></div>';
    } else {
        echo 
            '<div class="alert alert-warning" role="alert">
                Please write valid <strong>url !</strong>
            </div>' ;
    }











    // # Check inputs empty
    // function checkInputsEmpty($data, $message) {
    //     if (empty($message)) {
    //         echo 
    //         '<div class="alert alert-warning" role="alert">
    //             Please write your <strong>' . ucfirst($data) .  
    //         ' !</strong></div>';
    //     }
    // }

    // # Loop on all data
    // foreach($dataRegister as $key => $value) {
    //     checkInputsEmpty($key, $value);
    // }
}