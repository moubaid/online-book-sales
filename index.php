<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Online Book Sales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }
    </style>
		<script src="js/jquery-1.9.1.js"></script>
	<script src="js/onlinebooksales.js"></script>
  </head>

  <body>

    <div class="container">

      <header>
	  <div class="logo">
        <img src="images/logo.png" />
		</div>
		<div class="main-link pull-right">
			<p>
			<a href="#" id="login" data-toggle="popover" data-placement="bottom" data-html="true">
			Login</a>
			/ 
			<a href="#">
			Register
			</a>
			</p>
		</div>
		</header>
        <div class="navbar navbar-inner">
              <ul class="nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
			  <div class="input-append pull-right">
				<input class="span2" id="appendedInputButtons" type="text">
				<button class="btn" type="button">Search</button>
			</div>
        </div><!-- /.navbar -->
      
      <hr>

      <!-- Example row of columns -->
	  <div class="sub-heading">
	  Top New Releases in Books <a href="#">(view more)</a>
	  </div>
	  <hr>
		<div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
		  
		  <hr>
		  <div class="sub-heading">
	  Bestselling Books <a href="#">(view more)</a>
	  </div>
	  <hr>
		<div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
		  
		  <hr>
		  <div class="sub-heading">
	  Special Offer <a href="#">(view more)</a>
	  </div>
	  <hr>
		<div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/300x200.png">
                  <div class="caption">
                    <h3>Book Name</h3>
                    <p>Book Description</p>
                    <p><a href="#" class="btn">More Details</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>

      <hr>

      <div class="footer">
        <p>&copy; Online Book Sales 2013</p>
      </div>

    </div> <!-- /container -->
	<script>
	var title = '<h4 align="center">Please sign in</h4>';
	var cnt = '<form class="form-signin"><input type="text" class="input-block-level" placeholder="Email address"><input type="password" class="input-block-level" placeholder="Password"><label class="checkbox"><input type="checkbox" value="remember-me"> Remember me</label><button class="btn" type="submit">Sign in</button></form>';
$("#login").popover({ title: title, content: cnt });
	</script>
  </body>
</html>
