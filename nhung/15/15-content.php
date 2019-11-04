<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<!DOCTYPE html>

<html>
<head>
  <title>module 15</title>
  <meta charset="UTF-8">
</head>

<body>   
<div class="type-15">
<section class="section" data-id="677a1a7b" data-element_type="section">
    <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.695448633474!2d107.63678889588196!3d-6.9269602156679335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d8a11a989b%3A0x4aff645004cb4efe!2sJl.%20Maleer%20Indah%20II%2C%20Maleer%2C%20Kec.%20Batununggal%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040274%2C%20In-%C4%91%C3%B4-n%C3%AA-xi-a!5e0!3m2!1svi!2s!4v1572836087122!5m2!1svi!2s" width="1350" height="460" frameborder="0" style="border:0;" allowfullscreen=""></iframe> 
       </div>
   </section>
</div> 
</body>
</html>                                    
