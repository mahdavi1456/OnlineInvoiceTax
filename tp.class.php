<?php
class tp {

    public $baseUrl = "https://tp.tax.gov.ir/req/";


    public function getToken() {
        $url = $this->baseUrl . "api/self-tsp/sync/GET_TOKEN";
        $ch = curl_init();
        $fields = http_build_query(
            array('username' => 'A2ENGG')
        );
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        var_dump($res);
        curl_close($ch);
    }


}