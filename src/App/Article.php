<?php

namespace App;

class Article
{
    public $title;

    public function getSlug()
    {
        $slug = $this->title;

        //$slug = str_replace(' ','_',$slug);
        $slug = preg_replace('/\s+/', ' ', $slug); //replaces /n new line and any leading whitspace
        $slug = preg_replace('/[^\w]+/', '_', $slug); // replaces any leading character

        $slug = trim($slug,"_");

        return $slug;
    }
}