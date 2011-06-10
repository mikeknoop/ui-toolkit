// ui initialization
function uiInit(within) {  
  // Initialize ui elements within "within" object
  if(typeof within === 'undefined') {
    within = $('body');
  }
  
  // Define ui elements which are available to load (note, only 
  // elements which require js need be initialized)
  var uiAvailable = [];
  
  // Holder for all instantiated ui elements
  window.c = [];
  
  uiAvailable[0] = {'class': 'uiTextInputPlaceholder', 'function': uiTextInput};
  uiAvailable[1] = {'class': 'uiSelectHTML', 'function': uiSelect};
  uiAvailable[2] = {'class': 'uiLightboxHTML', 'function': uiLightbox};
  
  // Search dom for ui elements to load
  for (var i in uiAvailable) {
    within.find('.'+uiAvailable[i]['class']).each(function() {
      if (typeof this.id != 'undefined') {
        var cInit = new uiAvailable[i]['function'](this);
        window.c.push(cInit);
      }
    });
  }
}

function uiTextInput(el) {

  // Properties
  this.el = el;
  this.defaultText = el.value;            // UDefault text gathered from the initial state of the input element

  // Methods
  this.attachCallbacks = function() {
    var uiTextInput = this;
    $(this.el).bind('focus',function() {return uiTextInput.Focus(this)});
    $(this.el).bind('blur',function() {return uiTextInput.Blur(this)});
    $(this.el).closest('form').bind('submit',function() {return uiTextInput.SanitizeSubmit(this)});    
  }
  
  this.Focus = function(el) {
    // FOCUS EVENT HANDLER
    // Get the uiTextInput instance for this <input>
    if (el.value == this.defaultText) {
      el.value = '';
      $(el).removeClass('uiTextInputPlaceholder');
    }
  }
  
  this.Blur = function(el) {
    // BLUR EVENT HANDLER
    // Get the uiTextbox instance for this <input>
    if (el.value.length == 0) {
      el.value = this.defaultText;
      $(el).addClass('uiTextInputPlaceholder');
    }
  }
  
  this.SanitizeSubmit = function(el) {
    // FORM SUBMIT HANDLER
    if (this.el.value == this.defaultText) {
      this.el.value = '';
    }
  }
  
  // Constructor
  this.attachCallbacks();
  // Attach this uiTextInput instance to the parent div (for event handler access)
  $(this.el).data('uiTextInput', this);
  
}

function uiSelect(el) {
  // Properties
  this.options = [];                  // The default selected option is the first <option>
  this.id = 'uiSelect-'+el.id;       // DOM ID of the top level uiSelect div (which is built at runtime)
  this.htmlId = el.id;
  this.selected = null;
  
  // Methods
  this.inspectOptions = function(el) {
    // step through el to find child options. Save value/innerHTML to this.options
    var uiSelect = this;
    $('#'+el.id).find('*').each(function () {
      arr = {'nodeName': this.nodeName, 'value': this.value, 'text': this.text, 'childCount': $(this).children().length};
      uiSelect.options.push(arr);
      if ($(this).attr('selected')) {
        uiSelect.selected = arr;
      }
    });
    
    // set default selected value (as the first option if defaultSelectedValue is still null)
    if (!this.selected) {
      this.selected = this.options[0];
    }
   
  }

  this.buildUiSelect = function() {    
    /* build DOM to this template:
      <div id='uiSelect-uiSelectExample' class='uiSelectContainer'>
        <a id='uiSelect-uiSelectExample-button' href='#' class='uiButton uiButtonSelect'>Choose Options</a>
        <ul class='dropdownContainer'>
          <li class='row selected'>Choose Options</li>
          <li class='divider'></li>
          <li class='row'>Option 1</li>
          <li class='row'>Option 2</li>
          <li class='divider'></li>
          <li class='row'>Option 3</li>
          <li class='row'>Option 4</li>
          <li class='divider'></li>
        </ul>
      </div>
    */

    // First, delete the uiSelectContainer if it already exists
    $('#'+this.id).remove();

    // Now find the place to build the top level div and build it
    // We want to place it directly before the HTML <select> in DOM
    $('#'+this.htmlId).before('<div id='+this.id+' class=\'uiSelectContainer\'></div>');
    
    // Build rest of DOM in the div we just created
    $('#'+this.id).append('<a id=\''+this.id+'-button\' href=\'#\' class=\'uiButton uiButtonSelect\'>'+this.selected['text']+'</a>');
    $('#'+this.id).append('<ul class=\'dropdownContainer\'></ul>');
    var ul = $('#'+this.id).find('ul[class=\'dropdownContainer\']').first();
    for (var i in this.options) {
      if (this.options[i]['nodeName'].toLowerCase() == 'optgroup' && this.options[i]['childCount'] > 0) {
        $(ul).append('<li class=\'divider\'></li>');
      } else if (this.options[i]['nodeName'].toLowerCase() == 'option') {
        if (this.selected['value'] == this.options[i]['value']) {
          $(ul).append('<li class=\'row selected\'>'+this.options[i]['text']+'</li>');
        } else {
          $(ul).append('<li class=\'row\'>'+this.options[i]['text']+'</li>');
        }
      }
    }
    
    // Bind actions to certain dom elements
    // This one handles the open/close nature of the dropdown
    var uiSelect = this;
    $('#'+this.id+'-button').bind('click',function() {return uiSelect.ButtonClick(this)});
    // This sets a specific li as the new selected
    $('#'+this.id).find('li[class*=\'row\']').bind('click',function() {return uiSelect.MenuItemClick(this)});

    // Bind a click action to close lightbox if user click outside of it
    $('html').click(function() {
        // hide uiSelect menu
        uiSelect.toggleDropdown('hide');
        uiSelect.toggleButton('off');
    });

    $('#'+this.id).click(function(e) {
      e.stopPropagation();
    });
      
    // Finally attach this uiSelect instance to the parent div (for event handler access)
    $('#'+this.id).data('uiSelect', this);
  }

  this.toggleDropdown = function(force) {
    var dropdown = $('#'+this.id).find('.dropdownContainer');
    if (force) {
      if (force == 'hide') {
        dropdown.removeClass('uiVisible');
        return;
      }
      if (force == 'show') {
        dropdown.addClass('uiVisible');
        return;
      }
    }
    dropdown.toggleClass('uiVisible');
  }
  
  this.toggleButton = function(force) {
    var button = $('#'+this.id).find('a[id$=\'-button\']');
    if (force) {
      if (force == 'off') {
        button.removeClass('uiButtonSelectPressed');
        return;
      }
      if (force == 'on') {
        button.addClass('uiButtonSelectPressed');
        return;
      }
    }
    button.toggleClass('uiButtonSelectPressed');
  }

  this.setHTMLSelected = function(val) {
    // Remove current selected
    $('#'+this.htmlId).find('option:selected').prop('selected', false);
    
    // Set the selected of the hidden form element given form value 
    $('#'+this.htmlId).find('option[value=\''+val+'\']').prop('selected', true);
  }
  
  this.setUiSelected = function(val, clicked) {
    // Set and unset relevant classes
    $('#'+this.id).find('li:contains('+this.selected['text']+')').first().removeClass('selected');
    $(clicked).addClass('selected');
    
    // Set the interal property given a clicked el
    var setValue = val;
    var setText = $(clicked).text();
    this.selected = {'value': setValue, 'text': setText};
    
    // Set the text value of the visibl uiButton
    $('#'+this.id).find('a[id$=\'-button\']').text(setText);
  }

  this.findValueFromText = function(array, text) {
    for (i in array) {
      if (array[i]['text'] == text) {
        return array[i]['value'];
      }
    }
    return null;
  }

  // Event Handlers
  this.ButtonClick = function(el) {
    // BUTTON CLICK EVENT HANDLER

    this.toggleButton();
    this.toggleDropdown();

    // Change the internal state for logic next click
    if (!this.state) {
      this.state = true;
    } else {
      this.state = false;
    }
    
    // Prevent click from propogating
    return false;
  }

  this.MenuItemClick = function(el) {
    // MENU ITEM CLICK EVENT HANDLER
    var val = this.findValueFromText(this.options, el.innerHTML);

    // Check to see if there is actally a change to the select
    if (this.selected['value'] != val) {
      var change = true;
    } else {
      var change = false;
    }
    
    if (change) {
      this.setHTMLSelected(val);
      this.setUiSelected(val, el);
    }
    
    // Always close the form
    this.toggleDropdown('hide');
    this.toggleButton('off');

    // Check to see if there is actally a change to the select
    if (change) {
      // Make an onchange callback if one was specified
      // Note the logic above to make sure the value actually changed (for parity with browser onchange)
      // The dropdown is also closed before this callback to attain browser partiy
      $('#'+this.htmlId).trigger('change');
    }
    
    return false;
  }
  
  // Constructor
  // For select, we need to inspect the given html <options> and then build a
  // new select widget to interface with the html <select>
  this.inspectOptions(el);
  this.buildUiSelect();
  
}

function uiLightbox(el) {
  // Properties
  this.url = $(el).attr('rel');     // URL to ajax load into the lightbox
  this.anchor = el;                 // Anchor tag which is tied to the lightbox
  this.id = null;                  // Id of the lightbox (uniquely generated for each lightbox instance)
  this.contentLoaded = false;      // Boolean whether the ajax content has been loaded yet
  this.fbauth = $(el).attr('data-fbauth');         // Facebook auth required to load the url
  this.fbscope = $(el).attr('data-fbscope');        // Permissions required (scope DOM property) to load the ajax script
  this.stayOpen = $(el).attr('data-stayopen');   // Defines whether the user can close the lightbox by clicking outside of it
  this.autoOpen = $(el).attr('data-autoopen');   // Defines whether the ligthbox should be automatically opened when initiated
  this.narrow = $(el).attr('data-narrow');   // Defines whether the lightbox is narrow (Page) or not
  this.backdrop = $(el).attr('data-backdrop');   // Defines whether to create and show a dark backdrop when open
    
  // Methods
  this.toggleLightbox = function(force) {
    if (force) {
      if (force == 'hide') {
        $('#'+this.id).removeClass('uiVisible');
        if (this.backdrop == 'true') {
          $('#uiLightboxBackdrop-'+this.id).removeClass('uiVisible');
        }
        return;
      }
      if (force == 'show') {
        $('#'+this.id).addClass('uiVisible');
        if (this.backdrop == 'true') {
          $('#uiLightboxBackdrop-'+this.id).addClass('uiVisible');
        }
        return;
      }
    }
    $('#'+this.id).toggleClass('uiVisible');
    if (this.backdrop == 'true') {
      $('#uiLightboxBackdrop-'+this.id).toggleClass('uiVisible');
    }
  }
  
  this.buildUiLightbox = function() {
    /* Build lightbox to this template:
      <div id='uiLightboxExample' class='uiLightbox'>
        <div class='contentContainer'>
          <div class='loading'>
            Loading...
          </div>
        </div>
      </div>
    */
    
    // First, delete the lightbox if it already exists
    $('#'+this.id).remove();
    
    if (this.narrow == 'true') {
      var narrow = ' narrow';
    } else {
      var narrow = '';
    }
    
    // Append the lightbox backdrop to the end of body
    $('body').append('<div id="uiLightboxBackdrop-'+this.id+'" class="uiLightboxBackdrop"></div>');
    
    // Append the lightbox to the end of body
    $('body').append('<div id=\''+this.id+'\' class=\'uiLightbox'+narrow+'\'></div>');
    
    // Build rest of template
    $('#'+this.id).append('<div class=\'contentContainer'+narrow+'\'><div class=\'contentLoading\'>Loading...<img class="uiLightboxLoading" src="img/loading.gif" /></div></div>');
        
    // Bind a click action to the calling anchor to toggle the lightbox when clicked
    var uiLightbox = this;
    $(this.anchor).bind('click',function() {return uiLightbox.AnchorClick(this)});
    
    // Bind a click action to close lightbox if user click outside of it
    var uiLightboxInstance = this;
    $('html').click(function() {
      if (uiLightboxInstance.stayOpen != 'true') {
        uiLightboxInstance.toggleLightbox('hide');
      }
    });

    // Stop the propogation of the 'close lightbox' action if user clicks the lightbox or anchor tag
    $('#'+this.id).click(function(e) {
      e.stopPropagation();
    });
    $(this.anchor).click(function(e) {
      e.stopPropagation();
    });
    
    // Now attach this uiLightbox instance to the anchor (for event handler access) and container
    $(this.anchor).data('uiLightbox', this);
    $('#'+this.id).data('uiLightbox', this);
  }
  
  this.generateId = function() {
    // Generate a 'unique' Id for this lightbox instance based on url
    var strippedUrl = this.url.replace(/[^A-Za-z0-9]/g, '');
    var timestamp = new Date().getTime();
    return strippedUrl+timestamp;
  }
  
  this.loadContent = function() {
    // Load content from AJAX souce into lightbox content (thus replacing the 'loading' div)
    //var params = {'send_to_list': selected_ids};, //data: params,
    var uiLightbox = this;
    
    if (typeof uiLightbox.fbauth != 'undefined' && uiLightbox.fbauth == 'true' && !fbConnected) {
      // Desired URL requires facebook auth and permissions
      if (uiLightbox.fbscope === 'undefined') {
        uiLightbox.fbscope = '';
      }
      
      fbLogin(uiLightbox.fbscope, function(session) {
        if (session) {
          // user logged in succesfully
          uiLightbox.loadAjax();
        } else {
          // auth not granted, close the lightbox and do not continue request
          uiLightbox.toggleLightbox('hide');
          return;
        }
      });
    } else {
      uiLightbox.loadAjax();
    }
  }
  
  this.loadAjax = function(timeout) {
    //var params = {'send_to_list': selected_ids};, //data: params,
    var uiLightbox = this;
    if (typeof timeout === 'undefined') {
      timeoutLength = 0;
    }
    $.ajax({
      url: uiLightbox.url,
      cache: false,
      type: 'GET',
      success: function(html) {
        var uiLightboxContentContainer = $('#'+uiLightbox.id).find('div[class~=\'contentContainer\']');
        uiLightboxContentContainer.html(html);
        window.uiInit(uiLightboxContentContainer);     // Initialize any ui elements that were just loaded via ajax
        uiLightbox.contentLoaded = true;
      },
      error: function(request,status,errorThrown) {
        if (request.status == 401) {
          // Script required Facebook authentication. Close the lightbox so when it is re-opened
          // a new auth dialog is shown
          uiLightbox.toggleLightbox('hide');
        } else {
        timeoutLength = timeoutLength + 2000;
        setTimeout(function() {uiLightbox.loadAjax(timeoutLength);},timeoutLength);
        }
      }
    });
  }
  
  // Event Handlers
  this.AnchorClick = function(el) {
    // ANCHOR BUTTON EVENT
    this.toggleLightbox();
    if (!this.contentLoaded) {
      this.loadContent();
    }
    return false;
  }
    
  // Contsructor
  this.id = this.generateId();
  this.buildUiLightbox();
  if (this.autoOpen == 'true') {
    this.loadContent();
    this.toggleLightbox('show');
  }
  
}



// Register ui initialization
$(document).ready(function() { uiInit(); });
