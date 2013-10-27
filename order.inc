<?php
$config = parse_ini_file("config.ini");

function echo_error($error_message)
{
echo "<div id='order-error' class='alert alert-error'><p>".$error_message."</p></div>";
}

function eval_post($req){

global $config;
$email_raw = $req["email"];
$suggestion_raw = $req["suggestion"];
$blind_captcha_raw = $req["daddy"];

if ($blind_captcha_raw != "")
{
	echo_error("If you are not a human, go away!");
} elseif (!filter_var($email_raw, FILTER_VALIDATE_EMAIL))
{
	echo_error("The e-mail address is invalid, you must have misstyped. Please try again!");
} else
{
	$con=mysqli_connect($config["SQL_SERVER"],$config["SQL_USER"],$config["SQL_PASS"],$config["SQL_DB"]);

	$suggestion_secure = mysqli_real_escape_string($con, strip_tags($suggestion_raw));
	$email_secure = mysqli_real_escape_string($con, strip_tags($email_raw));

	// Check connection
	if (mysqli_connect_errno($con))
  	{
  	error_log("Failed to connect to MySQL: " . mysqli_connect_error(),0);
  	echo_error("Sorry there was a technical problem on our side, please try again later or send an email to &#112;&#101;&#110;&#109;&#111;&#110;&#107;&#101;&#121;&#40;&#97;&#116;&#41;&#115;&#97;&#114;&#97;&#108;&#97;&#99;&#122;&#111;&#46;&#99;&#111;&#109;.");
    return;
  	}

	$query_results = mysqli_query($con,"SELECT * FROM penmonkey_test where email='$email_secure'");
    $row_number = mysqli_num_rows($query_results);
    mysqli_free_result($query_result);
	if (mysqli_num_rows($query_results) != 0)
	{
		error_log("Email address exists already");
		echo_error("It seem like this e-mail address is already subscribed.");

	} else
	{
		$sql="INSERT INTO penmonkey_test (email, suggestion) VALUES	('$email_secure','$suggestion_secure')";

		if (!mysqli_query($con,$sql))
		{
  	        echo_error("Sorry there was a technical problem on our side, please try again later or send an email to &#112;&#101;&#110;&#109;&#111;&#110;&#107;&#101;&#121;&#40;&#97;&#116;&#41;&#115;&#97;&#114;&#97;&#108;&#97;&#99;&#122;&#111;&#46;&#99;&#111;&#109;.");
			error_log('Error: ' . mysqli_error($con), 0);
            return;
		} else
		{
			echo "<div id='order-success' class='alert alert-success'><p>AWESOME, thanks for your e-mail address, we will let you know as soon as the Penmonkey is available for sale. Note that this was not an order yet.</p></div>";
		}
	}

	mysqli_close($con);
}
}
//echo("[ ] Running tests"); 
//eval_post(array("email" => "test@example.com", "suggestion" => "asdfasdfasd as dfasdfasd fas dfas", "daddy" => "")); echo '\n';
//eval_post(array("email" => "NONONOtest@example.com", "suggestion" => "asdfasdfasd as dfasdfasd fas dfas", "daddy" => "asdf")); echo '\n';
//eval_post(array("email" => "te<asdf>st@example.com", "suggestion" => "asdfasdfasd as dfasdfasd fas dfas", "daddy" => "")); echo '\n';
//eval_post(array("email" => "test@exam<adsf>ple.com", "suggestion" => "asdfasdfasd as dfasdfasd fas dfas", "daddy" => "")); echo '\n';
//eval_post(array("email" => "test@example.c<asdf>om", "suggestion" => "asdfasdfasd as dfasdfasd fas dfas", "daddy" => "")); echo '\n';
//eval_post(array("email" => "testexample.com", "suggestion" => "asdfa<asdf>sdfasd as dfasdfasd fas dfas", "daddy" => "")); echo '\n';
//eval_post(array("email" => "test.adsf.asdf@example.com", "suggestion" => "asdfasdfasd as dfasdfasd fas dfas", "daddy" => "")); echo '\n';
//eval_post(array("email" => "test@exampl.asdf.e.com", "suggestion" => "asdfasdfasd as dfasdfasd fas dfas", "daddy" => "")); echo '\n';
?>
