<?php
require_once '../autoload.php';

use Qiniu\Auth;

$accessKey = 'XI0n2kV1LYwzcxqSZQxJ7bpycxDIAXFGJMWUt_zG';
$secretKey = '9WTmIAiwKQ2Nq6o93mfKd6VQqq56HjjLZonMWLJl';

// 构建Auth对象
$auth = new Auth($accessKey, $secretKey);

// 私有空间中的外链 http://<domain>/<file_key>
$baseUrl = 'http://sslayer.qiniudn.com/1.jpg?imageView2/1/h/500';
// 对链接进行签名
$signedUrl = $auth->privateDownloadUrl($baseUrl);

echo $signedUrl;

