.<?php
   	
 $destino = "teleworldcordoba@gmail.com";
   $usuario = $_POST["usuario"];
   $cableNegro = $_POST["cableNegro"];
   $cableBlanco = $_POST["cableBlanco"];
   $cableUTP = $_POST["cableUTP"];
   $conectorRG6 = $_POST["conectorRG6"];
   $conectorRG59 = $_POST["conectorRG59"];
   $conectorRJ45 = $_POST["conectorRJ45"];
   $adaptadorHH = $_POST["adaptadorHH"];
   $adaptadorDIN = $_POST["adaptadorDIN"];
   $aerosellos = $_POST["aerosellos"];
   $divisor2vias = $_POST["divisor2vias"];
   $divisor3vias = $_POST["divisor3vias"];
   $divisor4vias = $_POST["divisor4vias"];
   $aco12db = $_POST["aco12db"];
   $aco9dbl = $_POST["aco9dbl"];
   $aco6dbl = $_POST["aco6dbl"];
   $aco9dbh = $_POST["aco9dbh"];
   $aco6dbh = $_POST["aco6dbh"];
   $kitflow = $_POST["kitflow"];
   $kithd = $_POST["kithd"];
   $kitdct = $_POST["kitdct"];
   $grampaBlanca = $_POST["grampaBlanca"];
   $grampaNegras = $_POST["grampaNegras"];
   $precinto = $_POST["precinto"];
   $precintoRojo = $_POST["precintoRojo"];
   $precintoAzul = $_POST["precintoAzul"];
   $ate10db = $_POST["ate10db"];
   $ate3db = $_POST["ate3db"];
   $ate6db = $_POST["ate6db"];
   $ate8db = $_POST["ate8db"];
   $cintavulcan = $_POST["cintavulcan"];
   $sellador = $_POST["sellador"];
   $filtroMarron = $_POST["filtroMarron"];
   $filtroNaranja = $_POST["filtroNaranja"];
   $piton8 = $_POST["piton8"];
   $tarugo8 = $_POST["tarugo8"];
   $piton6 = $_POST["piton6"];
   $tarugo6 = $_POST["tarugo6"];
      
      $contenido = 
      "Usuario : ". $usuario.
      "\n Cable Negro : " . $cableNegro .
      "\n Cable Blanco : " . $cableBlanco . 
      "\n Cable UTP : " . $cableUTP . 
      "\n Conector RG 6 : " . $conectorRG6 . 
      "\n Conector RG 59 : " . $conectorRG59 . 
      "\n Conector RJ 45: " . $conectorRJ45 . 
      "\n Adaptador HH : " . $adaptadorHH . 
      "\n Adaptador DIN : " . $adaptadorDIN . 
      "\n Aerosellos : " . $aerosellos . 
      "\n Divisor 2 vias : " . $divisor2vias . 
      "\n Divisor 3 vias : " . $divisor3vias . 
      "\n Divisor 4 vias : " . $divisor4vias . 
      "\n Acoplador 12 DB L : " . $aco12db . 
      "\n Acoplador 9 DB L : " . $aco9dbl . 
      "\n Acoplador 6 DB L : " . $aco6dbl . 
      "\n Acoplador 9 DB H : " . $aco9dbh . 
      "\n Acoplador 6 DB H : " . $aco6dbh . 
      "\n Kit Deco Flow : " . $kitflow . 
      "\n Kit Deco HD : " . $kithd . 
      "\n Kit Deco DCT : " . $kitdct . 
      "\n Grampas Blancas : " . $grampaBlanca . 
      "\n Grampas Negras : ". $grampaNegras . 
      "\n Precintos Negros : ". $precinto . 
      "\n Precintos Rojos : " . $precintoRojo . 
      "\n Precintos Azul : ". $precintoAzul . 
      "\n Atenuador 10 DB : " . $ate10db . 
      "\n Atenuador 3 DB : ". $ate3db . 
      "\n Atenuador 6 DB : " . $ate6db .
      "\n Atenuador 8 DB : ". $ate8db . 
      "\n Cinta Autovulcanizante : " . $cintavulcan . 
      "\n Sellador : " . $sellador . 
      "\n Filtro Marron : " . $filtroMarron . 
      "\n Filtro Narranja : " . $filtroNaranja . 
      "\n Pinton Nº8 : " . $piton8 . 
      "\n Tarugo Nº8 : " . $tarugo8 . 
      "\n Pinton Nº6 : " . $piton6 . 
      "\n Tarugo Nº6 : " . $tarugo6 ;
      
      
      @mail($destino, $usuario, $contenido);
         if (@mail) {
            echo "<h1>SOTCK ENVIADO EXITOSAMENTE </h1>";
         }
 ?>
