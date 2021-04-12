<!DOCTYPE html>
ala<html>  
  <head>
    <!--  en primeras líneas de código estamos llamando a las dos librerías de Aframe y ARJS. --> 
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script> 
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  </head>   
     <!--  En la sección de <body> agregaremos la escena de AR y además iremos incluyendo el archivo de GLb. --> 
  <body>
    <!-- Scene embedded será el lanzador de la realidad aumentada--> 
    <a-scene embedded arjs>
<<<<<<< HEAD:obj.php
      <a-entity scale=" .7 .7 .7"> 
        <a-entity gltf-model="ob.glb" rotation="0 9 10" crossOrigin="anonymous"></a-entity>
=======
      <a-entity scale=".7 .7 .7"> 
        <a-entity gltf-model="ob.glb" rotation="90 0 10" crossOrigin="anonymous"></a-entity>
>>>>>>> 85f84d3803de7442dbaa08f3c10bd41db0602abc:index.php
        <a-marker-camera preset='hiro'></a-marker-camera>
        </a-scene>
      </body>
    </html>
