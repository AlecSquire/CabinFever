<?php

namespace App\Models;

class Shows
{
    //properties and fields
    private int $id;
    private string $title;
    private int $seasons;
    private int $episodes;
    private int $rating;


//constructor
    public function __construct($id, $title, $seasons, $episodes, $rating)
    {
        $this->id = $id;
        $this->title = $title;
        $this->seasons = $seasons;
        $this->episodes = $episodes;
        $this->rating = $rating;
    }

    // getter and setter function

    public function getTitle()
    {
        return $this->title;
    }
    // public function setTitle($title)
    // {
    //     $this->title = $title;
    // }
//  method
public function getInfo()
{
    return 'ID: ' . $this->id . ', Title: ' . $this->title . ', Seasons: ' . $this->seasons . ', Episodes: ' . $this->episodes . ', Rating: ' . $this->rating;
}

}

