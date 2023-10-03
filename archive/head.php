<?php
$time = time();
$title_page = $title_page ? $title_page : ('BTH');
$meta_key = $meta_key ? $meta_key : ('nrokesu');
$meta_desc = $meta_desc ? $meta_desc : ('BTH');
echo '<!DOCTYPE html>';
echo "\n" . '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vn"  lang="vn">';
echo "\n" . '<head id="page">';
echo "\n" . '<meta charset="UTF-8" />';
echo "\n" . '<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />';
echo "\n" . '<meta name="keywords" content="' . $meta_key. '" />';
echo "\n" . '<meta name="description" content="' . $meta_desc. '" />';
echo "\n" . '<link rel="icon" type="image/png" href="/res/icon/favicon.ico" />';
echo "\n" . '<link rel="icon" type="image/x-icon" href="/res/icon/favicon.ico" />';
echo "\n" . '<link rel="shortcut icon" type="image/x-icon" href="/res/icon/favicon.ico" />';
echo "\n" . '<title>' . $title_page . '</title>';
echo "\n" . '</head>';
echo "\n" . '<body>';