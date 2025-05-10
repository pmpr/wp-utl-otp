<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             681fcb9b682af             |
    |_______________________________________|
*/
 namespace Pmpr\Utility\OTP; class Hook extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos('otp_request_email_generated', [$this, 'smsswycemygqwess'], 10, 2); } public function smsswycemygqwess($aqmwamyiwgeeymqa, $owaiikyuwwwmswgc = null) { if (!Email::symcgieuakksimmu()->kwmiaokywwmwecuc($aqmwamyiwgeeymqa)->send($owaiikyuwwwmswgc)) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('OTP: can not send otp to email.'); } } }
