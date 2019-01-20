<meta name="theme-color" content="#46b4e4" >
<meta name="apple-mobile-web-app-status-bar-style" content="#46b4e4">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>
    <script   src="../../jquery_main.js" async></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116906161-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116906161-1');
</script>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="../../index.php"><span class="blu_span">Max</span><span class="title">ani</span></a></li>
        <li class="timetable"><a href="../../release-time.php"><svg viewBox="0 0 24 24" class="na"><path d="M14,12H15.5V14.82L17.94,16.23L17.19,17.53L14,15.69V12M4,2H18A2,2 0 0,1 20,4V10.1C21.24,11.36 22,13.09 22,15A7,7 0 0,1 15,22C13.09,22 11.36,21.24 10.1,20H4A2,2 0 0,1 2,18V4A2,2 0 0,1 4,2M4,15V18H8.67C8.24,17.09 8,16.07 8,15H4M4,8H10V5H4V8M18,8V5H12V8H18M4,13H8.29C8.63,11.85 9.26,10.82 10.1,10H4V13M15,10.15A4.85,4.85 0 0,0 10.15,15C10.15,17.68 12.32,19.85 15,19.85A4.85,4.85 0 0,0 19.85,15C19.85,12.32 17.68,10.15 15,10.15Z"></path></svg> <span class="time">schedule<span></a></li>
        <li class="searchicon"><p id="display"><img  class="ic" src="../../anime_image/search.png" alt="search"></p></li>
      </ul>
    </nav>
  </header>
 
  <div id="ne">
    <div class="overflow" id="scroll">
      <form   id="formSearch">
        <label></label>
      <input id="myInput"  autofocus name="s" autocomplete="off"   />
    </form>
    
      <table >
        <tbody id="myTable" class="myTable">
          <dir id="results">

          </dir>
      </tbody>
      </table>
      </div>
  </div>
