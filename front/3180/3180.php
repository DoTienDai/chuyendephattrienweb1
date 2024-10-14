<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

if (isset($matches[1][0])) {
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
} else {
    $url_path = $url_host;
}

$lessc_path = __DIR__ . '/libs/lessc.inc.php';
if (file_exists($lessc_path)) {
    require_once($lessc_path);
} else {
    die('The lessc.inc.php file is missing.');
}

$less = new lessc;
$less->compileFile('less/3180.less', 'css/3180.css');
?>
<html>
<head>
    <title>Product Grid</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
   <link rel="stylesheet" href="css/3180.css">
</head>
<body>
    <div class="container">
        <div class="product">
            <img alt="Blue sneakers for running" height="300" src="img/1.png" width="300"/>
            <h3>SNEAKERS</h3>
            <div class="price">$65.00</div>
            <div class="category">Running</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
            </div>
            <a class="add-to-cart" href="#">Add to Cart</a>
        </div>
        <div class="product">
        
       <span class="sale">SALE</span>
     
            <img alt="Black shoes for running" height="300" src="img/2.png" width="300"/>
            <h3>SHOES</h3>
            <div class="price">
                <span class="old-price">$70.00</span>
                $50.00
            </div>
            <div class="category">Running</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a class="add-to-cart" href="#">Add to Cart</a>
        </div>
        <div class="product">
            <img alt="Swimming glasses" height="300" src="img/3.png" width="300"/>
            <h3>SWIMMING GLASSES</h3>
            <div class="price">$54.00</div>
            <div class="category">Swimming</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a class="add-to-cart" href="#">Add to Cart</a>
        </div>
        <div class="product">
            <img alt="Yellow swimming goggles" height="300" src="img/4.png" width="300"/>
            <h3>GOGGLES YELLOW</h3>
            <div class="price">$40.00</div>
            <div class="category">Swimming</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a class="add-to-cart" href="#">Add to Cart</a>
        </div>
    </div>
</body>
</html>