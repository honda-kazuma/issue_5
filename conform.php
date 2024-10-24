<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第5回 課題</title>
    <link rel="stylesheet" href="./css/conform.css">
    <link href="https://fonts.google.com/noto/specimen/Noto+Sans+JP?query=noto">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

</head>
<body>

<?php include "./header.php" ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $seat = $_POST["seat"];
    $mail = $_POST["email"];
    $tel = $_POST["tel"];

}
?>

<form class="conform_form" action="" method="post">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="seat" value="<?php echo $seat; ?>">
    <input type="hidden" name="email" value="<?php echo $mail; ?>">
    <input type="hidden" name="tel" value="<?php echo $tel; ?>">

    <h2 class="contact-title">お問い合わせ内容確認</h2>


    <div class="conform_text">
        <label>お名前</label>
        <p><?php echo $name; ?></p>
    </div>
    <div class="conform_text">
        <label>席の場所</label>
        <p><?php echo $seat; ?></p>
    </div>
    <div class="conform_text">
        <label>メールアドレス</label>
        <p><?php echo $mail; ?></p>
    </div>
    <div class="conform_text">
        <label>電話番号</label>
        <p><?php echo $tel; ?></p>
    </div>

    <input class="conform_btn" type="button" value="戻る" onclick="history.back(-1)">
    <button class="conform_btn" type="submit" name="submit">送信</button>
</form>

<?php
if (isset($_POST["submit"])) {
    mb_language("ja");
    mb_internal_encoding("UTF-8");
    $subject = "［自動送信］お問い合わせ内容の確認";
    $body = <<< EOM
{$name} 様お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。
===================================================
【 お名前 】
{$name}
【 席の場所 】
{$seat}
【 メール 】
{$mail}
【 電話番号 】
{$tel}
【 性別 】
{$sex}
【 項目 】
{$item}
【 内容 】
{$content}
===================================================
内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;

$fromEmail = "送信元のメールアドレス";
$fromName = "送信元の名前";
$header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";
mb_send_mail($mail, $subject, $body, $header);
mb_send_mail($fromEmail, $subject, $body, $header);
header("Location: ./thanks.php");
exit;

}
?>

<?php include "./footer.php" ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/index.js"></script>
    
</body>
</html>