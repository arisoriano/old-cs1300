<?php
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('arielsoriano28@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Contact us</title>
      <link rel="STYLESHEET" type="text/css" href="../../css/contact.css" />
      <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
      <script type='text/javascript' src='../../js/scripts/gen_validatorv31.js'></script>
</head>
<body>

<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* Required Fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <p></p>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <p></p>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>

<div class='container'>
    <label for='message' >Message*:</label><br/>
    <p></p>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message' spellcheck="true" maxlength="2048"><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>


<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>

<!-- client-side form validations-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");
   
    frmvalidator.addValidation("name","alpha_s","Please provide only letters and spaces");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","req","Please provide a message before submitting");
    

// ]]>

</script>

</body>
</html>