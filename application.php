<?php 
include 'system/core.php';
include 'system/usingApi.php';

$title = 'Прогноз погоды'; //title for index page

Core::dbConnect(); // connect to DB

if (!empty($_POST['city']) && !empty($_POST['date'])) {
	
    $date = $_POST['date']; // day 
    $city = $_POST['city']; // city or town 
 

    $q = Core::weatherFromDb($date, $city); 
    if (is_null($q)) { // if we havent information in DB, use API 
        $api = new usingApi;
        $api->getWeather($date, $city);
        $weather = $api->weather;

        if (!is_null($weather)) {
            $add = Core::$pdo->prepare('insert into history set date = ?,
                                                                city = ?,
                                                                cond = ?,
                                                                max_t_c = ?,
                                                                min_t_c = ?,
                                                                avg_t_c = ?,
                                                                wind = ?,
                                                                sunrise = ?,
                                                                sunset = ?');
            $add = $add->execute([$date, 
                                  $weather['city'],
                                  $weather['cond'],
                                  $weather['max_t_c'],
                                  $weather['min_t_c'],
                                  $weather['avg_t_c'],
                                  $weather['wind'],
                                  $weather['sunrise'],
                                  $weather['sunset']
                                 ]); // and add information to DB for get it next time :)

            $title = 'Погода в '.$city;
        }
        else {
            $title = 'Введеный город не найден, проверьте правильность ввода!';
        }
    }
    else { // if we have information in our DB, return it :)
        $weather = $q;
        $title = 'Погода в '.$city;
    }
}
?>