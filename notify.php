<?php
$data = json_decode(file_get_contents('php://input'), true);

$code = $data['code'];
$data = $data['data'];
$platform_order_no = $data['platform_order_no'];
$order_no = $data['order_no'];
$pay_mount = $data['pay_mount'];
$apply_mount = $data['apply_mount'];
$mch_no = $data['mch_no'];
$sign = $data['sign'];


$mysign = md5('data=' . $data . '&code=' . $code . '&apply_mount=' . $apply_mount . '&platform_order_no=' . $platform_order_no . '&order_no=' . $order_no . '&pay_mount=' . $pay_mount);

if ($sign == $mysign) {
    echo 'success';
} else {
    echo 'signerr';
}
?>
