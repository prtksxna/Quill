<!doctype html>
<html lang="en">
  <head>
    <title><?= $this->title ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="pingback" href="http://webmention.io/aaronpk/xmlrpc" />
    <link rel="webmention" href="http://webmention.io/aaronpk/webmention" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/images/quill-icon-57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/quill-icon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/quill-icon-114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/quill-icon-144.png">

    <script src="/js/jquery-1.7.1.min.js"></script>
  </head>

<body role="document">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?= Config::$gaid ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<div class="page">

  <div class="container">
    <?= $this->fetch($this->page . '.php') ?>
  </div>

  <div class="footer">
    <div class="nav">
      <ul class="nav navbar-nav">

        <? if(session('me')) { ?>
          <li><a href="/new">New Post</a></li>
        <? } ?>

        <li><a href="/docs">Docs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <? if(session('me')) { ?>
          <li><a href="/add-to-home?start">Add to Home Screen</a></li>
          <li><span class="navbar-text"><?= preg_replace('/https?:\/\//','',session('me')) ?></span></li>
          <li><a href="/signout">Sign Out</a></li>
        <? } else if(property_exists($this, 'authorizing')) { ?>
          <li class="navbar-text"><?= $this->authorizing ?></li>
        <? } else { ?>
          <form action="/auth/start" method="get" class="navbar-form">
            <input type="text" name="me" placeholder="yourdomain.com" class="form-control" />
            <button type="submit" class="btn">Sign In</button>
            <input type="hidden" name="redirect_uri" value="https://<?= $_SERVER['SERVER_NAME'] ?>/indieauth" />
          </form>
        <? } ?>

      </ul>
    </div>

    <p class="credits">&copy; <?=date('Y')?> by <a href="http://aaronparecki.com">Aaron Parecki</a>.
      This code is <a href="https://github.com/aaronpk/Quill">open source</a>. 
      Feel free to send a pull request, or <a href="https://github.com/aaronpk/Quill/issues">file an issue</a>.</p>
  </div>
</div>

</body>
</html>