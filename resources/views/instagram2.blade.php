<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Instagram Photo</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts from Google -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> -->
    
</head>

<body>
	<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Instagram <br> フォトコンテスト</h1>
                <p> テーマに沿った写真を撮影して Instagramに投稿しよう！<br>
                    優秀な作品には、 Galaxyがもっと楽しくなる<br>
                    「プラスαなアイテム」をプレゼント！
                </p>
            </div>
        </div>
    </header>

	<!-- Intro Section -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-auto">
                	<span class="glyphicon glyphicon-apple" style="font-size: 60px"></span>
                    <h2 class="section-heading">管理画面で入力したタグは「{{ $tag }}」です。</h2>
                    <p class="text-light">タグに関連がある写真がここにでます。</p>
                    <h2 class="mx-auto mb-5">#{{ $tag }} </h2>
                    <!-- <div id="instafeed"></div> -->
                    <ul id="rudr_instafeed" class="list-inline"></ul>
                    
                </div>
            </div>
        </div>
    </section>

	<!-- Content 1 -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-fluid rounded-circle center-block" src="img/microphone.jpg" alt="">
                </div>
                <div class="col-sm-6">
                	<h2 class="section-header">Best in Class</h2>
                	<p class="lead text-muted">Holisticly predominate extensible testing procedures for reliable supply chains. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                	<a href="#" class="btn btn-primary btn-lg">Classify It</a>
                </div>                
                
            </div>
        </div>
    </section>

	<!-- Content 2 -->
     <section class="content content-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                	<h2 class="section-header">Superior Quality</h2>
                	<p class="lead text-light">Holisticly predominate extensible testing procedures for reliable supply chains. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                	<a href="#" class="btn btn-default btn-lg">Test It</a>
                </div>    
                <div class="col-sm-6">
                    <img class="img-fluid rounded-circle center-block" src="img/iphone.jpg" alt="">
                </div>            
                
            </div>
        </div>
    </section>    

	<!-- Content 3 -->
     <section class="content content-3">
        <div class="container">
			<h2 class="section-header"><span class="glyphicon glyphicon-pushpin text-primary"></span><br> Sanity Check</h2>
			<p class="lead text-muted">Holisticly predominate extensible testing procedures for reliable supply chains. Dynamically innovate resource-leveling customer service for state of the art customer service.</p> 
                    <a href="#" class="btn btn-primary btn-lg">Check Now</a>               
            </div>
        </div>
    </section>
    
	<!-- Footer -->
    <footer class="page-footer">
    
    	<!-- Contact Us -->
        <div class="contact">
        	<div class="container">
				<h2 class="section-heading">Contact Us</h2>
				<p>+1(23) 456 7890</p>
				<p>info@example.com</p>
        	</div>
        </div>
        	
        <!-- Copyright etc -->
        <div class="small-print">
        	<div class="container">
        		<p>Copyright &copy; Example.com 2015</p>
        	</div>
        </div>
        
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/instafeed.js"></script>

    <script type="text/javascript">
        var tag = {!! json_encode($tag) !!};

    </script>
    <script src="js/instagram.js"></script>

</body>

</html>
