<?php

namespace App\Controller;

use Doctrine\ORM\Query\Expr\Func;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    // Attributs de la classe MovieController
    // Données normalement récupérées dans une BD ou via un appel API
    private $_movies = array (
        0 => 
        array (
          'adult' => false,
          'backdrop_path' => '/ssQ7IcGmgUJdFLv8cHY3vC3OR4f.jpg',
          'genre_ids' => 
          array (
            0 => 28,
            1 => 878,
            2 => 53,
          ),
          'id' => 865,
          'original_language' => 'en',
          'original_title' => 'The Running Man',
          'overview' => 'By 2017, the global economy has collapsed and U.S. society has become a totalitarian police state, censoring all cultural activity. The government pacifies the populace by broadcasting a number of game shows in which convicted criminals fight for their lives, including the gladiator-style The Running Man, hosted by the ruthless Damon Killian, where “runners” attempt to evade “stalkers” and certain death for a chance to be pardoned and set free.',
          'popularity' => 18.365,
          'poster_path' => '/GTAUOhO4BN0peJVvxGEQydJvUO.jpg',
          'release_date' => '1987-02-17',
          'title' => 'The Running Man',
          'video' => false,
          'vote_average' => 6.5,
          'vote_count' => 1887,
        ),
        1 => 
        array (
          'adult' => false,
          'backdrop_path' => '/pRvZdvB0G4PwqQbdmBmDuX4bHIf.jpg',
          'genre_ids' => 
          array (
            0 => 80,
            1 => 18,
          ),
          'id' => 144299,
          'original_language' => 'en',
          'original_title' => 'The Running Man',
          'overview' => 'When pilot Rex Black destroys his plane in a crash the day after his insurance policy expires, the insurance company refuses to give him any money. To strike back at the agency, Rex fakes his death, changes his identity, and escapes to Spain, with 50,000 pounds in life insurance money. His wife joins him in Spain, but when an insurance investigator arrives unexpectedly, Rex\'s paranoia causes him to flee again.',
          'popularity' => 2.627,
          'poster_path' => '/4tKUyNMhnhWeezI0AwLWc6tWyZG.jpg',
          'release_date' => '1963-10-01',
          'title' => 'The Running Man',
          'video' => false,
          'vote_average' => 6.9,
          'vote_count' => 28,
        ),
        2 => 
        array (
          'adult' => false,
          'backdrop_path' => '/sNZqPZL3p4Xcm6aRUubH0DZtkxB.jpg',
          'genre_ids' => 
          array (
            0 => 28,
            1 => 18,
            2 => 53,
          ),
          'id' => 51911,
          'original_language' => 'en',
          'original_title' => 'Night of the Running Man',
          'overview' => 'A Las Vegas cab driver finds a million dollars of stolen money in his cab after his fare is murdered. Soon after, a ruthless hitman is in persuit; he will stop at nothing to recover the money and dispose of all witnesses.',
          'popularity' => 4.624,
          'poster_path' => '/q4lAGqpDySxw8iIWZFREofbtb6F.jpg',
          'release_date' => '1995-01-19',
          'title' => 'Night of the Running Man',
          'video' => false,
          'vote_average' => 6.1,
          'vote_count' => 35,
        ),
        3 => 
        array (
          'adult' => false,
          'backdrop_path' => NULL,
          'genre_ids' => 
          array (
            0 => 35,
          ),
          'id' => 321815,
          'original_language' => 'en',
          'original_title' => 'Running Man',
          'overview' => 'A movie adaptation of the popular Chinese television series.',
          'popularity' => 1.675,
          'poster_path' => NULL,
          'release_date' => '2015-01-30',
          'title' => 'Running Man',
          'video' => false,
          'vote_average' => 2.7,
          'vote_count' => 7,
        ),
        4 => 
        array (
          'adult' => false,
          'backdrop_path' => NULL,
          'genre_ids' => 
          array (
            0 => 878,
          ),
          'id' => 798645,
          'original_language' => 'en',
          'original_title' => 'The Running Man',
          'overview' => 'Follows a man who joins a game show in which contestants, allowed to go anywhere in the world, are chased by "Hunters" employed to kill them.',
          'popularity' => 0.894,
          'poster_path' => '/uWy9kcleB6hGJr2QVXMYUVO01Bz.jpg',
          'release_date' => '',
          'title' => 'The Running Man',
          'video' => false,
          'vote_average' => 0,
          'vote_count' => 0,
        ),
        5 => 
        array (
          'adult' => false,
          'backdrop_path' => NULL,
          'genre_ids' => 
          array (
            0 => 18,
            1 => 27,
          ),
          'id' => 671372,
          'original_language' => 'en',
          'original_title' => 'Running Man',
          'overview' => 'It\'s 1991, and a clinical drugs trial goes horrifyingly wrong for a group of young ravers.',
          'popularity' => 0.6,
          'poster_path' => '/gJ1fLnQUvxcTk8vh1N3fNK2yZmK.jpg',
          'release_date' => '2019-09-22',
          'title' => 'Running Man',
          'video' => false,
          'vote_average' => 3.5,
          'vote_count' => 2,
        ),
        6 => 
        array (
          'adult' => false,
          'backdrop_path' => '/cDWPJcokHjMXod6xlQrmnIwy2rM.jpg',
          'genre_ids' => 
          array (
            0 => 28,
            1 => 80,
            2 => 18,
            3 => 53,
          ),
          'id' => 32678,
          'original_language' => 'en',
          'original_title' => 'Dead Man Running',
          'overview' => 'A loan shark gives ex-con Nick a period of 24 hours in order to pay back the money he owes. Up against it, Nick involves his best mate on a multi-part mission in order to raise the cash before it\'s too late for them both',
          'popularity' => 5.866,
          'poster_path' => '/kgP6YevcqMzWKFR7FokqtFoO7ZD.jpg',
          'release_date' => '2009-01-29',
          'title' => 'Dead Man Running',
          'video' => false,
          'vote_average' => 6.1,
          'vote_count' => 50,
        ),
        7 => 
        array (
          'adult' => false,
          'backdrop_path' => NULL,
          'genre_ids' => 
          array (
            0 => 18,
            1 => 10770,
          ),
          'id' => 806688,
          'original_language' => 'en',
          'original_title' => 'The Running Man',
          'overview' => 'A middle-aged family man and high school teacher struggles in silence as he accepts the fact that he is gay.',
          'popularity' => 0.6,
          'poster_path' => NULL,
          'release_date' => '1981-02-22',
          'title' => 'The Running Man',
          'video' => false,
          'vote_average' => 0,
          'vote_count' => 0,
        ),
        8 => 
        array (
          'adult' => false,
          'backdrop_path' => '/4QCWFOFxiXhoq4URPq7HOwlDd5i.jpg',
          'genre_ids' => 
          array (
          ),
          'id' => 875056,
          'original_language' => 'en',
          'original_title' => 'All the World\'s A Stage: Running Man Theatre Company',
          'overview' => 'Running Man Theatre is an Orlando-based company run out of OCA, which caters to actors of all abilities. This short documentary follows the origin story of this company, its impact on the families and students involved, the impact on the greater Orlando community, and beyond. It begs the question: How do we make theater a more inclusive space?',
          'popularity' => 0.6,
          'poster_path' => '/lHdgZhUHhd9JdGWXTRX207hU61b.jpg',
          'release_date' => '',
          'title' => 'All the World\'s A Stage: Running Man Theatre Company',
          'video' => false,
          'vote_average' => 10,
          'vote_count' => 1,
        ),
        9 => 
        array (
          'adult' => false,
          'backdrop_path' => NULL,
          'genre_ids' => 
          array (
          ),
          'id' => 551002,
          'original_language' => 'en',
          'original_title' => 'Man Running',
          'overview' => 'Facing the grueling physical and mental tolls of participating in an ultramarathon, a doctor relives his struggles to treat a terminally-ill, 14-year-old patient.',
          'popularity' => 0.601,
          'poster_path' => NULL,
          'release_date' => '2018-09-17',
          'title' => 'Man Running',
          'video' => false,
          'vote_average' => 0,
          'vote_count' => 0,
        ),
        10 => 
        array (
          'adult' => false,
          'backdrop_path' => '/rpMFrAPA87174GUHtghGwq8lQ2u.jpg',
          'genre_ids' => 
          array (
            0 => 28,
            1 => 12,
            2 => 35,
            3 => 53,
          ),
          'id' => 194872,
          'original_language' => 'ko',
          'original_title' => '런닝맨',
          'overview' => 'Jong-Woo (played by Sin Ha-gyoon) is a poor, beleagured taxi driver with a bad attitude, understandable given the kind of clients he has to deal with. So when one night, a polite, well-dressed man offers an outrageous sum of money to rent the taxi for an extended period, Jong Woo doesn\'t ask any questions, though he does make rather cheerful and inappropriate conversation with his uninterested charge. It\'s difficult to blame Jong-Woo for this, given that it takes him some time to realize that he is not the protagonist of a low-brow comedy, but of an action-packed thriller.',
          'popularity' => 3.271,
          'poster_path' => '/ecsPVK2y8c6jNVOzRwKgrHeospy.jpg',
          'release_date' => '2013-04-03',
          'title' => 'Running Man',
          'video' => false,
          'vote_average' => 6.6,
          'vote_count' => 35,
        ),
        11 => 
        array (
          'adult' => false,
          'backdrop_path' => NULL,
          'genre_ids' => 
          array (
          ),
          'id' => 995070,
          'original_language' => 'en',
          'original_title' => 'A man running',
          'overview' => 'Plate 7 from the Animal Locomotion series shows a nude man running in a peculiar way.',
          'popularity' => 0.6,
          'poster_path' => '/x1FyJ6gvbbYorda1hhAZcZYsTpy.jpg',
          'release_date' => '1887-07-02',
          'title' => 'A man running',
          'video' => false,
          'vote_average' => 0,
          'vote_count' => 0,
        ),
        12 => 
        array (
          'adult' => false,
          'backdrop_path' => NULL,
          'genre_ids' => 
          array (
            0 => 16,
          ),
          'id' => 896355,
          'original_language' => 'ko',
          'original_title' => '런닝맨 스페셜 - 게임의 시작',
          'overview' => 'The 100th Running Man Championship, which finally started, 7 running men representing each race.
       In the first round of Bell Hunter, Liu, the representative of the bug tribe, won the victory, followed by the second battle of superpowers. In a survival game in which each person competes using their given superpowers, the player who kept the shield until the end amid repeated alliances and betrayals is Kuga, the representative of the Bars tribe.
       And in the middle of the night, in the laboratory under the main stadium, something unusual seems to be happening while the tournament organizer Charming Gold is watching.',
          'popularity' => 0.6,
          'poster_path' => '/fbQrJUjWYBeuAuk9SGto04VwJu3.jpg',
          'release_date' => '2018-01-01',
          'title' => 'Running Man Special: The Beginning of the Game',
          'video' => false,
          'vote_average' => 0,
          'vote_count' => 0,
        ),
        13 => 
        array (
          'adult' => false,
          'backdrop_path' => '/xAz8OUGs2nQsUBeY7amidxoojhA.jpg',
          'genre_ids' => 
          array (
            0 => 16,
            1 => 12,
            2 => 28,
          ),
          'id' => 561219,
          'original_language' => 'ko',
          'original_title' => '런닝맨: 풀룰루의 역습',
          'overview' => '',
          'popularity' => 0.631,
          'poster_path' => '/8RNtZFa1qCA1dHbCKKxRDFU8wd5.jpg',
          'release_date' => '2018-12-06',
          'title' => 'Running Man',
          'video' => false,
          'vote_average' => 8,
          'vote_count' => 1,
        ),
      );

    /**
     * @Route("/movie",
     * name="app_movie")
     */
    public function index(): Response
    {
        return $this->render('movie/index.html.twig', [
            'controller_name' => 'ET VOILAAA',
            'variable1' => 'Truc',
            'variable2' => 'ET VOILA LUCIEN',
            'emoji' => '',
        ]);
    }

    /**
     * @Route("/movie/{idMovie}",
     * name="app_movie_get",
     * requirements={"idMovie"="\d+"},
     * methods={"GET"})
     */
    public function getMovie(int $idMovie) : Response
    {
      //Vérifier que $idMovie est un indice du tableau
      if(isset ($this->_movies[$idMovie]))
      {
        $output = $this->render(
          'movie/get.html.twig',
          [
            'movie' => $this->_movies[$idMovie]
          ]
      );
      }
      else
      {
        $output = new Response ("Vous avez demandé un id inexistant" . $idMovie, 404);
      }

      //Renvoi du output
      return $output;
    }

    /**
     * @Route("/movies/{slug}",
     * name="app_movie_slug",
     * requirements={"slug"="\w+"},
     * methods={"GET"})
     */
    public function getMovieSlug(string $slug) : Response
    {
      $resultat = $this->GetMovieListBySlug($slug);

      if(count ($resultat) == 0)
      {
        $output = new Response ("non trouvé",404);
      }
      else
      {
        return $this->render(
          'movie/list.html.twig',
          [
            'movies' => $resultat
          ]
          );
      }
      return $output;
    }

    public function getMovieListBySlug(string $slug): array
    {
      $output = array();

      foreach($this->_movies as $movie)
      {
        if (str_contains($movie['title'], $slug))
        {
          $output[] = $movie;
        }
      }
      return $output;
    }

    /**
     * @Route("/movies",
     * name="app_movie_list",
     * methods={"GET"})
     */
    public function listMovies() : Response
    {
      return $this->render(
        'movie/list.html.twig',
        [
          'movies' => $this->_movies
        ]
      );
    }

    /**
     * @Route("/moviedisplay/{idMovie}", name="app_movie_display", requirements={"idMovie"="\d+"}, methods={"GET"})
     */
    //public function displayMovie(int $idMovie) : Response
    //{
        //Préparation de la sortie
        //$output = print_r($this->_movies[$idMovie], true);
        //return new Response("Output: " . $output);
    //}
}