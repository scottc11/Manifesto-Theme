"use strict";

var postContainerArray = ['#latest-post', '#post1', '#post2', '#post3', '#post4'];


// when page is fully loaded, get wordpress posts
$(document).ready(function() {


  // below function retrieves/interacts with the WP API
  jQuery.extend({
      getValues: function(url) {
          var result = null;
          $.ajax({
              url: url,
              type: 'get',
              dataType: 'json',
              async: false,
              success: function(data) {
                  result = data;
              }
          });
         return result;
      }
  });


  var jsonData = $.getValues("http://frommusictocode.com/wp-json/wp/v2/posts/");  // get all posts
  var mediaData = $.getValues("http://frommusictocode.com/wp-json/wp/v2/media/");  // get all posts

  for (var i = 0; i < postContainerArray.length; i++) {

    // OBTAIN POST DATA (text and image)

    var postMedia = getPostMedia(jsonData[i], mediaData); // Get post media
    var postContainerID = postContainerArray[i];

    // Load the content into HTML
    loadContent(jsonData[i], postMedia, postContainerID);
  }

});



// Getting the post media from the given blog post by iterating through
// an array of media from every blog post and pairing it with the post
// ID of given blog post.
function getPostMedia(post, media) {
  for (var i = 0; i < media.length; i++) {
    if (media[i].post == post.id) {
      return media[i];
    }
  }
}




// LOADING CONTENT INTO HTML ELEMENTS
function loadContent(post, media, containerID) {
  // assign variable to jquery request so you only have to do it once
  var $postContainer = $(containerID);

  // reformat the date string
  var dateString = dateConverter(post.date);


  // Fill in the html elements

  // error handle image to make sure there is one.
  try {
    console.log("SUCCESS");
    $postContainer.children('.post-background').css('background-image', 'url(' + media.media_details.sizes.medium_large.source_url + ')');
  }
  catch(err) {
    console.log("ERROR");
    $postContainer.children('.post-background').css('background-image', 'url("http://www.peterboltonphotoart.com/imgs/news/4852_9795921834e08b61b24f02.jpg")');
  }

  $(containerID + ' ' + '.post-title').text(post.title.rendered);
  $(containerID + ' ' + '.post-date').text(dateString);

}



// returns a string of the given dateObject retrieved from wordpress by using the built in Date() methods in javascript
function dateConverter(wordpressDate) {
  var months = [
              "January", "February", "March",
              "April", "May", "June", "July",
              "August", "September", "October",
              "November", "December"
            ];
  var date = new Date(wordpressDate);
  var dateString = date.getDate() + " " + months[date.getMonth()] + ", " + date.getFullYear();

  return dateString;
}
