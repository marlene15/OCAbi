<?php	
	include("TwitterAPIExchange.php");

	//////////////////////////////////////////////////////////////////////////////////////
    //Conexión a la base de dato
    $link = mysql_connect('localhost', 'root', '')
        or die('No se pudo conectar: ' . mysql_error());
    echo 'Conexion Exitosa de la base de datos';
    mysql_select_db('ocatwitt') or die('No se pudo seleccionar la base de datos');
    mysql_set_charset('utf8'); //Para guardar los datos correctamente, acentos y ñ
    //////////////////////////////////////////////////////////////////////////////////////

    date_default_timezone_set("Mexico/General" ); //Establecemos la zona horaria
    $fecha = date("Y").'-'.date('m').'-'.date("d");
    $hora = date("H").':'.date("i").':'.date("s");    

    $existe_fecha = mysql_query("SELECT fecha FROM cuentas WHERE fecha='$fecha'");
    $ray = mysql_num_rows($existe_fecha); //Cuenta los resultados para verificar si existe la fecha
    if ($ray > 0 )
    {
        echo "<br> Elimina Fechas repetidas <br>";
        $elimina_fechas_repetidas = mysql_query("DELETE FROM cuentas WHERE fecha='$fecha'");
        echo "<br>ERROR AL ELIMINAR FECHAS REPETIDAS: ".mysql_error()."<br>";
        guardar();
    }
    else{
        guardar();
    }

    function guardar()
    {
        $settings = array(
            'oauth_access_token' => "2985011357-Mx6flHxVqmht0Fr6DySCVPHR0ojDR0vcyWzE2U8",
            'oauth_access_token_secret' => "owBoVYnPuAIkQDMYrTBpAjMg9BPoaJ3S2PpIbTy7oMcQx",
            'consumer_key' => "LpLLV5ciE4XPSdGC3cIlSsR5F",
            'consumer_secret' => "VWcrkptV38Pn57k925eZtQ2i1zAZ9sIVT9FObMvsR7rQ0ILCuQ"
        );

        //Recurso del API que queremos consultar
        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';   
        $requestMethod = 'GET';

        //PRI
        $pri_colima = '?screen_name=PRI_Colima&count=1'; 
        $jips = '?screen_name=JIPS2015&count=1'; 
        $jipsColima = '?screen_name=JIPSColima&count=1'; 
        $jipsvdea = '?screen_name=jipsvdea&count=1';    
        $selfie_nacho = '?screen_name=MiSelfiecoNacho&count=1'; 

        //VERDE
        $verde = '?screen_name=ColPartidoVerde&count=1';

        //PAN
        $pan = '?screen_name=PANDColima&count=1';

        //MOVIMIENTO CIUDADANO
        $movimiento_ciudadano = '?screen_name=MovCiudadanoCol&count=1';

        //PRD
        $prd = '?screen_name=PRDcolima&count=1';

        //PT
        $pt = '?screen_name=PT_Colima&count=1';

        //MORENA
        $morena = '?screen_name=MorenaColima1&count=1';

        //COMO VAMOS COLIMA
        $comov = '?screen_name=Comovamoscolima&count=1';

        $twitter = new TwitterAPIExchange($settings); //Objeto del tipo API de la clase que importamos en la parte de arriva
        
        #PRI
        $pri_colima = json_decode($twitter->setGetfield($pri_colima)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $jips = json_decode($twitter->setGetfield($jips)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $jipsColima = json_decode($twitter->setGetfield($jipsColima)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $jipsvdea = json_decode($twitter->setGetfield($jipsvdea)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $selfie_nacho = json_decode($twitter->setGetfield($selfie_nacho)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        #VERDE
        $verde = json_decode($twitter->setGetfield($verde)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        #PAN
        $pan = json_decode($twitter->setGetfield($pan)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        #MOVIMIENTO CIUDADANO
        $movimiento_ciudadano = json_decode($twitter->setGetfield($movimiento_ciudadano)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        #PRD
        $prd = json_decode($twitter->setGetfield($prd)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        #PT
        $pt = json_decode($twitter->setGetfield($pt)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        #MORENA
        $morena = json_decode($twitter->setGetfield($morena)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        #COMO VAMOS COLIMA
        $comov = json_decode($twitter->setGetfield($comov)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        date_default_timezone_set("Mexico/General" ); //Establecemos la zona horaria
        $fecha = date("Y").'-'.date('m').'-'.date("d");
        $hora = date("H").':'.date("i").':'.date("s");

        #PRI
        $pri_col_usuario = $pri_colima[0]['user']['screen_name'];
        $pri_col_seguidores = $pri_colima[0]['user']['followers_count'];
        $pri_col_siguiendo = $pri_colima[0]['user']['friends_count'];
        $pri_col_tweets = $pri_colima[0]['user']['statuses_count'];

        $jips_usuario = $jips[0]['user']['screen_name'];
        $jips_seguidores = $jips[0]['user']['followers_count'];
        $jips_siguiendo = $jips[0]['user']['friends_count'];
        $jips_tweets = $jips[0]['user']['statuses_count'];

        $jipsCol_usuario = $jipsColima[0]['user']['screen_name'];
        $jipsCol_seguidores = $jipsColima[0]['user']['followers_count'];
        $jipsCol_siguiendo = $jipsColima[0]['user']['friends_count'];
        $jipsCol_tweets = $jipsColima[0]['user']['statuses_count'];

        $jipsv_usuario = $jipsvdea[0]['user']['screen_name'];
        $jipsv_seguidores = $jipsvdea[0]['user']['followers_count'];
        $jipsv_siguiendo = $jipsvdea[0]['user']['friends_count'];
        $jipsv_tweets = $jipsvdea[0]['user']['statuses_count'];

        $selN_usuario = $selfie_nacho[0]['user']['screen_name'];
        $selN_seguidores = $selfie_nacho[0]['user']['followers_count'];
        $selN_siguiendo = $selfie_nacho[0]['user']['friends_count'];
        $selN_tweets = $selfie_nacho[0]['user']['statuses_count'];

        #VERDE
        $verde_usuario = $verde[0]['user']['screen_name'];
        $verde_seguidores = $verde[0]['user']['followers_count'];
        $verde_siguiendo = $verde[0]['user']['friends_count'];
        $verde_tweets = $verde[0]['user']['statuses_count'];

        #PAN
        $pan_usuario = $pan[0]['user']['screen_name'];
        $pan_seguidores = $pan[0]['user']['followers_count'];
        $pan_siguiendo = $pan[0]['user']['friends_count'];
        $pan_tweets = $pan[0]['user']['statuses_count'];

        #MOVIMIENTO CIUDADANO
        $movc_usuario = $movimiento_ciudadano[0]['user']['screen_name'];
        $movc_seguidores = $movimiento_ciudadano[0]['user']['followers_count'];
        $movc_siguiendo = $movimiento_ciudadano[0]['user']['friends_count'];
        $movc_tweets = $movimiento_ciudadano[0]['user']['statuses_count'];

        #PRD
        $prd_usuario = $prd[0]['user']['screen_name'];
        $prd_seguidores = $prd[0]['user']['followers_count'];
        $prd_siguiendo = $prd[0]['user']['friends_count'];
        $prd_tweets = $prd[0]['user']['statuses_count'];

        #PT
        $pt_usuario = $pt[0]['user']['screen_name'];
        $pt_seguidores = $pt[0]['user']['followers_count'];
        $pt_siguiendo = $pt[0]['user']['friends_count'];
        $pt_tweets = $pt[0]['user']['statuses_count'];

        #MORENA
        $morena_usuario = $morena[0]['user']['screen_name'];
        $morena_seguidores = $morena[0]['user']['followers_count'];
        $morena_siguiendo = $morena[0]['user']['friends_count'];
        $morena_tweets = $morena[0]['user']['statuses_count'];

        #COMO VAMOS COLIMA
        $comov_usuario = $comov[0]['user']['screen_name'];
        $comov_seguidores = $comov[0]['user']['followers_count'];
        $comov_siguiendo = $comov[0]['user']['friends_count'];
        $comov_tweets = $comov[0]['user']['statuses_count'];
    
        #PRI
        $pri_colima = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$pri_col_usuario','$pri_col_seguidores','$pri_col_siguiendo','$pri_col_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL pri_colima: ".mysql_error()."<br>";

        $jips = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$jips_usuario','$jips_seguidores','$jips_siguiendo','$jips_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL jips: ".mysql_error()."<br>";

        $jipsColima = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$jipsCol_usuario','$jipsCol_seguidores','$jipsCol_siguiendo','$jipsCol_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL jipsColima: ".mysql_error()."<br>";

        $jipsvdea = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$jipsv_usuario','$jipsv_seguidores','$jipsv_siguiendo','$jipsv_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL jipsvdea: ".mysql_error()."<br>";

        $selfie_nacho = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$selN_usuario','$selN_seguidores','$selN_siguiendo','$selN_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL selfie_nacho: ".mysql_error()."<br>";
        
        #VERDE
        $verde = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$verde_usuario','$verde_seguidores','$verde_siguiendo','$verde_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL verde: ".mysql_error()."<br>";

        #PAN
        $pan = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$pan_usuario','$pan_seguidores','$pan_siguiendo','$pan_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL pan: ".mysql_error()."<br>";

        #MOVIMIENTO CIUDADANO
        $movimiento_ciudadano = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$movc_usuario','$movc_seguidores','$movc_siguiendo','$movc_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL movimiento_ciudadano: ".mysql_error()."<br>";

        #PRD
        $prd = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$prd_usuario','$prd_seguidores','$prd_siguiendo','$prd_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL prd: ".mysql_error()."<br>";

        #PT
        $pt = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$pt_usuario','$pt_seguidores','$pt_siguiendo','$pt_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL pt: ".mysql_error()."<br>";

        #MORENA
        $morena = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$morena_usuario','$morena_seguidores','$morena_siguiendo','$morena_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL morena: ".mysql_error()."<br>";

        #COMO VAMOS COLIMA
        $comov = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$comov_usuario','$comov_seguidores','$comov_siguiendo','$comov_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL como vamos colima: ".mysql_error()."<br>";
    }

    //Cerrar conexión de la base de datos
    mysql_close($link);   
?>