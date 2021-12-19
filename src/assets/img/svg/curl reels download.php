<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.instagram.com/p/CP4_gXYIup1/?__a=1',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'accept-encoding: gzip, deflate, br',
    'accept-language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7',
    'cache-control: max-age=0',
    'cookie: mid=YYvz7gAEAAF3b2uYYVAoGXA1eDhR; ig_did=387FFB20-9F33-4C5A-9CC5-636A98B53021; ig_nrcb=1; csrftoken=e4UaAbQUQ1k9v3b9aNtH3ZXDFWL3VcJH; ds_user_id=3791917042; sessionid=3791917042%3Axx1AMloypNFP9N%3A11; shbid="8590\\0543791917042\\0541670965692:01f7697e3c71887add7e98cc80178edb2b26fd355fd53c6996e68bd939bdb70d329984b0"; shbts="1639429692\\0543791917042\\0541670965692:01f78df0b91705c2e0cc1f7b781861c22ba1b8beee683acebf69dd568d2ea8e42bd08302"; rur="ODN\\0543791917042\\0541671209215:01f7460536820a38c133634e74d3cddfc8c77870dd6f035dd582ea5019384003903926be"; csrftoken=HW8KI9pSrEAueo1IC1motB3o9Oot268c; ds_user_id=3791917042; ig_did=B5A94000-518C-4DCD-81A0-C23287398486; ig_nrcb=1; mid=YbodvgAEAAH76RGjuPP2XB9Loo2p; rur="ODN\\0543791917042\\0541671211541:01f75e866f43b3507593fff587d7f2a95df10106c30662c6c69f22269ec9ed6f36351dfa"',
    'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "macOS"',
    'sec-fetch-dest: document',
    'sec-fetch-mode: navigate',
    'sec-fetch-site: none',
    'sec-fetch-user: ?1',
    'upgrade-insecure-requests: 1',
    'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;