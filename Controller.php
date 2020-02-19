<?php 

class Controller 
{
    public function home()
    {
        //créer une instance du manager
        $manager = new Manager();

        //appeler la méthode findPosts et stocker le résultat dans une variable
        $posts = $manager->findPosts();

        //dans home.php, on va afficher en boucle la variable
        include("templates/home.php");
    }

    public function detail()
    {
        $id = $_GET['id'];
        $manager = new Manager();
        $post = $manager->findPostById($id);
        
        include("templates/detail.php");
    }

    public function createPost()
    {
        //créer une instance du manager
        $manager = new Manager();

        //appeler la méthode findPosts et stocker le résultat dans une variable
        $posts = $manager->findPosts();
        
        
        //si on n'a pas d'utilisateur connecté... 
        //on veut le dégager d'ici, il n'est pas autorisé
        if (empty($_SESSION['user'])){
            //on invite gentiment le user à se connecter...
            header("Location: index.php?page=connexion");
            //on s'assure que le reste du code n'exécute pas
            die();
        }

        //traitement du formulaire s'il est soumis
        $errors = [];
        if (!empty($_POST)) {
            $title      = strip_tags($_POST['title']);
            $content    = strip_tags($_POST['content']);
        
            //validation des valeurs
            if (empty($title)){
                $errors[] = "Le titre est requis !";
            }
            elseif (strlen($title) > 191){
                $errors[] = "191 caractères max pour le titre svp !";
            }
            if (empty($content)){
                $errors[] = "Le contenu de l'article est requis !";
            }
            elseif (strlen($content) > 10000){
                $errors[] = "10000 caractères max pour le contenu svp !";
            }
        
    //si je n'ai pas trouvé d'erreur... 
    if (empty($errors)){
        $manager = new Manager();
        $newFilename = 0;
        $newPostId = $manager->saveNewPost($title, $content, $newFilename);

        //redirige vers la page de détail de ce nouvel article 
        header("Location: index.php?page=detail&id=$newPostId");
        die();
    }
            }

        include("templates/create_post.php");
    }



    public function CV()
    {
        include("templates/CV.php");
    }
    public function recommandation()
    {
        include("templates/recommandation.php");
    }
    public function contact()
    {
        include("templates/contact.php");
    }

    public function register()
    {
        //traitement du formulaire
        //formulaire soumis ? 
        if(!empty($_POST)){
            //récupére les données soumises 
            //strip_tags() pour se protéger des attaques XSS
            $username = strip_tags($_POST['username']);
            $email = strip_tags($_POST['email']);
            $password = $_POST['password'];

            //valider les données 
            //@todo 

            //créer une instance de notre modèle User
            $user = new User();

            //hashe le mdp 
            //md5 est ultra-mort
            //sha1 est mort
            //bcrypt  ou  argon2i sont top
            $hash = password_hash($password, PASSWORD_DEFAULT);

            //hydrate l'instance 
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setPassword($hash);

            //demande au Manager de sauvegarder cet user
            $manager = new Manager();
            $manager->saveNewUser($user);

            //redirige l'utilisateur sur le login...
        }

        include("templates/register.php");
    }
    

    //afficher et traiter la page de connexion
    public function login()
    {
        //si le form est soumis... 
        if (!empty($_POST)) {
            //par défaut je dis que c'est pas valide
            $formIsValid = false;

            //récupérer le username ou l'email 
            $usernameOrEmail = $_POST['username'];
            //récupérer le mot de passe du form
            $password = $_POST['password'];

            //aller chercher dans la bdd la ligne correspondant à l'email
            $manager = new Manager();
            $foundUser = $manager->findUserByUsernameOrEmail($usernameOrEmail);

            //si on a trouvé une ligne, un user avec cet email ou pseudo...
            if (!empty($foundUser)) {
                //on compare son mdp
                $passwordIsValid = password_verify($password, $foundUser['password']);

                //si le mdp est bon...
                if ($passwordIsValid){
                    //connexion du user !!!!
                    $_SESSION['user'] = $foundUser;

                    //redirige vers l'accueil
                    //on die pour que tout s'arrête ici 
                    header("Location: index.php");
                    die();
                }            
            }
        }

        include("templates/login.php");
    }

    //pour déconnecter l'utilisateur
    public function logout()
    {
        //supprime les données du user stockées dans la session
        unset($_SESSION['user']);
         
        //mode ultra bourrin
        //session_destroy();

        //je m'embête pas à faire un template, je redirige à tout coup
        header("Location: index.php");
        die();
    }

    public function fourofour()
    {
        include("templates/404.php");
    }
}