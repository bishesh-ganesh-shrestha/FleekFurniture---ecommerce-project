<?php
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://a.khalti.com/api/v2/epayment/initiate/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "return_url": "http://localhost/rabi/includes/order_success.php",
  "website_url": "https://example.com/",
  "amount": "100000",
  "purchase_order_id": "Order01",
      "purchase_order_name": "test",

  "customer_info": {
      "name": "Test Bahadur",
      "email": "test@khalti.com",
      "phone": "9800000001",
  }
  }

  ',
  CURLOPT_HTTPHEADER => array(
      'Authorization: Key 8dc76783e29644928eeeee3e3b57cdc5',
      'Content-Type: application/json',
  ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
  $responseData = json_decode($response, true);
  header("Location: " . $responseData['payment_url']);
?>