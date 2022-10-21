<?php 
require_once 'vendor/autoload.php';

use \ConvertApi\ConvertApi;

ConvertApi::setApiSecret('pITrXqBuOGG1DZ16');

$result = ConvertApi::convert('pdf', ['File' => 'document.docx']);

# save to file
$result->getFile()->save('file.pdf');

# get file contents (without saving the file locally)
$contents = $result->getFile()->getContents();

?>