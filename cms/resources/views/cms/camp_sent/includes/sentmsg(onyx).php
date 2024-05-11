<?php
include('WhatsappAPI.php');

$wp = new WhatsappAPI("4466", "891c570d5d29861889862d906992ce2be54e7ed9");

$numbers = unserialize($blog->writenumber);
$numbers1 = unserialize($blog->numbers);
$media_url = $blog->img_url;
$caption = strip_tags($blog->description);

foreach ($numbers as $number) {
    try {
        $number = '+' . $number;
        $status = $wp->sendFromURL($number, $media_url, $caption);
        $status = json_decode($status);
        echo "<script>alert('Message sent to $number');</script>";
    } catch (ChatAPIException $e) {
        echo "Failed to send message";
    }
}

foreach ($numbers1 as $number) {
    try {
        $number = '+' . $number;
        $status = $wp->sendFromURL($number, $media_url, $caption);
        $status = json_decode($status);
        echo "<script>alert('Message sent to $number');</script>";
    } catch (ChatAPIException $e) {
        echo "Failed to send message";
    }
}
header('Location: /campwhatsapps');
exit;
?>
