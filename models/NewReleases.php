<?php

class NewReleases extends Model
{
    public $cover_img;
    public $cover_alt;
    public $slug;

    public function __construct($data)
    {
        $this->cover_img = $data['cover_img'];
        $this->cover_alt = json_decode($data['cover_alt'])->fr;
        $this->slug = json_decode($data['slug'])->fr;
    }
    static public function getNewReleases()
    {
        $results = static::fetchAll('SELECT 
            m.cover_img,
            m.cover_alt,
            m.slug
            FROM movies m
            WHERE (m.published_until IS NULL OR m.published_until > NOW())
            AND m.deleted_at IS NULL
            ORDER BY m.released_at
            LIMIT 6;');

        foreach($results as $index => $line){
            $results[$index] = new NewReleases($line);
        }
        return $results;
    }
}