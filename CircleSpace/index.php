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
 <link rel="shortcut icon" href="./CircleSpacefavicon.png">
 <link rel="stylesheet" type="text/css" href="../assets/css/csstyle.css" />
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
 <div class="container">
   <!-- <div class="header"> -->

     <!-- <img
     src="https://circle-space.com/assets/images/cs/CircleSpaceLogo.png"
     onclick="window.location.href='http://www.google.com'"
     alt="Circle Space" class="circle">

     <img
     src="https://circle-space.com/assets/images/cs/settings.png"
     onclick="window.location.href='http://www.google.com'"
     alt="Settings" class="headerbtn settings">

     <img
     src="https://circle-space.com/assets/images/cs/account.png"
     onclick="window.location.href='http://www.google.com'"
     alt="Account" class="headerbtn account">

     <img
     src="https://circle-space.com/assets/images/cs/search.png"
     onclick="window.location.href='http://www.google.com'"
     alt="Search" class="headerbtn search">

     <img
     src="https://circle-space.com/assets/images/cs/home.png"
     onclick="window.location.href='index.html'"
     alt="Home" class="headerbtn home"> -->

		 <?php

			 include("includes/header.php");

			 if(isset($_POST['post'])){
			 	$post = new Post($con, $userLoggedIn);
			 	$post->submitPost($_POST['post_text'], 'none');
			 }

		 ?>

   <!-- </div> -->
   <div class="main">
   </div>
   <div class="footer">
     <p>Circle Space Inc.</p>
   </div>
 </div>
 <script language="javascript">

 // INIT CODE

 // TEMPLATE VARIABLES
 var posts = {
   "Post1": {
     "plustype": "plus",
     "username": "smithy",
     "pfp": "https://circle-space.com/assets/images/cs/testpfp.jpg",
     "time": 210303,
     "content": "https://circle-space.com/assets/images/cs/testimg.jpg",
     "userid": "0000000000000000"
   },
   "Post2": {
     "plustype": "rate",
     "username": "marcia",
     "pfp": "https://circle-space.com/assets/images/cs/testpfp2.jpg",
     "time": 210323,
     "content": "https://circle-space.com/assets/images/cs/testimg2.jpg",
     "userid": "0000000000000001"
   },
   "Post3": {
     "plustype": "rate",
     "username": "familyman6969",
     "pfp": "https://circle-space.com/assets/images/cs/testpfp6.jpg",
     "time": 120818,
     "content": "https://circle-space.com/assets/images/cs/testimg6.jpg",
     "userid": "0000000000000002"
   }
 }
 // TEMPLATE END

 for(var i = 0; i < Object.keys(posts).length; i++) {
   var div = document.createElement("div");
   var post = posts[Object.keys(posts)[i]];
   var ratehitbox =""
   if(post.plustype === "rate") {
     var plusimg = 'PlusRate0.png';
     var ratesize = ' rate';
     for(var j = 1; j < 10; j++) {
       ratehitbox += `<input id="htbx_markcoolio_1_${i}" type="button" onclick="clickRate(this)" class="htbx htbx${i}" />\n`
     }
     var plussize = 'plusRate';
   } if(post.plustype === "plus") {
     var plusimg = 'Plus2.png';
     var ratesize = '';
     var plussize = 'plus';
   }
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
