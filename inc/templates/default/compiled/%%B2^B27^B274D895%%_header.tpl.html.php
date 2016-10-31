<?php /* Smarty version 2.6.18, created on 2016-10-31 10:54:04
         compiled from _header.tpl.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $this->_tpl_vars['lngstr']['text_direction']; ?>
"><head><title><?php echo $this->_tpl_vars['g_vars']['page']['title']; ?>
<?php echo $this->_tpl_vars['lngstr']['item_separator']; ?>
<?php echo $this->_tpl_vars['srv_settings']['title_postfix']; ?>
</title>
<meta http-equiv="Content-Language" content="<?php echo $this->_tpl_vars['lngstr']['meta_contentlanguage']; ?>
">
<meta content="text/html; charset=<?php echo $this->_tpl_vars['lngstr']['meta_charset']; ?>
" http-equiv=Content-Type>
<link rel="SHORTCUT ICON" href="/favicon.ico">
<link href="shared/style.css" rel=stylesheet type=text/css>
<script language=javascript src="shared/shared.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/x-mathjax-config">
//
//  Do NOT use this page as a template for your own pages.  It includes 
//  code that is needed for testing your site's installation of MathJax,
//  and that should not be used in normal web pages.  Use sample.html as
//  the example for how to call MathJax in your own pages.
//
  MathJax.HTML.Cookie.Set("menu",{});
  MathJax.Hub.Config({
    extensions: ["tex2jax.js"],
    jax: ["input/TeX","output/HTML-CSS"],
    "HTML-CSS": {
      availableFonts:[],
      styles: {".MathJax_Preview": {visibility: "hidden"}}
    }
  });
  MathJax.Hub.Register.StartupHook("HTML-CSS Jax Ready",function () {
    var FONT = MathJax.OutputJax["HTML-CSS"].Font;
    FONT.loadError = function (font) {
      MathJax.Message.Set("Can't load web font TeX/"+font.directory,null,2000);
      document.getElementById("noWebFont").style.display = "";
    };
    FONT.firefoxFontError = function (font) {
      MathJax.Message.Set("Firefox can't load web fonts from a remote host",null,3000);
      document.getElementById("ffWebFont").style.display = "";
    };
  });

(function (HUB) {
  
  var MINVERSION = {
    Firefox: 3.0,
    Opera: 9.52,
    MSIE: 6.0,
    Chrome: 0.3,
    Safari: 2.0,
    Konqueror: 4.0,
    Unknown: 10000.0 // always disable unknown browsers
  };
  
  if (!HUB.Browser.versionAtLeast(MINVERSION[HUB.Browser]||0.0)) {
    HUB.Config({
      jax: [],                   // don't load any Jax
      extensions: [],            // don't load any extensions
      "v1.0-compatible": false   // skip warning message due to no jax
    });
    setTimeout('document.getElementById("badBrowser").style.display = ""',0);
  }
  
})(MathJax.Hub);

MathJax.Hub.Register.StartupHook("End",function () {
  var HTMLCSS = MathJax.OutputJax["HTML-CSS"];
  if (HTMLCSS && HTMLCSS.imgFonts) {document.getElementById("imageFonts").style.display = ""}
});

</script>
<script type="text/javascript" src="shared/MathJax/MathJax.js"></script>




<?php echo $this->_tpl_vars['g_vars']['page']['meta']; ?>
</head>
<body bgcolor="#ffffff"<?php echo $this->_tpl_vars['g_vars']['page']['body_tag']; ?>
<?php if ($this->_tpl_vars['g_vars']['page']['content_protection']): ?>oncontextmenu="return false;" ondragstart="return false;" onselectstart="return false;"<?php endif; ?>>
<?php if ($this->_tpl_vars['g_vars']['page']['content_protection']): ?><script language="JavaScript1.1">
// <!--
var debug = true;
function right(e) {
if (navigator.appName == 'Netscape' && (e.which == 3 || e.which == 2)) return false;
else if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3)) {
alert('Please do not copy this page content'); return false;
}
return true;
}
document.onmousedown=right;
if (document.layers)
window.captureEvents(Event.MOUSEDOWN);
window.onmousedown=right; //--></script><?php endif; ?>
<p><table cellpadding=0 cellspacing=0 border=0 width="100%">
<tr><td style="display: block;">
<a href="http://lophoctoan.net"><?php echo $this->_tpl_vars['lngstr']['branding']['top_logo']; ?>

<span style="margin-top: -65px; margin-left: 72px; display: block;"><font style="color: blue;font-size: 14px;">WELCOME TO</font> <br/>
<font style="color: red;font-size: 17px;">LOPHOCTOAN.NET</font></span></a>
</td>
<td width="80%" align=center class=top_section><?php echo $this->_tpl_vars['g_vars']['page']['title']; ?>
</td></tr>
<tr><td colspan=2 height=1 width=100% style="background-color: #E7E9EF;"><img src="images/1x1.gif" width=1 height=1></td></tr>

<?php if (! $this->_tpl_vars['g_vars']['page']['hide_cpanel']): ?>
<tr><td colspan=2>

<table cellpadding=0 cellspacing=0 border=0 width="100%" style="border-left: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3; border-bottom: 1px solid #CFD6E3;">
<tr style="background: url(images/mainbar-background.gif) repeat-x;">
<td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=32></td><td align=center><b><a class=bar1 href="index.php"><?php echo $this->_tpl_vars['lngstr']['panel_home']; ?>
</a></b></td><?php if ($_SESSION['MAIN']['access_questionbank'] > 0): ?>
<td align=center><b><a class=bar1 href="question-bank.php"><?php echo $this->_tpl_vars['lngstr']['panel_questionbank']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_subjects'] > 0): ?>
<td align=center><b><a class=bar1 href="subjects.php"><?php echo $this->_tpl_vars['lngstr']['panel_questionbank']; ?>
</a></b></td>
<?php endif; ?>
<?php if ($_SESSION['MAIN']['access_testmanager'] > 0): ?>
<td align=center><b><a class=bar1 href="test-manager.php"><?php echo $this->_tpl_vars['lngstr']['panel_edittests']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_gradingsystems'] > 0): ?>
<td align=center><b><a class=bar1 href="grades.php"><?php echo $this->_tpl_vars['lngstr']['panel_edittests']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_emailtemplates'] > 0): ?>
<td align=center><b><a class=bar1 href="email-templates.php"><?php echo $this->_tpl_vars['lngstr']['panel_edittests']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_reporttemplates'] > 0): ?>
<td align=center><b><a class=bar1 href="report-templates.php"><?php echo $this->_tpl_vars['lngstr']['panel_edittests']; ?>
</a></b></td>
<?php endif; ?>
<?php if ($_SESSION['MAIN']['access_reportsmanager'] > 0): ?>
<td align=center><b><a class=bar1 href="reports-manager.php"><?php echo $this->_tpl_vars['lngstr']['panel_results']; ?>
</a></b></td>
<?php endif; ?>
<?php if ($_SESSION['MAIN']['access_users'] > 0): ?>
<td align=center><b><a class=bar1 href="users.php"><?php echo $this->_tpl_vars['lngstr']['panel_usersandgroups']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_groups'] > 0): ?>
<td align=center><b><a class=bar1 href="groups.php"><?php echo $this->_tpl_vars['lngstr']['panel_usersandgroups']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_config'] > 0): ?>
<td align=center><b><a class=bar1 href="config.php"><?php echo $this->_tpl_vars['lngstr']['panel_usersandgroups']; ?>
</a></b></td>
<?php elseif ($_SESSION['MAIN']['access_visitors'] > 0): ?>
<td align=center><b><a class=bar1 href="visitors.php"><?php echo $this->_tpl_vars['lngstr']['panel_usersandgroups']; ?>
</a></b></td>
<?php endif; ?>
<td align=center><b><a class=bar1 href="signout.php"><?php echo $this->_tpl_vars['lngstr']['panel_signout']; ?>
</a></b></td>
<td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=32></td></tr></table>
</td></tr>
<?php endif; ?>
<tr><td colspan=2 height=7 width=100%><img src="images/1x1.gif" width=1 height=7></td></tr>
<tr><td colspan=2>

<table cellpadding=0 cellspacing=0 border=0 width="100%">
<tr vAlign=top><td width="1%"><img src="images/1x1.gif" width=2 height=1></td><td>

<table cellpadding=0 cellspacing=0 border=0 width="100%">
<tr><td class=box_area>