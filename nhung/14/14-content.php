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
  <title>module 14</title>
  <meta charset="UTF-8">
</head>

<body>   
<div class="type-14">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="post-img">
                    <img src="images/2.jpg" alt="hinh1">
                  </div>
                  <div class="separator-line">
                      <span></span>
                    </div>
                  <div class="post-content">
                    <span class="standard-post-categories">
                
                      <a>Ceremony</a>
                    </span>
                    
                    <div class="post-title">
                      <h2>Quisque Non Fermentum Proin Orci Quis Est.</h2>
                    </div>
                    <div class="date">November 22, 2017</div>
                    
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       Ut suscipit odio ante, id dapibus elit condimentum vitae.
                        Maecenas eget orci vitae enim accumsan mollis. In congue nunc velit, sit...</p>
                    </div>
                    <div class="logo-btn">
                      <button type="submit" class="btn btn-viewall">Read More</button>
                    </div>
                  </div>
              </div>

              
          </div>
      </div>  
    </div>
  </div>
</div> 
</body>
</html>                                    
