/**
 * 1. get infos of tags
 * 2. find shortcode
 * 3. get more infos   https://api.instagram.com/oembed/?url=http://instagr.am/p/[suortcode]/
 * 4. you can find User info https://api.instagram.com/oembed/?url=http://instagr.am/p/BjGbW1VBAF-/
 * 5. this is a link of pic. https://www.instagram.com/p/BjGbW1VBAF-/?taken-by=amandadyer
 */

/***
 * 20180521 簡単に動作するjs
 * 
 */
var insta_data;

$(function(){
    //pure js
    var token = '3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed',
        num_photos = 10,
        // tag_name = '春',
        container = document.getElementById( 'rudr_instafeed' ),
        scrElement = document.createElement( 'script' );
    var url = 'https://www.instagram.com/explore/tags/' + tag + '/?__a=1';

    //20180528-----------------------------------
    $.ajax({
        url: url,
        dataType: 'json',
        type: 'GET',
        links: true,
        // async: false
        success: function(data){
             // console.log(data);
        insta_data = data; 
    		for( x in data.graphql.hashtag.edge_hashtag_to_top_posts.edges ){
                // console.log(data.graphql.hashtag.edge_hashtag_to_top_posts);
                var edge = data.graphql.hashtag.edge_hashtag_to_top_posts.edges[x];               
                
                // console.log(edge.node);
                var thumbnail = edge.node.thumbnail_src;
                var comment_count = edge.node.edge_media_to_comment.count;
                var like_count = edge.node.edge_liked_by.count;
                var shortcode = edge.node.shortcode;
                var author_name = "";
                // console.log(insta_json.thumbnail);


                // var author_id = "";
                // var link = edge.link;

                // var moreinfo_url = 'https://api.instagram.com/oembed/?url=http://instagr.am/p/' + shortcode;
                // console.log(tmpurl);
                // $.ajax({
                //     url: 'https://api.instagram.com/oembed/?url=http://instagr.am/p/' + shortcode,
                //     type: 'GET',
                //     success: function(data2){
                //         // sessionStorage.setItem('author_name' , data2.author_name);
                //         // console.log('-----' + sessionStorage.getItem('author_name'));
                //         insta_json.author_name = data2.author_name;
                //         console.log(insta_json);
                //     },
                //     error: function(data2){
                //         console.log(data2); // send the error notifications to console
                //     }                   
                // });
                $('ul').append('<li id= "' + x + '" class="list-inline-item"><img src="'+ thumbnail +'" width="300" height="300" onmouseover="" ><div>@ '+ sessionStorage.getItem('author_name')  + '<a href="https://www.instagram.com/p/'+ shortcode + '/?taken-by='+ sessionStorage.getItem('author_name') +'"></a></div><div>like '+ like_count  + '</div><div>comment '+ comment_count + '</div></li>');

                // console.log(insta_json);



                // $('ul').append('<li id= "' + x + '" class="list-inline-item"><img src="'+ thumbnail +'" width="300" height="300" onmouseover="ShowDetail(' +  x + ',' +  comment_count + ',' + like_count  + ')" ></li>');
    			// data.data[x].images.standard_resolution.url - URL of image 612х612
                // data.data[x].link - Instagram post URL
    			
    		}
    	},
    	error: function(data){
            console.log(data); // send the error notifications to console
    	}
    });
    //---------------------------------------------------
    
    // console.log(insta_data);

//         // window.mishaProcessResult = function( data ) {
//     //     for( x in data.data ){
//     //         container.innerHTML += '<li><img src="' + data.data[x].images.low_resolution.url + '"></li>';
//     //     }
//     // }

//     // https://api.instagram.com/v1/tags/{tag-name}?access_token=ACCESS-TOKEN
//     // scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/tags/春' + '?access_token=' + token + '&count=' + num_photos + '&callback=mishaProcessResult' );
//     // scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + num_photos + '&callback=mishaProcessResult' );

//     // scrElement.setAttribute( 'src', 'https://www.instagram.com/explore/tags/Galaxyカメラ部/?__a=1' );
//     // document.body.appendChild( scrElement );
  });

/***
 * 20180521 簡単に動作するjs
 * 
 */
// $(function(){
//     //pure js
//     var token = '3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed',
//         num_photos = 10,
//         tag_name = '春',
//         container = document.getElementById( 'rudr_instafeed' ),
//         scrElement = document.createElement( 'script' );

//     // window.mishaProcessResult = function( data ) {
//     //     for( x in data.data ){
//     //         container.innerHTML += '<li><img src="' + data.data[x].images.low_resolution.url + '"></li>';
//     //     }
//     // }

//     // https://api.instagram.com/v1/tags/{tag-name}?access_token=ACCESS-TOKEN
//     // scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/tags/春' + '?access_token=' + token + '&count=' + num_photos + '&callback=mishaProcessResult' );
//     // scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + num_photos + '&callback=mishaProcessResult' );

//     // scrElement.setAttribute( 'src', 'https://www.instagram.com/explore/tags/Galaxyカメラ部/?__a=1' );
//     // document.body.appendChild( scrElement );




//     // var sites = {!! json_encode($tag)!!};
//     // console.log( tag );
//     // alert( { $tag }  );

//     var url = 'https://www.instagram.com/explore/tags/' + tag + '/?__a=1';

//     $.ajax({
//         url: url,
//         dataType: 'json',
//         type: 'GET',
//         success: function(data){
//      		// console.log(data.graphql.hashtag.edge_hashtag_to_top_posts.edges[0].node.display_url);
//     		for( x in data.graphql.hashtag.edge_hashtag_to_top_posts.edges ){
//                 // console.log(x);
//                 $('ul').append('<li class="list-inline-item"><img src="'+data.graphql.hashtag.edge_hashtag_to_top_posts.edges[x].node.thumbnail_src+'" width="300" height="300" ></li>'); // data.data[x].images.low_resolution.url - URL of image, 306х306
//     			// data.data[x].images.thumbnail.url - URL of image 150х150
//     			// data.data[x].images.standard_resolution.url - URL of image 612х612
//     			// data.data[x].link - Instagram post URL
//     		}
//     	},
//     	error: function(data){
//     		console.log(data); // send the error notifications to console
//     	}
//     });
// });


/**
 * not used..
 */
//auth
//https://api.instagram.com/oauth/authorize/?client_id=a090108648fd4904bd50f26dc904ff43&redirect_uri=https://www.yahoo.com&response_type=token&scope=public_content
//
//
// https://api.instagram.com/v1/tags/snowy?access_token=3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed
// https://api.instagram.com/v1/users/self/media/recent?access_token=3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed
//  https://api.instagram.com/v1/tags/snowy/media/recent?access_token=3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed&max_id=10&min_tag_id=1&count=3
// https://api.instagram.com/v1/tags/search?q=snowy&access_token=3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed
//
//
// https://api.instagram.com/v1/tags/snowy/media/recent?access_token=3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed&callback=?



// $(function() {
//     var feed = new Instafeed({
//         get: 'tagged',
//         tagName: 'snowy',
//         clientId: 'a090108648fd4904bd50f26dc904ff43',
//         userId: '3106386257',
//         accessToken: '3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed',
//         limit: 12,
//     });
//     feed.run();
// });
//
//
// $(document).ready(function() {
//   var feed = new Instafeed({
//       target: 'instafeed',
//       get: 'user',
//       userId: '3106386257',
//       accessToken:'3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed',
//       clientId: 'a090108648fd4904bd50f26dc904ff43',
//       links: true ,
//       limit: 8,
//       resolution: 'standard_resolution',
//       template: '<div class="col-sm-3 col-xs-6 insta-box"><a href="{{link}}"><img src="{{image}}" target="_blank" /></a></div>'
//   });
//
//   feed.run();
// });
