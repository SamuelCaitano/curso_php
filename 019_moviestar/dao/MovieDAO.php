<?php

require_once("models/Movie.php");
 require_once("models/Message.php");

//  Review DAO

class MovieDAO implements MovieDAOInterface {

  private $conn;
  private $url;
  private $message;

  public function __construct(PDO $conn, $url)
  {
    $this->conn = $conn;
    $this->url = $url;
    $this->message = new Message($url);

  
  }

  public function buildMovie($data){

    $movie = new Movie();

    $movie->id = $data["id"];
    $movie->title = $data["title"];
    $movie->image = $data["image"];
    $movie->release = $data["release"];
    $movie->pegi = $data["pegi"];
    $movie->length = $data["length"];
    $movie->trailer = $data["trailer"];
    $movie->resolution = $data["resolution"];
    $movie->description = $data["description"];
    $movie->users_id = $data["users_id"];

    return $movie;

  }
  public function findAll(){

  }
  public function getLatestMovies(){

  }
  public function getMoviesByCaegory($category){

  }
  public function getMoviesByUserId($id){

  }
  public function findById($id){

  }
  public function findByTitle($title){

  }
  public function create(Movie $movie){

  }
  public function update(Movie $movie){

  }
  public function destroy($id){

  }
}