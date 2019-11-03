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
  <title>module 12</title>
  <meta charset="UTF-8">
</head>

<body>   
<div class="type-12">
  
    <div class="row-1">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  
                  <div class="post-text">
                    <h2 class="post-title">Awesome Team</h2>
                    <div class="text"><p>Sed ut perspiciatis unde omnis iste natus error sit 
                      svoluptatem accusantium doloremque laudantium.</p>
                    </div>
                    </div>
                    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  
                  <div class="post-img">
                    <img src="images/3.jpg" alt="hinh1">
                    <div class="overlay">
                      <div class="text">
                      <h3 >Jonathan Green</h3>
                      <br>
                      <br>
                      <h5>founder/owner</h5>
                      </div>
                      
                      <div class="icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google-plus-g"></i>
                      </div>
                    </div>
                  </div>
                    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  
                  <div class="post-img">
                    <img src="images/2.jpg" alt="hinh2">
                    <div class="overlay">
                      <div class="text">
                      <h3 >John Doe</h3>
                      <br>
                      <br>
                      <h5>Entrance Officer</h5>
                      </div>
                      
                      <div class="icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google-plus-g"></i>
                      </div>
                    </div>
                  </div>
                    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  
                  <div class="post-img">
                    <img src="images/5.jpg" alt="hinh3">
                    <div class="overlay">
                      <div class="text">
                      <h3 >Sarah Linstoen	</h3>
                      <br>
                      <br>
                      <h5>Wedding Creator</h5>
                      </div>
                      
                      <div class="icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google-plus-g"></i>
                      </div>
                    </div>
                  </div>
                    
                  </div>
              </div>

             

             
          </div>
      </div>  
    
    <div class="row-2">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  
                  <div class="post-img">
                    <img src="images/6.jpg" alt="hinh4">
                    /<div class="overlay">
                      <div class="text">
                      <h3 >Jennifer Aster	</h3>
                      <br>
                      <br>
                      <h5>Wedding Creator</h5>
                      </div>
                      
                      <div class="icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google-plus-g"></i>
                      </div>
                    </div>
                  </div>
                    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  
                  <div class="post-img">
                    <img src="images/4.jpg" alt="hinh5">
                    <div class="overlay">
                      <div class="text">
                      <h3 >Anna Julia	</h3>
                      <br>
                      <br>
                      <h5>Management</h5>
                      </div>
                      
                      <div class="icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google-plus-g"></i>
                      </div>
                    </div>
                  </div>
                    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  
                  <div class="post-img">
                    <img src="images/1.jpg" alt="hinh6">
                    <div class="overlay">
                      <div class="text">
                      <h3 >Gary Billworth	</h3>
                      <br>
                      <br>
                      <h5>Groom Liaison Officer</h5>
                      </div>
                      
                      <div class="icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google-plus-g"></i>
                      </div>
                    </div>
                  </div>
                    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  
                  <div class="post-img">
                    <img src="images/7.jpg" alt="hinh7">
                    <div class="overlay">
                      <div class="text">
                      <h3 >Ratna Galuh		</h3>
                      <br>
                      <br>
                      <h5>Entrance Officer</h5>
                      </div>
                      
                      <div class="icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google-plus-g"></i>
                      </div>
                    </div>
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
