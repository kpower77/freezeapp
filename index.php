<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>
<?php
    // session_start();
    // include_once 'dbconnect.php';
    
    // if(!isset($_SESSION['x14114640']))
    // {
    // 	header("Location: index.php");
    // }
    // $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['x14114640']);
    // $userRow=mysql_fetch_array($res);
    // 
?>

<!DOCTYPE html>
<html>
<head>
    <title>
         <h1 class="text-center">FreezeApp</h1>
    </title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Bootstrap minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- local style sheet placed second so overrides bootstrap css  -->
    <link rel="stylesheet" href="/css/styles.css">

    <link rel="stylesheet" href="Scripts/MetroJs_bundles/MetroJs.css">
    
    <script type="text/javascript" src="Scripts/MetroJs_bundles/MetroJs.js"></script>
    <script type="text/javascript" src="Scripts/MetroJs_bundles/MetroJs.min.js"></script>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" >
        $(document).ready(function () {
            $(document).on("click", "li.closed a", function () {
                $(this)
                .parent()
                .animate({
                    height: "300px",
                    width: "300px",
                    backgroundColor: "#fff"
                })
                .attr("class", "open");
                $(this).text("Close");
            }); // closes click on "li.closed a"
            $(document).on("click", "li.open a", function () {
                $(this)
                .parent()
                .animate({
                   width: "72px",
                   height: "72px",
                   backgroundColor: "#09f"
                })
                .attr("class", "closed");
                $(this).text("Open");
            }); // closes click on "li.closed a"
        }); // closes document ready function
    </script>
</head>
<body>
    <div class="jumbotron">
        <h1 class="text-center">FreezeApp</h1>
            <ul id="tiles">
                <li class="closed"><a href="#">Open</a>
                    <br />Lorem ipsum dolor sit amet</li>
                    
                <li class="closed"><a href="#">Open</a>
                    <br />Lorem ipsum dolor sit amet</li>
                    
                <li class="closed"><a href="#">Open</a>
                    <br />Lorem ipsum dolor sit amet</li>
                    
                <li class="closed"><a href="#">Open</a>
                    <br />Lorem ipsum dolor sit amet</li>
                    
                <li class="closed"><a href="#">Open</a>
                    <br />Lorem ipsum dolor sit amet</li>
                    
                <li class="closed"><a href="#">Open</a>
                    <br />Lorem ipsum dolor sit amet</li>
            </ul>
        <div class="appbar">
	    	<ul id="menu" class="appbar-buttons">
		    	<li>
			    	<a href="/" class="home"><img src="Scripts/MetroJs_bundles/images/1pixel.gif" alt="home"></a>
			    	<span class="charm-title">Home</span>
		    	</li>
		    	<li>
		        	<a href="/about" class="about"><img src="Scripts/MetroJs_bundles/images/1pixel.gif" alt="about"></a>
				    <span class="charm-title">About</span>
			    </li>
			    <li>
				    <a href="http://www.twitter.com" class="twitter" target="_blank"><img src="Scripts/MetroJs_bundles/images/1pixel.gif" alt="twitter"></a>
				    <span class="charm-title">Twitter</span>
			    </li>
		    </ul>
	    <a class="etc">&bull;&bull;&bull;</a>
	    </div>
    	<script type="text/javascript">
	    	$(document).ready(function () {
			    $(".live-tile,.flip-list").liveTile();
		    	$(".appbar").applicationBar();
	    	});
	    </script>
        <!-- Activate live tiles -->
        <script type="text/javascript">
             // apply regular slide universally unless .exclude class is applied 
             // NOTE: The default options for each liveTile are being pulled from the 'data-' attributes
             $(".live-tile, .flip-list").not(".exclude").liveTile();
        </script>
    </div>
</body>
</html>
<?php include("includes/footer.php") ?>

  
  
  
  <!-- FUTURE REFERENCE SPARE CODE -->
  
    <!--<div class="tiles blue tile-group four-wide">-->
    <!--     Sliding Tile that shows 100% of the back tile every 3 seconds -->
    <!--    <div class="live-tile" data-speed="750" data-delay="3000">-->
    <!--        <span class="tile-title"></span>-->
    <!--        <div><img class="full" src="Scripts/MetroJs_bundles/images/metroIcons.jpg" alt="1" /></div>-->
    <!--        <div><img class="full" src="Scripts/MetroJs_bundles/images/metroIcons_light.jpg" alt="2" /></div>-->
    <!--    </div>-->
    <!--     Red Flip Tile that flips every 4 seconds -->
    <!--    <div class="red live-tile" data-mode="flip" data-delay="4000">            -->
    <!--        <div>-->
    <!--            <img class="full" src="/images/sample/3tw.gif" alt="3" />-->
    <!--            <span class="tile-title">flip tile front</span>-->
    <!--        </div>-->
    <!--        <div>-->
    <!--            <img class="full" src="/images/sample/4tw.gif" alt="4" />-->
    <!--            <span class="tile-title">flip tile back</span>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--     Carousel Tile that slides 4 tile faces every 2.5 seconds -->
    <!--    <div class="live-tile" data-mode="carousel" data-direction="horizontal" data-delay="2500">-->
    <!--        <div>-->
    <!--            <img class="full" src="/images/sample/1tw.gif" alt="1" />-->
    <!--            <span class="tile-title">carousel slide 1</span>-->
    <!--        </div>-->
    <!--        <div>-->
    <!--            <img class="full" src="/images/sample/2t.gif" alt="2" />-->
    <!--            <span class="tile-title accent">carousel slide 2</span>-->
    <!--        </div>-->
    <!--        <div>-->
    <!--            <img class="full" src="/images/sample/3tw.gif" alt="3" />-->
    <!--            <span class="tile-title">carousel slide 3</span>-->
    <!--        </div>-->
    <!--        <div>-->
    <!--            <img class="full" src="/images/sample/4t.gif" alt="4" />-->
    <!--            <span class="tile-title accent">carousel slide 4</span>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--     Mango Flip List that triggers every 3 seconds -->
    <!--    <div class="list-tile mango">-->
    <!--        <span class="tile-title">flip list</span>-->
    <!--        <ul class="flip-list fourTiles" data-mode="flip-list" data-delay="2000">-->
    <!--            <li>-->
    <!--                <div><img class="full" src="/images/sample/1t.gif" alt="1" /></div>-->
    <!--                <div><img class="full" src="/images/sample/1tw.gif" alt="1" /></div>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <div><img class="full" src="/images/sample/2t.gif" alt="2" /></div>-->
    <!--                <div><img class="full" src="/images/sample/2tw.gif" alt="2" /></div>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <div><img class="full" src="/images/sample/3t.gif" alt="3" /></div>-->
    <!--                <div><img class="full" src="/images/sample/3tw.gif" alt="3" /></div>-->
    <!--            </li>-->
    <!--            <li data-direction="horizontal">-->
    <!--                <div><img class="full" src="/images/sample/4t.gif" alt="4" /></div>-->
    <!--                <div><img class="full" src="/images/sample/4tw.gif" alt="4" /></div>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <!--     Green Static Tile -->
    <!--    <div class="live-tile accent green exclude">-->
    <!--        <span class="tile-title">static tile</span>-->
    <!--        <p>Static tiles can take advantage of theming too!</p>-->
    <!--    </div>-->
    <!--    </div>-->
  
  
  
  
  
  
  
  
  
  <!--Apply blue theme as default for all tiles, but use the tiles class to allow the theme to be swapped -->
  <!--  <div class="tiles blue tile-group four-wide">-->
        <!-- Sliding Tile that shows 100% of the back tile every 3 seconds -->
  <!--      <div class="live-tile" data-speed="750" data-delay="3000">-->
  <!--          <span class="tile-title">slide tile</span>-->
  <!--          <div><img class="full" src="/images/sample/1tw.gif" alt="1" /></div>-->
  <!--          <div><img class="full" src="/images/sample/2t.gif" alt="2" /></div>-->
  <!--      </div>-->
        <!-- Red Flip Tile that flips every 4 seconds -->
  <!--      <div class="red live-tile" data-mode="flip" data-delay="4000">            -->
  <!--          <div>-->
  <!--              <img class="full" src="/images/sample/3tw.gif" alt="3" />-->
  <!--              <span class="tile-title">flip tile front</span>-->
  <!--          </div>-->
  <!--          <div>-->
  <!--              <img class="full" src="/images/sample/4tw.gif" alt="4" />-->
  <!--              <span class="tile-title">flip tile back</span>-->
  <!--          </div>-->
  <!--      </div>-->
        <!-- Carousel Tile that slides 4 tile faces every 2.5 seconds -->
  <!--      <div class="live-tile" data-mode="carousel" data-direction="horizontal" data-delay="2500">-->
  <!--          <div>-->
  <!--              <img class="full" src="/images/sample/1tw.gif" alt="1" />-->
  <!--              <span class="tile-title">carousel slide 1</span>-->
  <!--          </div>-->
  <!--          <div>-->
  <!--              <img class="full" src="/images/sample/2t.gif" alt="2" />-->
  <!--              <span class="tile-title accent">carousel slide 2</span>-->
  <!--          </div>-->
  <!--          <div>-->
  <!--              <img class="full" src="/images/sample/3tw.gif" alt="3" />-->
  <!--              <span class="tile-title">carousel slide 3</span>-->
  <!--          </div>-->
  <!--          <div>-->
  <!--              <img class="full" src="/images/sample/4t.gif" alt="4" />-->
  <!--              <span class="tile-title accent">carousel slide 4</span>-->
  <!--          </div>-->
  <!--      </div>-->
        <!-- Mango Flip List that triggers every 3 seconds -->
  <!--      <div class="list-tile mango">-->
  <!--          <span class="tile-title">flip list</span>-->
  <!--          <ul class="flip-list fourTiles" data-mode="flip-list" data-delay="2000">-->
  <!--              <li>-->
  <!--                  <div><img class="full" src="/images/sample/1t.gif" alt="1" /></div>-->
  <!--                  <div><img class="full" src="/images/sample/1tw.gif" alt="1" /></div>-->
  <!--              </li>-->
  <!--              <li>-->
  <!--                  <div><img class="full" src="/images/sample/2t.gif" alt="2" /></div>-->
  <!--                  <div><img class="full" src="/images/sample/2tw.gif" alt="2" /></div>-->
  <!--              </li>-->
  <!--              <li>-->
  <!--                  <div><img class="full" src="/images/sample/3t.gif" alt="3" /></div>-->
  <!--                  <div><img class="full" src="/images/sample/3tw.gif" alt="3" /></div>-->
  <!--              </li>-->
  <!--              <li data-direction="horizontal">-->
  <!--                  <div><img class="full" src="/images/sample/4t.gif" alt="4" /></div>-->
  <!--                  <div><img class="full" src="/images/sample/4tw.gif" alt="4" /></div>-->
  <!--              </li>-->
  <!--          </ul>-->
  <!--      </div>-->
        <!-- Green Static Tile -->
  <!--      <div class="live-tile accent green exclude">-->
  <!--          <span class="tile-title">static tile</span>-->
  <!--          <p>Static tiles can take advantage of theming too!</p>-->
  <!--      </div>-->
  <!--  </div>-->
    <!-- Activate live tiles -->
  <!--  <script type="text/javascript">-->
        <!--// apply regular slide universally unless .exclude class is applied -->
        <!--// NOTE: The default options for each liveTile are being pulled from the 'data-' attributes-->
  <!--      $(".live-tile, .flip-list").not(".exclude").liveTile();-->
  <!--  </script>  -->