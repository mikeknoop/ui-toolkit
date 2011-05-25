
    

  

<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <script>var NREUMQ=[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
        <title>src/base_facebook.php at master from facebook/php-sdk - GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />

    <link href="https://d3nwyuy0nl342s.cloudfront.net/85747cdb42efebbefad248de22fce70b441c65a7/stylesheets/bundle_github.css" media="screen" rel="stylesheet" type="text/css" />
    

    <script type="text/javascript">
      if (typeof console == "undefined" || typeof console.log == "undefined")
        console = { log: function() {} }
    </script>
    <script type="text/javascript" charset="utf-8">
      var GitHub = {
        assetHost: 'https://d3nwyuy0nl342s.cloudfront.net'
      }
      var github_user = 'mikeknoop'
      
    </script>
    <script src="https://d3nwyuy0nl342s.cloudfront.net/85747cdb42efebbefad248de22fce70b441c65a7/javascripts/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="https://d3nwyuy0nl342s.cloudfront.net/85747cdb42efebbefad248de22fce70b441c65a7/javascripts/bundle_github.js" type="text/javascript"></script>


    
    <script type="text/javascript" charset="utf-8">
      GitHub.spy({
        repo: "facebook/php-sdk"
      })
    </script>

    
  <link rel='canonical' href='/facebook/php-sdk/blob/1bf0ec7068e4a8a65f33b2351ef2abb680d14586/src/base_facebook.php'>

  <link href="https://github.com/facebook/php-sdk/commits/master.atom" rel="alternate" title="Recent Commits to php-sdk:master" type="application/atom+xml" />

        <meta name="description" content="php-sdk - PHP SDK for the Facebook API" />
    <script type="text/javascript">
      GitHub.nameWithOwner = GitHub.nameWithOwner || "facebook/php-sdk";
      GitHub.currentRef = 'master';
      GitHub.commitSHA = "1bf0ec7068e4a8a65f33b2351ef2abb680d14586";
      GitHub.currentPath = 'src/base_facebook.php';
      GitHub.masterBranch = "master";

      
    </script>
  

        <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3769691-2']);
      _gaq.push(['_setDomainName', 'none']);
      _gaq.push(['_trackPageview']);
      _gaq.push(['_trackPageLoadTime']);
      (function() {
        var ga = document.createElement('script');
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        ga.setAttribute('async', 'true');
        document.documentElement.firstChild.appendChild(ga);
      })();
    </script>

    
  </head>

  

  <body class="logged_in page-blob  windows env-production">
    

    

    

    

    

    

    <div class="subnavd" id="main">
      <div id="header" class="true">
        
          <a class="logo boring" href="https://github.com/">
            <img alt="github" class="default" src="https://d3nwyuy0nl342s.cloudfront.net/images/modules/header/logov3.png" />
            <!--[if (gt IE 8)|!(IE)]><!-->
            <img alt="github" class="hover" src="https://d3nwyuy0nl342s.cloudfront.net/images/modules/header/logov3-hover.png" />
            <!--<![endif]-->
          </a>
        
        
          





  
    <div class="userbox">
      <div class="avatarname">
        <a href="https://github.com/mikeknoop"><img src="https://secure.gravatar.com/avatar/31a1653fbb2138e3a373ca19dcf4d773?s=140&d=https://d3nwyuy0nl342s.cloudfront.net%2Fimages%2Fgravatars%2Fgravatar-140.png" alt="" width="20" height="20"  /></a>
        <a href="https://github.com/mikeknoop" class="name">mikeknoop</a>

        
        
      </div>
      <ul class="usernav">
        <li><a href="https://github.com/">Dashboard</a></li>
        <li>
          
          <a href="https://github.com/inbox">Inbox</a>
          <a href="https://github.com/inbox" class="unread_count ">0</a>
        </li>
        <li><a href="https://github.com/account">Account Settings</a></li>
                <li><a href="/logout">Log Out</a></li>
      </ul>
    </div><!-- /.userbox -->
  


        
        <div class="topsearch">
  
    <form action="/search" id="top_search_form" method="get">
      <a href="/search" class="advanced-search tooltipped downwards" title="Advanced Search">Advanced Search</a>
      <input type="search" class="search my_repos_autocompleter" name="q" results="5" placeholder="Search&hellip;" /> <input type="submit" value="Search" class="button" />
      <input type="hidden" name="type" value="Everything" />
      <input type="hidden" name="repo" value="" />
      <input type="hidden" name="langOverride" value="" />
      <input type="hidden" name="start_value" value="1" />
    </form>
    <ul class="nav">
      <li><a href="/explore">Explore GitHub</a></li>
      <li><a href="https://gist.github.com">Gist</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="http://help.github.com">Help</a></li>
    </ul>
  
</div>

      </div>

      
      
        
    <div class="site">
      <div class="pagehead repohead vis-public    instapaper_ignore readability-menu">

      

      <div class="title-actions-bar">
        <h1>
          <a href="/facebook">facebook</a> / <strong><a href="/facebook/php-sdk">php-sdk</a></strong>
          
          
        </h1>

        
    <ul class="actions">
      

      
        <li class="for-owner" style="display:none"><a href="/facebook/php-sdk/admin" class="minibutton btn-admin "><span><span class="icon"></span>Admin</span></a></li>
        <li>
          <a href="/facebook/php-sdk/toggle_watch" class="minibutton btn-watch " id="watch_button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'dedb9f93a722ba58c4e7a479e2d395b37ae4f3f4'); f.appendChild(s);f.submit();return false;" style="display:none"><span><span class="icon"></span>Watch</span></a>
          <a href="/facebook/php-sdk/toggle_watch" class="minibutton btn-watch " id="unwatch_button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'dedb9f93a722ba58c4e7a479e2d395b37ae4f3f4'); f.appendChild(s);f.submit();return false;" style="display:none"><span><span class="icon"></span>Unwatch</span></a>
        </li>
        
          
            <li class="for-notforked" style="display:none"><a href="/facebook/php-sdk/fork" class="minibutton btn-fork " id="fork_button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'dedb9f93a722ba58c4e7a479e2d395b37ae4f3f4'); f.appendChild(s);f.submit();return false;"><span><span class="icon"></span>Fork</span></a></li>
            <li class="for-hasfork" style="display:none"><a href="#" class="minibutton btn-fork " id="your_fork_button"><span><span class="icon"></span>Your Fork</span></a></li>
          

          <li id='pull_request_item' class='nspr' style='display:none'><a href="/facebook/php-sdk/pull/new/master" class="minibutton btn-pull-request "><span><span class="icon"></span>Pull Request</span></a></li>
        
      
      
      <li class="repostats">
        <ul class="repo-stats">
          <li class="watchers"><a href="/facebook/php-sdk/watchers" title="Watchers" class="tooltipped downwards">2,060</a></li>
          <li class="forks"><a href="/facebook/php-sdk/network" title="Forks" class="tooltipped downwards">338</a></li>
        </ul>
      </li>
    </ul>

      </div>

        
  <ul class="tabs">
    <li><a href="/facebook/php-sdk" class="selected" highlight="repo_source">Source</a></li>
    <li><a href="/facebook/php-sdk/commits/master" highlight="repo_commits">Commits</a></li>
    <li><a href="/facebook/php-sdk/network" highlight="repo_network">Network</a></li>
    <li><a href="/facebook/php-sdk/pulls" highlight="repo_pulls">Pull Requests (1)</a></li>

    

    
      
      <li><a href="/facebook/php-sdk/issues" highlight="issues">Issues (6)</a></li>
    

                <li><a href="/facebook/php-sdk/wiki" highlight="repo_wiki">Wiki (2)</a></li>
        
    <li><a href="/facebook/php-sdk/graphs" highlight="repo_graphs">Graphs</a></li>

    <li class="contextswitch nochoices">
      <span class="toggle leftwards" >
        <em>Branch:</em>
        <code>master</code>
      </span>
    </li>
  </ul>

  <div style="display:none" id="pl-description"><p><em class="placeholder">click here to add a description</em></p></div>
  <div style="display:none" id="pl-homepage"><p><em class="placeholder">click here to add a homepage</em></p></div>

  <div class="subnav-bar">
  
  <ul>
    <li>
      
      <a href="/facebook/php-sdk/branches" class="dropdown">Switch Branches (1)</a>
      <ul>
        
          
            <li><strong>master &#x2713;</strong></li>
            
      </ul>
    </li>
    <li>
      <a href="#" class="dropdown ">Switch Tags (11)</a>
              <ul>
                      
              <li><a href="/facebook/php-sdk/blob/v3.0.0/src/base_facebook.php" data-name="v3.0.0">v3.0.0</a></li>
            
                      
              <li><a href="/facebook/php-sdk/blob/v2.1.2/src/base_facebook.php" data-name="v2.1.2">v2.1.2</a></li>
            
                      
              <li><a href="/facebook/php-sdk/blob/v2.1.1/src/base_facebook.php" data-name="v2.1.1">v2.1.1</a></li>
            
                      
              <li><a href="/facebook/php-sdk/blob/v2.1.0/src/base_facebook.php" data-name="v2.1.0">v2.1.0</a></li>
            
                      
              <li><a href="/facebook/php-sdk/blob/v2.0.7/src/base_facebook.php" data-name="v2.0.7">v2.0.7</a></li>
            
                      
              <li><a href="/facebook/php-sdk/blob/v2.0.6/src/base_facebook.php" data-name="v2.0.6">v2.0.6</a></li>
            
                      
              <li><a href="/facebook/php-sdk/blob/v2.0.4/src/base_facebook.php" data-name="v2.0.4">v2.0.4</a></li>
            
                      
              <li><a href="/facebook/php-sdk/blob/v2.0.3/src/base_facebook.php" data-name="v2.0.3">v2.0.3</a></li>
            
                      
              <li><a href="/facebook/php-sdk/blob/v2.0.2/src/base_facebook.php" data-name="v2.0.2">v2.0.2</a></li>
            
                      
              <li><a href="/facebook/php-sdk/blob/v2.0.1/src/base_facebook.php" data-name="v2.0.1">v2.0.1</a></li>
            
                      
              <li><a href="/facebook/php-sdk/blob/v2.0.0/src/base_facebook.php" data-name="v2.0.0">v2.0.0</a></li>
            
                  </ul>
      
    </li>
    <li>
    
    <a href="/facebook/php-sdk/branches" class="manage">Branch List</a>
    
    </li>
  </ul>
</div>

  
  
  
  
  
  



        
    <div id="repo_details" class="metabox clearfix">
      <div id="repo_details_loader" class="metabox-loader" style="display:none">Sending Request&hellip;</div>

        <a href="/facebook/php-sdk/downloads" class="download-source" id="download_button" title="Download source, tagged packages and binaries."><span class="icon"></span>Downloads</a>

      <div id="repository_desc_wrapper">
      <div id="repository_description" rel="repository_description_edit">
        
          <p>PHP SDK for the Facebook API
            <span id="read_more" style="display:none">&mdash; <a href="#readme">Read more</a></span>
          </p>
        
      </div>

      <div id="repository_description_edit" style="display:none;" class="inline-edit">
        <form action="/facebook/php-sdk/admin/update" method="post"><div style="margin:0;padding:0"><input name="authenticity_token" type="hidden" value="dedb9f93a722ba58c4e7a479e2d395b37ae4f3f4" /></div>
          <input type="hidden" name="field" value="repository_description">
          <input type="text" class="textfield" name="value" value="PHP SDK for the Facebook API">
          <div class="form-actions">
            <button class="minibutton"><span>Save</span></button> &nbsp; <a href="#" class="cancel">Cancel</a>
          </div>
        </form>
      </div>

      
      <div class="repository-homepage" id="repository_homepage" rel="repository_homepage_edit">
        <p><a href="http://" rel="nofollow"></a></p>
      </div>

      <div id="repository_homepage_edit" style="display:none;" class="inline-edit">
        <form action="/facebook/php-sdk/admin/update" method="post"><div style="margin:0;padding:0"><input name="authenticity_token" type="hidden" value="dedb9f93a722ba58c4e7a479e2d395b37ae4f3f4" /></div>
          <input type="hidden" name="field" value="repository_homepage">
          <input type="text" class="textfield" name="value" value="">
          <div class="form-actions">
            <button class="minibutton"><span>Save</span></button> &nbsp; <a href="#" class="cancel">Cancel</a>
          </div>
        </form>
      </div>
      </div>
      <div class="rule "></div>
      <div id="url_box" class="url-box">
  

  <ul class="clone-urls">
    
      
      <li id="http_clone_url"><a href="https://github.com/facebook/php-sdk.git" data-permissions="Read-Only">HTTP</a></li>
      <li id="public_clone_url"><a href="git://github.com/facebook/php-sdk.git" data-permissions="Read-Only">Git Read-Only</a></li>
    
    
  </ul>
  <input type="text" spellcheck="false" id="url_field" class="url-field" />
        <span style="display:none" id="url_box_clippy"></span>
      <span id="clippy_tooltip_url_box_clippy" class="clippy-tooltip tooltipped" title="copy to clipboard">
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
              width="14"
              height="14"
              class="clippy"
              id="clippy" >
      <param name="movie" value="https://d3nwyuy0nl342s.cloudfront.net/flash/clippy.swf?v5"/>
      <param name="allowScriptAccess" value="always" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param NAME="FlashVars" value="id=url_box_clippy&amp;copied=&amp;copyto=">
      <param name="bgcolor" value="#FFFFFF">
      <param name="wmode" value="opaque">
      <embed src="https://d3nwyuy0nl342s.cloudfront.net/flash/clippy.swf?v5"
             width="14"
             height="14"
             name="clippy"
             quality="high"
             allowScriptAccess="always"
             type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer"
             FlashVars="id=url_box_clippy&amp;copied=&amp;copyto="
             bgcolor="#FFFFFF"
             wmode="opaque"
      />
      </object>
      </span>

  <p id="url_description"><strong>Read+Write</strong> access</p>
</div>
    </div>

    <div class="frame frame-center tree-finder" style="display:none">
      <div class="breadcrumb">
        <b><a href="/facebook/php-sdk">php-sdk</a></b> /
        <input class="tree-finder-input" type="text" name="query" autocomplete="off" spellcheck="false">
      </div>

      
        <div class="octotip">
          <p>
            <a href="/facebook/php-sdk/dismiss-tree-finder-help" class="dismiss js-dismiss-tree-list-help" title="Hide this notice forever">Dismiss</a>
            <strong>Octotip:</strong> You've activated the <em>file finder</em> by pressing <span class="kbd">t</span>
            Start typing to filter the file list. Use <span class="kbd badmono">↑</span> and <span class="kbd badmono">↓</span> to navigate,
            <span class="kbd">enter</span> to view files.
          </p>
        </div>
      

      <table class="tree-browser" cellpadding="0" cellspacing="0">
        <tr class="js-header"><th>&nbsp;</th><th>name</th></tr>
        <tr class="js-no-results no-results" style="display: none">
          <th colspan="2">No matching files</th>
        </tr>
        <tbody class="js-results-list">
        </tbody>
      </table>
    </div>

    <div id="jump-to-line" style="display:none">
      <h2>Jump to Line</h2>
      <form>
        <input class="textfield" type="text">
        <div class="full-button">
          <button type="submit" class="classy">
            <span>Go</span>
          </button>
        </div>
      </form>
    </div>


        

      </div><!-- /.pagehead -->

      

  







<script type="text/javascript">
  GitHub.downloadRepo = '/facebook/php-sdk/archives/master'
  GitHub.revType = "master"

  GitHub.repoName = "php-sdk"
  GitHub.controllerName = "blob"
  GitHub.actionName     = "show"
  GitHub.currentAction  = "blob#show"

  
    GitHub.loggedIn = true
    GitHub.hasWriteAccess = false
    GitHub.hasAdminAccess = false
    GitHub.watchingRepo = false
    GitHub.ignoredRepo = false
    GitHub.hasForkOfRepo = ""
    GitHub.hasForked = false
  

  
</script>






<div class="flash-messages"></div>


  <div id="commit">
    <div class="group">
        
  <div class="envelope commit">
    <div class="human">
      
        <div class="message"><pre><a href="/facebook/php-sdk/commit/1bf0ec7068e4a8a65f33b2351ef2abb680d14586">Merge pull request <a href="https://github.com/facebook/php-sdk/issues/367">#367</a> from codler/patch-1</a> </pre></div>
      

      <div class="actor">
        <div class="gravatar">
          
          <img src="https://secure.gravatar.com/avatar/162ba763482bf53ed1d9a4589fad393f?s=140&d=https://d3nwyuy0nl342s.cloudfront.net%2Fimages%2Fgravatars%2Fgravatar-140.png" alt="" width="30" height="30"  />
        </div>
        <div class="name"><a href="/nshah">nshah</a> <span>(author)</span></div>
        <div class="date">
          <abbr class="relatize" title="2011-05-21 23:33:12">Sat May 21 23:33:12 -0700 2011</abbr>
        </div>
      </div>

      

    </div>
    <div class="machine">
      <span>c</span>ommit&nbsp;&nbsp;<a href="/facebook/php-sdk/commit/1bf0ec7068e4a8a65f33b2351ef2abb680d14586" hotkey="c">1bf0ec7068e4a8a65f33</a><br />
      <span>t</span>ree&nbsp;&nbsp;&nbsp;&nbsp;<a href="/facebook/php-sdk/tree/1bf0ec7068e4a8a65f33b2351ef2abb680d14586" hotkey="t">a81e39044fbd98b92153</a><br />
      
        <span>p</span>arent&nbsp;
        
        <a href="/facebook/php-sdk/tree/14659b06dd843a06818afb05c8602df006bd4ca9" hotkey="p">14659b06dd843a06818a</a>
      
        <span>p</span>arent&nbsp;
        
        <a href="/facebook/php-sdk/tree/882a261cd45349cd5c5bef7993fe98c3ddebcbcd" hotkey="p">882a261cd45349cd5c5b</a>
      

    </div>
  </div>

    </div>
  </div>



  <div id="slider">

  

    <div class="breadcrumb" data-path="src/base_facebook.php/">
      <b><a href="/facebook/php-sdk/tree/4155e398b80639f80a068024f0ad1a53f57f1924">php-sdk</a></b> / <a href="/facebook/php-sdk/tree/4155e398b80639f80a068024f0ad1a53f57f1924/src">src</a> / base_facebook.php       <span style="display:none" id="clippy_2356">src/base_facebook.php</span>
      
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
              width="110"
              height="14"
              class="clippy"
              id="clippy" >
      <param name="movie" value="https://d3nwyuy0nl342s.cloudfront.net/flash/clippy.swf?v5"/>
      <param name="allowScriptAccess" value="always" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param NAME="FlashVars" value="id=clippy_2356&amp;copied=copied!&amp;copyto=copy to clipboard">
      <param name="bgcolor" value="#FFFFFF">
      <param name="wmode" value="opaque">
      <embed src="https://d3nwyuy0nl342s.cloudfront.net/flash/clippy.swf?v5"
             width="110"
             height="14"
             name="clippy"
             quality="high"
             allowScriptAccess="always"
             type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer"
             FlashVars="id=clippy_2356&amp;copied=copied!&amp;copyto=copy to clipboard"
             bgcolor="#FFFFFF"
             wmode="opaque"
      />
      </object>
      

    </div>

    <div class="frames">
      <div class="frame frame-center" data-path="src/base_facebook.php/" data-canonical-url="/facebook/php-sdk/blob/4155e398b80639f80a068024f0ad1a53f57f1924/src/base_facebook.php">
        
          <ul class="big-actions">
            
            <li><a class="file-edit-link minibutton" href="/facebook/php-sdk/file-edit/__current_ref__/src/base_facebook.php"><span>Edit this file</span></a></li>
          </ul>
        

        <div id="files">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><img alt="Txt" height="16" src="https://d3nwyuy0nl342s.cloudfront.net/images/icons/txt.png" width="16" /></span>
                <span class="mode" title="File Mode">100644</span>
                
                  <span>1019 lines (922 sloc)</span>
                
                <span>30.454 kb</span>
              </div>
              <ul class="actions">
                <li><a href="/facebook/php-sdk/raw/master/src/base_facebook.php" id="raw-url">raw</a></li>
                
                  <li><a href="/facebook/php-sdk/blame/master/src/base_facebook.php">blame</a></li>
                
                <li><a href="/facebook/php-sdk/commits/master/src/base_facebook.php">history</a></li>
              </ul>
            </div>
            
  <div class="data type-php">
    
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>
<span id="L591" rel="#L591">591</span>
<span id="L592" rel="#L592">592</span>
<span id="L593" rel="#L593">593</span>
<span id="L594" rel="#L594">594</span>
<span id="L595" rel="#L595">595</span>
<span id="L596" rel="#L596">596</span>
<span id="L597" rel="#L597">597</span>
<span id="L598" rel="#L598">598</span>
<span id="L599" rel="#L599">599</span>
<span id="L600" rel="#L600">600</span>
<span id="L601" rel="#L601">601</span>
<span id="L602" rel="#L602">602</span>
<span id="L603" rel="#L603">603</span>
<span id="L604" rel="#L604">604</span>
<span id="L605" rel="#L605">605</span>
<span id="L606" rel="#L606">606</span>
<span id="L607" rel="#L607">607</span>
<span id="L608" rel="#L608">608</span>
<span id="L609" rel="#L609">609</span>
<span id="L610" rel="#L610">610</span>
<span id="L611" rel="#L611">611</span>
<span id="L612" rel="#L612">612</span>
<span id="L613" rel="#L613">613</span>
<span id="L614" rel="#L614">614</span>
<span id="L615" rel="#L615">615</span>
<span id="L616" rel="#L616">616</span>
<span id="L617" rel="#L617">617</span>
<span id="L618" rel="#L618">618</span>
<span id="L619" rel="#L619">619</span>
<span id="L620" rel="#L620">620</span>
<span id="L621" rel="#L621">621</span>
<span id="L622" rel="#L622">622</span>
<span id="L623" rel="#L623">623</span>
<span id="L624" rel="#L624">624</span>
<span id="L625" rel="#L625">625</span>
<span id="L626" rel="#L626">626</span>
<span id="L627" rel="#L627">627</span>
<span id="L628" rel="#L628">628</span>
<span id="L629" rel="#L629">629</span>
<span id="L630" rel="#L630">630</span>
<span id="L631" rel="#L631">631</span>
<span id="L632" rel="#L632">632</span>
<span id="L633" rel="#L633">633</span>
<span id="L634" rel="#L634">634</span>
<span id="L635" rel="#L635">635</span>
<span id="L636" rel="#L636">636</span>
<span id="L637" rel="#L637">637</span>
<span id="L638" rel="#L638">638</span>
<span id="L639" rel="#L639">639</span>
<span id="L640" rel="#L640">640</span>
<span id="L641" rel="#L641">641</span>
<span id="L642" rel="#L642">642</span>
<span id="L643" rel="#L643">643</span>
<span id="L644" rel="#L644">644</span>
<span id="L645" rel="#L645">645</span>
<span id="L646" rel="#L646">646</span>
<span id="L647" rel="#L647">647</span>
<span id="L648" rel="#L648">648</span>
<span id="L649" rel="#L649">649</span>
<span id="L650" rel="#L650">650</span>
<span id="L651" rel="#L651">651</span>
<span id="L652" rel="#L652">652</span>
<span id="L653" rel="#L653">653</span>
<span id="L654" rel="#L654">654</span>
<span id="L655" rel="#L655">655</span>
<span id="L656" rel="#L656">656</span>
<span id="L657" rel="#L657">657</span>
<span id="L658" rel="#L658">658</span>
<span id="L659" rel="#L659">659</span>
<span id="L660" rel="#L660">660</span>
<span id="L661" rel="#L661">661</span>
<span id="L662" rel="#L662">662</span>
<span id="L663" rel="#L663">663</span>
<span id="L664" rel="#L664">664</span>
<span id="L665" rel="#L665">665</span>
<span id="L666" rel="#L666">666</span>
<span id="L667" rel="#L667">667</span>
<span id="L668" rel="#L668">668</span>
<span id="L669" rel="#L669">669</span>
<span id="L670" rel="#L670">670</span>
<span id="L671" rel="#L671">671</span>
<span id="L672" rel="#L672">672</span>
<span id="L673" rel="#L673">673</span>
<span id="L674" rel="#L674">674</span>
<span id="L675" rel="#L675">675</span>
<span id="L676" rel="#L676">676</span>
<span id="L677" rel="#L677">677</span>
<span id="L678" rel="#L678">678</span>
<span id="L679" rel="#L679">679</span>
<span id="L680" rel="#L680">680</span>
<span id="L681" rel="#L681">681</span>
<span id="L682" rel="#L682">682</span>
<span id="L683" rel="#L683">683</span>
<span id="L684" rel="#L684">684</span>
<span id="L685" rel="#L685">685</span>
<span id="L686" rel="#L686">686</span>
<span id="L687" rel="#L687">687</span>
<span id="L688" rel="#L688">688</span>
<span id="L689" rel="#L689">689</span>
<span id="L690" rel="#L690">690</span>
<span id="L691" rel="#L691">691</span>
<span id="L692" rel="#L692">692</span>
<span id="L693" rel="#L693">693</span>
<span id="L694" rel="#L694">694</span>
<span id="L695" rel="#L695">695</span>
<span id="L696" rel="#L696">696</span>
<span id="L697" rel="#L697">697</span>
<span id="L698" rel="#L698">698</span>
<span id="L699" rel="#L699">699</span>
<span id="L700" rel="#L700">700</span>
<span id="L701" rel="#L701">701</span>
<span id="L702" rel="#L702">702</span>
<span id="L703" rel="#L703">703</span>
<span id="L704" rel="#L704">704</span>
<span id="L705" rel="#L705">705</span>
<span id="L706" rel="#L706">706</span>
<span id="L707" rel="#L707">707</span>
<span id="L708" rel="#L708">708</span>
<span id="L709" rel="#L709">709</span>
<span id="L710" rel="#L710">710</span>
<span id="L711" rel="#L711">711</span>
<span id="L712" rel="#L712">712</span>
<span id="L713" rel="#L713">713</span>
<span id="L714" rel="#L714">714</span>
<span id="L715" rel="#L715">715</span>
<span id="L716" rel="#L716">716</span>
<span id="L717" rel="#L717">717</span>
<span id="L718" rel="#L718">718</span>
<span id="L719" rel="#L719">719</span>
<span id="L720" rel="#L720">720</span>
<span id="L721" rel="#L721">721</span>
<span id="L722" rel="#L722">722</span>
<span id="L723" rel="#L723">723</span>
<span id="L724" rel="#L724">724</span>
<span id="L725" rel="#L725">725</span>
<span id="L726" rel="#L726">726</span>
<span id="L727" rel="#L727">727</span>
<span id="L728" rel="#L728">728</span>
<span id="L729" rel="#L729">729</span>
<span id="L730" rel="#L730">730</span>
<span id="L731" rel="#L731">731</span>
<span id="L732" rel="#L732">732</span>
<span id="L733" rel="#L733">733</span>
<span id="L734" rel="#L734">734</span>
<span id="L735" rel="#L735">735</span>
<span id="L736" rel="#L736">736</span>
<span id="L737" rel="#L737">737</span>
<span id="L738" rel="#L738">738</span>
<span id="L739" rel="#L739">739</span>
<span id="L740" rel="#L740">740</span>
<span id="L741" rel="#L741">741</span>
<span id="L742" rel="#L742">742</span>
<span id="L743" rel="#L743">743</span>
<span id="L744" rel="#L744">744</span>
<span id="L745" rel="#L745">745</span>
<span id="L746" rel="#L746">746</span>
<span id="L747" rel="#L747">747</span>
<span id="L748" rel="#L748">748</span>
<span id="L749" rel="#L749">749</span>
<span id="L750" rel="#L750">750</span>
<span id="L751" rel="#L751">751</span>
<span id="L752" rel="#L752">752</span>
<span id="L753" rel="#L753">753</span>
<span id="L754" rel="#L754">754</span>
<span id="L755" rel="#L755">755</span>
<span id="L756" rel="#L756">756</span>
<span id="L757" rel="#L757">757</span>
<span id="L758" rel="#L758">758</span>
<span id="L759" rel="#L759">759</span>
<span id="L760" rel="#L760">760</span>
<span id="L761" rel="#L761">761</span>
<span id="L762" rel="#L762">762</span>
<span id="L763" rel="#L763">763</span>
<span id="L764" rel="#L764">764</span>
<span id="L765" rel="#L765">765</span>
<span id="L766" rel="#L766">766</span>
<span id="L767" rel="#L767">767</span>
<span id="L768" rel="#L768">768</span>
<span id="L769" rel="#L769">769</span>
<span id="L770" rel="#L770">770</span>
<span id="L771" rel="#L771">771</span>
<span id="L772" rel="#L772">772</span>
<span id="L773" rel="#L773">773</span>
<span id="L774" rel="#L774">774</span>
<span id="L775" rel="#L775">775</span>
<span id="L776" rel="#L776">776</span>
<span id="L777" rel="#L777">777</span>
<span id="L778" rel="#L778">778</span>
<span id="L779" rel="#L779">779</span>
<span id="L780" rel="#L780">780</span>
<span id="L781" rel="#L781">781</span>
<span id="L782" rel="#L782">782</span>
<span id="L783" rel="#L783">783</span>
<span id="L784" rel="#L784">784</span>
<span id="L785" rel="#L785">785</span>
<span id="L786" rel="#L786">786</span>
<span id="L787" rel="#L787">787</span>
<span id="L788" rel="#L788">788</span>
<span id="L789" rel="#L789">789</span>
<span id="L790" rel="#L790">790</span>
<span id="L791" rel="#L791">791</span>
<span id="L792" rel="#L792">792</span>
<span id="L793" rel="#L793">793</span>
<span id="L794" rel="#L794">794</span>
<span id="L795" rel="#L795">795</span>
<span id="L796" rel="#L796">796</span>
<span id="L797" rel="#L797">797</span>
<span id="L798" rel="#L798">798</span>
<span id="L799" rel="#L799">799</span>
<span id="L800" rel="#L800">800</span>
<span id="L801" rel="#L801">801</span>
<span id="L802" rel="#L802">802</span>
<span id="L803" rel="#L803">803</span>
<span id="L804" rel="#L804">804</span>
<span id="L805" rel="#L805">805</span>
<span id="L806" rel="#L806">806</span>
<span id="L807" rel="#L807">807</span>
<span id="L808" rel="#L808">808</span>
<span id="L809" rel="#L809">809</span>
<span id="L810" rel="#L810">810</span>
<span id="L811" rel="#L811">811</span>
<span id="L812" rel="#L812">812</span>
<span id="L813" rel="#L813">813</span>
<span id="L814" rel="#L814">814</span>
<span id="L815" rel="#L815">815</span>
<span id="L816" rel="#L816">816</span>
<span id="L817" rel="#L817">817</span>
<span id="L818" rel="#L818">818</span>
<span id="L819" rel="#L819">819</span>
<span id="L820" rel="#L820">820</span>
<span id="L821" rel="#L821">821</span>
<span id="L822" rel="#L822">822</span>
<span id="L823" rel="#L823">823</span>
<span id="L824" rel="#L824">824</span>
<span id="L825" rel="#L825">825</span>
<span id="L826" rel="#L826">826</span>
<span id="L827" rel="#L827">827</span>
<span id="L828" rel="#L828">828</span>
<span id="L829" rel="#L829">829</span>
<span id="L830" rel="#L830">830</span>
<span id="L831" rel="#L831">831</span>
<span id="L832" rel="#L832">832</span>
<span id="L833" rel="#L833">833</span>
<span id="L834" rel="#L834">834</span>
<span id="L835" rel="#L835">835</span>
<span id="L836" rel="#L836">836</span>
<span id="L837" rel="#L837">837</span>
<span id="L838" rel="#L838">838</span>
<span id="L839" rel="#L839">839</span>
<span id="L840" rel="#L840">840</span>
<span id="L841" rel="#L841">841</span>
<span id="L842" rel="#L842">842</span>
<span id="L843" rel="#L843">843</span>
<span id="L844" rel="#L844">844</span>
<span id="L845" rel="#L845">845</span>
<span id="L846" rel="#L846">846</span>
<span id="L847" rel="#L847">847</span>
<span id="L848" rel="#L848">848</span>
<span id="L849" rel="#L849">849</span>
<span id="L850" rel="#L850">850</span>
<span id="L851" rel="#L851">851</span>
<span id="L852" rel="#L852">852</span>
<span id="L853" rel="#L853">853</span>
<span id="L854" rel="#L854">854</span>
<span id="L855" rel="#L855">855</span>
<span id="L856" rel="#L856">856</span>
<span id="L857" rel="#L857">857</span>
<span id="L858" rel="#L858">858</span>
<span id="L859" rel="#L859">859</span>
<span id="L860" rel="#L860">860</span>
<span id="L861" rel="#L861">861</span>
<span id="L862" rel="#L862">862</span>
<span id="L863" rel="#L863">863</span>
<span id="L864" rel="#L864">864</span>
<span id="L865" rel="#L865">865</span>
<span id="L866" rel="#L866">866</span>
<span id="L867" rel="#L867">867</span>
<span id="L868" rel="#L868">868</span>
<span id="L869" rel="#L869">869</span>
<span id="L870" rel="#L870">870</span>
<span id="L871" rel="#L871">871</span>
<span id="L872" rel="#L872">872</span>
<span id="L873" rel="#L873">873</span>
<span id="L874" rel="#L874">874</span>
<span id="L875" rel="#L875">875</span>
<span id="L876" rel="#L876">876</span>
<span id="L877" rel="#L877">877</span>
<span id="L878" rel="#L878">878</span>
<span id="L879" rel="#L879">879</span>
<span id="L880" rel="#L880">880</span>
<span id="L881" rel="#L881">881</span>
<span id="L882" rel="#L882">882</span>
<span id="L883" rel="#L883">883</span>
<span id="L884" rel="#L884">884</span>
<span id="L885" rel="#L885">885</span>
<span id="L886" rel="#L886">886</span>
<span id="L887" rel="#L887">887</span>
<span id="L888" rel="#L888">888</span>
<span id="L889" rel="#L889">889</span>
<span id="L890" rel="#L890">890</span>
<span id="L891" rel="#L891">891</span>
<span id="L892" rel="#L892">892</span>
<span id="L893" rel="#L893">893</span>
<span id="L894" rel="#L894">894</span>
<span id="L895" rel="#L895">895</span>
<span id="L896" rel="#L896">896</span>
<span id="L897" rel="#L897">897</span>
<span id="L898" rel="#L898">898</span>
<span id="L899" rel="#L899">899</span>
<span id="L900" rel="#L900">900</span>
<span id="L901" rel="#L901">901</span>
<span id="L902" rel="#L902">902</span>
<span id="L903" rel="#L903">903</span>
<span id="L904" rel="#L904">904</span>
<span id="L905" rel="#L905">905</span>
<span id="L906" rel="#L906">906</span>
<span id="L907" rel="#L907">907</span>
<span id="L908" rel="#L908">908</span>
<span id="L909" rel="#L909">909</span>
<span id="L910" rel="#L910">910</span>
<span id="L911" rel="#L911">911</span>
<span id="L912" rel="#L912">912</span>
<span id="L913" rel="#L913">913</span>
<span id="L914" rel="#L914">914</span>
<span id="L915" rel="#L915">915</span>
<span id="L916" rel="#L916">916</span>
<span id="L917" rel="#L917">917</span>
<span id="L918" rel="#L918">918</span>
<span id="L919" rel="#L919">919</span>
<span id="L920" rel="#L920">920</span>
<span id="L921" rel="#L921">921</span>
<span id="L922" rel="#L922">922</span>
<span id="L923" rel="#L923">923</span>
<span id="L924" rel="#L924">924</span>
<span id="L925" rel="#L925">925</span>
<span id="L926" rel="#L926">926</span>
<span id="L927" rel="#L927">927</span>
<span id="L928" rel="#L928">928</span>
<span id="L929" rel="#L929">929</span>
<span id="L930" rel="#L930">930</span>
<span id="L931" rel="#L931">931</span>
<span id="L932" rel="#L932">932</span>
<span id="L933" rel="#L933">933</span>
<span id="L934" rel="#L934">934</span>
<span id="L935" rel="#L935">935</span>
<span id="L936" rel="#L936">936</span>
<span id="L937" rel="#L937">937</span>
<span id="L938" rel="#L938">938</span>
<span id="L939" rel="#L939">939</span>
<span id="L940" rel="#L940">940</span>
<span id="L941" rel="#L941">941</span>
<span id="L942" rel="#L942">942</span>
<span id="L943" rel="#L943">943</span>
<span id="L944" rel="#L944">944</span>
<span id="L945" rel="#L945">945</span>
<span id="L946" rel="#L946">946</span>
<span id="L947" rel="#L947">947</span>
<span id="L948" rel="#L948">948</span>
<span id="L949" rel="#L949">949</span>
<span id="L950" rel="#L950">950</span>
<span id="L951" rel="#L951">951</span>
<span id="L952" rel="#L952">952</span>
<span id="L953" rel="#L953">953</span>
<span id="L954" rel="#L954">954</span>
<span id="L955" rel="#L955">955</span>
<span id="L956" rel="#L956">956</span>
<span id="L957" rel="#L957">957</span>
<span id="L958" rel="#L958">958</span>
<span id="L959" rel="#L959">959</span>
<span id="L960" rel="#L960">960</span>
<span id="L961" rel="#L961">961</span>
<span id="L962" rel="#L962">962</span>
<span id="L963" rel="#L963">963</span>
<span id="L964" rel="#L964">964</span>
<span id="L965" rel="#L965">965</span>
<span id="L966" rel="#L966">966</span>
<span id="L967" rel="#L967">967</span>
<span id="L968" rel="#L968">968</span>
<span id="L969" rel="#L969">969</span>
<span id="L970" rel="#L970">970</span>
<span id="L971" rel="#L971">971</span>
<span id="L972" rel="#L972">972</span>
<span id="L973" rel="#L973">973</span>
<span id="L974" rel="#L974">974</span>
<span id="L975" rel="#L975">975</span>
<span id="L976" rel="#L976">976</span>
<span id="L977" rel="#L977">977</span>
<span id="L978" rel="#L978">978</span>
<span id="L979" rel="#L979">979</span>
<span id="L980" rel="#L980">980</span>
<span id="L981" rel="#L981">981</span>
<span id="L982" rel="#L982">982</span>
<span id="L983" rel="#L983">983</span>
<span id="L984" rel="#L984">984</span>
<span id="L985" rel="#L985">985</span>
<span id="L986" rel="#L986">986</span>
<span id="L987" rel="#L987">987</span>
<span id="L988" rel="#L988">988</span>
<span id="L989" rel="#L989">989</span>
<span id="L990" rel="#L990">990</span>
<span id="L991" rel="#L991">991</span>
<span id="L992" rel="#L992">992</span>
<span id="L993" rel="#L993">993</span>
<span id="L994" rel="#L994">994</span>
<span id="L995" rel="#L995">995</span>
<span id="L996" rel="#L996">996</span>
<span id="L997" rel="#L997">997</span>
<span id="L998" rel="#L998">998</span>
<span id="L999" rel="#L999">999</span>
<span id="L1000" rel="#L1000">1000</span>
<span id="L1001" rel="#L1001">1001</span>
<span id="L1002" rel="#L1002">1002</span>
<span id="L1003" rel="#L1003">1003</span>
<span id="L1004" rel="#L1004">1004</span>
<span id="L1005" rel="#L1005">1005</span>
<span id="L1006" rel="#L1006">1006</span>
<span id="L1007" rel="#L1007">1007</span>
<span id="L1008" rel="#L1008">1008</span>
<span id="L1009" rel="#L1009">1009</span>
<span id="L1010" rel="#L1010">1010</span>
<span id="L1011" rel="#L1011">1011</span>
<span id="L1012" rel="#L1012">1012</span>
<span id="L1013" rel="#L1013">1013</span>
<span id="L1014" rel="#L1014">1014</span>
<span id="L1015" rel="#L1015">1015</span>
<span id="L1016" rel="#L1016">1016</span>
<span id="L1017" rel="#L1017">1017</span>
<span id="L1018" rel="#L1018">1018</span>
<span id="L1019" rel="#L1019">1019</span>
</pre>
          </td>
          <td width="100%">
            
              
                <div class="highlight"><pre><div class='line' id='LC1'><span class="cp">&lt;?php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * Copyright 2011 Facebook, Inc.</span></div><div class='line' id='LC4'><span class="sd"> *</span></div><div class='line' id='LC5'><span class="sd"> * Licensed under the Apache License, Version 2.0 (the &quot;License&quot;); you may</span></div><div class='line' id='LC6'><span class="sd"> * not use this file except in compliance with the License. You may obtain</span></div><div class='line' id='LC7'><span class="sd"> * a copy of the License at</span></div><div class='line' id='LC8'><span class="sd"> *</span></div><div class='line' id='LC9'><span class="sd"> *     http://www.apache.org/licenses/LICENSE-2.0</span></div><div class='line' id='LC10'><span class="sd"> *</span></div><div class='line' id='LC11'><span class="sd"> * Unless required by applicable law or agreed to in writing, software</span></div><div class='line' id='LC12'><span class="sd"> * distributed under the License is distributed on an &quot;AS IS&quot; BASIS, WITHOUT</span></div><div class='line' id='LC13'><span class="sd"> * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the</span></div><div class='line' id='LC14'><span class="sd"> * License for the specific language governing permissions and limitations</span></div><div class='line' id='LC15'><span class="sd"> * under the License.</span></div><div class='line' id='LC16'><span class="sd"> */</span></div><div class='line' id='LC17'><br/></div><div class='line' id='LC18'><span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;curl_init&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC19'>&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s1">&#39;Facebook needs the CURL PHP extension.&#39;</span><span class="p">);</span></div><div class='line' id='LC20'><span class="p">}</span></div><div class='line' id='LC21'><span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;json_decode&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC22'>&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s1">&#39;Facebook needs the JSON PHP extension.&#39;</span><span class="p">);</span></div><div class='line' id='LC23'><span class="p">}</span></div><div class='line' id='LC24'><br/></div><div class='line' id='LC25'><span class="sd">/**</span></div><div class='line' id='LC26'><span class="sd"> * Thrown when an API call returns an exception.</span></div><div class='line' id='LC27'><span class="sd"> *</span></div><div class='line' id='LC28'><span class="sd"> * @author Naitik Shah &lt;naitik@facebook.com&gt;</span></div><div class='line' id='LC29'><span class="sd"> */</span></div><div class='line' id='LC30'><span class="k">class</span> <span class="nc">FacebookApiException</span> <span class="k">extends</span> <span class="nx">Exception</span></div><div class='line' id='LC31'><span class="p">{</span></div><div class='line' id='LC32'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC33'><span class="sd">   * The result from the API server that represents the exception information.</span></div><div class='line' id='LC34'><span class="sd">   */</span></div><div class='line' id='LC35'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC36'><br/></div><div class='line' id='LC37'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC38'><span class="sd">   * Make a new API Exception with the given result.</span></div><div class='line' id='LC39'><span class="sd">   *</span></div><div class='line' id='LC40'><span class="sd">   * @param Array $result the result from the API server</span></div><div class='line' id='LC41'><span class="sd">   */</span></div><div class='line' id='LC42'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$result</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC43'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result</span> <span class="o">=</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC44'><br/></div><div class='line' id='LC45'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error_code&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error_code&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="m">0</span><span class="p">;</span></div><div class='line' id='LC46'><br/></div><div class='line' id='LC47'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error_description&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC48'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// OAuth 2.0 Draft 10 style</span></div><div class='line' id='LC49'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg</span> <span class="o">=</span> <span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error_description&#39;</span><span class="p">];</span></div><div class='line' id='LC50'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span> <span class="nb">is_array</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC51'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// OAuth 2.0 Draft 00 style</span></div><div class='line' id='LC52'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg</span> <span class="o">=</span> <span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">][</span><span class="s1">&#39;message&#39;</span><span class="p">];</span></div><div class='line' id='LC53'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error_msg&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC54'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Rest server style</span></div><div class='line' id='LC55'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg</span> <span class="o">=</span> <span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error_msg&#39;</span><span class="p">];</span></div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg</span> <span class="o">=</span> <span class="s1">&#39;Unknown Error. Check getResult()&#39;</span><span class="p">;</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC59'><br/></div><div class='line' id='LC60'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">parent</span><span class="o">::</span><span class="na">__construct</span><span class="p">(</span><span class="nv">$msg</span><span class="p">,</span> <span class="nv">$code</span><span class="p">);</span></div><div class='line' id='LC61'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC62'><br/></div><div class='line' id='LC63'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC64'><span class="sd">   * Return the associated result object returned by the API server.</span></div><div class='line' id='LC65'><span class="sd">   *</span></div><div class='line' id='LC66'><span class="sd">   * @returns Array the result from the API server</span></div><div class='line' id='LC67'><span class="sd">   */</span></div><div class='line' id='LC68'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getResult</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result</span><span class="p">;</span></div><div class='line' id='LC70'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC71'><br/></div><div class='line' id='LC72'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC73'><span class="sd">   * Returns the associated type for the error. This will default to</span></div><div class='line' id='LC74'><span class="sd">   * &#39;Exception&#39; when a type is not available.</span></div><div class='line' id='LC75'><span class="sd">   *</span></div><div class='line' id='LC76'><span class="sd">   * @return String</span></div><div class='line' id='LC77'><span class="sd">   */</span></div><div class='line' id='LC78'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getType</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC79'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC80'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">];</span></div><div class='line' id='LC81'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">is_string</span><span class="p">(</span><span class="nv">$error</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC82'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// OAuth 2.0 Draft 10 style</span></div><div class='line' id='LC83'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$error</span><span class="p">;</span></div><div class='line' id='LC84'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$error</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC85'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// OAuth 2.0 Draft 00 style</span></div><div class='line' id='LC86'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$error</span><span class="p">[</span><span class="s1">&#39;type&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC87'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$error</span><span class="p">[</span><span class="s1">&#39;type&#39;</span><span class="p">];</span></div><div class='line' id='LC88'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC89'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC90'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC91'><br/></div><div class='line' id='LC92'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;Exception&#39;</span><span class="p">;</span></div><div class='line' id='LC93'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC94'><br/></div><div class='line' id='LC95'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC96'><span class="sd">   * To make debugging easier.</span></div><div class='line' id='LC97'><span class="sd">   *</span></div><div class='line' id='LC98'><span class="sd">   * @returns String the string representation of the error</span></div><div class='line' id='LC99'><span class="sd">   */</span></div><div class='line' id='LC100'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__toString</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC101'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$str</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getType</span><span class="p">()</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span><span class="p">;</span></div><div class='line' id='LC102'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">code</span> <span class="o">!=</span> <span class="m">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$str</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">code</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span><span class="p">;</span></div><div class='line' id='LC104'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC105'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$str</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">message</span><span class="p">;</span></div><div class='line' id='LC106'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC107'><span class="p">}</span></div><div class='line' id='LC108'><br/></div><div class='line' id='LC109'><span class="sd">/**</span></div><div class='line' id='LC110'><span class="sd"> * Provides access to the Facebook Platform.  This class provides</span></div><div class='line' id='LC111'><span class="sd"> * a majority of the functionality needed, but the class is abstract</span></div><div class='line' id='LC112'><span class="sd"> * because it is designed to be subclassed.  The subclass must</span></div><div class='line' id='LC113'><span class="sd"> * implement the three abstract methods listed at the bottom of</span></div><div class='line' id='LC114'><span class="sd"> * the file.</span></div><div class='line' id='LC115'><span class="sd"> *</span></div><div class='line' id='LC116'><span class="sd"> * @author Naitik Shah &lt;naitik@facebook.com&gt;</span></div><div class='line' id='LC117'><span class="sd"> */</span></div><div class='line' id='LC118'><span class="k">abstract</span> <span class="k">class</span> <span class="nc">BaseFacebook</span></div><div class='line' id='LC119'><span class="p">{</span></div><div class='line' id='LC120'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC121'><span class="sd">   * Version.</span></div><div class='line' id='LC122'><span class="sd">   */</span></div><div class='line' id='LC123'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">VERSION</span> <span class="o">=</span> <span class="s1">&#39;3.0.0&#39;</span><span class="p">;</span></div><div class='line' id='LC124'><br/></div><div class='line' id='LC125'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC126'><span class="sd">   * Default options for curl.</span></div><div class='line' id='LC127'><span class="sd">   */</span></div><div class='line' id='LC128'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="nv">$CURL_OPTS</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC129'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">CURLOPT_CONNECTTIMEOUT</span> <span class="o">=&gt;</span> <span class="m">10</span><span class="p">,</span></div><div class='line' id='LC130'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">CURLOPT_RETURNTRANSFER</span> <span class="o">=&gt;</span> <span class="k">true</span><span class="p">,</span></div><div class='line' id='LC131'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">CURLOPT_TIMEOUT</span>        <span class="o">=&gt;</span> <span class="m">60</span><span class="p">,</span></div><div class='line' id='LC132'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">CURLOPT_USERAGENT</span>      <span class="o">=&gt;</span> <span class="s1">&#39;facebook-php-3.0&#39;</span><span class="p">,</span></div><div class='line' id='LC133'>&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC134'><br/></div><div class='line' id='LC135'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC136'><span class="sd">   * List of query parameters that get automatically dropped when rebuilding</span></div><div class='line' id='LC137'><span class="sd">   * the current URL.</span></div><div class='line' id='LC138'><span class="sd">   */</span></div><div class='line' id='LC139'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">static</span> <span class="nv">$DROP_QUERY_PARAMS</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;code&#39;</span><span class="p">,</span></div><div class='line' id='LC141'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;state&#39;</span><span class="p">,</span></div><div class='line' id='LC142'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;signed_request&#39;</span><span class="p">,</span></div><div class='line' id='LC143'>&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC144'><br/></div><div class='line' id='LC145'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC146'><span class="sd">   * Maps aliases to Facebook domains.</span></div><div class='line' id='LC147'><span class="sd">   */</span></div><div class='line' id='LC148'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="nv">$DOMAIN_MAP</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC149'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;api&#39;</span>       <span class="o">=&gt;</span> <span class="s1">&#39;https://api.facebook.com/&#39;</span><span class="p">,</span></div><div class='line' id='LC150'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;api_video&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;https://api-video.facebook.com/&#39;</span><span class="p">,</span></div><div class='line' id='LC151'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;api_read&#39;</span>  <span class="o">=&gt;</span> <span class="s1">&#39;https://api-read.facebook.com/&#39;</span><span class="p">,</span></div><div class='line' id='LC152'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;graph&#39;</span>     <span class="o">=&gt;</span> <span class="s1">&#39;https://graph.facebook.com/&#39;</span><span class="p">,</span></div><div class='line' id='LC153'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;www&#39;</span>       <span class="o">=&gt;</span> <span class="s1">&#39;https://www.facebook.com/&#39;</span><span class="p">,</span></div><div class='line' id='LC154'>&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC155'><br/></div><div class='line' id='LC156'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC157'><span class="sd">   * The Application ID.</span></div><div class='line' id='LC158'><span class="sd">   */</span></div><div class='line' id='LC159'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$appId</span><span class="p">;</span></div><div class='line' id='LC160'><br/></div><div class='line' id='LC161'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC162'><span class="sd">   * The Application API Secret.</span></div><div class='line' id='LC163'><span class="sd">   */</span></div><div class='line' id='LC164'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$apiSecret</span><span class="p">;</span></div><div class='line' id='LC165'><br/></div><div class='line' id='LC166'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC167'><span class="sd">   * The ID of the Facebook user, or 0 if the user is logged out.</span></div><div class='line' id='LC168'><span class="sd">   */</span></div><div class='line' id='LC169'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$user</span><span class="p">;</span></div><div class='line' id='LC170'><br/></div><div class='line' id='LC171'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC172'><span class="sd">   * The data from the signed_request token.</span></div><div class='line' id='LC173'><span class="sd">   */</span></div><div class='line' id='LC174'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$signedRequest</span><span class="p">;</span></div><div class='line' id='LC175'><br/></div><div class='line' id='LC176'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC177'><span class="sd">   * A CSRF state variable to assist in the defense against</span></div><div class='line' id='LC178'><span class="sd">   * CSRF attacks.</span></div><div class='line' id='LC179'><span class="sd">   */</span></div><div class='line' id='LC180'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$state</span><span class="p">;</span></div><div class='line' id='LC181'><br/></div><div class='line' id='LC182'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC183'><span class="sd">   * The OAuth access token received in exchange for a valid authorization</span></div><div class='line' id='LC184'><span class="sd">   * code.  null means the access token has yet to be determined.</span></div><div class='line' id='LC185'><span class="sd">   */</span></div><div class='line' id='LC186'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$accessToken</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC187'><br/></div><div class='line' id='LC188'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC189'><span class="sd">   * Indicates if the CURL based @ syntax for file uploads is enabled.</span></div><div class='line' id='LC190'><span class="sd">   */</span></div><div class='line' id='LC191'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$fileUploadSupport</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC192'><br/></div><div class='line' id='LC193'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC194'><span class="sd">   * Initialize a Facebook Application.</span></div><div class='line' id='LC195'><span class="sd">   *</span></div><div class='line' id='LC196'><span class="sd">   * The configuration:</span></div><div class='line' id='LC197'><span class="sd">   * - appId: the application ID</span></div><div class='line' id='LC198'><span class="sd">   * - secret: the application secret</span></div><div class='line' id='LC199'><span class="sd">   * - fileUpload: (optional) boolean indicating if file uploads are enabled</span></div><div class='line' id='LC200'><span class="sd">   *</span></div><div class='line' id='LC201'><span class="sd">   * @param Array $config the application configuration</span></div><div class='line' id='LC202'><span class="sd">   */</span></div><div class='line' id='LC203'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$config</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC204'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setAppId</span><span class="p">(</span><span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;appId&#39;</span><span class="p">]);</span></div><div class='line' id='LC205'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setApiSecret</span><span class="p">(</span><span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;secret&#39;</span><span class="p">]);</span></div><div class='line' id='LC206'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;fileUpload&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC207'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setFileUploadSupport</span><span class="p">(</span><span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;fileUpload&#39;</span><span class="p">]);</span></div><div class='line' id='LC208'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC209'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCSRFTokenCookieName</span><span class="p">()]))</span> <span class="p">{</span></div><div class='line' id='LC210'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">state</span> <span class="o">=</span> <span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCSRFTokenCookieName</span><span class="p">()];</span></div><div class='line' id='LC211'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC212'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC213'><br/></div><div class='line' id='LC214'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC215'><span class="sd">   * Set the Application ID.</span></div><div class='line' id='LC216'><span class="sd">   *</span></div><div class='line' id='LC217'><span class="sd">   * @param String $appId the Application ID</span></div><div class='line' id='LC218'><span class="sd">   */</span></div><div class='line' id='LC219'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setAppId</span><span class="p">(</span><span class="nv">$appId</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC220'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appId</span> <span class="o">=</span> <span class="nv">$appId</span><span class="p">;</span></div><div class='line' id='LC221'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></div><div class='line' id='LC222'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC223'><br/></div><div class='line' id='LC224'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC225'><span class="sd">   * Get the Application ID.</span></div><div class='line' id='LC226'><span class="sd">   *</span></div><div class='line' id='LC227'><span class="sd">   * @return String the Application ID</span></div><div class='line' id='LC228'><span class="sd">   */</span></div><div class='line' id='LC229'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getAppId</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC230'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appId</span><span class="p">;</span></div><div class='line' id='LC231'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC232'><br/></div><div class='line' id='LC233'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC234'><span class="sd">   * Set the API Secret.</span></div><div class='line' id='LC235'><span class="sd">   *</span></div><div class='line' id='LC236'><span class="sd">   * @param String $appId the API Secret</span></div><div class='line' id='LC237'><span class="sd">   */</span></div><div class='line' id='LC238'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setApiSecret</span><span class="p">(</span><span class="nv">$apiSecret</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC239'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">apiSecret</span> <span class="o">=</span> <span class="nv">$apiSecret</span><span class="p">;</span></div><div class='line' id='LC240'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></div><div class='line' id='LC241'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC242'><br/></div><div class='line' id='LC243'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC244'><span class="sd">   * Get the API Secret.</span></div><div class='line' id='LC245'><span class="sd">   *</span></div><div class='line' id='LC246'><span class="sd">   * @return String the API Secret</span></div><div class='line' id='LC247'><span class="sd">   */</span></div><div class='line' id='LC248'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getApiSecret</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC249'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">apiSecret</span><span class="p">;</span></div><div class='line' id='LC250'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC251'><br/></div><div class='line' id='LC252'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC253'><span class="sd">   * Set the file upload support status.</span></div><div class='line' id='LC254'><span class="sd">   *</span></div><div class='line' id='LC255'><span class="sd">   * @param Boolean the file upload support status.</span></div><div class='line' id='LC256'><span class="sd">   */</span></div><div class='line' id='LC257'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setFileUploadSupport</span><span class="p">(</span><span class="nv">$fileUploadSupport</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC258'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">fileUploadSupport</span> <span class="o">=</span> <span class="nv">$fileUploadSupport</span><span class="p">;</span></div><div class='line' id='LC259'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></div><div class='line' id='LC260'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC261'><br/></div><div class='line' id='LC262'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC263'><span class="sd">   * Get the file upload support status.</span></div><div class='line' id='LC264'><span class="sd">   *</span></div><div class='line' id='LC265'><span class="sd">   * @return Boolean true if and only if the server supports</span></div><div class='line' id='LC266'><span class="sd">   * file upload.</span></div><div class='line' id='LC267'><span class="sd">   */</span></div><div class='line' id='LC268'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">useFileUploadSupport</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC269'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">fileUploadSupport</span><span class="p">;</span></div><div class='line' id='LC270'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC271'><br/></div><div class='line' id='LC272'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC273'><span class="sd">   * Sets the access token for api calls.  Use this if you get</span></div><div class='line' id='LC274'><span class="sd">   * your access token by other means and just want the SDK</span></div><div class='line' id='LC275'><span class="sd">   * to use it.</span></div><div class='line' id='LC276'><span class="sd">   *</span></div><div class='line' id='LC277'><span class="sd">   * @param String $access_token an access token.</span></div><div class='line' id='LC278'><span class="sd">   */</span></div><div class='line' id='LC279'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setAccessToken</span><span class="p">(</span><span class="nv">$access_token</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC280'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">accessToken</span> <span class="o">=</span> <span class="nv">$access_token</span><span class="p">;</span></div><div class='line' id='LC281'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></div><div class='line' id='LC282'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC283'><br/></div><div class='line' id='LC284'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC285'><span class="sd">   * Determines the access token that should be used for API calls.</span></div><div class='line' id='LC286'><span class="sd">   * The first time this is called, $this-&gt;accessToken is set equal</span></div><div class='line' id='LC287'><span class="sd">   * to either a valid user access token, or it&#39;s set to the application</span></div><div class='line' id='LC288'><span class="sd">   * access token if a valid user access token wasn&#39;t available.  Subsequent</span></div><div class='line' id='LC289'><span class="sd">   * calls return whatever the first call returned.</span></div><div class='line' id='LC290'><span class="sd">   *</span></div><div class='line' id='LC291'><span class="sd">   * @return String the access token</span></div><div class='line' id='LC292'><span class="sd">   */</span></div><div class='line' id='LC293'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getAccessToken</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC294'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">accessToken</span> <span class="o">!==</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC295'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// we&#39;ve done this already and cached it.  Just return.</span></div><div class='line' id='LC296'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">accessToken</span><span class="p">;</span></div><div class='line' id='LC297'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC298'><br/></div><div class='line' id='LC299'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// first establish access token to be the application</span></div><div class='line' id='LC300'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// access token, in case we navigate to the /oauth/access_token</span></div><div class='line' id='LC301'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// endpoint, where SOME access token is required.</span></div><div class='line' id='LC302'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setAccessToken</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getApplicationAccessToken</span><span class="p">());</span></div><div class='line' id='LC303'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$user_access_token</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getUserAccessToken</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC304'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setAccessToken</span><span class="p">(</span><span class="nv">$user_access_token</span><span class="p">);</span></div><div class='line' id='LC305'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC306'><br/></div><div class='line' id='LC307'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">accessToken</span><span class="p">;</span></div><div class='line' id='LC308'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC309'><br/></div><div class='line' id='LC310'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC311'><span class="sd">   * Determines and returns the user access token, first using</span></div><div class='line' id='LC312'><span class="sd">   * the signed request if present, and then falling back on</span></div><div class='line' id='LC313'><span class="sd">   * the authorization code if present.  The intent is to</span></div><div class='line' id='LC314'><span class="sd">   * return a valid user access token, or false if one is determined</span></div><div class='line' id='LC315'><span class="sd">   * to not be available.</span></div><div class='line' id='LC316'><span class="sd">   *</span></div><div class='line' id='LC317'><span class="sd">   * @return String a valid user access token, or false if one</span></div><div class='line' id='LC318'><span class="sd">   *         could not be determined.</span></div><div class='line' id='LC319'><span class="sd">   */</span></div><div class='line' id='LC320'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getUserAccessToken</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC321'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// first, consider a signed request if it&#39;s supplied.</span></div><div class='line' id='LC322'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if there is a signed request, then it alone determines</span></div><div class='line' id='LC323'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// the access token.</span></div><div class='line' id='LC324'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$signed_request</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSignedRequest</span><span class="p">();</span></div><div class='line' id='LC325'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$signed_request</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC326'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="s1">&#39;oauth_token&#39;</span><span class="p">,</span> <span class="nv">$signed_request</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC327'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$access_token</span> <span class="o">=</span> <span class="nv">$signed_request</span><span class="p">[</span><span class="s1">&#39;oauth_token&#39;</span><span class="p">];</span></div><div class='line' id='LC328'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setPersistentData</span><span class="p">(</span><span class="s1">&#39;access_token&#39;</span><span class="p">,</span> <span class="nv">$access_token</span><span class="p">);</span></div><div class='line' id='LC329'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$access_token</span><span class="p">;</span></div><div class='line' id='LC330'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC331'><br/></div><div class='line' id='LC332'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// signed request states there&#39;s no access token, so anything</span></div><div class='line' id='LC333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// stored should be cleared.</span></div><div class='line' id='LC334'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearAllPersistentData</span><span class="p">();</span></div><div class='line' id='LC335'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span> <span class="c1">// respect the signed request&#39;s data, even</span></div><div class='line' id='LC336'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if there&#39;s an authorization code or something else</span></div><div class='line' id='LC337'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC338'><br/></div><div class='line' id='LC339'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCode</span><span class="p">();</span></div><div class='line' id='LC340'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$code</span> <span class="o">&amp;&amp;</span> <span class="nv">$code</span> <span class="o">!=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPersistentData</span><span class="p">(</span><span class="s1">&#39;code&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC341'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$access_token</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAccessTokenFromCode</span><span class="p">(</span><span class="nv">$code</span><span class="p">);</span></div><div class='line' id='LC342'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$access_token</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC343'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setPersistentData</span><span class="p">(</span><span class="s1">&#39;code&#39;</span><span class="p">,</span> <span class="nv">$code</span><span class="p">);</span></div><div class='line' id='LC344'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setPersistentData</span><span class="p">(</span><span class="s1">&#39;access_token&#39;</span><span class="p">,</span> <span class="nv">$access_token</span><span class="p">);</span></div><div class='line' id='LC345'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$access_token</span><span class="p">;</span></div><div class='line' id='LC346'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC347'><br/></div><div class='line' id='LC348'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// code was bogus, so everything based on it should be invalidated.</span></div><div class='line' id='LC349'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearAllPersistentData</span><span class="p">();</span></div><div class='line' id='LC350'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC351'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC352'><br/></div><div class='line' id='LC353'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// as a fallback, just return whatever is in the persistent</span></div><div class='line' id='LC354'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// store, knowing nothing explicit (signed request, authorization</span></div><div class='line' id='LC355'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// code, etc.) was present to shadow it (or we saw a code in $_REQUEST,</span></div><div class='line' id='LC356'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// but it&#39;s the same as what&#39;s in the persistent store)</span></div><div class='line' id='LC357'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPersistentData</span><span class="p">(</span><span class="s1">&#39;access_token&#39;</span><span class="p">);</span></div><div class='line' id='LC358'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC359'><br/></div><div class='line' id='LC360'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC361'><span class="sd">   * Get the data from a signed_request token.</span></div><div class='line' id='LC362'><span class="sd">   *</span></div><div class='line' id='LC363'><span class="sd">   * @return String the base domain</span></div><div class='line' id='LC364'><span class="sd">   */</span></div><div class='line' id='LC365'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getSignedRequest</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC366'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">signedRequest</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC367'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;signed_request&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC368'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">signedRequest</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parseSignedRequest</span><span class="p">(</span></div><div class='line' id='LC369'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;signed_request&#39;</span><span class="p">]);</span></div><div class='line' id='LC370'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC371'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC372'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">signedRequest</span><span class="p">;</span></div><div class='line' id='LC373'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC374'><br/></div><div class='line' id='LC375'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC376'><span class="sd">   * Get the UID of the connected user, or 0</span></div><div class='line' id='LC377'><span class="sd">   * if the Facebook user is not connected.</span></div><div class='line' id='LC378'><span class="sd">   *</span></div><div class='line' id='LC379'><span class="sd">   * @return String the UID if available.</span></div><div class='line' id='LC380'><span class="sd">   */</span></div><div class='line' id='LC381'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getUser</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC382'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">user</span> <span class="o">!==</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC383'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// we&#39;ve already determined this and cached the value.</span></div><div class='line' id='LC384'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">user</span><span class="p">;</span></div><div class='line' id='LC385'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC386'><br/></div><div class='line' id='LC387'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">user</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getUserFromAvailableData</span><span class="p">();</span></div><div class='line' id='LC388'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC389'><br/></div><div class='line' id='LC390'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC391'><span class="sd">   * Determines the connected user by first examining any signed</span></div><div class='line' id='LC392'><span class="sd">   * requests, then considering an authorization code, and then</span></div><div class='line' id='LC393'><span class="sd">   * falling back to any persistent store storing the user.</span></div><div class='line' id='LC394'><span class="sd">   *</span></div><div class='line' id='LC395'><span class="sd">   * @return Integer the id of the connected Facebook user, or 0</span></div><div class='line' id='LC396'><span class="sd">   * if no such user exists.</span></div><div class='line' id='LC397'><span class="sd">   */</span></div><div class='line' id='LC398'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getUserFromAvailableData</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC399'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if a signed request is supplied, then it solely determines</span></div><div class='line' id='LC400'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// who the user is.</span></div><div class='line' id='LC401'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$signed_request</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSignedRequest</span><span class="p">();</span></div><div class='line' id='LC402'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$signed_request</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC403'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">array_key_exists</span><span class="p">(</span><span class="s1">&#39;user_id&#39;</span><span class="p">,</span> <span class="nv">$signed_request</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC404'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span> <span class="o">=</span> <span class="nv">$signed_request</span><span class="p">[</span><span class="s1">&#39;user_id&#39;</span><span class="p">];</span></div><div class='line' id='LC405'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setPersistentData</span><span class="p">(</span><span class="s1">&#39;user_id&#39;</span><span class="p">,</span> <span class="nv">$signed_request</span><span class="p">[</span><span class="s1">&#39;user_id&#39;</span><span class="p">]);</span></div><div class='line' id='LC406'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$user</span><span class="p">;</span></div><div class='line' id='LC407'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC408'><br/></div><div class='line' id='LC409'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if the signed request didn&#39;t present a user id, then invalidate</span></div><div class='line' id='LC410'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// all entries in any persistent store.</span></div><div class='line' id='LC411'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearAllPersistentData</span><span class="p">();</span></div><div class='line' id='LC412'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="m">0</span><span class="p">;</span></div><div class='line' id='LC413'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC414'><br/></div><div class='line' id='LC415'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPersistentData</span><span class="p">(</span><span class="s1">&#39;user_id&#39;</span><span class="p">,</span> <span class="nv">$default</span> <span class="o">=</span> <span class="m">0</span><span class="p">);</span></div><div class='line' id='LC416'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$persisted_access_token</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPersistentData</span><span class="p">(</span><span class="s1">&#39;access_token&#39;</span><span class="p">);</span></div><div class='line' id='LC417'><br/></div><div class='line' id='LC418'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// use access_token to fetch user id if we have a user access_token, or if</span></div><div class='line' id='LC419'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// the cached access token has changed.</span></div><div class='line' id='LC420'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$access_token</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAccessToken</span><span class="p">();</span></div><div class='line' id='LC421'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$access_token</span> <span class="o">&amp;&amp;</span></div><div class='line' id='LC422'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$access_token</span> <span class="o">!=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getApplicationAccessToken</span><span class="p">()</span> <span class="o">&amp;&amp;</span></div><div class='line' id='LC423'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">!</span><span class="p">(</span><span class="nv">$user</span> <span class="o">&amp;&amp;</span> <span class="nv">$persisted_access_token</span> <span class="o">==</span> <span class="nv">$access_token</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC424'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getUserFromAccessToken</span><span class="p">();</span></div><div class='line' id='LC425'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$user</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC426'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setPersistentData</span><span class="p">(</span><span class="s1">&#39;user_id&#39;</span><span class="p">,</span> <span class="nv">$user</span><span class="p">);</span></div><div class='line' id='LC427'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC428'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearAllPersistentData</span><span class="p">();</span></div><div class='line' id='LC429'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC430'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC431'><br/></div><div class='line' id='LC432'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$user</span><span class="p">;</span></div><div class='line' id='LC433'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC434'><br/></div><div class='line' id='LC435'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC436'><span class="sd">   * Get a Login URL for use with redirects. By default, full page redirect is</span></div><div class='line' id='LC437'><span class="sd">   * assumed. If you are using the generated URL with a window.open() call in</span></div><div class='line' id='LC438'><span class="sd">   * JavaScript, you can pass in display=popup as part of the $params.</span></div><div class='line' id='LC439'><span class="sd">   *</span></div><div class='line' id='LC440'><span class="sd">   * The parameters:</span></div><div class='line' id='LC441'><span class="sd">   * - redirect_uri: the url to go to after a successful login</span></div><div class='line' id='LC442'><span class="sd">   * - scope: comma separated list of requested extended perms</span></div><div class='line' id='LC443'><span class="sd">   *</span></div><div class='line' id='LC444'><span class="sd">   * @param Array $params provide custom parameters</span></div><div class='line' id='LC445'><span class="sd">   * @return String the URL for the login flow</span></div><div class='line' id='LC446'><span class="sd">   */</span></div><div class='line' id='LC447'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getLoginUrl</span><span class="p">(</span><span class="nv">$params</span><span class="o">=</span><span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC448'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">establishCSRFTokenState</span><span class="p">();</span></div><div class='line' id='LC449'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$currentUrl</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCurrentUrl</span><span class="p">();</span></div><div class='line' id='LC450'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getUrl</span><span class="p">(</span></div><div class='line' id='LC451'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;www&#39;</span><span class="p">,</span></div><div class='line' id='LC452'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dialog/oauth&#39;</span><span class="p">,</span></div><div class='line' id='LC453'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">array_merge</span><span class="p">(</span><span class="k">array</span><span class="p">(</span></div><div class='line' id='LC454'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;client_id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAppId</span><span class="p">(),</span></div><div class='line' id='LC455'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;redirect_uri&#39;</span> <span class="o">=&gt;</span> <span class="nv">$currentUrl</span><span class="p">,</span> <span class="c1">// possibly overwritten</span></div><div class='line' id='LC456'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;state&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">state</span><span class="p">),</span></div><div class='line' id='LC457'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span><span class="p">));</span></div><div class='line' id='LC458'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC459'><br/></div><div class='line' id='LC460'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC461'><span class="sd">   * Get a Logout URL suitable for use with redirects.</span></div><div class='line' id='LC462'><span class="sd">   *</span></div><div class='line' id='LC463'><span class="sd">   * The parameters:</span></div><div class='line' id='LC464'><span class="sd">   * - next: the url to go to after a successful logout</span></div><div class='line' id='LC465'><span class="sd">   *</span></div><div class='line' id='LC466'><span class="sd">   * @param Array $params provide custom parameters</span></div><div class='line' id='LC467'><span class="sd">   * @return String the URL for the logout flow</span></div><div class='line' id='LC468'><span class="sd">   */</span></div><div class='line' id='LC469'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getLogoutUrl</span><span class="p">(</span><span class="nv">$params</span><span class="o">=</span><span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC470'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getUrl</span><span class="p">(</span></div><div class='line' id='LC471'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;www&#39;</span><span class="p">,</span></div><div class='line' id='LC472'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;logout.php&#39;</span><span class="p">,</span></div><div class='line' id='LC473'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">array_merge</span><span class="p">(</span><span class="k">array</span><span class="p">(</span></div><div class='line' id='LC474'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;next&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCurrentUrl</span><span class="p">(),</span></div><div class='line' id='LC475'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;access_token&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAccessToken</span><span class="p">(),</span></div><div class='line' id='LC476'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">),</span> <span class="nv">$params</span><span class="p">)</span></div><div class='line' id='LC477'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC478'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC479'><br/></div><div class='line' id='LC480'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC481'><span class="sd">   * Get a login status URL to fetch the status from Facebook.</span></div><div class='line' id='LC482'><span class="sd">   *</span></div><div class='line' id='LC483'><span class="sd">   * The parameters:</span></div><div class='line' id='LC484'><span class="sd">   * - ok_session: the URL to go to if a session is found</span></div><div class='line' id='LC485'><span class="sd">   * - no_session: the URL to go to if the user is not connected</span></div><div class='line' id='LC486'><span class="sd">   * - no_user: the URL to go to if the user is not signed into facebook</span></div><div class='line' id='LC487'><span class="sd">   *</span></div><div class='line' id='LC488'><span class="sd">   * @param Array $params provide custom parameters</span></div><div class='line' id='LC489'><span class="sd">   * @return String the URL for the logout flow</span></div><div class='line' id='LC490'><span class="sd">   */</span></div><div class='line' id='LC491'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getLoginStatusUrl</span><span class="p">(</span><span class="nv">$params</span><span class="o">=</span><span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC492'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getUrl</span><span class="p">(</span></div><div class='line' id='LC493'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;www&#39;</span><span class="p">,</span></div><div class='line' id='LC494'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;extern/login_status.php&#39;</span><span class="p">,</span></div><div class='line' id='LC495'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">array_merge</span><span class="p">(</span><span class="k">array</span><span class="p">(</span></div><div class='line' id='LC496'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;api_key&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAppId</span><span class="p">(),</span></div><div class='line' id='LC497'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;no_session&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCurrentUrl</span><span class="p">(),</span></div><div class='line' id='LC498'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;no_user&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCurrentUrl</span><span class="p">(),</span></div><div class='line' id='LC499'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;ok_session&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCurrentUrl</span><span class="p">(),</span></div><div class='line' id='LC500'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;session_version&#39;</span> <span class="o">=&gt;</span> <span class="m">3</span><span class="p">,</span></div><div class='line' id='LC501'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">),</span> <span class="nv">$params</span><span class="p">)</span></div><div class='line' id='LC502'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC503'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC504'><br/></div><div class='line' id='LC505'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC506'><span class="sd">   * Make an API call.</span></div><div class='line' id='LC507'><span class="sd">   *</span></div><div class='line' id='LC508'><span class="sd">   * @param Array $params the API call parameters</span></div><div class='line' id='LC509'><span class="sd">   * @return the decoded response</span></div><div class='line' id='LC510'><span class="sd">   */</span></div><div class='line' id='LC511'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">api</span><span class="p">(</span><span class="cm">/* polymorphic */</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC512'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$args</span> <span class="o">=</span> <span class="nb">func_get_args</span><span class="p">();</span></div><div class='line' id='LC513'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$args</span><span class="p">[</span><span class="m">0</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC514'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_restserver</span><span class="p">(</span><span class="nv">$args</span><span class="p">[</span><span class="m">0</span><span class="p">]);</span></div><div class='line' id='LC515'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC516'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">call_user_func_array</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;_graph&#39;</span><span class="p">),</span> <span class="nv">$args</span><span class="p">);</span></div><div class='line' id='LC517'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC518'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC519'><br/></div><div class='line' id='LC520'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC521'><span class="sd">   * Get the authorization code from the query parameters, if it exists,</span></div><div class='line' id='LC522'><span class="sd">   * and otherwise return false to signal no authorization code was</span></div><div class='line' id='LC523'><span class="sd">   * discoverable.</span></div><div class='line' id='LC524'><span class="sd">   *</span></div><div class='line' id='LC525'><span class="sd">   * @return mixed the authorization code, or false if the authorization</span></div><div class='line' id='LC526'><span class="sd">   * code could not be determined.</span></div><div class='line' id='LC527'><span class="sd">   */</span></div><div class='line' id='LC528'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getCode</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC529'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;code&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC530'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">state</span> <span class="o">!==</span> <span class="k">null</span> <span class="o">&amp;&amp;</span></div><div class='line' id='LC531'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">isset</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;state&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span></div><div class='line' id='LC532'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">state</span> <span class="o">===</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;state&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC533'><br/></div><div class='line' id='LC534'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// CSRF state has done its job, so clear it</span></div><div class='line' id='LC535'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">state</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC536'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCSRFTokenCookieName</span><span class="p">()]);</span></div><div class='line' id='LC537'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;code&#39;</span><span class="p">];</span></div><div class='line' id='LC538'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC539'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span><span class="s1">&#39;CSRF state token does not match one provided.&#39;</span><span class="p">);</span></div><div class='line' id='LC540'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC541'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC542'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC543'><br/></div><div class='line' id='LC544'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC545'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC546'><br/></div><div class='line' id='LC547'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC548'><span class="sd">   * Retrieves the UID with the understanding that</span></div><div class='line' id='LC549'><span class="sd">   * $this-&gt;accessToken has already been set and is</span></div><div class='line' id='LC550'><span class="sd">   * seemingly legitimate.  It relies on Facebook&#39;s Graph API</span></div><div class='line' id='LC551'><span class="sd">   * to retreive user information and then extract</span></div><div class='line' id='LC552'><span class="sd">   * the user ID.</span></div><div class='line' id='LC553'><span class="sd">   *</span></div><div class='line' id='LC554'><span class="sd">   * @return Integer returns the UID of the Facebook user, or</span></div><div class='line' id='LC555'><span class="sd">   * 0 if the Facebook user could not be determined.</span></div><div class='line' id='LC556'><span class="sd">   */</span></div><div class='line' id='LC557'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getUserFromAccessToken</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC558'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC559'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_info</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">api</span><span class="p">(</span><span class="s1">&#39;/me&#39;</span><span class="p">);</span></div><div class='line' id='LC560'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$user_info</span><span class="p">[</span><span class="s1">&#39;id&#39;</span><span class="p">];</span></div><div class='line' id='LC561'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">FacebookApiException</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC562'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="m">0</span><span class="p">;</span></div><div class='line' id='LC563'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC564'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC565'><br/></div><div class='line' id='LC566'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC567'><span class="sd">   * Returns the access token that should be used for logged out</span></div><div class='line' id='LC568'><span class="sd">   * users when no authorization code is available.</span></div><div class='line' id='LC569'><span class="sd">   *</span></div><div class='line' id='LC570'><span class="sd">   * @return String the application access token, useful for</span></div><div class='line' id='LC571'><span class="sd">   * gathering public information about users and applications.</span></div><div class='line' id='LC572'><span class="sd">   */</span></div><div class='line' id='LC573'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getApplicationAccessToken</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC574'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appId</span><span class="o">.</span><span class="s1">&#39;|&#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">apiSecret</span><span class="p">;</span></div><div class='line' id='LC575'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC576'><br/></div><div class='line' id='LC577'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC578'><span class="sd">   * Lays down a CSRF state token for this process.  We</span></div><div class='line' id='LC579'><span class="sd">   * only generate a new CSRF token if one isn&#39;t currently</span></div><div class='line' id='LC580'><span class="sd">   * circulating in the domain&#39;s cookie jar.</span></div><div class='line' id='LC581'><span class="sd">   *</span></div><div class='line' id='LC582'><span class="sd">   * @return void</span></div><div class='line' id='LC583'><span class="sd">   */</span></div><div class='line' id='LC584'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">establishCSRFTokenState</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC585'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">state</span> <span class="o">===</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC586'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">state</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nb">uniqid</span><span class="p">(</span><span class="nb">mt_rand</span><span class="p">(),</span> <span class="k">true</span><span class="p">));</span></div><div class='line' id='LC587'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">setcookie</span><span class="p">(</span><span class="nv">$name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCSRFTokenCookieName</span><span class="p">(),</span></div><div class='line' id='LC588'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$value</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">state</span><span class="p">,</span></div><div class='line' id='LC589'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$expires</span> <span class="o">=</span> <span class="nb">time</span><span class="p">()</span> <span class="o">+</span> <span class="m">3600</span><span class="p">);</span> <span class="c1">// sticks for an hour</span></div><div class='line' id='LC590'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC591'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC592'><br/></div><div class='line' id='LC593'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC594'><span class="sd">   * Retreives an access token for the given authorization code</span></div><div class='line' id='LC595'><span class="sd">   * (previously generated from www.facebook.com on behalf of</span></div><div class='line' id='LC596'><span class="sd">   * a specific user).  The authorization code is sent to graph.facebook.com</span></div><div class='line' id='LC597'><span class="sd">   * and a legitimate access token is generated provided the access token</span></div><div class='line' id='LC598'><span class="sd">   * and the user for which it was generated all match, and the user is</span></div><div class='line' id='LC599'><span class="sd">   * either logged in to Facebook or has granted an offline access permission.</span></div><div class='line' id='LC600'><span class="sd">   *</span></div><div class='line' id='LC601'><span class="sd">   * @param String $code an authorization code.</span></div><div class='line' id='LC602'><span class="sd">   * @return mixed an access token exchanged for the authorization code, or</span></div><div class='line' id='LC603'><span class="sd">   * false if an access token could not be generated.</span></div><div class='line' id='LC604'><span class="sd">   */</span></div><div class='line' id='LC605'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getAccessTokenFromCode</span><span class="p">(</span><span class="nv">$code</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC606'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$code</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC607'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC608'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC609'><br/></div><div class='line' id='LC610'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC611'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// need to circumvent json_decode by calling _oauthRequest</span></div><div class='line' id='LC612'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// directly, since response isn&#39;t JSON format.</span></div><div class='line' id='LC613'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$access_token_response</span> <span class="o">=</span></div><div class='line' id='LC614'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_oauthRequest</span><span class="p">(</span></div><div class='line' id='LC615'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getUrl</span><span class="p">(</span><span class="s1">&#39;graph&#39;</span><span class="p">,</span> <span class="s1">&#39;/oauth/access_token&#39;</span><span class="p">),</span></div><div class='line' id='LC616'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;client_id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAppId</span><span class="p">(),</span></div><div class='line' id='LC617'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;client_secret&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getApiSecret</span><span class="p">(),</span></div><div class='line' id='LC618'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;redirect_uri&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCurrentUrl</span><span class="p">(),</span></div><div class='line' id='LC619'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">));</span></div><div class='line' id='LC620'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">FacebookApiException</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC621'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// most likely that user very recently revoked authorization.</span></div><div class='line' id='LC622'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// In any event, we don&#39;t have an access token, so say so.</span></div><div class='line' id='LC623'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC624'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC625'><br/></div><div class='line' id='LC626'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$access_token_response</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC627'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC628'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC629'><br/></div><div class='line' id='LC630'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$response_params</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC631'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">parse_str</span><span class="p">(</span><span class="nv">$access_token_response</span><span class="p">,</span> <span class="nv">$response_params</span><span class="p">);</span></div><div class='line' id='LC632'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$response_params</span><span class="p">[</span><span class="s1">&#39;access_token&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC633'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC634'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC635'><br/></div><div class='line' id='LC636'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$response_params</span><span class="p">[</span><span class="s1">&#39;access_token&#39;</span><span class="p">];</span></div><div class='line' id='LC637'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC638'><br/></div><div class='line' id='LC639'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC640'><span class="sd">   * Invoke the old restserver.php endpoint.</span></div><div class='line' id='LC641'><span class="sd">   *</span></div><div class='line' id='LC642'><span class="sd">   * @param Array $params method call object</span></div><div class='line' id='LC643'><span class="sd">   * @return the decoded response object</span></div><div class='line' id='LC644'><span class="sd">   * @throws FacebookApiException</span></div><div class='line' id='LC645'><span class="sd">   */</span></div><div class='line' id='LC646'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">_restserver</span><span class="p">(</span><span class="nv">$params</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC647'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// generic application level parameters</span></div><div class='line' id='LC648'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span><span class="p">[</span><span class="s1">&#39;api_key&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAppId</span><span class="p">();</span></div><div class='line' id='LC649'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span><span class="p">[</span><span class="s1">&#39;format&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;json-strings&#39;</span><span class="p">;</span></div><div class='line' id='LC650'><br/></div><div class='line' id='LC651'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nx">json_decode</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_oauthRequest</span><span class="p">(</span></div><div class='line' id='LC652'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getApiUrl</span><span class="p">(</span><span class="nv">$params</span><span class="p">[</span><span class="s1">&#39;method&#39;</span><span class="p">]),</span></div><div class='line' id='LC653'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span></div><div class='line' id='LC654'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">),</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC655'><br/></div><div class='line' id='LC656'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// results are returned, errors are thrown</span></div><div class='line' id='LC657'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$result</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error_code&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC658'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">FacebookApiException</span><span class="p">(</span><span class="nv">$result</span><span class="p">);</span></div><div class='line' id='LC659'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC660'><br/></div><div class='line' id='LC661'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC662'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC663'><br/></div><div class='line' id='LC664'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC665'><span class="sd">   * Invoke the Graph API.</span></div><div class='line' id='LC666'><span class="sd">   *</span></div><div class='line' id='LC667'><span class="sd">   * @param String $path the path (required)</span></div><div class='line' id='LC668'><span class="sd">   * @param String $method the http method (default &#39;GET&#39;)</span></div><div class='line' id='LC669'><span class="sd">   * @param Array $params the query/post data</span></div><div class='line' id='LC670'><span class="sd">   * @return the decoded response object</span></div><div class='line' id='LC671'><span class="sd">   * @throws FacebookApiException</span></div><div class='line' id='LC672'><span class="sd">   */</span></div><div class='line' id='LC673'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">_graph</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nv">$method</span> <span class="o">=</span> <span class="s1">&#39;GET&#39;</span><span class="p">,</span> <span class="nv">$params</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC674'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$method</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="k">empty</span><span class="p">(</span><span class="nv">$params</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC675'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span> <span class="o">=</span> <span class="nv">$method</span><span class="p">;</span></div><div class='line' id='LC676'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$method</span> <span class="o">=</span> <span class="s1">&#39;GET&#39;</span><span class="p">;</span></div><div class='line' id='LC677'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC678'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span><span class="p">[</span><span class="s1">&#39;method&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$method</span><span class="p">;</span> <span class="c1">// method override as we always do a POST</span></div><div class='line' id='LC679'><br/></div><div class='line' id='LC680'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nx">json_decode</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_oauthRequest</span><span class="p">(</span></div><div class='line' id='LC681'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getUrl</span><span class="p">(</span><span class="s1">&#39;graph&#39;</span><span class="p">,</span> <span class="nv">$path</span><span class="p">),</span></div><div class='line' id='LC682'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span></div><div class='line' id='LC683'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">),</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC684'><br/></div><div class='line' id='LC685'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// results are returned, errors are thrown</span></div><div class='line' id='LC686'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$result</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC687'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">throwAPIException</span><span class="p">(</span><span class="nv">$result</span><span class="p">);</span></div><div class='line' id='LC688'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC689'><br/></div><div class='line' id='LC690'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC691'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC692'><br/></div><div class='line' id='LC693'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC694'><span class="sd">   * Make a OAuth Request.</span></div><div class='line' id='LC695'><span class="sd">   *</span></div><div class='line' id='LC696'><span class="sd">   * @param String $path the path (required)</span></div><div class='line' id='LC697'><span class="sd">   * @param Array $params the query/post data</span></div><div class='line' id='LC698'><span class="sd">   * @return the decoded response object</span></div><div class='line' id='LC699'><span class="sd">   * @throws FacebookApiException</span></div><div class='line' id='LC700'><span class="sd">   */</span></div><div class='line' id='LC701'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">_oauthRequest</span><span class="p">(</span><span class="nv">$url</span><span class="p">,</span> <span class="nv">$params</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC702'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$params</span><span class="p">[</span><span class="s1">&#39;access_token&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC703'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span><span class="p">[</span><span class="s1">&#39;access_token&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAccessToken</span><span class="p">();</span></div><div class='line' id='LC704'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC705'><br/></div><div class='line' id='LC706'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// json_encode all params values that are not strings</span></div><div class='line' id='LC707'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$params</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC708'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_string</span><span class="p">(</span><span class="nv">$value</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC709'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span><span class="p">[</span><span class="nv">$key</span><span class="p">]</span> <span class="o">=</span> <span class="nx">json_encode</span><span class="p">(</span><span class="nv">$value</span><span class="p">);</span></div><div class='line' id='LC710'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC711'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC712'><br/></div><div class='line' id='LC713'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">makeRequest</span><span class="p">(</span><span class="nv">$url</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></div><div class='line' id='LC714'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC715'><br/></div><div class='line' id='LC716'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC717'><span class="sd">   * Makes an HTTP request. This method can be overriden by subclasses if</span></div><div class='line' id='LC718'><span class="sd">   * developers want to do fancier things or use something other than curl to</span></div><div class='line' id='LC719'><span class="sd">   * make the request.</span></div><div class='line' id='LC720'><span class="sd">   *</span></div><div class='line' id='LC721'><span class="sd">   * @param String $url the URL to make the request to</span></div><div class='line' id='LC722'><span class="sd">   * @param Array $params the parameters to use for the POST body</span></div><div class='line' id='LC723'><span class="sd">   * @param CurlHandler $ch optional initialized curl handle</span></div><div class='line' id='LC724'><span class="sd">   * @return String the response text</span></div><div class='line' id='LC725'><span class="sd">   */</span></div><div class='line' id='LC726'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">makeRequest</span><span class="p">(</span><span class="nv">$url</span><span class="p">,</span> <span class="nv">$params</span><span class="p">,</span> <span class="nv">$ch</span><span class="o">=</span><span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC727'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$ch</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC728'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ch</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span></div><div class='line' id='LC729'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC730'><br/></div><div class='line' id='LC731'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$opts</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$CURL_OPTS</span><span class="p">;</span></div><div class='line' id='LC732'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">useFileUploadSupport</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC733'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$opts</span><span class="p">[</span><span class="nx">CURLOPT_POSTFIELDS</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$params</span><span class="p">;</span></div><div class='line' id='LC734'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC735'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$opts</span><span class="p">[</span><span class="nx">CURLOPT_POSTFIELDS</span><span class="p">]</span> <span class="o">=</span> <span class="nb">http_build_query</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="k">null</span><span class="p">,</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">);</span></div><div class='line' id='LC736'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC737'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$opts</span><span class="p">[</span><span class="nx">CURLOPT_URL</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$url</span><span class="p">;</span></div><div class='line' id='LC738'><br/></div><div class='line' id='LC739'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// disable the &#39;Expect: 100-continue&#39; behaviour. This causes CURL to wait</span></div><div class='line' id='LC740'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// for 2 seconds if the server does not support this header.</span></div><div class='line' id='LC741'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$opts</span><span class="p">[</span><span class="nx">CURLOPT_HTTPHEADER</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC742'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$existing_headers</span> <span class="o">=</span> <span class="nv">$opts</span><span class="p">[</span><span class="nx">CURLOPT_HTTPHEADER</span><span class="p">];</span></div><div class='line' id='LC743'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$existing_headers</span><span class="p">[]</span> <span class="o">=</span> <span class="s1">&#39;Expect:&#39;</span><span class="p">;</span></div><div class='line' id='LC744'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$opts</span><span class="p">[</span><span class="nx">CURLOPT_HTTPHEADER</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$existing_headers</span><span class="p">;</span></div><div class='line' id='LC745'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC746'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$opts</span><span class="p">[</span><span class="nx">CURLOPT_HTTPHEADER</span><span class="p">]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;Expect:&#39;</span><span class="p">);</span></div><div class='line' id='LC747'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC748'><br/></div><div class='line' id='LC749'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">curl_setopt_array</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nv">$opts</span><span class="p">);</span></div><div class='line' id='LC750'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span></div><div class='line' id='LC751'><br/></div><div class='line' id='LC752'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">curl_errno</span><span class="p">(</span><span class="nv">$ch</span><span class="p">)</span> <span class="o">==</span> <span class="m">60</span><span class="p">)</span> <span class="p">{</span> <span class="c1">// CURLE_SSL_CACERT</span></div><div class='line' id='LC753'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span><span class="s1">&#39;Invalid or no certificate authority found, &#39;</span><span class="o">.</span></div><div class='line' id='LC754'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;using bundled information&#39;</span><span class="p">);</span></div><div class='line' id='LC755'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_CAINFO</span><span class="p">,</span></div><div class='line' id='LC756'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">dirname</span><span class="p">(</span><span class="k">__FILE__</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;/fb_ca_chain_bundle.crt&#39;</span><span class="p">);</span></div><div class='line' id='LC757'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span></div><div class='line' id='LC758'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC759'><br/></div><div class='line' id='LC760'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$result</span> <span class="o">===</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC761'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$e</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">FacebookApiException</span><span class="p">(</span><span class="k">array</span><span class="p">(</span></div><div class='line' id='LC762'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error_code&#39;</span> <span class="o">=&gt;</span> <span class="nb">curl_errno</span><span class="p">(</span><span class="nv">$ch</span><span class="p">),</span></div><div class='line' id='LC763'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC764'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;message&#39;</span> <span class="o">=&gt;</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$ch</span><span class="p">),</span></div><div class='line' id='LC765'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;type&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;CurlException&#39;</span><span class="p">,</span></div><div class='line' id='LC766'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">),</span></div><div class='line' id='LC767'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">));</span></div><div class='line' id='LC768'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span></div><div class='line' id='LC769'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="nv">$e</span><span class="p">;</span></div><div class='line' id='LC770'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC771'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span></div><div class='line' id='LC772'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC773'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC774'><br/></div><div class='line' id='LC775'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC776'><span class="sd">   * The name of the cookie housing the CSRF protection value.</span></div><div class='line' id='LC777'><span class="sd">   *</span></div><div class='line' id='LC778'><span class="sd">   * @return String the cookie name</span></div><div class='line' id='LC779'><span class="sd">   */</span></div><div class='line' id='LC780'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getCSRFTokenCookieName</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC781'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;fbcsrf_&#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAppId</span><span class="p">();</span></div><div class='line' id='LC782'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC783'><br/></div><div class='line' id='LC784'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC785'><span class="sd">   * Parses a signed_request and validates the signature.</span></div><div class='line' id='LC786'><span class="sd">   *</span></div><div class='line' id='LC787'><span class="sd">   * @param String A signed token</span></div><div class='line' id='LC788'><span class="sd">   * @return Array the payload inside it or null if the sig is wrong</span></div><div class='line' id='LC789'><span class="sd">   */</span></div><div class='line' id='LC790'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">parseSignedRequest</span><span class="p">(</span><span class="nv">$signed_request</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC791'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">list</span><span class="p">(</span><span class="nv">$encoded_sig</span><span class="p">,</span> <span class="nv">$payload</span><span class="p">)</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s1">&#39;.&#39;</span><span class="p">,</span> <span class="nv">$signed_request</span><span class="p">,</span> <span class="m">2</span><span class="p">);</span></div><div class='line' id='LC792'><br/></div><div class='line' id='LC793'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// decode the data</span></div><div class='line' id='LC794'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sig</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">base64UrlDecode</span><span class="p">(</span><span class="nv">$encoded_sig</span><span class="p">);</span></div><div class='line' id='LC795'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$data</span> <span class="o">=</span> <span class="nx">json_decode</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">base64UrlDecode</span><span class="p">(</span><span class="nv">$payload</span><span class="p">),</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC796'><br/></div><div class='line' id='LC797'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strtoupper</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;algorithm&#39;</span><span class="p">])</span> <span class="o">!==</span> <span class="s1">&#39;HMAC-SHA256&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC798'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span><span class="s1">&#39;Unknown algorithm. Expected HMAC-SHA256&#39;</span><span class="p">);</span></div><div class='line' id='LC799'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC800'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC801'><br/></div><div class='line' id='LC802'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// check sig</span></div><div class='line' id='LC803'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$expected_sig</span> <span class="o">=</span> <span class="nx">hash_hmac</span><span class="p">(</span><span class="s1">&#39;sha256&#39;</span><span class="p">,</span> <span class="nv">$payload</span><span class="p">,</span></div><div class='line' id='LC804'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getApiSecret</span><span class="p">(),</span> <span class="nv">$raw</span> <span class="o">=</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC805'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$sig</span> <span class="o">!==</span> <span class="nv">$expected_sig</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC806'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span><span class="s1">&#39;Bad Signed JSON signature!&#39;</span><span class="p">);</span></div><div class='line' id='LC807'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC808'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC809'><br/></div><div class='line' id='LC810'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$data</span><span class="p">;</span></div><div class='line' id='LC811'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC812'><br/></div><div class='line' id='LC813'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC814'><span class="sd">   * Build the URL for api given parameters.</span></div><div class='line' id='LC815'><span class="sd">   *</span></div><div class='line' id='LC816'><span class="sd">   * @param $method String the method name.</span></div><div class='line' id='LC817'><span class="sd">   * @return String the URL for the given parameters</span></div><div class='line' id='LC818'><span class="sd">   */</span></div><div class='line' id='LC819'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getApiUrl</span><span class="p">(</span><span class="nv">$method</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC820'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">static</span> <span class="nv">$READ_ONLY_CALLS</span> <span class="o">=</span></div><div class='line' id='LC821'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;admin.getallocation&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC822'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;admin.getappproperties&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC823'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;admin.getbannedusers&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC824'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;admin.getlivestreamvialink&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC825'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;admin.getmetrics&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC826'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;admin.getrestrictioninfo&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC827'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;application.getpublicinfo&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC828'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;auth.getapppublickey&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC829'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;auth.getsession&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC830'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;auth.getsignedpublicsessiondata&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC831'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;comments.get&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC832'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;connect.getunconnectedfriendscount&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC833'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dashboard.getactivity&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC834'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dashboard.getcount&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC835'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dashboard.getglobalnews&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC836'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dashboard.getnews&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC837'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dashboard.multigetcount&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC838'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;dashboard.multigetnews&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC839'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;data.getcookies&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC840'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;events.get&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC841'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;events.getmembers&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC842'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;fbml.getcustomtags&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC843'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;feed.getappfriendstories&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC844'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;feed.getregisteredtemplatebundlebyid&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC845'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;feed.getregisteredtemplatebundles&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC846'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;fql.multiquery&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC847'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;fql.query&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC848'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;friends.arefriends&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC849'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;friends.get&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC850'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;friends.getappusers&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC851'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;friends.getlists&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC852'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;friends.getmutualfriends&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC853'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;gifts.get&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC854'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;groups.get&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC855'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;groups.getmembers&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC856'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;intl.gettranslations&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC857'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;links.get&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC858'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;notes.get&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC859'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;notifications.get&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC860'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;pages.getinfo&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC861'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;pages.isadmin&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC862'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;pages.isappadded&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC863'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;pages.isfan&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC864'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;permissions.checkavailableapiaccess&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC865'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;permissions.checkgrantedapiaccess&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC866'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;photos.get&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC867'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;photos.getalbums&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC868'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;photos.gettags&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC869'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;profile.getinfo&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC870'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;profile.getinfooptions&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC871'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;stream.get&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC872'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;stream.getcomments&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC873'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;stream.getfilters&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC874'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;users.getinfo&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC875'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;users.getloggedinuser&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC876'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;users.getstandardinfo&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC877'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;users.hasapppermission&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC878'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;users.isappuser&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC879'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;users.isverified&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">,</span></div><div class='line' id='LC880'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;video.getuploadlimits&#39;</span> <span class="o">=&gt;</span> <span class="m">1</span><span class="p">);</span></div><div class='line' id='LC881'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;api&#39;</span><span class="p">;</span></div><div class='line' id='LC882'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$READ_ONLY_CALLS</span><span class="p">[</span><span class="nb">strtolower</span><span class="p">(</span><span class="nv">$method</span><span class="p">)]))</span> <span class="p">{</span></div><div class='line' id='LC883'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;api_read&#39;</span><span class="p">;</span></div><div class='line' id='LC884'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nb">strtolower</span><span class="p">(</span><span class="nv">$method</span><span class="p">)</span> <span class="o">==</span> <span class="s1">&#39;video.upload&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC885'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$name</span> <span class="o">=</span> <span class="s1">&#39;api_video&#39;</span><span class="p">;</span></div><div class='line' id='LC886'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC887'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="na">getUrl</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="s1">&#39;restserver.php&#39;</span><span class="p">);</span></div><div class='line' id='LC888'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC889'><br/></div><div class='line' id='LC890'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC891'><span class="sd">   * Build the URL for given domain alias, path and parameters.</span></div><div class='line' id='LC892'><span class="sd">   *</span></div><div class='line' id='LC893'><span class="sd">   * @param $name String the name of the domain</span></div><div class='line' id='LC894'><span class="sd">   * @param $path String optional path (without a leading slash)</span></div><div class='line' id='LC895'><span class="sd">   * @param $params Array optional query parameters</span></div><div class='line' id='LC896'><span class="sd">   * @return String the URL for the given parameters</span></div><div class='line' id='LC897'><span class="sd">   */</span></div><div class='line' id='LC898'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getUrl</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$path</span><span class="o">=</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$params</span><span class="o">=</span><span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC899'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$url</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$DOMAIN_MAP</span><span class="p">[</span><span class="nv">$name</span><span class="p">];</span></div><div class='line' id='LC900'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC901'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$path</span><span class="p">[</span><span class="m">0</span><span class="p">]</span> <span class="o">===</span> <span class="s1">&#39;/&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC902'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$path</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="m">1</span><span class="p">);</span></div><div class='line' id='LC903'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC904'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$url</span> <span class="o">.=</span> <span class="nv">$path</span><span class="p">;</span></div><div class='line' id='LC905'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC906'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$params</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC907'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$url</span> <span class="o">.=</span> <span class="s1">&#39;?&#39;</span> <span class="o">.</span> <span class="nb">http_build_query</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="k">null</span><span class="p">,</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">);</span></div><div class='line' id='LC908'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC909'><br/></div><div class='line' id='LC910'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$url</span><span class="p">;</span></div><div class='line' id='LC911'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC912'><br/></div><div class='line' id='LC913'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC914'><span class="sd">   * Returns the Current URL, stripping it of known FB parameters that should</span></div><div class='line' id='LC915'><span class="sd">   * not persist.</span></div><div class='line' id='LC916'><span class="sd">   *</span></div><div class='line' id='LC917'><span class="sd">   * @return String the current URL</span></div><div class='line' id='LC918'><span class="sd">   */</span></div><div class='line' id='LC919'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getCurrentUrl</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC920'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$protocol</span> <span class="o">=</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;HTTPS&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;HTTPS&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39;on&#39;</span></div><div class='line' id='LC921'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">?</span> <span class="s1">&#39;https://&#39;</span></div><div class='line' id='LC922'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">:</span> <span class="s1">&#39;http://&#39;</span><span class="p">;</span></div><div class='line' id='LC923'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$currentUrl</span> <span class="o">=</span> <span class="nv">$protocol</span> <span class="o">.</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;HTTP_HOST&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;REQUEST_URI&#39;</span><span class="p">];</span></div><div class='line' id='LC924'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$parts</span> <span class="o">=</span> <span class="nb">parse_url</span><span class="p">(</span><span class="nv">$currentUrl</span><span class="p">);</span></div><div class='line' id='LC925'><br/></div><div class='line' id='LC926'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// drop known fb params</span></div><div class='line' id='LC927'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$query</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC928'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$parts</span><span class="p">[</span><span class="s1">&#39;query&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC929'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$params</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC930'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">parse_str</span><span class="p">(</span><span class="nv">$parts</span><span class="p">[</span><span class="s1">&#39;query&#39;</span><span class="p">],</span> <span class="nv">$params</span><span class="p">);</span></div><div class='line' id='LC931'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$DROP_QUERY_PARAMS</span> <span class="k">as</span> <span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC932'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$params</span><span class="p">[</span><span class="nv">$key</span><span class="p">]);</span></div><div class='line' id='LC933'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC934'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$params</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC935'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$query</span> <span class="o">=</span> <span class="s1">&#39;?&#39;</span> <span class="o">.</span> <span class="nb">http_build_query</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="k">null</span><span class="p">,</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">);</span></div><div class='line' id='LC936'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC937'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC938'><br/></div><div class='line' id='LC939'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// use port if non default</span></div><div class='line' id='LC940'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$port</span> <span class="o">=</span></div><div class='line' id='LC941'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">isset</span><span class="p">(</span><span class="nv">$parts</span><span class="p">[</span><span class="s1">&#39;port&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span></div><div class='line' id='LC942'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">((</span><span class="nv">$protocol</span> <span class="o">===</span> <span class="s1">&#39;http://&#39;</span> <span class="o">&amp;&amp;</span> <span class="nv">$parts</span><span class="p">[</span><span class="s1">&#39;port&#39;</span><span class="p">]</span> <span class="o">!==</span> <span class="m">80</span><span class="p">)</span> <span class="o">||</span></div><div class='line' id='LC943'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">(</span><span class="nv">$protocol</span> <span class="o">===</span> <span class="s1">&#39;https://&#39;</span> <span class="o">&amp;&amp;</span> <span class="nv">$parts</span><span class="p">[</span><span class="s1">&#39;port&#39;</span><span class="p">]</span> <span class="o">!==</span> <span class="m">443</span><span class="p">))</span></div><div class='line' id='LC944'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">?</span> <span class="s1">&#39;:&#39;</span> <span class="o">.</span> <span class="nv">$parts</span><span class="p">[</span><span class="s1">&#39;port&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC945'><br/></div><div class='line' id='LC946'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// rebuild</span></div><div class='line' id='LC947'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$protocol</span> <span class="o">.</span> <span class="nv">$parts</span><span class="p">[</span><span class="s1">&#39;host&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="nv">$port</span> <span class="o">.</span> <span class="nv">$parts</span><span class="p">[</span><span class="s1">&#39;path&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="nv">$query</span><span class="p">;</span></div><div class='line' id='LC948'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC949'><br/></div><div class='line' id='LC950'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC951'><span class="sd">   * Analyzes the supplied result to see if it was thrown</span></div><div class='line' id='LC952'><span class="sd">   * because the access token is no longer valid.  If that is</span></div><div class='line' id='LC953'><span class="sd">   * the case, then the persistent store is cleared.</span></div><div class='line' id='LC954'><span class="sd">   *</span></div><div class='line' id='LC955'><span class="sd">   * @param $result a record storing the error message returned</span></div><div class='line' id='LC956'><span class="sd">   *        by a failed API call.</span></div><div class='line' id='LC957'><span class="sd">   */</span></div><div class='line' id='LC958'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">throwAPIException</span><span class="p">(</span><span class="nv">$result</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC959'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$e</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">FacebookApiException</span><span class="p">(</span><span class="nv">$result</span><span class="p">);</span></div><div class='line' id='LC960'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span> <span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getType</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC961'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// OAuth 2.0 Draft 00 style</span></div><div class='line' id='LC962'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;OAuthException&#39;</span><span class="o">:</span></div><div class='line' id='LC963'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// OAuth 2.0 Draft 10 style</span></div><div class='line' id='LC964'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;invalid_token&#39;</span><span class="o">:</span></div><div class='line' id='LC965'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">();</span></div><div class='line' id='LC966'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">((</span><span class="nb">strpos</span><span class="p">(</span><span class="nv">$message</span><span class="p">,</span> <span class="s1">&#39;Error validating access token&#39;</span><span class="p">)</span> <span class="o">!==</span> <span class="k">false</span><span class="p">)</span> <span class="o">||</span></div><div class='line' id='LC967'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">(</span><span class="nb">strpos</span><span class="p">(</span><span class="nv">$message</span><span class="p">,</span> <span class="s1">&#39;Invalid OAuth access token&#39;</span><span class="p">)</span> <span class="o">!==</span> <span class="k">false</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC968'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setAccessToken</span><span class="p">(</span><span class="k">null</span><span class="p">);</span></div><div class='line' id='LC969'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">user</span> <span class="o">=</span> <span class="m">0</span><span class="p">;</span></div><div class='line' id='LC970'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearAllPersistentData</span><span class="p">();</span></div><div class='line' id='LC971'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC972'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC973'><br/></div><div class='line' id='LC974'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="nv">$e</span><span class="p">;</span></div><div class='line' id='LC975'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC976'><br/></div><div class='line' id='LC977'><br/></div><div class='line' id='LC978'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC979'><span class="sd">   * Prints to the error log if you aren&#39;t in command line mode.</span></div><div class='line' id='LC980'><span class="sd">   *</span></div><div class='line' id='LC981'><span class="sd">   * @param String log message</span></div><div class='line' id='LC982'><span class="sd">   */</span></div><div class='line' id='LC983'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">errorLog</span><span class="p">(</span><span class="nv">$msg</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC984'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// disable error log if we are running in a CLI environment</span></div><div class='line' id='LC985'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// @codeCoverageIgnoreStart</span></div><div class='line' id='LC986'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">php_sapi_name</span><span class="p">()</span> <span class="o">!=</span> <span class="s1">&#39;cli&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC987'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">error_log</span><span class="p">(</span><span class="nv">$msg</span><span class="p">);</span></div><div class='line' id='LC988'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC989'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// uncomment this if you want to see the errors on the page</span></div><div class='line' id='LC990'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// print &#39;error_log: &#39;.$msg.&quot;\n&quot;;</span></div><div class='line' id='LC991'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// @codeCoverageIgnoreEnd</span></div><div class='line' id='LC992'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC993'><br/></div><div class='line' id='LC994'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC995'><span class="sd">   * Base64 encoding that doesn&#39;t need to be urlencode()ed.</span></div><div class='line' id='LC996'><span class="sd">   * Exactly the same as base64_encode except it uses</span></div><div class='line' id='LC997'><span class="sd">   *   - instead of +</span></div><div class='line' id='LC998'><span class="sd">   *   _ instead of /</span></div><div class='line' id='LC999'><span class="sd">   *</span></div><div class='line' id='LC1000'><span class="sd">   * @param String base64UrlEncodeded string</span></div><div class='line' id='LC1001'><span class="sd">   */</span></div><div class='line' id='LC1002'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">base64UrlDecode</span><span class="p">(</span><span class="nv">$input</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1003'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">base64_decode</span><span class="p">(</span><span class="nb">strtr</span><span class="p">(</span><span class="nv">$input</span><span class="p">,</span> <span class="s1">&#39;-_&#39;</span><span class="p">,</span> <span class="s1">&#39;+/&#39;</span><span class="p">));</span></div><div class='line' id='LC1004'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1005'><br/></div><div class='line' id='LC1006'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1007'><span class="sd">   * Each of the following three methods should be overridden in</span></div><div class='line' id='LC1008'><span class="sd">   * a concrete subclass, as they are in the provided Facebook class.</span></div><div class='line' id='LC1009'><span class="sd">   * The Facebook class uses PHP sessions to provide a primitive</span></div><div class='line' id='LC1010'><span class="sd">   * persistent store, but another subclass--one that you implement--</span></div><div class='line' id='LC1011'><span class="sd">   * might use a database, memcache, or an in-memory cache.</span></div><div class='line' id='LC1012'><span class="sd">   *</span></div><div class='line' id='LC1013'><span class="sd">   * @see Facebook</span></div><div class='line' id='LC1014'><span class="sd">   */</span></div><div class='line' id='LC1015'>&nbsp;&nbsp;<span class="k">abstract</span> <span class="k">protected</span> <span class="k">function</span> <span class="nf">setPersistentData</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$value</span><span class="p">);</span></div><div class='line' id='LC1016'>&nbsp;&nbsp;<span class="k">abstract</span> <span class="k">protected</span> <span class="k">function</span> <span class="nf">getPersistentData</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$default</span> <span class="o">=</span> <span class="k">false</span><span class="p">);</span></div><div class='line' id='LC1017'>&nbsp;&nbsp;<span class="k">abstract</span> <span class="k">protected</span> <span class="k">function</span> <span class="nf">clearAllPersistentData</span><span class="p">();</span></div><div class='line' id='LC1018'><span class="p">}</span></div><div class='line' id='LC1019'><br/></div></pre></div>
              
            
          </td>
        </tr>
      </table>
    
  </div>


          </div>
        </div>
      </div>
    </div>
  

  </div>


<div class="frame frame-loading" style="display:none;">
  <img src="https://d3nwyuy0nl342s.cloudfront.net/images/modules/ajax/big_spinner_336699.gif" height="32" width="32">
</div>

    </div>
  
      
    </div>

    <div id="footer" class="clearfix">
      <div class="site">
        <div class="sponsor">
          <a href="http://www.rackspace.com" class="logo">
            <img alt="Dedicated Server" height="36" src="https://d3nwyuy0nl342s.cloudfront.net/images/modules/footer/rackspace_logo.png?v2" width="38" />
          </a>
          Powered by the <a href="http://www.rackspace.com ">Dedicated
          Servers</a> and<br/> <a href="http://www.rackspacecloud.com">Cloud
          Computing</a> of Rackspace Hosting<span>&reg;</span>
        </div>

        <ul class="links">
          <li class="blog"><a href="https://github.com/blog">Blog</a></li>
          <li><a href="https://github.com/contact">Support</a></li>
          <li><a href="https://github.com/training">Training</a></li>
          <li><a href="http://jobs.github.com">Job Board</a></li>
          <li><a href="http://shop.github.com">Shop</a></li>
          <li><a href="https://github.com/contact">Contact</a></li>
          <li><a href="http://developer.github.com">API</a></li>
          <li><a href="http://status.github.com">Status</a></li>
        </ul>
        <ul class="sosueme">
          <li class="main">&copy; 2011 <span id="_rrt" title="0.08424s from fe2.rs.github.com">GitHub</span> Inc. All rights reserved.</li>
          <li><a href="/site/terms">Terms of Service</a></li>
          <li><a href="/site/privacy">Privacy</a></li>
          <li><a href="https://github.com/security">Security</a></li>
        </ul>
      </div>
    </div><!-- /#footer -->

    <script>window._auth_token = "dedb9f93a722ba58c4e7a479e2d395b37ae4f3f4"</script>
    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus site search</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selected down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selected up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>t</dt>
        <dd>Open tree</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>p</dt>
        <dd>Open parent</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selected down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selected up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selected down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selected up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle select target</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column middle">
        <dl class="keyboard-mappings">
          <dt>I</dt>
          <dd>Mark selected as read</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>U</dt>
          <dd>Mark selected as unread</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>e</dt>
          <dd>Close selected</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Remove selected from view</dd>
        </dl>
      </div><!-- /.column.middle -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>
</div>

    <div id="markdown-help" class="instapaper_ignore readability-extra">
  <h2>Markdown Cheat Sheet</h2>

  <div class="cheatsheet-content">

  <div class="mod">
    <div class="col">
      <h3>Format Text</h3>
      <p>Headers</p>
      <pre>
# This is an &lt;h1&gt; tag
## This is an &lt;h2&gt; tag
###### This is an &lt;h6&gt; tag</pre>
     <p>Text styles</p>
     <pre>
*This text will be italic*
_This will also be italic_
**This text will be bold**
__This will also be bold__

*You **can** combine them*
</pre>
    </div>
    <div class="col">
      <h3>Lists</h3>
      <p>Unordered</p>
      <pre>
* Item 1
* Item 2
  * Item 2a
  * Item 2b</pre>
     <p>Ordered</p>
     <pre>
1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b</pre>
    </div>
    <div class="col">
      <h3>Miscellaneous</h3>
      <p>Images</p>
      <pre>
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)
</pre>
     <p>Links</p>
     <pre>
http://github.com - automatic!
[GitHub](http://github.com)</pre>
<p>Blockquotes</p>
     <pre>
As Kanye West said:
> We're living the future so
> the present is our past.
</pre>
    </div>
  </div>
  <div class="rule"></div>

  <h3>Code Examples in Markdown</h3>
  <div class="col">
      <p>Syntax highlighting with <a href="http://github.github.com/github-flavored-markdown/" title="GitHub Flavored Markdown">GFM</a></p>
      <pre>
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```</pre>
    </div>
    <div class="col">
      <p>Or, indent your code 4 spaces</p>
      <pre>
Here is a Python code example
without syntax highlighting:

    def foo:
      if not bar:
        return true</pre>
    </div>
    <div class="col">
      <p>Inline code for comments</p>
      <pre>
I think you should use an
`&lt;addr&gt;` element here instead.</pre>
    </div>
  </div>

  </div>
</div>
    

    <!--[if IE 8]>
    <script type="text/javascript" charset="utf-8">
      $(document.body).addClass("ie8")
    </script>
    <![endif]-->

    <!--[if IE 7]>
    <script type="text/javascript" charset="utf-8">
      $(document.body).addClass("ie7")
    </script>
    <![endif]-->

    
    <script type='text/javascript'></script>
    
    <script>(function(){var d=document;var e=d.createElement("script");e.async=true;e.src="https://d1ros97qkrwjf5.cloudfront.net/9/eum/rum.js	";var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(e,s);})();NREUMQ.push(["nrf2","beacon-3.newrelic.com","2f94e4d8c2",64799,"dw1bEBZcX1RWRhoSFFEHGgcFUFtdV2tWCQtZC0E7AFJHWQ==",0,122,new Date().getTime()])</script>
  </body>
</html>

