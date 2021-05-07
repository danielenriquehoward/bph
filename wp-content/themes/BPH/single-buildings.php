<?php



$context         = Timber::context();
$post            = new TimberPost();
$building = new TimberPost();



$context['post'] = $post;

// $url = "https://nominatim.openstreetmap.org/search?format=json&limit=5&q={$post->info_address}";


// $ch = curl_init();
// curl_setopt($ch, CURLOPT_POST, false);
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $api_response_json = curl_exec($ch);
// curl_close($ch);
// //convert json to PHP array for further process
// $api_response_arr = json_decode($api_response_json);

// if($api_response_arr['respond'] == true ){
//    dump($api_response_arr);
// }else{
//     dump($api_response_arr);
// }






// $lat = $output->results[0]->geometry->location->lat;
// $long = $output->results[0]->geometry->location->lng;






if (post_password_required($post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render('single-buildings.twig', $context);
}
