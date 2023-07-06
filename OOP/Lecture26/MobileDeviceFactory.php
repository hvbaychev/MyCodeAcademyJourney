<?php
class MobileDeviceFactory {
    public function createDevice() {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        if (strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false) {
            return 'iOS';
        } elseif (strpos($userAgent, 'Android') !== false) {
            return 'Android';
        } elseif (strpos($userAgent, 'Windows Phone') !== false) {
            return 'Windows';
        } else {
            return 'Unknown';
        }
    }
}
?>
