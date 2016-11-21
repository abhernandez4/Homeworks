<html>

<head>

<title>JavaScript Comment Board</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
<link rel="stylesheet" href="style.css"/>

</head>

<body>

<div class="container">

<!-- The username and password -->
<form id="loginForm" class="navbar-form navbar-right">
  <div class="form-group">
	<input type="text" class="form-control" id="userForm" placeholder="Username">
  </div>
  <div class="form-group">
	<input type="password" class="form-control" id="passForm" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default" id="btn-login">Sign in</button>
  <br><span id="login_error_message" class="error hidden">Invalid Username or Password</span>
</form>
<div id="user_logout" class="navbar-form navbar-right hidden">
	
	<h4>Hello <span id="userName" ></span></h4>
	<button id="logoutButton" class="btn btn-default">
		<a>Logout</a>
	</button>
</div>

<div class="page-header">
	<h1>My Fake Blog</h1>
</div>

<div class="row col-md-8 col-md-offset-2">

<h2>Post About Thing</h2>

<p>
This is a wall of text. This is a wall of text. This is a wall of text. 
This is a wall of text. This is a wall of text. This is a wall of text. 
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text. 
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text. 
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text. 
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
This is a wall of text. This is a wall of text. This is a wall of text.
</p>

<hr/>
<!-- Use php to determine if the textarea is going to be hidden -->

<div id="addCommentBox" class="panel panel-default hidden">
	<div class="panel-heading">
		<h3 class="panel-title">Add a comment</h3>
	</div>

	<div class="panel-body">
		<form>
			<div class="form-group" >
				<input id="newName" type="textbox" class="form-control" placeholder="Name"/>
				<p class="hidden error" id="error_name_blank">Username cannot be blank</p>
				<p class="hidden error" id="error_name_invalid"><br>Username must contain letters and numbers</p>
			</div>
			<div class="form-group">
				<textarea id="newComment" rows="4" cols="60" class="form-control" placeholder="Comment"></textarea>
				<p class="hidden error" id="error_comment_blank">
				The comments cannot be blank</p>
			</div>
			<div class="form-group">
				<input type="submit" id="post-btn" class="btn btn-primary" value="Post"></input>
			</div>
		</form>
	</div>
</div>

<div id="comments">
	<div class="panel panel-default" id="comment_template">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-11">
					<p><h3 id="comment_template_name" class="panel-title">etomai </h3>
					<span id="comment_template_date" class="date">(9/17/2015)</span></p>
				</div>
				<div class="col-md-1">
					<button id="comment_template_exit_btn">X</button>
				</div>
			</div>
		</div>

		<div class="panel-body">
			<p id="comment_template_comment">This is my comment.  I think the post is too long.</p>
		</div>
	</div>
</div>

</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="views\posting.js"></script>
</body>

</html>