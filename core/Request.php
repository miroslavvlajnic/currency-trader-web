<?php


namespace Core;


class Request {

    public function send($httpMethod, $url, $params = [])
    {

       // Get cURL resource
       $curl = curl_init();
       // Set some options - we are passing in a useragent too here
       curl_setopt_array($curl, [
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_URL => $url,
           CURLOPT_USERAGENT => 'Codular Sample cURL Request'
       ]);

       if ($httpMethod === 'POST' && !empty($params)) {
           curl_setopt_array($curl, [
               CURLOPT_POST => 1,
               CURLOPT_POSTFIELDS => $params
           ]);
       }

       // Send the request & save response to $resp
       $resp = curl_exec($curl);

       return $resp;
       // Close request to clear up some resources
       curl_close($curl);




//         $client = new \GuzzleHttp\Client();
//         if (!empty($params)) {
//             $params = ['form_params' => $params];
//         }
//         $res = $client->request(strtoupper($httpMethod), $url, $params);
//         return $res->getBody()->getContents();

    }


}