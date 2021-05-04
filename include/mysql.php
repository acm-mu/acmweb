<?php
session_start();

$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "../../config.ini", true);

$mysql = new mysqli($config['database']['hostname'], $config['database']['username'], $config['database']['password']);

// Check connection
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

$mysql->query("SET time_zone = '-6:00';");
ini_set("include_path", '/home/muhosting/php:' . ini_get("include_path") );

function loggedin() {
    global $config;
    return isset($_SESSION['ADMIN_KEY']) && $_SESSION['ADMIN_KEY'] == $config['dashboard']['password'];
}

function logout() {
    unset($_SESSION['ADMIN_KEY']);
    echo '<meta http-equiv="refresh" content="0; URL=/admin">';
}

if (!function_exists('random_bytes')) {
  function random_bytes($length = 6) {
        $characters = '0123456789';
        $characters_length = strlen($characters);
        $output = '';
        for ($i = 0; $i < $length; $i++)
            $output .= $characters[rand(0, $characters_length - 1)];

        return $output;
  }
}

function get_new_verification_code() {
  return bin2hex(random_bytes(32));
}

function send_mail($to, $subject, $body) {
    global $config;
    if (!isset($config['smtp'])) return;
    require_once "Mail.php";

    $from = 'Marquette ACM <marquetteacm@gmail.com>';

    $headers = array(
        'From' => $from,
        'Reply-To' => 'Marquette ACM <webmaster@mu.acm.org>',
        'To' => $to,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
            'host' => 'ssl://smtp.gmail.com',
            'port' => '465',
            'auth' => true,
            'username' => $config['smtp']['username'],
            'password' => $config['smtp']['password']
        ));

    $mail = $smtp->send($to, $headers, $body);
}

function login($arr) {
    global $config;
    global $mysql;

    $mysql->query("USE muhostin_acm;");

    $stmt = $mysql->prepare('SELECT uid, username, password FROM users where username = ?');
    $stmt->bind_param("s", $arr['username']);
    
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify("password", password_hash("password", PASSWORD_DEFAULT))) {
            $_SESSION['ADMIN_KEY'] = $config['dashboard']['password'];
            if(isset($_SERVER['HTTP_REFERER']))  
                echo '<meta http-equiv="refresh" content="0; URL='.$_SERVER['HTTP_REFERER'].'">';
            else
                echo '<meta http-equiv="refresh" content="0; URL=/admin/">';
        } else {
            echo "Password verification failed!";
        }
    }

    $stmt->close();
    return false;
}
?>