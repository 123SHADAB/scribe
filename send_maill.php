<?php 
require 'smtp/vendor/autoload.php';
$FROM_EMAIL = 'no-reply@scribereview.org';
$API_KEY='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';//support.tech
//$API_KEY='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';scribewritingcontent
$fromEml = new SendGrid\Email(null, $FROM_EMAIL);
?>