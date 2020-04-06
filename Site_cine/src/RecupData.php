<?php

require_once 'Database.php'

class RecupData {     

        public static function getActeur($titre_film){
            // récup les Acteur du films sélectionner
            $stmt = 'SELECT DISTINCT CONCAT(people.prenom,' ',people.nom) AS Acteur FROM people,play,films WHERE play.films_id = films.id AND films.titre='.$titre_film;

            $db = Database::getDB();

            $req = $db->query($stmt);
            $req->execute();

            return $req->fetchAll(PDO::FETCH_ASSOC);
        }
        
        /*
        public static function getDate($titre_film){
            //Récup la date du films selon le titre du film
            //$stmt = 'SELECT date_sortie from films WHERE titre='.$titre_film;

        }

        public static function getRealisateur(){
            //Selectionner le nom et prénom du réalisateur où l'id du réalisateur est égale à réalisateur_id de la table films
            //$stmt = 'SELECT CONCAT(people.nom,' ',people.prenom) AS realisateur FROM people,films WHERE people.id = films.realisateur_id';
        }

        public static function getSynopsis($titre_film){
            //Selectionner le synopsis selon le titre du film
            //$stmt = 'SELECT synopsis FROM films WHERE titre='.$titre_film;
        }
        */
        

        public static function getFilmsByGenre(Array $genre){
            //Récup les films selon le genre sélectionner
            // Faire le IN avec l'id du genre et générer dynamiquement les paramètres de IN
            $stmt = 'SELECT films.titre FROM films,genre,genre_assoc 
            WHERE genre.id = genre_assoc.genre_id AND films.id = genre_assoc.films_id AND genre.id IN ('.$genre[].')';
            
        }

        public static function getAll(){


        }

        public static function getFilms(){
            
        }
}