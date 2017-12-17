<?php



//each page extends controller and the index.php?page=tasks causes the controller to be called
class accountsController extends http\controller
{

    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show_account', $record);

    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
       // $records = accounts::findAll();
       // self::getTemplate('all_accounts', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create ne,w tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    //this is to register an account i.e. insert a new account
    public static function register()
    {
        //https://www.sitepoint.com/why-you-should-use-bcrypt-to-hash-stored-passwords/
        //USE THE ABOVE TO SEE HOW TO USE Bcrypt
       // print_r($_POST);

        self::getTemplate('register');
        //this just shows creating an account.

    }

    //this is the function to save the user the user profile
    public static function store()
    {
      //  print_r($_POST);
        $user = accounts::findUserbyEmail($_POST['email']);

        if($user==FALSE) {

            session_start();
            $record = new account();
           // print_r($record);
            $record->birthday = $_POST['birthday'];
            $record->gender = $_POST['gender'];
            $record->email = $_POST['email'];
            $record->fname = $_POST['fname'];
            $record->lname = $_POST['lname'];
            $record->phone = $_POST['phone'];
            $record->password = utility\password::setPassword($_POST['password']);
            $record->save();
            $user = accounts::findUserbyEmail($_POST['email']);


            $_SESSION["email"] = $user->email;
            $_SESSION["userID"] = $user->id;

           header("Location:https://web.njit.edu/~nmd33/mvc/index.php?page=tasks&action=all");
        }
        else
        {
            $error = 'already registered';
            self::getTemplate('error', $error);
        }
    }

    public static function edit()
    {
        $record = accounts::findOne($_REQUEST['id']);

        self::getTemplate('edit_account', $record);

    }

    //this is to login, here is where you find the account and allow login or deny.
    public static function login()
    {
        //you will need to fix this so we can find users username.  YOu should add this method findUser to the accounts collection
        //when you add the method you need to look at my find one, you need to return the user object.
        //then you need to check the password and create the session if the password matches.
        //you might want to add something that handles if the password is invalid, you could add a page template and direct to that
        //after you login you can use the header function to forward the user to a page that displays their tasks.
        //        $record = accounts::findUser($_POST['uname']);

          //  print_r($_REQUEST['email']);

        $user = accounts::findUserbyEmail($_REQUEST['email']);

        if($user==FALSE)
        {
            $error = 'user not found';
            self::getTemplate('error', $error);

        }
        else
        {

          if($user->checkPassword($_POST['password'])== TRUE)
             {
               // echo 'login';

                session_start();

                $_SESSION["userID"] = $user->id;
                $_SESSION["email"] = $user->email;


                 header("location: https://web.njit.edu/~nmd33/mvc/index.php?page=tasks&action=all");


             }

             else
             {

                 $error = 'password does not match';
                 self::getTemplate('error', $error);
             }

               }

    }

    public static function delete()
    {
      $record = accounts::findOne($_REQUEST['id']);
      $record->delete();
      header("location: https://web.njit.edu/~nmd33/mvc/index.php");
    }

    static  public function test()
    {
        if ($_POST['btSubmit']=='Edit') {

        accountsController::edit();

        }
         elseif ($_POST['btSubmit']=='Delete') {

        accountsController::delete();
        }

    }

    static public function update()
    {
        session_start();

        $record = new account();
        $record->email = $_POST['email'];
        $record->fname = $_POST['fname'];
        $record->lname = $_POST['lname'];
        $record->phone = $_POST['phone'];
        $record->birthday = $_POST['birthday'];
        $record->gender = $_POST['gender'];
        $record->password = $_POST['password'];
        $record->id = $_SESSION['userID'];
        $record->save();

        header("location: https://web.njit.edu/~nmd33/mvc/index.php?page=tasks&action=all");


    }

    static public function profile()
    {
        session_start();
        $record = accounts::findUserbyEmail($_SESSION['email']);

        self::getTemplate('edit_account', $record);


    }









}