<?php

$db = new PDO('mysql:host=localhost;dbname=php-start;', 'php-start_usr', 'pqQn1C7FxQ7A1Vn6', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

$sql = "INSERT users (name, surname, img, role, expert, twitter, url, banned) VALUES (:name, :surname, :img, :role, :expert, :twitter, :url, :banned)";
$query = $db->prepare($sql);

$users = array( 
    array(
        'img' => "sunny.png", 
        'name' =>"Sunny", 
        'surname' =>"A.", 
        'expert' => "UI/UX Expert", 
        'role' =>"Lead Author", 
        'twitter' =>"myplaneticket", 
        'url' =>"https://wrapbootstrap.com/user/myorange",
        'banned' => false),

    array(
        'img' => "josh.png", 
        'name' =>"Jos", 
        'surname' =>"K.", 
        'expert' => "ASP.NET Developer", 
        'role' =>"Partner & Contributor", 
        'twitter' =>"atlantez", 
        'url' =>"https://wrapbootstrap.com/user/Walapa",
        'banned' => false),
    array(
        'img' => "jovanni.png", 
        'name' =>"Jovanni", 
        'surname' =>"L.", 
        'expert' => "PHP Developer", 
        'role' =>"Partner & Contributor", 
        'twitter' =>"lodev09", 
        'url' =>"https://wrapbootstrap.com/user/lodev09",
        'banned' => true),
    array(
        'img' => "roberto.png", 
        'name' =>"Roberto", 
        'surname' =>"R.",
        'expert' => "Rails Developer", 
        'role' =>"Partner & Contributor", 
        'twitter' =>"sildur", 
        'url' =>"https://wrapbootstrap.com/user/sildur",
        'banned' => true),

    );

foreach($users as $user => $values){
    $query->execute($values); 
} 



 
