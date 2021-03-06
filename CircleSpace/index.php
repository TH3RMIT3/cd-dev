<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="theme-color" content="#000000">
 <!--
   manifest.json provides metadata used when your web app is added to the
   homescreen on Android. See
   https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/
 -->
 <link rel="manifest" href="./manifest.json">
 <link rel="shortcut icon" href="https://circle-space.com/assets/images/CircleSpacefavicon.png">
 <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
 <!--
   Notice the use of %PUBLIC_URL% in the tags above.
   It will be replaced with the URL of the `public` folder during the build.
   Only files inside the `public` folder can be referenced from the HTML.

   Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
   work correctly both with client-side routing and a non-root public URL.
   Learn how to configure a non-root public URL by running `npm run build`.
 -->
 <title>Circle Space</title>
</head>
<body>
  <div class="responsecol">
    <div class="responsecont">

    </div>
    <div class="responsefoot">

    </div>
  </div>
  <div class="container">

  	 <?php

  		 include("includes/header.php");

  		 if(isset($_POST['post'])){
  		 	$post = new Post($con, $userLoggedIn);
  		 	$post->submitPost($_POST['post_text'], 'none');
  		 }

  	 ?>

   <div class="main">
   </div>
   <div class="footer">
     <p>Circle Space Inc.</p>
   </div>
  </div>
  <script language="javascript">

  for(var i = 0; i < Object.keys(posts).length; i++) {
   var div = document.createElement("div");
   // var post = posts[Object.keys(posts)[i]];
   // var ratehitbox =""
   // if(post.plustype === "rate") {
   //   var plusimg = 'PlusRate0.png';
   //   var ratesize = ' rate';
   //   for(var j = 1; j < 10; j++) {
   //     ratehitbox += `<input id="htbx_markcoolio_1_${i}" type="button" onclick="clickRate(this)" class="htbx htbx${i}" />\n`
   //   }
   //   var plussize = 'plusRate';
   // } if(post.plustype === "plus") {
   //   var plusimg = 'plus2.png';
   //   var ratesize = '';
   //   var plussize = 'plus';
   // }
   div.className = 'post';
   div.innerHTML =
   `<div class="postHeader">
     <img src="${post.pfp}" alt="Profile Picture" class="pfp">
     <h4 class="pfpinfo">@${post.username} ${post.time}</h4>
   </div>
   <img src="${post.content}" alt="Image" class="feed">
   <div class="info">

     <img
     beenClicked="true"
     id="plus_${post.userid}_1"
     src="https://circle-space.com/assets/images/cs/${plusimg}"
     class="${plussize}">

     <a id="pluses_${post.userid}_1" href="pluses.html" class="btn pluses${ratesize}">777M</a>

     <img
     id="comment_${post.userid}_1"
     src="https://circle-space.com/assets/images/cs/comment2.png"
     onclick="clickComment(this)"
     class="comment${ratesize}">

     <a id="comments_${post.userid}_1" href="comments.html" class="btn comments${ratesize}">777M</a>

     ${ratehitbox}

   </div>`;
   var main = document.getElementsByClassName("main")[0];
   main.appendChild(div, main.firstChild);
  }

  // RATE FUNCTIONS

  function clickRate(info) {
   var btnId = info.id;
   var args = btnId.split('_');
   var id = 'plus' + '_' + args[1] + '_' + args[2];
   var img = document.getElementById(id);
   img.src = `https://circle-space.com/assets/images/cs/plusRate${args[3]}.png`
  }

  // PLUS FUNCTIONS

  function clickPlus(info) {
   var id = info.id;
   var img = document.getElementById(id);
   if (img.src == "https://circle-space.com/assets/images/cs/plus2.png") {
     img.src = "https://circle-space.com/assets/images/cs/plus2hover.png";
   } else {
     img.src = "https://circle-space.com/assets/images/cs/plus2.png";
   }
  }

  // COMMENT FUNCTIONS

  function clickComment(info) {
   var id = info.id;
   var img = document.getElementById(id);
   if (img.src == "https://circle-space.com/assets/images/cs/comment2.png") {
     img.src = "https://circle-space.com/assets/images/cs/comment2hover.png";
   } else {
     img.src = "https://circle-space.com/assets/images/cs/comment2.png";
   }
  }
  </script>
</body>
