<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{@TITLE}</title>
  <meta name="robots" content="{@ROBOTS}">
  <meta property="og:description" content="{@OGDESCRIPTION}">
  <meta property="og:title" content="{@OGTITLE}">
  <meta property="og:type" content="website">
  <meta property="og:image" href="{@OGIMAGE}">
  <meta property="og:url" href="{@OGURL}">
  <link rel="stylesheet" media="screen and (max-width: 480px)" href="Site/Theme/css/mobile.css">
  <link rel="stylesheet" media="screen and (min-width: 481px)" href="Site/Theme/css/desktop.css">
  <link rel="stylesheet" href="Site/Theme/css/{@THEME}">
  <link rel="shortcut icon" type="image/x-icon" href="{@FAVICON}">
  <script src="{@FONTAWESOME}"></script>
</head>
  <body>
    <div class="wrapper">
      <section id="header" class="section group">
        <header class="col col_4 header">
          {@HEADER}
          <span class="fa fa-home" style="font-size:3em"></span>
        </header>
      </section>
    <section id="body" class="section group">
      <main>
        <article class="col col_3">
          {@BODY}
        </article>
      </main>
      <aside class="col col_1">
        {@SIDEBAR}
      </aside>
    </section>
    </div>
 <section id="footer" class="section group">
   <footer class="col col_4 footer">
     {@FOOTER}
   </footer>
 </section>
 <script src="{@JQUERY}"></script>
 <script src="{@MENU}"></script>
  </body>
  </html>
