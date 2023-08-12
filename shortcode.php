<?php

function test_bisnu($option)
{
    echo "<pre>";
    var_dump($option);
    echo "<pre>";
}

function wp_map_bisnu_shortcode()
{
    $option = get_option('wp_map_bisnu_prefix');
    $maps_data = $option['map_info'];
    $html = '';
//    $html .= "<div style='display: flex; flex-direction: row; gap:20px'>";
////    bisnu_print($maps_data);
//    foreach ($maps_data as $map_data) {
//        $html .= "<div style='border: 1px solid gray; padding: 20px; border-radius: 10px'>";
//        $html .= "<p>" . $map_data['title_id'] . "</p>";
//        $html .= "<small>" . $map_data['place_name'] . "</small>";
//        $html.="<p><i class='".$map_data['icon_id']."'></i></p>";
//        $html .= "</div>";
//    }
//    $html .= "</div>";
//    return $html;

    $html .= "<div id='map' class='w-full' style='height: 500px'></div>
<script>
 var map = L.map('map').setView([25.6345285, 88.6453126], 8);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
</script>";
    foreach ($maps_data as $map_data) {

        $html .= "<script>
L. marker([" . $map_data['long_id'] . ", " . $map_data['lat_id'] . "]).addTo(map).bindPopup('" . $map_data['title_id'] . "').openPopup();


</script>";

    }
    echo $html;
}

;
add_shortcode('wp_map_bisnu', 'wp_map_bisnu_shortcode');
