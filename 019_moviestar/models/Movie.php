<?php

class Movie {

  public $id;
  public $title;
  public $image;
  public $release;
  public $pegi;
  public $length;
  public $category;
  public $trailer; 
  public $resolution;
  public $description;
  public $user_id;

  public function imageGenereteName(){
    return bin2hex(random_bytes(60)) . ".jpg";
  }

}

interface MovieDAOInterface {

  public function buildMovie($data);
  public function findAll();
  public function getLatestMovies();
  public function getMoviesByCaegory($category);
  public function getMoviesByUserId($id);
  public function findById($id);
  public function findByTitle($title);
  public function create(Movie $movie);
  public function update(Movie $movie);
  public function destroy($id);
}