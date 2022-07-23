<?php
    $country =$_GET['country'];
    $curl = curl_init();
 

    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://universities.hipolabs.com/search?country=".$country,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET", 
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
    echo "cURL Error #:" . $err;
    } else {
        //echo $response;
        $data = json_decode($response);
         $no=1;
        echo '<table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Negara</th>
            <th scope="col">Domain</th>
            <th scope="col">Link</th>
            </tr>
        </thead>';
        echo '<tbody>';
        //"<pre>"; print_r($data); echo "</pre>";
        foreach ($data as $uni){
               echo  '<tr>';
                    echo '<th scope="row">'.$no.'</th>';
                    echo '<td>'.$uni->name.'</td>';
                    echo'<td>'.$uni->country.'</td>';
                    echo '<td>'.$uni->domains[0].'</td>';
                   echo '<td><a  class="btn btn-primary" href="'.$uni->web_pages[0].'" role="button">Telusuri</a><td>';
                    echo '</tr>';
                    $no++;
            
            
            
        }
        echo '</tbody>';
        echo '</table>';

    }
     
?>