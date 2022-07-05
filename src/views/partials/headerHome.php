<h1>Banco de Dados SPPO</h1>
<h3>Data de hoje: <?= date('h:i:s | d-m-Y'); ?></h3>
<br>

<hr>

<?php 

$url = "http://ccomobility.com.br/WebServices/Binder/WSConecta/EnvioInformacoesIplan?guidIdentificacao=994142d7-2223-4044-931e-be3421ea02ff";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

        foreach ($resultado as $dado) {
           echo "Ordem: " . $dado->ordem . "<br>";
           echo "Latitude: " . $dado->latitude . "<br>";
           echo "Longitude: " . $dado->longitude . "<br>";
           echo "Datahora: " . date('d-m-Y H:i:s', $dado->datahora/1000) . "<br>";
           echo "Velocidade: " . $dado->velocidade . "<br>";
           echo "Linha: " . $dado->linha . "<br>";
            
           echo "<hr>";
}