<?php

    // Begin Session
    session_start();

    // Setting Brasilia Timezone
    function timezone($input) {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        if ($input == "data") {
            $output = utf8_encode(strftime(ucwords(strftime('%A')).', '.strftime('%d').' de '.ucwords(strftime('%B')).' de '.strftime('%Y')));
        } else {
            $output = date('H:i:s');
        }

        return $output;
    }

    // Function that returns a good morning, afternoon or night greeting
    function salutation() {
        $hour = date("H");

        if ($hour >= 12 && $hour < 18) {
            $reply = "Boa tarde!";
        } else if ($hour >= 0 && $hour < 12) {
            $reply = "Bom dia!";
        } else {
            $reply = "Boa noite!";
        }
        return $reply;
    }

    // Function that removes accented characters and exchanges spaces for bars
    function clearText($text){
        $forbiddenCharacter = Array(",",".","'","\"","&","|","!","#","$","¨","*","(",")","`","´","<",">",";","=","+","§","{","}","[","]","^","~","?","%");
        $forbiddenLetter = Array('Á','È','ô','Ç','á','è','Ò','ç','Â','Ë','ò','â','ë','Ø','Ñ','À','Ð','ø','ñ','à','ð','Õ','Å','õ','Ý','å','Í','Ö','ý','Ã','í','ö','ã','Î','Ä','î','Ú','ä','Ì','ú','Æ','ì','Û','æ','Ï','û','ï','Ù','®','É','ù','©','é','Ó','Ü','Þ','Ê','ó','ü','þ','ê','Ô','ß','‘','’','‚','“','”','„');
        $clearLetter = Array('a','e','o','c','a','e','o','c','a','e','o','a','e','o','n','a','d','o','n','a','o','o','a','o','y','a','i','o','y','a','i','o','a','i','a','i','u','a','i','u','a','i','u','a','i','u','i','u','','e','u','c','e','o','u','p','e','o','u','b','e','o','b','','','','','','');
        $space = Array(' ', '  ', '   ', '    ');
        $newId = str_replace($forbiddenLetter, $clearLetter, $text);
        $newId = str_replace($forbiddenCharacter, "", trim($newId));
        $newId = str_replace($space, '-', trim($newId));
        return strtolower($newId);
    }

    // Function that takes the current page that the user is browsing
    function currentPage() {
        $afterBar = explode("/", $_SERVER["SCRIPT_NAME"]);
        $beforeDot = explode(".", $afterBar[count($afterBar)-1]);
        $currentPage = $beforeDot[count($beforeDot)-2];

        return $currentPage;
    }

    // Function that removes characters that are not numbers
    function justNum($str){ 
        return preg_replace("/[^0-9]/", "", $str); 
    }

    // Get tracking parameters in the URL
    function utm($input) {

        // UTM SOURCE
        if(isset($_GET['utm_source'])) { // Exist utm_source?
            $utm_source = $_GET['utm_source'];
            $utm_source_link = "?utm_source=$utm_source";
        } else { // If utm_source does not exist, $utm_source will have another value
            $utm_source_link = "?utm_source=Orgânico";
        }

        // UTM CAMPAIGN
        if(isset($_GET['utm_campaign'])) { // Exist utm_campaign?
            $utm_campaign = $_GET['utm_campaign'];
            $utm_campaign_link = "&utm_campaign=$utm_campaign";
        }

        // UTM MEDIUM
        if(isset($_GET['utm_medium'])) { // Exist utm_medium?
            $utm_medium = $_GET['utm_medium'];
            $utm_medium_link = "&utm_medium=$utm_medium";
        }

        // UTM NAME
        if(isset($_GET['utm_name'])) { // Exist utm_name?
            $utm_name = $_GET['utm_name'];
            $utm_name_link = "&utm_name=$utm_name";
        }

        // UTM TERM
        if(isset($_GET['utm_term'])) { // Exist utm_term?
            $utm_term = $_GET['utm_term'];
            $utm_term_link = "&utm_term=$utm_term";
        }

        // UTM CONTENT
        if(isset($_GET['utm_content'])) { // Exist utm_content?
            $utm_content = $_GET['utm_content'];
            $utm_content_link = "&utm_content=$utm_content";
        }

        // Link with all UTM
        $utm_link = $utm_source_link.$utm_campaign_link.$utm_medium_link.$utm_name_link.$utm_term_link.$utm_content_link;

        if(isset($_REQUEST[$input])) {
            $output = ucfirst($_GET[$input]);
        } elseif ($input == "link") {
            $output = $utm_link;
        } else {
            $output = null;
        }

        return $output;
    }

    // Client data for autocomplete at Contratar
    function clientData($input){

        // Nome
        if(isset($_GET['nome_cliente'])) { // Exist nome_cliente?
            $nome_cliente = ucfirst($_GET['nome_cliente']);
            $nome_cliente_link = "&nome_cliente=$nome_cliente";
        }

        // Email
        if(isset($_GET['email_cliente'])) { // Exist email_cliente?
            $email_cliente = $_GET['email_cliente'];
            $email_cliente_link = "&email_cliente=$email_cliente";
        }
            
        // Telefone
        if(isset($_GET['telefone_cliente'])) { // Exist telefone_cliente?
            $telefone_cliente = $_GET['telefone_cliente'];
            $telefone_cliente_link = "&telefone_cliente=$telefone_cliente";
        }
            
        // Valor
        if(isset($_GET['valor_cliente'])) { // Exist valor_cliente?
            $valor_cliente = $_GET['valor_cliente'];
            $valor_cliente_link = "&valor_cliente=$valor_cliente";
        } else {
            $valor_cliente_link = "&valor_cliente=0";
        }

        // Link with all data
        $link_client = $nome_cliente_link.$email_cliente_link.$telefone_cliente_link.$valor_cliente_link;

        if(isset($_REQUEST[$input])) {
            $output = ucfirst($_GET[$input]);
        } elseif ($input == "link") {
            $output = $link_client;
        } else {
            $output = null;
        }

        return $output;
    }

    // Function IF is EQUAL
    function iiF($condA, $condB, $retA, $retB) {
        if (isset($condA) && $condA == $condB) {
            return $retA;
        } else {
            return $retB;
        }
    }

    // Function IF is DIFFERENT
    function diiF($condA, $condB, $retA, $retB) {
        if (isset($condA) && $condA != $condB) {
            return $retA;
        } else {
            return $retB;
        }
    }

    // Check the user's device
    function isMobile($resA, $resB) {
        $mobile = false;
        $user_agents = array(
            "iPhone",
            "iPad",
            "Android",
            "webOS",
            "BlackBerry",
            "iPod",
            "Symbian",
            "IsGeneric"
        );

        foreach ($user_agents as $user_agent) {
            if (strpos($_SERVER['HTTP_USER_AGENT'], $user_agent) !== false) {
                $mobile = true;
                break;
            }
        }

        if ($mobile) {
            return $resA;
        } else {
            return $resB;
        }
    }

    // List images for the Owl Carousel
    function listImage($folder,$car) {
        $directory = "img/$folder/$car/";
        $imgs = glob($directory."*.{jpg,png,gif,webp}", GLOB_BRACE);

        foreach($imgs as $img){
            echo "
                <div class='item'>
                    <img src='$img'>
                </div>
            ";
        }
    }

    // Connection to the MySql Database
    $conn = mysqli_connect("mysql.consorciodiretoauto.com.br", "consorciodiret", "investDB1", "consorciodiret");
    mysqli_set_charset($conn,"utf8");

    // Test whether the connection is working
    if (!$conn) {
        // echo "<strong class='text-danger'>Error:</strong> Failed to connect to the MySQL database." . PHP_EOL;
        // echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        // echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    // echo "<strong class='text-success'>Success:</strong> Success when connecting to the MySQL database." . PHP_EOL;
