<?php
//CONSUMIR UNA API CON PHP

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";                 /*se ingresa la url a una variable, esta url contiene
                                                                                    inforamación en formato json*/

$options = array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));   /*se crea una variable, donde se ingresa un arreglo con
                                                                                    las opciones verify_peer y verify_peer_name, esto para poder
                                                                                    leer la información que contiene la variable ya que estan con
                                                                                    la seguridad de https, para hacer la lectura se necesitan
                                                                                    dejar las opociones en false*/

$respuesta = file_get_contents($url, false, stream_context_create($options));       /*con esta funcion, se une la variable de la URL junto con
                                                                                    la de options para poder asi leer el archivo*/

$objRespuesta = json_decode($respuesta);                                            /*se recibe la variable anterior y se decodifica con decode*/

?>

<ul>
    <?php foreach($objRespuesta->list as $video){ ?>                               <!--este ciclo nos permite ingresar los datos que seleccionemos
                                                                                    en una lista, en este caso el titulo y el canal y los imprime
                                                                                    todos, si no hicieramos el ciclo, se imprimiría todo el
                                                                                    contenido dentro del array que contiene la URL -->  
    <li><?php print_r($video->title);?> | <?php print_r($video->channel);?></li>
    <?php }?>

</ul>