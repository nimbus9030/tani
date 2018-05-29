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

function get(url) {
  // Return a new promise.
  return new Promise(function(resolve, reject) {
    // Do the usual XHR stuff
    var req = new XMLHttpRequest();
    req.open('GET', url);

    req.onload = function() {
      // This is called even on 404 etc
      // so check the status
      if (req.status == 200) {
        // Resolve the promise with the response text
        resolve(req.response);
      }
      else {
        // Otherwise reject with the status text
        // which will hopefully be a meaningful error
        reject(Error(req.statusText));
      }
    };

    // Handle network errors
    req.onerror = function() {
      reject(Error("Network Error"));
    };

    // Make the request
    req.send();
  });
}


$(function(){
    //pure js
    sessionStorage.clear();
    
    var token = '3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed',
        num_photos = 10,
        // tag_name = '春',
        container = document.getElementById( 'rudr_instafeed' ),
        scrElement = document.createElement( 'script' );
    var url = 'https://www.instagram.com/explore/tags/' + tag + '/?__a=1';

    get(url)
    .then(function(response) {
        insta_data = JSON.parse(response);
      }, function(error) {
        console.error("Failed!", error);
    })
    .then(function(){
      for( x in insta_data.graphql.hashtag.edge_hashtag_to_top_posts.edges ){
        var edge = insta_data.graphql.hashtag.edge_hashtag_to_top_posts.edges[x];
        var shortcode = edge.node.shortcode;
        var url2 = 'https://api.instagram.com/oembed/?url=http://instagr.am/p/' + shortcode;
        // console.log( edge );
        get(url2)
        .then(function(response) {
          // insta_data2.push( JSON.parse(response) );

          var data = JSON.parse(response);
          // console.log(  JSON.parse(response)  );
          sessionStorage.setItem( data.author_id, data.author_name );
        }, function(error) {
          console.error("Failed!", error);
        })
      }
    })
    .then(function(){
      for( x in insta_data.graphql.hashtag.edge_hashtag_to_top_posts.edges ){
        var edge = insta_data.graphql.hashtag.edge_hashtag_to_top_posts.edges[x];
        var thumbnail = edge.node.thumbnail_src;
        var comment_count = edge.node.edge_media_to_comment.count;
        var like_count = edge.node.edge_liked_by.count;
        var shortcode = edge.node.shortcode;
        var id = edge.node.owner.id;
        var author_name = sessionStorage.getItem(id);
        console.log(author_name);
        $('ul').append('<li id= "' + x + '" class="list-inline-item"><img src="'+ thumbnail +'" width="300" height="300" onmouseover="" ><div><a href="https://www.instagram.com/p/'+ shortcode + '/?taken-by='+ author_name +'" target="blank">@ '+ author_name  + '</a></div><div>like '+ like_count  + '</div><div>comment '+ comment_count + '</div></li>');
      }
    })
  });
