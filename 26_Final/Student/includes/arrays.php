<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 29-Sep-18
 * Time: 5:22 PM
 */
    //Nav menu items

    $navItems = array(
        array(
            "slug" => "index.php",
            "title" => "Home"
        ),
        array(
            "slug" => "team.php",
            "title" => "Team"
        ),
        array(
            "slug" => "menu.php",
            "title" => "Menu"
        ),
        array(
            "slug" => "contact.php",
            "title" => "Contact"
        )
    );


    //Team Members


    $teamMembers = array(
        array(
            "name" => "Frankie III",
            "position" => "Owner",
            "bio" => "Frankie is the great-grandson of the original Franklin. He is the woner of Franklin's Fine Dining. He cooks a mean fritatta!",
            "img"  => "frankie"
        ),
        array(
            "name" => "Francis",
            "position" => "General Manager",
            "bio" => "FFrancis knows her stuff. The big sister Frankie himself, she runs the show. Don't miss her Margherita Mondays!",
            "img"  => "francis"
        ),
        array(
            "name" => "Carlos",
            "position" => "Head Chef",
            "bio" => "FCarlos is the eptome of the phrase &ldquo;Don't judge a book by it's cover&rdquo; &mdash; You simply cannot find a better chef.",
            "img"  => "carlos"
        )
    );


    // Menu Items


    $menuItems = array(
        "club-sandwich" => array(
            "title" => "Club Sandwich",
            "price" => 11,
            "blurb" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            "drink" => "Club Soda"
        ),

        "dill-salmon" => array(
            "title" => "Lemon &amp; Dill Salmon",
            "price" => 18,
            "blurb" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            "drink" => "Fancy Wine"
        ),

        "syper-salad" => array(
            "title" => "The super Salad <sup>&reg;</sup>",
            "price" => 34,
            "blurb" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            "drink" => "Club Soda"
        ),

        "maxican-barbaco" => array(
            "title" => "Maxican Barbaco",
            "price" => 23,
            "blurb" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            "drink" => "Beer with a line"
        )
    );
?>