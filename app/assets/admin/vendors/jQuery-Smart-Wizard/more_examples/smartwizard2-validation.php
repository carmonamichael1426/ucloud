<?php
if (isset($_REQUEST['issubmit'])) {
  echo "<strong>form is submitted</strong>";
}
?>

<!DOCTYPE HTML
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Smart Wizard 2 - Step Validation Example - a javascript jQuery wizard control plugin</title>
  <link href="styles/demo_style.css" rel="stylesheet" type="text/css">

  <link href="styles/smart_wizard.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.smartWizard-2.0.min.js"></script>

  <script type="text/javascript">

    $(document).ready(function () {
      // Smart Wizard     	
      $('#wizard').smartWizard({ transitionEffect: 'slideleft', onLeaveStep: leaveAStepCallback, onFinish: onFinishCallback, enableFinishButton: true });

      function leaveAStepCallback(obj) {
        var step_num = obj.attr('rel');
        return validateSteps(step_num);
      }

      function onFinishCallback() {
        if (validateAllSteps()) {
          $('form').submit();
        }
      }

    });

    function validateAllSteps() {
      var isStepValid = true;

      if (validateStep1() == false) {
        isStepValid = false;
        $('#wizard').smartWizard('setError', { stepnum: 1, iserror: true });
      } else {
        $('#wizard').smartWizard('setError', { stepnum: 1, iserror: false });
      }

      if (validateStep2() == false) {
        isStepValid = false;
        $('#wizard').smartWizard('setError', { stepnum: 2, iserror: true });
      } else {
        $('#wizard').smartWizard('setError', { stepnum: 2, iserror: false });
      }

      if (validateStep3() == false) {
        isStepValid = false;
        $('#wizard').smartWizard('setError', { stepnum: 3, iserror: true });
      } else {
        $('#wizard').smartWizard('setError', { stepnum: 3, iserror: false });
      }

      if (validateStep4() == false) {
        isStepValid = false;
        $('#wizard').smartWizard('setError', { stepnum: 4, iserror: true });
      } else {
        $('#wizard').smartWizard('setError', { stepnum: 4, iserror: false });
      }

      if (!isStepValid) {
        $('#wizard').smartWizard('showMessage', 'Please correct the errors in the steps and continue');
      }

      return isStepValid;
    }


    function validateSteps(step) {
      var isStepValid = true;
      // validate step 1
      if (step == 1) {
        if (validateStep1() == false) {
          isStepValid = false;
          $('#wizard').smartWizard('showMessage', 'Please correct the errors in step ' + step + ' and click next.');
          $('#wizard').smartWizard('setError', { stepnum: step, iserror: true });
        } else {
          $('#wizard').smartWizard('setError', { stepnum: step, iserror: false });
        }
      }

      // validate step 2
      if (step == 2) {
        if (validateStep2() == false) {
          isStepValid = false;
          $('#wizard').smartWizard('showMessage', 'Please correct the errors in step ' + step + ' and click next.');
          $('#wizard').smartWizard('setError', { stepnum: step, iserror: true });
        } else {
          $('#wizard').smartWizard('setError', { stepnum: step, iserror: false });
        }
      }

      // validate step 3
      if (step == 3) {
        if (validateStep3() == false) {
          isStepValid = false;
          $('#wizard').smartWizard('showMessage', 'Please correct the errors in step ' + step + ' and click next.');
          $('#wizard').smartWizard('setError', { stepnum: step, iserror: true });
        } else {
          $('#wizard').smartWizard('setError', { stepnum: step, iserror: false });
        }
      }

      // validate step 4
      if (step == 4) {
        if (validateStep4() == false) {
          isStepValid = false;
          $('#wizard').smartWizard('showMessage', 'Please correct the errors in step ' + step + ' and click next.');
          $('#wizard').smartWizard('setError', { stepnum: step, iserror: true });
        } else {
          $('#wizard').smartWizard('setError', { stepnum: step, iserror: false });
        }
      }

      return isStepValid;
    }

    function validateStep1() {
      var isValid = true;
      // Validate Username
      var un = $('#username').val();
      if (!un || un.length <= 0) {
        isValid = false;
        $('#msg_username').html('Please fill username').show();
      } else {
        $('#msg_username').html('').hide();
      }

      // validate password
      var pw = $('#password').val();
      if (!pw || pw.length <= 0) {
        isValid = false;
        $('#msg_password').html('Please fill password').show();
      } else {
        $('#msg_password').html('').hide();
      }

      // validate confirm password
      var cpw = $('#cpassword').val();
      if (!cpw || cpw.length <= 0) {
        isValid = false;
        $('#msg_cpassword').html('Please fill confirm password').show();
      } else {
        $('#msg_cpassword').html('').hide();
      }

      // validate password match
      if (pw && pw.length > 0 && cpw && cpw.length > 0) {
        if (pw != cpw) {
          isValid = false;
          $('#msg_cpassword').html('Password mismatch').show();
        } else {
          $('#msg_cpassword').html('').hide();
        }
      }
      return isValid;
    }

    function validateStep2() {
      var isValid = true;

      // Validate First Name
      var fn = $('#firstname').val();
      if (!fn || fn.length <= 0) {
        isValid = false;
        $('#msg_firstname').html('Please fill first name').show();
      } else {
        $('#msg_firstname').html('').hide();
      }

      // Validate Last Name
      var ln = $('#lastname').val();
      if (!ln || ln.length <= 0) {
        isValid = false;
        $('#msg_lastname').html('Please fill last name').show();
      } else {
        $('#msg_lastname').html('').hide();
      }

      // Validate Gender
      var gender = $('#gender').val();
      if (!gender || gender.length <= 0) {
        isValid = false;
        $('#msg_gender').html('Please select gender').show();
      } else {
        $('#msg_gender').html('').hide();
      }

      return isValid;
    }

    function validateStep3() {
      var isValid = true;
      //validate email
      var email = $('#email').val();
      if (email && email.length > 0) {
        if (!isValidEmailAddress(email)) {
          isValid = false;
          $('#msg_email').html('Email is invalid').show();
        } else {
          $('#msg_email').html('').hide();
        }
      } else {
        isValid = false;
        $('#msg_email').html('Please enter email').show();
      }

      // Validate Phone
      var phone = $('#phone').val();
      if (!phone || phone.length <= 0) {
        isValid = false;
        $('#msg_phone').html('Please enter phone number').show();
      } else {
        $('#msg_phone').html('').hide();
      }

      // Validate Address
      var address = $('#address').val();
      if (!address || address.length <= 0) {
        isValid = false;
        $('#msg_address').html('Please enter address').show();
      } else {
        $('#msg_address').html('').hide();
      }

      return isValid;
    }

    function validateStep4() {
      var isValid = true;

      // Validate Hobbies
      var hobbies = $('#hobbies').val();
      if (!hobbies || hobbies.length <= 0) {
        isValid = false;
        $('#msg_hobbies').html('Please enter hobbies').show();
      } else {
        $('#msg_hobbies').html('').hide();
      }

      // Validate About You
      var about = $('#about').val();
      if (!about || about.length <= 0) {
        isValid = false;
        $('#msg_about').html('Please tell us about yourself').show();
      } else {
        $('#msg_about').html('').hide();
      }

      return isValid;
    }

    // Email Validation
    function isValidEmailAddress(emailAddress) {
      var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
      return pattern.test(emailAddress);
    }


  </script>
</head>

<body>

  <div class="demoHead">
    <h2>Step Validation Example</h2>
  </div>

  <table align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td>
        <?php if (isset($_REQUEST['issubmit'])) { ?>
          <div style="color:green; text-align:center; padding:10px;">
            <strong>Form is submitted successfully!</strong>
          </div>
        <?php } ?>

        <form action="#" method="POST">
          <input type='hidden' name="issubmit" value="1">
          <!-- Tabs -->
          <div id="wizard" class="swMain">
            <ul>
              <li><a href="#step-1">
                  <label class="stepNumber">1</label>
                  <span class="stepDesc">
                    Account Details<br />
                    <small>Fill your account details</small>
                  </span>
                </a></li>
              <li><a href="#step-2">
                  <label class="stepNumber">2</label>
                  <span class="stepDesc">
                    Profile Details<br />
                    <small>Fill your profile details</small>
                  </span>
                </a></li>
              <li><a href="#step-3">
                  <label class="stepNumber">3</label>
                  <span class="stepDesc">
                    Contact Details<br />
                    <small>Fill your contact details</small>
                  </span>
                </a></li>
              <li><a href="#step-4">
                  <label class="stepNumber">4</label>
                  <span class="stepDesc">
                    Other Details<br />
                    <small>Fill your other details</small>
                  </span>
                </a></li>
            </ul>
            <div id="step-1">
              <h2 class="StepTitle">Step 1: Account Details</h2>
              <table cellspacing="3" cellpadding="3" align="center">
                <tr>
                  <td align="center" colspan="3">&nbsp;<\ /td>
                      <\ /tr>
                <tr>
                  <td align="right">Username :<\ /td>
                  <td align="left">
                    <input type="text" id="username" name="username" value="" class="txtBox">
                    <\ /td>
                  <td align="left"><span id="msg_username">
                      <\ /span>&nbsp;<\ /td>
                          <\ /tr>
                <tr>
                  <td align="right">Password :<\ /td>
                  <td align="left">
                    <input type="password" id="password" name="password" value="" class="txtBox">
                    <\ /td>
                  <td align="left"><span id="msg_password">
                      <\ /span>&nbsp;<\ /td>
                          <\ /tr>
                <tr>
                  <td align="right">Confirm Password :<\ /td>
                  <td align="left">
                    <input type="password" id="cpassword" name="cpassword" value="" class="txtBox">
                    <\ /td>
                  <td align="left"><span id="msg_cpassword">
                      <\ /span>&nbsp;<\ /td>
                          <\ /tr>
                            <\ /table>
                              <\ /div>
                                <div id="step-2">
                                  <h2 class="StepTitle">Step 2: Profile Details<\ /h2>
                                      <table cellspacing="3" cellpadding="3" align="center">
                                        <tr>
                                          <td align="center" colspan="3">&nbsp;<\ /td>
                                              <\ /tr>
                                        <tr>
                                          <td align="right">First Name :<\ /td>
                                          <td align="left">
                                            <input type="text" id="firstname" name="firstname" value="" class="txtBox">
                                            <\ /td>
                                          <td align="left"><span id="msg_firstname">
                                              <\ /span>&nbsp;<\ /td>
                                                  <\ /tr>
                                        <tr>
                                          <td align="right">Last Name :<\ /td>
                                          <td align="left">
                                            <input type="text" id="lastname" name="lastname" value="" class="txtBox">
                                            <\ /td>
                                          <td align="left"><span id="msg_lastname">
                                              <\ /span>&nbsp;<\ /td>
                                                  <\ /tr>
                                        <tr>
                                          <td align="right">Gender :<\ /td>
                                          <td align="left">
                                            <select id="gender" name="gender" class="txtBox">
                                              <option value="">-select-<\ /option>
                                              <option value="Female">Female<\ /option>
                                              <option value="Male">Male<\ /option>
                                                  <\ /select>
                                                    <\ /td>
                                          <td align="left"><span id="msg_gender">
                                              <\ /span>&nbsp;<\ /td>
                                                  <\ /tr>
                                                    <\ /table>
                                                      <\ /div>
                                                        <div id="step-3">
                                                          <h2 class="StepTitle">Step 3: Contact Details<\ /h2>
                                                              <table cellspacing="3" cellpadding="3" align="center">
                                                                <tr>
                                                                  <td align="center" colspan="3">&nbsp;<\ /td>
                                                                      <\ /tr>
                                                                <tr>
                                                                  <td align="right">Email :<\ /td>
                                                                  <td align="left">
                                                                    <input type="text" id="email" name="email" value=""
                                                                      class="txtBox">
                                                                    <\ /td>
                                                                  <td align="left"><span id="msg_email">
                                                                      <\ /span>&nbsp;<\ /td>
                                                                          <\ /tr>
                                                                <tr>
                                                                  <td align="right">Phone :<\ /td>
                                                                  <td align="left">
                                                                    <input type="text" id="phone" name="phone" value=""
                                                                      class="txtBox">
                                                                    <\ /td>
                                                                  <td align="left"><span id="msg_phone">
                                                                      <\ /span>&nbsp;<\ /td>
                                                                          <\ /tr>
                                                                <tr>
                                                                  <td align="right">Address :<\ /td>
                                                                  <td align="left">
                                                                    <textarea name="address" id="address" class="txtBox"
                                                                      rows="3"><\/textarea>
                      <\/td>
                      <td align="left"><span id="msg_address"><\/span>&nbsp;<\/td>
                  <\/tr>                                   			
            <\/table>               				          
        <\/div>
        <div id="step-4">
            <h2 class="StepTitle">Step 4: Other Details<\/h2>	
            <table cellspacing="3" cellpadding="3" align="center">
                  <tr>
                      <td align="center" colspan="3">&nbsp;<\/td>
                  <\/tr>        
                  <tr>
                      <td align="right">Hobbies :<\/td>
                      <td align="left">
                        <input type="text" id="hobbies" name="hobbies" value="" class="txtBox">
                      <\/td>
                      <td align="left"><span id="msg_hobbies"><\/span>&nbsp;<\/td>
                  <\/tr>          			
                  <tr>
                      <td align="right">About You :<\/td>
                      <td align="left">
                            <textarea name="about" id="about" class="txtBox" rows="5"><\/textarea>
                      <\/td>
                      <td align="left"><span id="msg_about"><\/span>&nbsp;<\/td>
                  <\/tr>                                   			
            <\/table>                 			
        <\/div>
      <\/div>
<!-- End SmartWizard Content -->  		
<\/form> 
      <\/td>
    <\/tr>
<\/table> 

<\/body>
<\/html>