<script type="text/javascript">

//    Autor: Rodrigo Leutz
//    Scroll com fadeIn e fadeOut

// Configurações abaixo

// Div que vai ficar com fade
      div = 'esconde';
// Tempo do fade em segundos
      tmp = 0.5;
// Quantidade de pixels abaixo do topo no scroll para o evento
      scl = 50;

</script>
<html>
  <head>

    <style>
      body{ height: 200vh;}
      #esconde{
        width: 800px;
        height: 600px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10vh;
        background-color: darkgreen;
      }
    </style>

  </head>
  <body>

    <div id="esconde"><center><h2>Div do fade</h2></center></div>

    <script type="text/javascript">
      var x ='0',y='1',uso='0';
      window.onscroll = function() {
        if(uso!=1){
          verScroll();
        }
      };
      function verScroll(){
        if((document.body.scrollTop > scl || document.documentElement.scrollTop > scl)&&(document.body.scrollTop > scl+20 || document.documentElement.scrollTop > scl+20)) { fadeOut(div,tmp); }
	      else { fadeIn(div,tmp); }
      }
      function fadeOut(div,tmp){
        if((x == '0' && y == '1' && uso != 1)==true){
          var tempo=0,opa=1,tmp=tmp*1000,uso=1;
          while (tempo<=tmp) {
            setTimeout("document.getElementById('"+div+"').style.opacity="+opa , tempo );
            opa = opa - 0.1;
            tempo = tempo + (tmp/10);
          }
          setTimeout((uso=0,x=1,y=0),tmp);
        }
      }
      function fadeIn(div,tmp){
        if((x == '1' && y == '0' && uso != 1)==true){
          var tempo=0,opa=0,tmp=tmp*1000,uso=1;
          while (tempo<=tmp) {
            setTimeout('document.getElementById("'+div+'").style.opacity='+opa , tempo );
            opa = opa + 0.1;
            tempo = tempo + (tmp/10);
          }
          setTimeout((uso=0,x=0,y=1),tmp);
        }
      }
    </script>
  </body>
</html>
