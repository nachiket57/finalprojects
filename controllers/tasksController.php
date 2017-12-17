<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        session_start();
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        session_start();

        $result = todos::findTasksbyID($_SESSION["userID"]);

        if($result==true) {

            self::getTemplate('all_tasks', $result);
        }
        else
        {
            self::getTemplate('create_task');
        }


    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        session_start();

        self::getTemplate('create_task');


    }

    //this is the function to view edit record form
    public static function edit()
    {
        session_start();
        $record = todos::findOne($_REQUEST['id']);

        $result1 = get_object_vars($record);
        unset($result1['oweneremail']);
        unset($result1['ownerid']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {
        session_start();

        $record = new todo();
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->ownerid = $_SESSION['userID'];
       $record->owneremail = $_SESSION['email'];

        $record->save();
        header("Location: https://web.njit.edu/~nmd33/mvc/index.php?page=tasks&action=all");
    }

    static  public function test()
    {
        if ($_POST['btSubmit']=='Edit') {

            tasksController::edit();

        }
        elseif ($_POST['btSubmit']=='Delete') {

            tasksController::delete();
        }

    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: https://web.njit.edu/~nmd33/mvc/index.php?page=tasks&action=all");
       // print_r($_POST);

    }
    static public function update()
    {
        $record = new todo();
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->id = $_REQUEST['id'];
        $record->save();
        header("Location: https://web.njit.edu/~nmd33/mvc/index.php?page=tasks&action=all");


    }

    static public function logout()
    {
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();

        header("Location:  https://web.njit.edu/~nmd33/mvc/");



    }

}