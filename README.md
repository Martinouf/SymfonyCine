
# Projet SymfonyCine



## Authors

- [@Martinouf](https://github.com/Martinouf)

### Description
- Le projet est de découvrir Symfony. Pour cela j'ai donc fait une liste de films.

### Routes d'accès
- /**
     * @Route("/movie",
     * name="app_movie")
     */

- /**
     * @Route("/movie/{idMovie}",
     * name="app_movie_get",
     * requirements={"idMovie"="\d+"},
     * methods={"GET"})
     */

- /**
     * @Route("/movies/{slug}",
     * name="app_movie_slug",
     * requirements={"slug"="\w+"},
     * methods={"GET"})
     */

- /**
     * @Route("/movies",
     * name="app_movie_list",
     * methods={"GET"})
     */