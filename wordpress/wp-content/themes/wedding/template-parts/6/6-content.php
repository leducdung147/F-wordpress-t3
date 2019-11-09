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
  <title>module 6</title>
  <meta charset="UTF-8">
</head>

<body>   
<div class="type-6 pt-5">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg" alt="hinh1">
                  </div>
                  <div class="post-content">
                    <span class="standard-post-categories">
                      <a>Ceremony</a>
                    </span>
                    <span class="date-author">
                      <h5>posted on <a>November 22, 2017</a></h5>
                    </span>
                    <div class="post-title">
                      <h2>Quisque Non Fermentum Proin Orci Quis Est.</h2>
                    </div>
                    <div class="separator-line">
                      <span></span>
                    </div>
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit odio ante, id dapibus...</p>
                    </div>
                    <div class="logo-btn">
                      <button type="submit" class="btn btn-viewall">CONTINUE READING</button>
                    </div>
                  </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.jpg" alt="hinh2">
                 </div>
                 <div class="post-content">
                    <span class="standard-post-categories">
                      <a>Pre Wedding</a>
                    </span>
                    <span class="date-author">
                      <h5>posted on <a>November 22, 2017</a></h5>
                    </span>
                    <div class="post-title">
                      <h2>Proin In Orci Quis Elit Blandit Donec Condi Mentum Odio</h2>
                    </div>
                    <div class="separator-line">
                      <span></span>
                    </div>
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit odio ante, id dapibus...</p>
                    </div>
                    <div class="logo-btn">
                      <button type="submit" class="btn btn-viewall">CONTINUE READING</button>
                    </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.jpg" alt="hinh3">
                 </div>
                 <div class="post-content">
                    <span class="standard-post-categories">
                      <a>Pre Wedding</a>
                    </span>
                    <span class="date-author">
                      <h5>posted on <a>November 22, 2017</a></h5>
                    </span>
                    <div class="post-title">
                      <h2>Maecenas Ultrices Justo Metus Quis Facilisis</h2>
                    </div>
                    <div class="separator-line">
                      <span></span>
                    </div>
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit odio ante, id dapibus...</p>
                    </div>
                    <div class="logo-btn">
                      <button type="submit" class="btn btn-viewall">CONTINUE READING</button>
                    </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="post-img">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.jpg" alt="hinh4">
                 </div>
                  <div class="post-content">
                      <span class="standard-post-categories">
                        <a>Pre Wedding</a>
                      </span>
                      <span class="date-author">
                        <h5>posted on <a>November 22, 2017</a></h5>
                      </span>
                      <div class="post-title">
                        <h2>Suspendisse Eget Ullamcorper Sed Rutrum Urnaut</h2>
                      </div>
                      <div class="separator-line">
                      <span></span>
                    </div>
                      <div class="post-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit odio ante, id dapibus...</p>
                      </div>
                      <div class="logo-btn">
                        <button type="submit" class="btn btn-viewall">CONTINUE READING</button>
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
