<?php
class Openwather
{

    const API_KEY = "18d5be3d1c4cc47fdc3382cd45d92e43";

    public static function getWeather($city, $lang="de")
    {
        $apikey = self::API_KEY;
        $curl = curl_init("https://api.openweathermap.org/data/2.5/weather?q=$city&lang=$lang&appid={$apikey}&units=metric");
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 1
        ]);

        $datas = curl_exec($curl);
        if ($datas === false) {
            var_dump(curl_error($curl));
        } else {
            if (curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200) {
                $datas_array = json_decode($datas, true);
                //var_dump($datas_array['list']);die;
                return $datas_array;

            } else {
                echo 'this page is not found';
            }

        }
        // fermeture des ressources
        curl_close($curl);
    }
}



