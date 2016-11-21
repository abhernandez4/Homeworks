// function to validate the name returns true is the input is correct
function validateName(){
	// get string
	var n = $("#newName").val();
	
	// Check if blank
	if( n == "" ){
		// Deactivate hidden class of the blank message
		$("#error_name_blank").removeClass("hidden");
		return false;
	}

	$("#error_name_blank").addClass("hidden");
	return true;
}

// function to validate the comments return true if the input is valid
function validateComments(){
	// get the string
	var com = $("#newComment").val();

	// Check if empty
	if( com == "" ){
		// Deactivate the hidden class for the error
		$("#error_comment_blank").removeClass("hidden");
		return false;
	}
	
	$("#error_comment_blank").addClass("hidden");
	return true;
}

// function that would not allow to enter a non alphanumeric char
$("#newName").keypress( function(event){
	// check if the char is alpha numeric
	var regex = new RegExp("^[a-zA-Z0-9]+$");
    var str = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (regex.test(str)) {
        return true;
    }

    event.preventDefault();
    return false;
	
});

// //function to hook the button
// $("#post-btn").click( function(){
// 	// Validate the input and proceed if both are correct
// 	if( validateName() & validateComments() ){
// 		// Once they are valid, proceed to make an ajax call
// 		// that would load the comment into the database
// 		$.ajax({
// 			type	:	"post",
// 			dataType : "json",
// 			url : "handlers/PostComments.php",
// 			data : ,
// 			success : function( ){
// 			}
// 		});	
// 	}
	
// 	return false;
// });
$(document).ready(function(){
	$("#post-btn").click(function(){
		//var name = $("#comment_template_name").val();
		var comment = $("#comment_template_comment").val();

		$.ajax({

			url : "PostComment.php", 
			type : "POST",
			async: false,
			data : {
				"done" : 1,
			//	"username" : name,
				"comment_text" : comment
			},
			success: function(data){
				//$("#comment_template_name").val('');
				$("#comment_template_comment").val('');

			}

		})
	});
});







// function to erase a comment
$(document).on( "click", "button#comment_template_exit_btn", function( event ){
	// remove from container
	$(this).closest("#comment_template").remove();
});

// function that would check the username and password
$("#btn-login").click( function(){
	// ajax request
	$.ajax({
		type	:	"post",
		dataType : "json",
		url : "handlers/Login.php",
		data : {name: $("#userForm").val() },
		success : function( user ){
			
			// check if there was no error
			if( !("error" in user) ){
				// Remove log in form by adding hidden class
				$("#loginForm").addClass("hidden");
				
				// Display name and log out button
				$("#userName").text( user['name'] );
				$("#user_logout").removeClass("hidden");
				
				// Show comment textarea
				$("#addCommentBox").removeClass("hidden");
			}
			else{
				// Display error
				$("#login_error_message").removeClass("hidden");
				
				// Empty userbox and passbox
				$("#userForm").val("");
				$("#passForm").val("");
				
			}
		}
	});	

	// Return false
	return false;
});

//function to logout
$("#logoutButton").click( function(){
	// Make an ajax call to log out
	$.ajax({
		type 		: 	"post",
		dataType	:	"json",
		url			:	"handlers/Logout.php",
		data		:	{logout:	1},
		success		:	function( d ){
			// check response
			if( d['response'] == "OK" ){
				// Empty the username box
				$("#userName").text( "" );
				
				// Hide user-logout
				$("#user_logout").addClass("hidden");
				
				// Empty and Display the login form
				$("#userForm").val("");
				$("#passForm").val("");
				$("#loginForm").removeClass("hidden");
				
				// Hide the comment box area
				$("#addCommentBox").addClass("hidden");
			}
		}
	});
});