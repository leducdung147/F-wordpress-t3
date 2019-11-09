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
    <title>module 16</title>
    <meta charset="UTF-8">
    
</head>

<body>   
    <div class="type-16">
    <div class="container">
    <div class="row">
    <div class="col-md-4">
        <div class="icon-box-wrapper">
					<div class="icon-box-icon">
				
				<i class="fa fa-map-marker" aria-hidden="true"></i>
				
			</div>
						<div class="icon-box-content">
				<h3 class="icon-box-title">
                    Office
				</h3>
				<p class="icon-box-description">Jl. Maleer Indah II, Maleer, Batununggal, Kota Bandung, Jawa Barat 40274.</p>
			</div>
		</div>
        </div> 
        <div class="col-md-4"><div class="icon-box-wrapper">
					<div class="icon-box-icon">
				
				<i class="fa fa-phone" aria-hidden="true"></i>
				
			</div>
						<div class="icon-box-content">
				<h3 class="icon-box-title">
                Phone
				</h3>
				<p class="icon-box-description">Freephone: (+81) 22 888 1111<br>
                    Telephone: (+81) 22 888 2222<br>
                        Fax: +1 900 869 9669</p>
			</div>
		</div>
        </div> 
        <div class="col-md-4"><div class="icon-box-wrapper">
					<div class="icon-box-icon">
				
				<i class="fa fa-envelope" aria-hidden="true"></i>
				
			</div>
						<div class="icon-box-content">
				<h3 class="icon-box-title">
                Email
				</h3>
				<p class="icon-box-description">E-Mail:<a>nikah@support.com</a><br>
                    &amp; include details about your day</p>
			</div>
		</div>
        </div>      
    </div>
    </div>
    </div> 

</body>
</html>                                    
