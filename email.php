<?php
    ob_start();
    echo $_POST['Name'];
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>

<body>

    <?php
	 if(!empty($_POST)){ 
       
		 $name 			= $_POST['Name'];
		 $email 			= $_POST['Email'];
		 $phone 		= $_POST['Phone']; 
		 $me 	= $_POST['Message']; 
         $to = "shubham.aladinn@gmail.com";
         $subject = "Atulya Enquiry";		 
        
         $message="<b>Hello</b>";
         $message .= "<table width='600' height='124' border='1' cellpadding='0' cellspacing='0' bgcolor='#FFFFCC'>
								<tr>
									<td>Name :</td><td>".$name."</td>
								</tr>
									<tr>
									<td>Email :</td><td>".$email."</td>
								</tr>
								
								<tr>
									<td>Mobile :</td><td>".$phone."</td>
								</tr> 
								
								<tr>
									<td>Message :</td><td>".$me."</td>
								</tr>
				 
							</table>";
         
                           
		 $header = "From:".$email." \r\n";
		 $header .= "Cc: shubham.aladinn@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 $header .= "Reply-To: ". strip_tags($email) . "\r\n";
         $retval = mail ($to,$subject,$message,$header);
         //echo '<pre>';print_r($retval);die('i am in');
          
         if( $retval == true ) {
           header("Location:https://www.sanjaybiyani.com/index.html"); 
         }else {
           $message =  'There was a problem sending the email.';
         }
	   }
	  
      ?>

</body>

</html>


<form id="subform" method="post">
    <div class="row">
        <div class="col-xl-8">
            <div class="form-group input-group">
                <input type="hidden" value="<?php echo $name ?>" class="form-control" name="Name" placeholder=""
                    required>

            </div>
            <div class="form-group input-group">
                <input type="hidden" class="form-control" value="<?php echo $phone ?>" name="Phone" placeholder=""
                    required>

            </div>
            <div class="form-group input-group">
                <input type="hidden" class="form-control" value="<?php echo $email ?>" name="Email" placeholder=""
                    required>

            </div>
            <div class="form-group input-group textarea">
                <input type="hidden" class="form-control" value="<?php echo $me ?>" name="Message" placeholder=""
                    required>

            </div>

        </div>
    </div>
</form>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script>
    var request;

    // Bind to the submit event of our form


    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $('#subform');

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();
    //alert(serializedData);
    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "https://script.google.com/macros/s/AKfycbyDcxndnJhqJGxHMwX6I-LKA_k_YGGo5tF5H6bvx3SuE4CgHpyh/exec",
        type: "post",
        data: serializedData
    });



    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR) {
        // Log a message to the console
        console.log("Hooray, it worked!");
        console.log(response);
        console.log(textStatus);
        console.log(jqXHR);

    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown) {
        // Log the error to the console
        console.error(
            "The following error occurred: " +
            textStatus, errorThrown
        );

    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

    // Prevent default posting of form
</script>