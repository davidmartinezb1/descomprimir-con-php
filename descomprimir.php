<?php

function descomprimir($origen, $destino) {
  $string = implode("", gzfile($origen));
  $fp = fopen($destino, "w");
  fwrite($fp, $string, strlen($string));
  fclose($fp);
}
descomprimir("archivo.gz", "archivo2.txt");


/*

https://descargas2016.registraduria.gov.co/c99descargas/DE/AVA_PLE_DE_0003_1004.xml.gz
https://descargas2016.registraduria.gov.co/c99descargas/DE/AVA_PLE_DE_0003_2985.xml.gz



curl --user prensa50c4:eive4Oot https://descargas2016.registraduria.gov.co/
curl -O https://descargas2016.registraduria.gov.co/c99descargas/DE/AVA_PLE_DE_0003_1004.xml.gz


prensacolombia@indracompany.com

*/