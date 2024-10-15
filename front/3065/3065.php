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
$less->compileFile('less/3065.less', 'css/3065.css');
?>

<html>
<head>
  
    <link rel="stylesheet" href="css/3065.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

</head>
<body>
    <div class="footer">
        <div class="container">
            <div class="column">
                <a href="#"><span><i class="fa fa-fax"></i></span><span class="i">V</span><span class="blue">O</span><span class="i">IP</span></a>
                <p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quod mollitia quisquam...</p>
                <button>Learn More</button>
            </div>
            <div class="column">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Categories</h3>
                <ul>
                    <li><a href="#">Server</a></li>
                    <li><a href="#">Uncategorized</a></li>
                    <li><a href="#">VOIP</a></li>
                    <li><a href="#">Voip Analytics</a></li>
                    <li><a href="#">Voip App</a></li>
                </ul>
            </div>
            <div class="column subscribe">
                <h3>Subscribe</h3>
                <input placeholder="Enter your full name" type="text"/>
                <input placeholder="Enter your email address" type="email"/>
                <button>Subscribe</button>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="container">
                <div class="left">
                    <span class="support"><i class="fas fa-headset"></i> 24/7 Customer Support</span>
                    <span class="support"><i class="fas fa-envelope"></i> support@example.com</span>
                    <span class="support"><i class="fas fa-comments"></i> Click Here To Live Chat</span>
                    <span class="support"><i class="fas fa-phone-alt"></i> +44 000 000 000</span>
                </div>
                <div class="right"></div>
            </div>
        </div>
        <div class="container">
            <p>Copyright 2017 © <a href="#">BizWalls</a>. All Rights Reserved.</p>
            <p class="right">We Accept: <img src="http://themelooks.us/demo/bizwalls/wordpress/wp-content/uploads/2017/05/payment-methods-1.png" alt="image"></p>
        </div>
    </div>
</body>
</html>