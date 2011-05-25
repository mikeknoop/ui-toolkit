<?php
  require '../ui-toolkit.ini.php';
?>

<!DOCTYPE html>

<html>

  <head>
    <title>Knoop Group ui-toolkit</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <meta name="robots" content="all" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/ui-toolkit.css" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="js/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="js/ui-toolkit.js"></script>
    
  </head>

<body>

  <div id="fb-root"></div>
  <script>
    var fbConnected = false;
    
    window.fbAsyncInit = function() {
      FB.init({appId: '<?php echo APP_ID; ?>', status: true, cookie: true, xfbml: true});
      
      // Register login example button initialization
      FB.Event.subscribe('auth.login', function(response) {
        fbConnected = true;
        fbLoginGui();
      });
      FB.Event.subscribe('auth.logout', function(response) {
        fbConnected = false;
        fbLogoutGui()
      });  
      
      // Get the initial state of the current user 
      FB.getLoginStatus(function(response) {
        if (response.session) {
          fbConnected = true;
          fbLoginGui();
        } else {
          fbConnected = false;
          fbLogoutGui();
        }
      });

    };
    $('body').append('<div id="fb-root"></div>');
    $.getScript(document.location.protocol + '//connect.facebook.net/en_US/all.js');
    
    function fbLogin(scope, callback) {
      FB.login(function(response) {
        if (response.session) {
          if (response.perms) {
            // user is logged in and granted some permissions.
            // perms is a comma separated list of granted permissions
            callback(true);
          } else {
            // user is logged in, but did not grant any permissions
            callback(false);
          }
        } else {
          // user is not logged in
          callback(false);
      }}, {perms:scope});
    }
    
    function fbLoginGui() {
      $('#uiLoginExample').removeClass('uiVisibleInline');
      $('#uiLoggedInExample').addClass('uiVisibleInline');
    }
    
    function fbLogoutGui() {
      $('#uiLoginExample').addClass('uiVisibleInline');
      $('#uiLoggedInExample').removeClass('uiVisibleInline');
    }
      
  </script>

  <h1>ui-toolkit</h1>
  <h2>A toolkit to provide stock similar-looking Facebook UI form elements using JS/CSS.</h2>
  <h2><a href="https://github.com/mikeknoop/ui-toolkit">Available on Github here</a>.</h2>
  
  <form id="uiFormExample" name="uiFormExample" class="uiForm" method="post" action="">
    <table>
      <tr class="dataRow">
        <th class="label">Textbox</th>
        <!-- Note: the uiTextInputPlaceholder class indicates this textbox will get callbacks attached during initialization -->
        <td class="data"><input name="uiTextboxExample" type="text" class="uiTextbox uiTextInputPlaceholder" style="width: 400px;" value="Type some text..."></input></td>
      </tr>

      <tr class="dataRow">
        <th class="label">Textarea</th>
        <!-- Note: the uiTextInputPlaceholder class indicates this textarea will get callbacks attached during initialization -->
        <td class="data"><textarea name="uiTextareaExample" type="text" class="uiTextarea uiTextInputPlaceholder" style="width: 400px; height: 30px;">Type some text...</textarea></td>
      </tr>

      <tr class="dataRow">
        <th class="label">Checkbox</th>
        <td class="data">
          <input type="checkbox" name="uiCheckboxExample" id="uiCheckboxExample" class="uiCheckbox"></input><label for="uiCheckboxExample" class="uiCheckbox">Check this box.</label><br />
          <input type="checkbox" name="uiCheckboxExample2" id="uiCheckboxExample2" class="uiCheckbox"></input><label for="uiCheckboxExample2" class="uiCheckbox">Check this box, too.</label><br />
        </td>
      </tr>

      <tr class="dataRow">
        <th class="label">Radio Button</th>
        <td class="data">
          <input type="radio" name="uiRadioExample" id="uiRadioExample-1" class="uiRadio"></input><label for="uiRadioExample-1" class="uiRadio">Option 1</label><br />
          <input type="radio" name="uiRadioExample" id="uiRadioExample-2" class="uiRadio"></input><label for="uiRadioExample-2" class="uiRadio">Option 2</label><br />
          <input type="radio" name="uiRadioExample" id="uiRadioExample-3" class="uiRadio"></input><label for="uiRadioExample-3" class="uiRadio">Option 3</label><br />
        </td>
      </tr>

      <tr class="dataRow">
        <th class="label">Login Button</th>
        <td class="data">
          <a id="uiLoginExample" href="#" class="uiButton uiButtonLogin uiVisibleInline" onclick="fbLogin();">Login</a>
          <span id="uiLoggedInExample" class="uiButtonLoggedIn">You are logged in.</span>
        </td>
      </tr>

      <tr class="dataRow">
        <th class="label">Button/Lightbox</th>
        <td class="data">
          <a href="#" class="uiButton uiButtonNormal" onclick="return false;">I'm just a button</a>
          <a href="#" class="uiButton uiButtonNormal" onclick="return false;"><img class="uiButtonNormalImage" src="img/plus.png"/>Button with an image</a>
          
          <!-- This button below initiates a lightbox, it loads the URL defined in the rel tag. 
          Note the class uiLightboxHTML must be present in the anchor tag for the lightbox to get initialized -->
          <a href="#" class="uiButton uiButtonNormal uiLightboxHTML" rel="ajax/slow-load.php">I load a script into a Lightbox</a>
          
        </td>
      </tr>

      <tr class="dataRow">
        <th class="label">Dropdown Select</th>
        <td class="data">

          <!--  Select must have an id and name else it will be ignored when creating the uiSelect
                You can set the onchange event handler on <select> to receive notifications about changes, etc.
                Note the class uiSelectHTML must be present to initialize the uiSelect element -->
          <select name="uiSelectExample" id="uiSelectExample" class="uiSelectHTML" onchange="//alert('Select was changed.');">
            <option value="choose options val">Choose Options</option>
            <optgroup label="Option Group 1">
              <option value="option 1 val">Option 1</option>
              <option value="option 2 val">Option 2</option>
            </optgroup>
            <optgroup label="Option Group 2">
              <option value="option 3 val">Option 3</option>
              <option value="option 4 val">Option 4</option>
              <option value="option 5 val">Option 5</option>
              <option value="option 6 val">Option 6</option>
              <option value="option 7 val">Option 7</option>
              <option value="option 8 val">Option 8</option>
              <option value="option 3b val">Option 3b</option>
              <option value="option 4b val">Option 4b</option>
              <option value="option 5b val">Option 5b</option>
              <option value="option 6b val">Option 6b</option>
              <option value="option 7b val">Option 7b</option>
              <option value="option 8b val">Option 8b</option>
            </optgroup>
          </select>

        </td>
      </tr>
      
      <tr class="dataRow">
        <th class="label"></th>
        <td class="data submit">
          <a href="#" class="uiButton uiButtonSubmit" onclick="$('#uiFormExample').submit();">Submit Form</a>
        </td>
      </tr>

    </table>
  </form>
  
  <?php
    if (!empty($_REQUEST)) {
      print_r($_REQUEST);
    }
  ?>
  
</body>
</html>