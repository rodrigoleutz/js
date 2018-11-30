<!--

    Autor: Rodrigo Leutz
    Menu que sobe e fixa com fadeIn quando se da scroll para baixo da página

-->
<html>
<head>
  <style>
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
    }
    body{
      height: 200vh;
    }
    #menu{
      width: 50vw;
      height: 200px;
      margin-top: 20px;
      margin-left: auto;
      margin-right: auto;
      background-color: darkblue;
      -webkit-animation-name: aparecendo;
      -webkit-animation-duration: 2s;
      -webkit-animation-iteration-count: 1;
      -webkit-animation-direction: single;
    }
    #menu-cima{
      display: none;
      width: 100vw;
      height: 50px;
      margin-top: 0px;
      background-color: darkblue;
      -webkit-animation-name: aparecendo;
      -webkit-animation-duration: 2s;
      -webkit-animation-iteration-count: 1;
      -webkit-animation-direction: single;
    }
    @-webkit-keyframes aparecendo {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <div id="menu-cima"></div>
  <div id="menu"></div>

  <script type="text/javascript">
    var scl=70;
    var div="menu";
    var div1 ="menu-cima"
    window.onscroll = function() {
      verScroll();
    };
    function verScroll(){
      if(document.body.scrollTop > scl || document.documentElement.scrollTop > scl) { sobe(); }
      else { desce(); }
    }
    function sobe(){
      document.getElementById(div1).style.display='inline-flex';
      document.getElementById(div1).style.position='fixed';
      document.getElementById(div).style.display='none';
    }
    function desce(){
      document.getElementById(div1).style.display='none';
      document.getElementById(div).style.display='block';
    }
  </script>

</body>
</html>
