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
        guardar_cuentas();
    }
    else{
        guardar_cuentas();      
    }

    function guardar_cuentas()
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

        //Gobernadores
        $leoncio = '?screen_name=leonciomoranL8&count=1'; //Variable, con patron url (Twitter de Locho Moran)
        $nacho = '?screen_name=nachoperaltacol&count=1'; //Variable, con patron url  (Twitter de nacho peralta) 
        $jorge = '?screen_name=JL_Preciado_&count=1'; //Variable, con patron url  (Twitter de nacho Jorge Luis Preciado)    
        $martha = '?screen_name=MarthaZepeda_&count=1'; //Variable, con patron url  (Twitter de nacho Martha Zepeda)    
        
        //Diputados federales
        #Distrito 1
        $jose_manuel = '?screen_name=soygp&count=1';
        $kike = '?screen_name=kikerojas007&count=1';  
        $indira = '?screen_name=indira_vizcaino&count=1'; 
        #Distrito 2 
        $norma = '?screen_name=NormaGdeV&count=1'; 
        $juan = '?screen_name=olave_nery&count=1'; 
        $cristian = '?screen_name=Cris_Bola43&count=1';

        //Alcaldias    
        #Colima
        $hector = '?screen_name=hectorinsua&count=1'; 
        $maria = '?screen_name=meabaroa&count=1'; 
        $esmeralda = '?screen_name=EsmePresidenta&count=1';
        $OVPresidente = '?screen_name=OVPresidente&count=1';
        #Manzanillo
        $pico = '?screen_name=PicoZepeda&count=1'; 
        $marcos = '?screen_name=BarajasYescas&count=1';
        $romo_ochoa = '?screen_name=romo_ochoa&count=1';
        #Villa de álvarez
        $yulenny = '?screen_name=Yulenny_Cortes&count=1'; 
        $oswy = '?screen_name=OswyDelgado&count=1';
        $JaimeSoteloG = '?screen_name=JaimeSoteloG&count=1';
        #Comala
        $salomon = '?screen_name=salo_salazar1&count=1'; 
        $mario = '?screen_name=MarioCarrillo01&count=1';
        #Tecoman
        $arturo = '?screen_name=DipArturoGarcia&count=1';
        #Cuahutemoc
        $blanca = '?screen_name=BlancaPRI2015&count=1';
        $UrsuaBlanca = '?screen_name=UrsuaBlanca&count=1';
        #Minatitlan
        $manuel = '?screen_name=DipManuelPR&count=1';
        #Armeria
        $esperanza = '?screen_name=DipEsperanzaA&count=1';
        #Ixtlahuacan
        $hiram = '?screen_name=hiram1447&count=1';
        
        //Diputados Locales
        #Distrito 1
        $hilda = '?screen_name=HildaCeballos01&count=1';
        $yadiraturquesa = '?screen_name=yadiraturquesa&count=1';        
        #Distrito 2
        $guillermo = '?screen_name=Rangel_G_&count=1';
        $viviana = '?screen_name=Vivi_Ram_A&count=1';
        #Distrito 3
        $crispin = '?screen_name=crispindiputado&count=1';
        $isis = '?screen_name=isisvillasil&count=1';
        $isis2 = '?screen_name=IsisColimaVerde&count=1'; 
        $alma_deliaA = '?screen_name=AlmaDelia_D3&count=1'; 
        #Distrito 4
        $janeth = '?screen_name=JanethPazPonce&count=1';
        $juanita = '?screen_name=JuanitaAndres&count=1';
        #Distrito 5
        $jose_guadalupe = '?screen_name=LupeBenavidesF&count=1';
        #Distrito 6
        $octavio = '?screen_name=octaviotintos&count=1';
        #Distrito 7
        $sara = '?screen_name=saracernas&count=1';
        $joel = '?screen_name=JoelPadilla2012&count=1';
        #Distrito 8
        $meyly = '?screen_name=MeylyPastora&count=1';
        $hector_mag = '?screen_name=hectormlara&count=1';
        #Distrito 9
        $eusebio = '?screen_name=eusebiomesina&count=1';
        #Distrito 10
        $adriana = '?screen_name=MesinaTena&count=1';
        $juan_carlos = '?screen_name=PintoRgz&count=1';
        #Distrito 11
        $armida = '?screen_name=Armida_NG&count=1';
        #Distrito 12
        $ana_maria = '?screen_name=amary_landa&count=1';
        $martha_sosa = '?screen_name=martha_sosa1&count=1';
        #Distrito 13
        $sergio = '?screen_name=Sergio_SanchezO&count=1';
        #Distrito 14
        $martha_alicia = '?screen_name=Martha_Meza_&count=1';
        #Distrito 15
        $felicitas = '?screen_name=marserranos&count=1';
        $felicitas2 = '?screen_name=FDiputada&count=1';
        #Distrito 16
        $santiago = '?screen_name=SantiagoCh2Tec&count=1';

        $twitter = new TwitterAPIExchange($settings); //Objeto del tipo API de la clase que importamos en la parte de arriva
        
        #Gobernadores
        $string1 = json_decode($twitter->setGetfield($leoncio)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string2 = json_decode($twitter->setGetfield($nacho)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string3 = json_decode($twitter->setGetfield($jorge)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string4 = json_decode($twitter->setGetfield($martha)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        #Diputados Federales
        $string5 = json_decode($twitter->setGetfield($jose_manuel)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string6 = json_decode($twitter->setGetfield($kike)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string7 = json_decode($twitter->setGetfield($indira)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string8 = json_decode($twitter->setGetfield($norma)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string9 = json_decode($twitter->setGetfield($juan)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $cristian = json_decode($twitter->setGetfield($cristian)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        #Alcaldías
        //Colima
        $string10 = json_decode($twitter->setGetfield($hector)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string11 = json_decode($twitter->setGetfield($maria)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string12 = json_decode($twitter->setGetfield($esmeralda)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $OVPresidente = json_decode($twitter->setGetfield($OVPresidente)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Manzanillo
        $string13 = json_decode($twitter->setGetfield($pico)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string14 = json_decode($twitter->setGetfield($marcos)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $romo_ochoa = json_decode($twitter->setGetfield($romo_ochoa)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Villa de álvarez
        $string15 = json_decode($twitter->setGetfield($yulenny)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string16 = json_decode($twitter->setGetfield($oswy)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $JaimeSoteloG = json_decode($twitter->setGetfield($JaimeSoteloG)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Comala
        $string17 = json_decode($twitter->setGetfield($salomon)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        $string18 = json_decode($twitter->setGetfield($mario)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Tecoman
        $string19 = json_decode($twitter->setGetfield($arturo)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Cuahutemoc
        $blanca = json_decode($twitter->setGetfield($blanca)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $UrsuaBlanca = json_decode($twitter->setGetfield($UrsuaBlanca)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Minatitlan
        $manuel = json_decode($twitter->setGetfield($manuel)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Armeria
        $string20 = json_decode($twitter->setGetfield($esperanza)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Ixtlahuacan
        $hiram = json_decode($twitter->setGetfield($hiram)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);


        #Diputados Locales
        //Distrito 1
        $hilda = json_decode($twitter->setGetfield($hilda)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $yadiraturquesa = json_decode($twitter->setGetfield($yadiraturquesa)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 2  
        $guillermo = json_decode($twitter->setGetfield($guillermo)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);  
        $viviana = json_decode($twitter->setGetfield($viviana)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 3
        $crispin = json_decode($twitter->setGetfield($crispin)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $isis = json_decode($twitter->setGetfield($isis)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $isis2 = json_decode($twitter->setGetfield($isis2)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $alma_deliaA = json_decode($twitter->setGetfield($alma_deliaA)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 4
        $janeth = json_decode($twitter->setGetfield($janeth)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $juanita = json_decode($twitter->setGetfield($juanita)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 5
        $jose_guadalupe = json_decode($twitter->setGetfield($jose_guadalupe)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 6
        $octavio = json_decode($twitter->setGetfield($octavio)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 7
        $sara = json_decode($twitter->setGetfield($sara)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $joel = json_decode($twitter->setGetfield($joel)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 8
        $meyly = json_decode($twitter->setGetfield($meyly)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $hector_mag = json_decode($twitter->setGetfield($hector_mag)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 9
        $eusebio = json_decode($twitter->setGetfield($eusebio)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 10
        $adriana = json_decode($twitter->setGetfield($adriana)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $juan_carlos = json_decode($twitter->setGetfield($juan_carlos)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 11
        $armida = json_decode($twitter->setGetfield($armida)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 12
        $ana_maria = json_decode($twitter->setGetfield($ana_maria)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $martha_sosa = json_decode($twitter->setGetfield($martha_sosa)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 13
        $sergio = json_decode($twitter->setGetfield($sergio)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 14
        $martha_alicia = json_decode($twitter->setGetfield($martha_alicia)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 15
        $felicitas = json_decode($twitter->setGetfield($felicitas)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $felicitas2 = json_decode($twitter->setGetfield($felicitas2)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        //Distrito 16    
        $santiago = json_decode($twitter->setGetfield($santiago)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);

        date_default_timezone_set("Mexico/General" ); //Establecemos la zona horaria
        $fecha = date("Y").'-'.date('m').'-'.date("d");
        $hora = date("H").':'.date("i").':'.date("s");

        #Gobernador
        $l_usuario = $string1[0]['user']['screen_name'];
        $l_seguidores = $string1[0]['user']['followers_count'];
        $l_siguiendo = $string1[0]['user']['friends_count'];
        $l_tweets = $string1[0]['user']['statuses_count'];

        $n_usuario = $string2[0]['user']['screen_name'];
        $n_seguidores = $string2[0]['user']['followers_count'];
        $n_siguiendo = $string2[0]['user']['friends_count'];
        $n_tweets = $string2[0]['user']['statuses_count'];

        $j_usuario = $string3[0]['user']['screen_name'];
        $j_seguidores = $string3[0]['user']['followers_count'];
        $j_siguiendo = $string3[0]['user']['friends_count'];
        $j_tweets = $string3[0]['user']['statuses_count'];

        // $m_usuario = $string4[0]['user']['screen_name'];
        // $m_seguidores = $string4[0]['user']['followers_count'];
        // $m_siguiendo = $string4[0]['user']['friends_count'];
        // $m_tweets = $string4[0]['user']['statuses_count'];

        #Diputados Federales
        $jm_usuario = $string5[0]['user']['screen_name'];
        $jm_seguidores = $string5[0]['user']['followers_count'];
        $jm_siguiendo = $string5[0]['user']['friends_count'];
        $jm_tweets = $string5[0]['user']['statuses_count'];

        $k_usuario = $string6[0]['user']['screen_name'];
        $k_seguidores = $string6[0]['user']['followers_count'];
        $k_siguiendo = $string6[0]['user']['friends_count'];
        $k_tweets = $string6[0]['user']['statuses_count'];

        $i_usuario = $string7[0]['user']['screen_name'];
        $i_seguidores = $string7[0]['user']['followers_count'];
        $i_siguiendo = $string7[0]['user']['friends_count'];
        $i_tweets = $string7[0]['user']['statuses_count'];

        $no_usuario = $string8[0]['user']['screen_name'];
        $no_seguidores = $string8[0]['user']['followers_count'];
        $no_siguiendo = $string8[0]['user']['friends_count'];
        $no_tweets = $string8[0]['user']['statuses_count'];

        $ju_usuario = $string9[0]['user']['screen_name'];
        $ju_seguidores = $string9[0]['user']['followers_count'];
        $ju_siguiendo = $string9[0]['user']['friends_count'];
        $ju_tweets = $string9[0]['user']['statuses_count'];

        $cr_usuario = $cristian[0]['user']['screen_name'];
        $cr_seguidores = $cristian[0]['user']['followers_count'];
        $cr_siguiendo = $cristian[0]['user']['friends_count'];
        $cr_tweets = $cristian[0]['user']['statuses_count'];

        #Alcaldias
        //Colima
        $h_usuario = $string10[0]['user']['screen_name'];
        $h_seguidores = $string10[0]['user']['followers_count'];
        $h_siguiendo = $string10[0]['user']['friends_count'];
        $h_tweets = $string10[0]['user']['statuses_count'];

        $ma_usuario = $string11[0]['user']['screen_name'];
        $ma_seguidores = $string11[0]['user']['followers_count'];
        $ma_siguiendo = $string11[0]['user']['friends_count'];
        $ma_tweets = $string11[0]['user']['statuses_count'];

        $es_usuario = $string12[0]['user']['screen_name'];
        $es_seguidores = $string12[0]['user']['followers_count'];
        $es_siguiendo = $string12[0]['user']['friends_count'];
        $es_tweets = $string12[0]['user']['statuses_count'];

        // $OVPresidente_usuario = $OVPresidente[0]['user']['screen_name'];
        // $OVPresidente_seguidores = $OVPresidente[0]['user']['followers_count'];
        // $OVPresidente_siguiendo = $OVPresidente[0]['user']['friends_count'];
        // $OVPresidente_tweets = $OVPresidente[0]['user']['statuses_count'];
        //Manzanillo
        // $p_usuario = $string13[0]['user']['screen_name'];
        // $p_seguidores = $string13[0]['user']['followers_count'];
        // $p_siguiendo = $string13[0]['user']['friends_count'];
        // $p_tweets = $string13[0]['user']['statuses_count'];

        $mar_usuario = $string14[0]['user']['screen_name'];
        $mar_seguidores = $string14[0]['user']['followers_count'];
        $mar_siguiendo = $string14[0]['user']['friends_count'];
        $mar_tweets = $string14[0]['user']['statuses_count'];

        $romo_ochoa_usuario = $romo_ochoa[0]['user']['screen_name'];
        $romo_ochoa_seguidores = $romo_ochoa[0]['user']['followers_count'];
        $romo_ochoa_siguiendo = $romo_ochoa[0]['user']['friends_count'];
        $romo_ochoa_tweets = $romo_ochoa[0]['user']['statuses_count'];
        //Villa de álvarez
        $y_usuario = $string15[0]['user']['screen_name'];
        $y_seguidores = $string15[0]['user']['followers_count'];
        $y_siguiendo = $string15[0]['user']['friends_count'];
        $y_tweets = $string15[0]['user']['statuses_count'];

        $os_usuario = $string16[0]['user']['screen_name'];
        $os_seguidores = $string16[0]['user']['followers_count'];
        $os_siguiendo = $string16[0]['user']['friends_count'];
        $os_tweets = $string16[0]['user']['statuses_count'];

        $JaimeSoteloG_usuario = $JaimeSoteloG[0]['user']['screen_name'];
        $JaimeSoteloG_seguidores = $JaimeSoteloG[0]['user']['followers_count'];
        $JaimeSoteloG_siguiendo = $JaimeSoteloG[0]['user']['friends_count'];
        $JaimeSoteloG_tweets = $JaimeSoteloG[0]['user']['statuses_count'];
        //Comala
        // $sa_usuario = $string17[0]['user']['screen_name'];
        // $sa_seguidores = $string17[0]['user']['followers_count'];
        // $sa_siguiendo = $string17[0]['user']['friends_count'];
        // $sa_tweets = $string17[0]['user']['statuses_count'];

        $mario_usuario = $string18[0]['user']['screen_name'];
        $mario_seguidores = $string18[0]['user']['followers_count'];
        $mario_siguiendo = $string18[0]['user']['friends_count'];
        $mario_tweets = $string18[0]['user']['statuses_count'];
        //Tecoman
        $ar_usuario = $string19[0]['user']['screen_name'];
        $ar_seguidores = $string19[0]['user']['followers_count'];
        $ar_siguiendo = $string19[0]['user']['friends_count'];
        $ar_tweets = $string19[0]['user']['statuses_count'];
        //Cuahutemoc
        // $bl_usuario = $blanca[0]['user']['screen_name'];
        // $bl_seguidores = $blanca[0]['user']['followers_count'];
        // $bl_siguiendo = $blanca[0]['user']['friends_count'];
        // $bl_tweets = $blanca[0]['user']['statuses_count'];

        $UrsuaBlanca_usuario = $UrsuaBlanca[0]['user']['screen_name'];
        $UrsuaBlanca_seguidores = $UrsuaBlanca[0]['user']['followers_count'];
        $UrsuaBlanca_siguiendo = $UrsuaBlanca[0]['user']['friends_count'];
        $UrsuaBlanca_tweets = $UrsuaBlanca[0]['user']['statuses_count'];
        //Minatitlan
        $manu_usuario = $manuel[0]['user']['screen_name'];
        $manu_seguidores = $manuel[0]['user']['followers_count'];
        $manu_siguiendo = $manuel[0]['user']['friends_count'];
        $manu_tweets = $manuel[0]['user']['statuses_count'];
        //Armeria
        $esp_usuario = $string20[0]['user']['screen_name'];
        $esp_seguidores = $string20[0]['user']['followers_count'];
        $esp_siguiendo = $string20[0]['user']['friends_count'];
        $esp_tweets = $string20[0]['user']['statuses_count'];
        //Ixtlahuacan
        $hi_usuario = $hiram[0]['user']['screen_name'];
        $hi_seguidores = $hiram[0]['user']['followers_count'];
        $hi_siguiendo = $hiram[0]['user']['friends_count'];
        $hi_tweets = $hiram[0]['user']['statuses_count'];

        #Diputados Locales
        //Distrito 1
        $hil_usuario = $hilda[0]['user']['screen_name'];
        $hil_seguidores = $hilda[0]['user']['followers_count'];
        $hil_siguiendo = $hilda[0]['user']['friends_count'];
        $hil_tweets = $hilda[0]['user']['statuses_count'];

        $yadiraturquesa_usuario = $yadiraturquesa[0]['user']['screen_name'];
        $yadiraturquesa_seguidores = $yadiraturquesa[0]['user']['followers_count'];
        $yadiraturquesa_siguiendo = $yadiraturquesa[0]['user']['friends_count'];
        $yadiraturquesa_tweets = $yadiraturquesa[0]['user']['statuses_count'];
        //Distrito 2
        $gui_usuario = $guillermo[0]['user']['screen_name'];
        $gui_seguidores = $guillermo[0]['user']['followers_count'];
        $gui_siguiendo = $guillermo[0]['user']['friends_count'];
        $gui_tweets = $guillermo[0]['user']['statuses_count'];

        $viv_usuario = $viviana[0]['user']['screen_name'];
        $viv_seguidores = $viviana[0]['user']['followers_count'];
        $viv_siguiendo = $viviana[0]['user']['friends_count'];
        $viv_tweets = $viviana[0]['user']['statuses_count'];
        //Distrito 3
        $cri_usuario = $crispin[0]['user']['screen_name'];
        $cri_seguidores = $crispin[0]['user']['followers_count'];
        $cri_siguiendo = $crispin[0]['user']['friends_count'];
        $cri_tweets = $crispin[0]['user']['statuses_count'];

        $isis_usuario = $isis[0]['user']['screen_name'];
        $isis_seguidores = $isis[0]['user']['followers_count'];
        $isis_siguiendo = $isis[0]['user']['friends_count'];
        $isis_tweets = $isis[0]['user']['statuses_count'];

        $isis2_usuario = $isis2[0]['user']['screen_name'];
        $isis2_seguidores = $isis2[0]['user']['followers_count'];
        $isis2_siguiendo = $isis2[0]['user']['friends_count'];
        $isis2_tweets = $isis2[0]['user']['statuses_count'];

        // $alma_deliaA_usuario = $alma_deliaA[0]['user']['screen_name'];
        // $alma_deliaA_seguidores = $alma_deliaA[0]['user']['followers_count'];
        // $alma_deliaA_siguiendo = $alma_deliaA[0]['user']['friends_count'];
        // $alma_deliaA_tweets = $alma_deliaA[0]['user']['statuses_count'];
        //Distrito 4
        // $jan_usuario = $janeth[0]['user']['screen_name'];
        // $jan_seguidores = $janeth[0]['user']['followers_count'];
        // $jan_siguiendo = $janeth[0]['user']['friends_count'];
        // $jan_tweets = $janeth[0]['user']['statuses_count'];

        // $jua_usuario = $juanita[0]['user']['screen_name'];
        // $jua_seguidores = $juanita[0]['user']['followers_count'];
        // $jua_siguiendo = $juanita[0]['user']['friends_count'];
        // $jua_tweets = $juanita[0]['user']['statuses_count'];
        //Distrito 5
        // $jos_g_usuario = $jose_guadalupe[0]['user']['screen_name'];
        // $jos_g_seguidores = $jose_guadalupe[0]['user']['followers_count'];
        // $jos_g_siguiendo = $jose_guadalupe[0]['user']['friends_count'];
        // $jos_g_tweets = $jose_guadalupe[0]['user']['statuses_count'];
        //Distrito 6
        $oc_usuario = $octavio[0]['user']['screen_name'];
        $oc_seguidores = $octavio[0]['user']['followers_count'];
        $oc_siguiendo = $octavio[0]['user']['friends_count'];
        $oc_tweets = $octavio[0]['user']['statuses_count'];
        //Distrito 7
        $sar_usuario = $sara[0]['user']['screen_name'];
        $sar_seguidores = $sara[0]['user']['followers_count'];
        $sar_siguiendo = $sara[0]['user']['friends_count'];
        $sar_tweets = $sara[0]['user']['statuses_count'];

        $joel_usuario = $joel[0]['user']['screen_name'];
        $joel_seguidores = $joel[0]['user']['followers_count'];
        $joel_siguiendo = $joel[0]['user']['friends_count'];
        $joel_tweets = $joel[0]['user']['statuses_count'];
        //Distrito 8
        $mey_usuario = $meyly[0]['user']['screen_name'];
        $mey_seguidores = $meyly[0]['user']['followers_count'];
        $mey_siguiendo = $meyly[0]['user']['friends_count'];
        $mey_tweets = $meyly[0]['user']['statuses_count'];

        $hec_usuario = $hector_mag[0]['user']['screen_name'];
        $hec_seguidores = $hector_mag[0]['user']['followers_count'];
        $hec_siguiendo = $hector_mag[0]['user']['friends_count'];
        $hec_tweets = $hector_mag[0]['user']['statuses_count'];
        //Distrito 9
        $eus_usuario = $eusebio[0]['user']['screen_name'];
        $eus_seguidores = $eusebio[0]['user']['followers_count'];
        $eus_siguiendo = $eusebio[0]['user']['friends_count'];
        $eus_tweets = $eusebio[0]['user']['statuses_count'];
        //Distrito 10
        $adr_usuario = $adriana[0]['user']['screen_name'];
        $adr_seguidores = $adriana[0]['user']['followers_count'];
        $adr_siguiendo = $adriana[0]['user']['friends_count'];
        $adr_tweets = $adriana[0]['user']['statuses_count'];

        // $jua_ca_usuario = $juan_carlos[0]['user']['screen_name'];
        // $jua_ca_seguidores = $juan_carlos[0]['user']['followers_count'];
        // $jua_ca_siguiendo = $juan_carlos[0]['user']['friends_count'];
        // $jua_ca_tweets = $juan_carlos[0]['user']['statuses_count'];
        //Distrito 11
        $arm_usuario = $armida[0]['user']['screen_name'];
        $arm_seguidores = $armida[0]['user']['followers_count'];
        $arm_siguiendo = $armida[0]['user']['friends_count'];
        $arm_tweets = $armida[0]['user']['statuses_count'];
        //Distrito 12
        // $ana_maria_usuario = $ana_maria[0]['user']['screen_name'];
        // $ana_maria_seguidores = $ana_maria[0]['user']['followers_count'];
        // $ana_maria_siguiendo = $ana_maria[0]['user']['friends_count'];
        // $ana_maria_tweets = $ana_maria[0]['user']['statuses_count'];

        $martha_sosa_usuario = $martha_sosa[0]['user']['screen_name'];
        $martha_sosa_seguidores = $martha_sosa[0]['user']['followers_count'];
        $martha_sosa_siguiendo = $martha_sosa[0]['user']['friends_count'];
        $martha_sosa_tweets = $martha_sosa[0]['user']['statuses_count'];
        //Distrito 13
        $ser_usuario = $sergio[0]['user']['screen_name'];
        $ser_seguidores = $sergio[0]['user']['followers_count'];
        $ser_siguiendo = $sergio[0]['user']['friends_count'];
        $ser_tweets = $sergio[0]['user']['statuses_count'];
        //Distrito 14
        $martha_a_usuario = $martha_alicia[0]['user']['screen_name'];
        $martha_a_seguidores = $martha_alicia[0]['user']['followers_count'];
        $martha_a_siguiendo = $martha_alicia[0]['user']['friends_count'];
        $martha_a_tweets = $martha_alicia[0]['user']['statuses_count'];
        //Distrito 15
        $fel_usuario = $felicitas[0]['user']['screen_name'];
        $fel_seguidores = $felicitas[0]['user']['followers_count'];
        $fel_siguiendo = $felicitas[0]['user']['friends_count'];
        $fel_tweets = $felicitas[0]['user']['statuses_count'];

        $fel2_usuario = $felicitas2[0]['user']['screen_name'];
        $fel2_seguidores = $felicitas2[0]['user']['followers_count'];
        $fel2_siguiendo = $felicitas2[0]['user']['friends_count'];
        $fel2_tweets = $felicitas2[0]['user']['statuses_count'];
        //Distrito 16
        $sant_usuario = $santiago[0]['user']['screen_name'];
        $sant_seguidores = $santiago[0]['user']['followers_count'];
        $sant_siguiendo = $santiago[0]['user']['friends_count'];
        $sant_tweets = $santiago[0]['user']['statuses_count'];

        #Gobernadores
        echo "<br> Gobernadores <br>";
        $leoncio = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$l_usuario','$l_seguidores','$l_siguiendo','$l_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL leoncio: ".mysql_error()."<br>";

        $nacho = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$n_usuario','$n_seguidores','$n_siguiendo','$n_tweets','$fecha','$hora')");
        echo "ERROR MYSQL nacho: ".mysql_error()."<br>";

        $jorge = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$j_usuario','$j_seguidores','$j_siguiendo','$j_tweets','$fecha','$hora')");
        echo "ERROR MYSQL jorge: ".mysql_error()."<br>";

        // $martha = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
        //                     VALUES ('','$m_usuario','$m_seguidores','$m_siguiendo','$m_tweets','$fecha','$hora')");
        // echo "ERROR MYSQL martha: ".mysql_error()."<br>";

        #Diputados Federales
        echo "<br> Diputados Federales <br>";
        $jose_manuel = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$jm_usuario','$jm_seguidores','$jm_siguiendo','$jm_tweets','$fecha','$hora')");
        echo "ERROR MYSQL jose_manuel: ".mysql_error()."<br>";

        $kike = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$k_usuario','$k_seguidores','$k_siguiendo','$k_tweets','$fecha','$hora')");
        echo "ERROR MYSQL kike: ".mysql_error()."<br>";

        $indira = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$i_usuario','$i_seguidores','$i_siguiendo','$i_tweets','$fecha','$hora')");
        echo "ERROR MYSQL indira: ".mysql_error()."<br>";

        $norma = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$no_usuario','$no_seguidores','$no_siguiendo','$no_tweets','$fecha','$hora')");
        echo "ERROR MYSQL norma: ".mysql_error()."<br>";

        $juan = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$ju_usuario','$ju_seguidores','$ju_siguiendo','$ju_tweets','$fecha','$hora')");
        echo "ERROR MYSQL juan: ".mysql_error()."<br>";

        $cristian = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$cr_usuario','$cr_seguidores','$cr_siguiendo','$cr_tweets','$fecha','$hora')");
        echo "ERROR MYSQL juan: ".mysql_error()."<br>";

        #Alcaldias
        echo "<br> Alcaldias <br>";
        //Colima
        $hector = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$h_usuario','$h_seguidores','$h_siguiendo','$h_tweets','$fecha','$hora')");
        echo "ERROR MYSQL hector: ".mysql_error()."<br>";

        $maria = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$ma_usuario','$ma_seguidores','$ma_siguiendo','$ma_tweets','$fecha','$hora')");
        echo "ERROR MYSQL maria: ".mysql_error()."<br>";

        $esmeralda = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$es_usuario','$es_seguidores','$es_siguiendo','$es_tweets','$fecha','$hora')");
        echo "ERROR MYSQL esmeralda: ".mysql_error()."<br>";

        // $OVPresidente = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
        //                     VALUES ('','$OVPresidente_usuario','$OVPresidente_seguidores','$OVPresidente_siguiendo','$OVPresidente_tweets','$fecha','$hora')");
        // echo "ERROR MYSQL OVPresidente: ".mysql_error()."<br>";
        
        //Manzanillo
        // $pico = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
        //                     VALUES ('','$p_usuario','$p_seguidores','$p_siguiendo','$p_tweets','$fecha','$hora')");
        // echo "ERROR MYSQL pico: ".mysql_error()."<br>";

        $marcos = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$mar_usuario','$mar_seguidores','$mar_siguiendo','$mar_tweets','$fecha','$hora')");
        echo "ERROR MYSQL marcos: ".mysql_error()."<br>";

        $romo_ochoa = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$romo_ochoa_usuario','$romo_ochoa_seguidores','$romo_ochoa_siguiendo','$romo_ochoa_tweets','$fecha','$hora')");
        echo "ERROR MYSQL romo_ochoa: ".mysql_error()."<br>";
        //Villa de álvarez
        $yulenny = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$y_usuario','$y_seguidores','$y_siguiendo','$y_tweets','$fecha','$hora')");
        echo "ERROR MYSQL yulenny: ".mysql_error()."<br>";

        $oswy = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$os_usuario','$os_seguidores','$os_siguiendo','$os_tweets','$fecha','$hora')");
        echo "ERROR MYSQL oswy: ".mysql_error()."<br>";

        $JaimeSoteloG = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$JaimeSoteloG_usuario','$JaimeSoteloG_seguidores','$JaimeSoteloG_siguiendo','$JaimeSoteloG_tweets','$fecha','$hora')");
        echo "ERROR MYSQL JaimeSoteloG: ".mysql_error()."<br>";
        //Comala
        // $salomon = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
        //                     VALUES ('','$sa_usuario','$sa_seguidores','$sa_siguiendo','$sa_tweets','$fecha','$hora')");
        // echo "ERROR MYSQL salomon: ".mysql_error()."<br>";

        $mario = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$mario_usuario','$mario_seguidores','$mario_siguiendo','$mario_tweets','$fecha','$hora')");
        echo "ERROR MYSQL mario: ".mysql_error()."<br>";
        //Tecoman
        $arturo = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$ar_usuario','$ar_seguidores','$ar_siguiendo','$ar_tweets','$fecha','$hora')");
        echo "ERROR MYSQL arturo: ".mysql_error()."<br>";
        //Cuahutemoc
        // $blanca = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
        //                     VALUES ('','$bl_usuario','$bl_seguidores','$bl_siguiendo','$bl_tweets','$fecha','$hora')");
        // echo "ERROR MYSQL blanca: ".mysql_error()."<br>";

        $UrsuaBlanca = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$UrsuaBlanca_usuario','$UrsuaBlanca_seguidores','$UrsuaBlanca_siguiendo','$UrsuaBlanca_tweets','$fecha','$hora')");
        echo "ERROR MYSQL UrsuaBlanca: ".mysql_error()."<br>";
        //Minatitlan
        $manuel = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$manu_usuario','$manu_seguidores','$manu_siguiendo','$manu_tweets','$fecha','$hora')");
        echo "ERROR MYSQL manuel: ".mysql_error()."<br>";
        //Armeria
        $esperanza = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$esp_usuario','$esp_seguidores','$esp_siguiendo','$esp_tweets','$fecha','$hora')");
        echo "ERROR MYSQL esperanza: ".mysql_error()."<br>";
        //Ixtlahuacan
        $hiram = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$hi_usuario','$hi_seguidores','$hi_siguiendo','$hi_tweets','$fecha','$hora')");
        echo "ERROR MYSQL hiram: ".mysql_error()."<br>";

        #Diputados Locales
        echo "<br> Diputados Locales <br>";
        //Distrito 1
        $hilda = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$hil_usuario','$hil_seguidores','$hil_siguiendo','$hil_tweets','$fecha','$hora')");
        echo "ERROR MYSQL hilda: ".mysql_error()."<br>";
        $yadiraturquesa = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$yadiraturquesa_usuario','$yadiraturquesa_seguidores','$yadiraturquesa_siguiendo','$yadiraturquesa_tweets','$fecha','$hora')");
        echo "ERROR MYSQL yadiraturquesa: ".mysql_error()."<br>";
        //Distrito 2
        $guillermo = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$gui_usuario','$gui_seguidores','$gui_siguiendo','$gui_tweets','$fecha','$hora')");
        echo "ERROR MYSQL guillermo: ".mysql_error()."<br>";

        $viviana = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$viv_usuario','$viv_seguidores','$viv_siguiendo','$viv_tweets','$fecha','$hora')");
        echo "ERROR MYSQL viviana: ".mysql_error()."<br>";
        //Distrito 3
        $crispin = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$cri_usuario','$cri_seguidores','$cri_siguiendo','$cri_tweets','$fecha','$hora')");
        echo "ERROR MYSQL crispin: ".mysql_error()."<br>";

        $isis = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$isis_usuario','$isis_seguidores','$isis_siguiendo','$isis_tweets','$fecha','$hora')");
        echo "ERROR MYSQL isis: ".mysql_error()."<br>";
        
        $isis2 = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$isis2_usuario','$isis2_seguidores','$isis2_siguiendo','$isis2_tweets','$fecha','$hora')");
        echo "ERROR MYSQL isis2: ".mysql_error()."<br>";

        // $alma_deliaA = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
        //                     VALUES ('','$alma_deliaA_usuario','$alma_deliaA_seguidores','$alma_deliaA_siguiendo','$alma_deliaA_tweets','$fecha','$hora')");
        // echo "ERROR MYSQL alma_deliaA: ".mysql_error()."<br>";
        //Distrito 4
        // $janeth = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
        //                     VALUES ('','$jan_usuario','$jan_seguidores','$jan_siguiendo','$jan_tweets','$fecha','$hora')");
        // echo "ERROR MYSQL janeth: ".mysql_error()."<br>";

        // $juanita = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
        //                     VALUES ('','$jua_usuario','$jua_seguidores','$jua_siguiendo','$jua_tweets','$fecha','$hora')");
        // echo "ERROR MYSQL juanita: ".mysql_error()."<br>";
        //Distrito 5
        // $jose_guadalupe = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
        //                     VALUES ('','$jos_g_usuario','$jos_g_seguidores','$jos_g_siguiendo','$jos_g_tweets','$fecha','$hora')");
        // echo "ERROR MYSQL jose_guadalupe: ".mysql_error()."<br>";
        //Distrito 6
        $octavio = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$oc_usuario','$oc_seguidores','$oc_siguiendo','$oc_tweets','$fecha','$hora')");
        echo "ERROR MYSQL octavio: ".mysql_error()."<br>";
        //Distrito 7
        $sara = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$sar_usuario','$sar_seguidores','$sar_siguiendo','$sar_tweets','$fecha','$hora')");
        echo "ERROR MYSQL sara: ".mysql_error()."<br>";

        $joel = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$joel_usuario','$joel_seguidores','$joel_siguiendo','$joel_tweets','$fecha','$hora')");
        echo "ERROR MYSQL joel: ".mysql_error()."<br>";
        //Distrito 8
        $meyly = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$mey_usuario','$mey_seguidores','$mey_siguiendo','$mey_tweets','$fecha','$hora')");
        echo "ERROR MYSQL meyly: ".mysql_error()."<br>";

        $hector_mag = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$hec_usuario','$hec_seguidores','$hec_siguiendo','$hec_tweets','$fecha','$hora')");
        echo "ERROR MYSQL hector_mag: ".mysql_error()."<br>";
        //Distrito 9
        $eusebio = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$eus_usuario','$eus_seguidores','$eus_siguiendo','$eus_tweets','$fecha','$hora')");
        echo "ERROR MYSQL eusebio: ".mysql_error()."<br>";
        //Distrito 10
        $adriana = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$adr_usuario','$adr_seguidores','$adr_siguiendo','$adr_tweets','$fecha','$hora')");
        echo "ERROR MYSQL adriana: ".mysql_error()."<br>";

        // $juan_carlos = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
        //                     VALUES ('','$jua_ca_usuario','$jua_ca_seguidores','$jua_ca_siguiendo','$jua_ca_tweets','$fecha','$hora')");
        // echo "ERROR MYSQL juan_carlos: ".mysql_error()."<br>";
        //Distrito 11
        $armida = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$arm_usuario','$arm_seguidores','$arm_siguiendo','$arm_tweets','$fecha','$hora')");
        echo "ERROR MYSQL armida: ".mysql_error()."<br>";
        //Distrito 12
        $ana_maria = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','amary_landa','5','13','0','$fecha','$hora')");
        echo "ERROR MYSQL ana_maria: ".mysql_error()."<br>";
        $martha_sosa = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$martha_sosa_usuario','$martha_sosa_seguidores','$martha_sosa_siguiendo','$martha_sosa_tweets','$fecha','$hora')");
        echo "ERROR MYSQL martha_sosa: ".mysql_error()."<br>";
        //Distrito 13
        $sergio = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$ser_usuario','$ser_seguidores','$ser_siguiendo','$ser_tweets','$fecha','$hora')");
        echo "ERROR MYSQL sergio: ".mysql_error()."<br>";
        //Distrito 14
        $martha_alicia = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$martha_a_usuario','$martha_a_seguidores','$martha_a_siguiendo','$martha_a_tweets','$fecha','$hora')");
        echo "ERROR MYSQL martha_alicia: ".mysql_error()."<br>";
        //Distrito 15
        $felicitas = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$fel_usuario','$fel_seguidores','$fel_siguiendo','$fel_tweets','$fecha','$hora')");
        echo "ERROR MYSQL felicitas: ".mysql_error()."<br>";

        $felicitas2 = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$fel2_usuario','$fel2_seguidores','$fel2_siguiendo','$fel2_tweets','$fecha','$hora')");
        echo "ERROR MYSQL felicitas2: ".mysql_error()."<br>";
        //Distrito 16
        $santiago = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$sant_usuario','$sant_seguidores','$sant_siguiendo','$sant_tweets','$fecha','$hora')");
        echo "ERROR MYSQL santiago: ".mysql_error()."<br>";


        ///////////////////////////////////////////////////////////////////////////////////////////
        //Guarda las páginas oficiales
        //PRI
        $pri_colima = '?screen_name=PRI_Colima&count=1'; 
        $jips = '?screen_name=JIPS2015&count=1'; 
        $jipsColima = '?screen_name=JIPSColima&count=1'; 
        $jipsvdea = '?screen_name=jipsvdea&count=1';    
        $selfie_nacho = '?screen_name=MiSelfiecoNacho&count=1'; 
        $JoveNachos = '?screen_name=JoveNachos&count=1'; 
        $MJM_Colima_mx = '?screen_name=MJM_Colima_mx&count=1'; 
        $RedJPColima = '?screen_name=RedJPColima&count=1'; 

        //VERDE
        $verde = '?screen_name=ColPartidoVerde&count=1';

        //PAN
        $pan = '?screen_name=PANDColima&count=1';
        $cdepancolima = '?screen_name=cdepancolima&count=1';

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
        $JoveNachos = json_decode($twitter->setGetfield($JoveNachos)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $MJM_Colima_mx = json_decode($twitter->setGetfield($MJM_Colima_mx)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE);
        $RedJPColima = json_decode($twitter->setGetfield($RedJPColima)
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
        $cdepancolima = json_decode($twitter->setGetfield($cdepancolima)
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

        $JoveNachos_usuario = $JoveNachos[0]['user']['screen_name'];
        $JoveNachos_seguidores = $JoveNachos[0]['user']['followers_count'];
        $JoveNachos_siguiendo = $JoveNachos[0]['user']['friends_count'];
        $JoveNachos_tweets = $JoveNachos[0]['user']['statuses_count'];

        $MJM_Colima_mx_usuario = $MJM_Colima_mx[0]['user']['screen_name'];
        $MJM_Colima_mx_seguidores = $MJM_Colima_mx[0]['user']['followers_count'];
        $MJM_Colima_mx_siguiendo = $MJM_Colima_mx[0]['user']['friends_count'];
        $MJM_Colima_mx_tweets = $MJM_Colima_mx[0]['user']['statuses_count'];

        $RedJPColima_usuario = $RedJPColima[0]['user']['screen_name'];
        $RedJPColima_seguidores = $RedJPColima[0]['user']['followers_count'];
        $RedJPColima_siguiendo = $RedJPColima[0]['user']['friends_count'];
        $RedJPColima_tweets = $RedJPColima[0]['user']['statuses_count'];

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

        $cdepancolima_usuario = $cdepancolima[0]['user']['screen_name'];
        $cdepancolima_seguidores = $cdepancolima[0]['user']['followers_count'];
        $cdepancolima_siguiendo = $cdepancolima[0]['user']['friends_count'];
        $cdepancolima_tweets = $cdepancolima[0]['user']['statuses_count'];

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

        $JoveNachos = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$JoveNachos_usuario','$JoveNachos_seguidores','$JoveNachos_siguiendo','$JoveNachos_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL JoveNachos: ".mysql_error()."<br>";

        $MJM_Colima_mx = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$MJM_Colima_mx_usuario','$MJM_Colima_mx_seguidores','$MJM_Colima_mx_siguiendo','$MJM_Colima_mx_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL MJM_Colima_mx: ".mysql_error()."<br>";
        
        $RedJPColima = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$RedJPColima_usuario','$RedJPColima_seguidores','$RedJPColima_siguiendo','$RedJPColima_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL RedJPColima: ".mysql_error()."<br>";
        
        #VERDE
        $verde = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$verde_usuario','$verde_seguidores','$verde_siguiendo','$verde_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL verde: ".mysql_error()."<br>";

        #PAN
        $pan = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$pan_usuario','$pan_seguidores','$pan_siguiendo','$pan_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL pan: ".mysql_error()."<br>";

        $cdepancolima = mysql_query("INSERT INTO cuentas (id,usuario,seguidores,siguiendo,tweets,fecha,hora) 
                            VALUES ('','$cdepancolima_usuario','$cdepancolima_seguidores','$cdepancolima_siguiendo','$cdepancolima_tweets','$fecha','$hora')");
        echo "<br>ERROR MYSQL cdepancolima: ".mysql_error()."<br>";

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