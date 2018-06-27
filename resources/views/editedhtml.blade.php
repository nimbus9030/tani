<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/editor.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/narrow-jumbotron.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

  </head>

  <body>
  </body>

  <script src="js/jquery.min.js"></script>

  <script type="text/javascript">
    var html = {!! json_encode($html) !!};
    var tag = {!! json_encode($tag) !!};

    function setInstagram(){
      var url = 'https://www.instagram.com/explore/tags/' + tag + '/?__a=1';
      var token = '3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed';

      $.ajax({
        url: url ,
        data : $("#taApiParam").val(),
        dataType : "JSON",
        /*
        type : method,
        */
        success : function(json){
          $(json.graphql.hashtag.edge_hashtag_to_top_posts.edges).each(function(){
            var edge = this;
            var shortcode = edge.node.shortcode;
            var url2 = 'https://api.instagram.com/oembed/?url=http://instagr.am/p/' + shortcode;
            
            // console.log(edge);
            setList(edge, url2);    
          });
        } ,
        error : function(err){
          // alert("");
          console.log(err);
        }
      });
    }


    function setList(edge, url) {
      $.ajax({
        url: url ,
        data : $("#taApiParam").val(),
        dataType : "JSON",
        /*
        type : method,
        */
        success : function(json){
          // console.log("step3 : get oembed",json);
          //  var thumbnail = json.thumbnail_url;
          var thumbnail = edge.node.thumbnail_src;

          var id = json.author_id;
          var author_name = json.author_name;
          var shortcode = edge.node.shortcode;
          var comment_count = edge.node.edge_media_to_comment.count;
          var like_count = edge.node.edge_liked_by.count;

          //  console.log(json);

          var li = $('<li>', {});
          var a = $('<a>', { href: "https://www.instagram.com/p/" + shortcode + "/?taken-by=" + author_name, target:"blank"});
          var img = $('<img>', { src:thumbnail, width:300, height:300 });
          img.appendTo(a);
          a.appendTo(li);

          var div = $('<div>', {class:'ig_id'});
          div.append('<p><span><img src="img/ig_member_pic.png"></span>' + author_name + '</p>');
          a.append(div);

          div =  $('<div>', { class:'overlay'});
          a.append(div);


          var child_div = $('<div>', {class:'overlay_ig_like'});
          child_div.append('<p><span><img src="img/icon_like@2x.png"></span>' + like_count + '</p>');
          div.append(child_div);

          child_div = $('<div>', {class:'overlay_ig_com'});
          child_div.append('<p><span><img src="img/icon_com@2x.png"></span>' + comment_count + '</p>');
          div.append(child_div);

          child_div = $('<div>', {class:'overlay_ig_id'});
          child_div.append('<p><span><img src="img/ig_member_pic.png"></span>' + author_name + '</p>');
          div.append(child_div);


          $('ul').append(li);
        } ,
        error : function(err){
            // alert("오류가 발생하였습니다. 관리자에 문의하세요.");
            console.log(err);
        }
    });		
	}


    $(function(){
      $('body').html(html.html);
      // console.log(tag);
      setInstagram();
    });
  </script>

  <!-- <script src="js/instagram.js"></script> -->
</html>
