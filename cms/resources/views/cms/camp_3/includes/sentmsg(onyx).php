<?php

include('WhatsappAPI.php'); // include given API file

$wp = new WhatsappAPI("4466", "891c570d5d29861889862d906992ce2be54e7ed9"); // create an object of the WhatsappAPI class with your user id and api key

$numbers = [
    '+'.$phone[0]->phone,
];
$media_url = 'https://rpmcar.ae/assets/newAssets/Banner-new-updated-ar.webp';

$qty1_amount = $phone[0]->qty * 250;
$qty2_amount = $phone[0]->qty2 * 350;

//variables
$inv = $phone[0]->p_id;
$status = $phone[0]->p_stat;
$name = $phone[0]->name;
$email = $phone[0]->email;
$phone = $phone[0]->phone;

$caption = "*⬆️Invoice Details⬆️*
---------------------------
*Coupon Number:*    $inv
*Created Date:*          $date
*Invoice Status:        $status 🤩*

*Personal Details*
---------------------------
*Name:*           $name
*Email:*          $email
*Number:*         +$phone

*Payment Method:         Credit/Debit Card*";
if (!empty($camp1)) {
    $caption .= "
*Item 1:*           $camp1
*Quantity:*       $qty1
*Price:*            $qty1_amount";
} elseif (empty($camp1)) {
    $caption .= "
*Item 1:*           No Item";
}

if (!empty($camp2)) {
    $caption .= "
*Item 2:*           $camp2
*Quantity:*       $qty2
*Price:*            $qty2_amount";
    } elseif (empty($camp2)) {
    $caption .= "
*Item 2:*           No Item";
}


$caption .= "
*Total:           $price*

شكرا لإختيارك شركة آر بي إم لقد دخلت بنجاح بالسحب على:
- درهم نقداً 50,000
- درهم نقداً 100,000
- رنچ روفر فوچ 2023

نتمنى لك حظا موفقا!
القسيمة صالحة لتاريخ 20-05-2023

Thank you for choosing RPM! You have successfully entered the draw to win:
- 50,000 AED Cash
- 100,000 AED Cash
- Range Rover Vogue 2023

We wish you good luck‼️
Voucher valid till 20-05-2023

*For queries and bookings:*
*+971 50 755 5509*
*+971 56 221 0016*";

foreach ($numbers as $number) {
    try {
        $status = $wp->sendFromURL($number, $media_url, $caption);
        $status = json_decode($status);
        echo "<script>alert('Message sent to $number');</script>";
    } catch (ChatAPIException $e) {
        echo "Failed to send message";
    }
}


$message12 = "wrong answer";
echo "<script type='text/javascript'>alert('$message12');</script>";


  
  

?>
