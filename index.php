
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
	JDJGDKLF;SGJRL;THJ;
	<?php
include("header1.php");
if(isMobile() && isTablet()) {
   menu2();
}
else menu();
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
function isTablet($userAgent = null, $httpHeaders = null)
    {
        // Check specifically for cloudfront headers if the useragent === 'Amazon CloudFront'
        if ($this->getUserAgent() === 'Amazon CloudFront') {
            $cfHeaders = $this->getCfHeaders();
            if(array_key_exists('HTTP_CLOUDFRONT_IS_TABLET_VIEWER', $cfHeaders) && $cfHeaders['HTTP_CLOUDFRONT_IS_TABLET_VIEWER'] === 'true') {
                return true;
            }
        }
        $this->setDetectionType(self::DETECTION_TYPE_MOBILE);
        foreach (self::$tabletDevices as $_regex) {
            if ($this->match($_regex, $userAgent)) {
                return true;
            }
        }
        return false;
    }
	
?>
</body>