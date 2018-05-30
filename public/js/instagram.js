/**
 * 1. get infos of tags
 * 2. find shortcode
 * 3. get more infos   https://api.instagram.com/oembed/?url=http://instagr.am/p/[suortcode]/
 * 4. you can find User info https://api.instagram.com/oembed/?url=http://instagr.am/p/BjGbW1VBAF-/
 * 5. this is a link of pic. https://www.instagram.com/p/BjGbW1VBAF-/?taken-by=amandadyer
 */

//// ajax model
$(function(){
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
			// console.log("step1 : get tag",json);
	    // $('ul').append('| ajax model |');
			$(json.graphql.hashtag.edge_hashtag_to_top_posts.edges).each(function(){
        var edge = this;
        var shortcode = edge.node.shortcode;
        var url2 = 'https://api.instagram.com/oembed/?url=http://instagr.am/p/' + shortcode;
        
				// console.log("step2 : set oembed ", edge);
        // setList(shortcode, url2);
		    setList(edge, url2);    
        /*
        
        var thumbnail = edge.node.thumbnail_src;
        var comment_count = edge.node.edge_media_to_comment.count;
        var like_count = edge.node.edge_liked_by.count;
        var id = edge.node.owner.id;
        var author_name = sessionStorage.getItem(id);
        $('ul').append('<a href="https://www.instagram.com/p/'+ shortcode + '/?taken-by='+ author_name +'" target="blank">@ '+ author_name  + '</a>');
				*/
			});
		} ,
		error : function(err){
      alert("오류가 발생하였습니다. 관리자에 문의하세요.");
			console.log(err);
		}
	});
	
	// function setList(shortcode,url){
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
         $('ul').append('<li id= "' + id + '" class="list-inline-item"><img src="' + thumbnail + '" width="300" height="300" onmouseover="" ><div><a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/p/' + shortcode + '/?taken-by=' + author_name + '" target="blank">@ ' + author_name + '</a></div><div>like ' + like_count + '</div><div>comment ' + comment_count + '</div></li>');
        //  $('ul').append('<li id= "' + id + '" class="list-inline-item"><img src="' + thumbnail + '" width="300" height="300" onmouseover="" ><div><a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/p/' + shortcode + '/?taken-by=' + author_name + '" target="blank">@ ' + author_name + '</a></div></li>');
        // $('ul').append('<a href="https://www.instagram.com/p/'+ shortcode + '/?taken-by='+ author_name +'" target="blank"><img src="'+thumbnail+'">@ '+ author_name  + '</a>');
			} ,
			error : function(err){
				alert("오류가 발생하였습니다. 관리자에 문의하세요.");
				console.log(err);
			}
		});		
	}
	
});