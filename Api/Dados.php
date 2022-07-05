<?php 
   
        $url = "http://ccomobility.com.br/WebServices/Binder/WSConecta/EnvioInformacoesIplan?guidIdentificacao=994142d7-2223-4044-931e-be3421ea02ff";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

        // var_dump($resultado);
        // json_encode($resultado);
        foreach ($resultado as $dado) {
           
            echo "ordem: " . $dado->ordem . "<br>";
            echo "latitude: " . $dado->latitude . "<br>";
            echo "longitude: " . $dado->longitude . "<br>";
            echo "datahora: " . $dado->datahora . "<br>";
            echo "velocidade: " . $dado->velocidade . "<br>";
            echo "linha: " . $dado->linha . "<br>";
            
            echo "<hr>";
        }
    
