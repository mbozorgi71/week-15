<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\LoginSession;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isPost()) {

            //------------------
            $db = \app\core\Application::$app->db;

            //$db->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            //------------------
            if (isset($_POST["login"])) {
                if ($_POST["select"] == "admin") {
                    $flag=-1;
                    //-------------------

                    $sql = 'select *from  admin';

                    $statement = $db->pdo->prepare($sql);

                    $statement->execute();
                    $doctor = $statement ->fetchAll();


                    foreach ($doctor as $value)
                    {
                        if($value["username"]==$_POST["userName"] && $value["passwoord"] == $_POST["password"]){
                            $flag=1;
                            $session = new LoginSession($value["username"],$value["id"]);
                            return $this->render('admin');
                        }
                    }
                    //-----------------
                    if($flag<0)
                    {return "you are not registered. please  register now;";}

                }

                if ($_POST["select"] == "doctor") {

                    //----------
                    $flag=-1;
                    //-------------------

                    $sql = 'select *from  doctor';

                    $statement = $db->pdo->prepare($sql);

                    $statement->execute();
                    $doctor = $statement ->fetchAll();


                    foreach ($doctor as $value)
                    {
                        if($value["username"]==$_POST["userName"] && $value["passwoord"] == $_POST["password"]){
                            $flag=1;
                            //$session = new LoginSession($value["username"],$value["id"]);
                            return $this->render('doctorRegister');
                        }
                    }
                    //-----------------
                    if($flag<0)
                    {return "you are not registered. please  register now;";}

                    //---------------

                }
                if ($_POST["select"] == "Patient") {

                    //----------
                    $flag=-1;
                    //-------------------

                    $sql = 'select *from  patient';

                    $statement = $db->pdo->prepare($sql);

                    $statement->execute();
                    $doctor = $statement ->fetchAll();


                    foreach ($doctor as $value)
                    {
                        if($value["username"]==$_POST["userName"] && $value["passwoord"] == $_POST["password"]){
                            $flag=1;
                            //$session = new LoginSession($value["username"],$value["id"]);
                            return $this->render('showDoctor');
                        }
                    }
                    //-----------------
                    if($flag<0)
                    {return "you are not registered. please  register now;";}

                }
            }
        }

        return $this->render('login');
    }


    public function register(Request $request)
    {
        if ($request->isPost()) {

            if ($_POST["select"] == "doctor") {

                $name = $_POST["name"];
                $family = $_POST["family"];
                $passwoord = $_POST["password"];
                $username = $_POST["userName"];

                $db = \app\core\Application::$app->db;


                $sql = 'insert into doctor (name,family,username,passwoord)
                                        values(:name,:family,:username,:passwoord)';

                $statement = $db->pdo->prepare($sql);

                $statement->execute([
                    'name' => $name,
                    'family' => $family,
                    'username' => $username,
                    'passwoord' => $passwoord
                ]);


                return 'doctor , you are aded to hospital';
            }

            ///////----------------

            if ($_POST["select"] == "admin") {

                $name = $_POST["name"];
                $family = $_POST["family"];
                $passwoord = $_POST["password"];
                $username = $_POST["userName"];

                $db = \app\core\Application::$app->db;


                $sql = 'insert into admin (name,family,username,passwoord)
                                        values(:name,:family,:username,:passwoord)';

                $statement = $db->pdo->prepare($sql);

                $statement->execute([
                    'name' => $name,
                    'family' => $family,
                    'username' => $username,
                    'passwoord' => $passwoord
                ]);
                return 'admin, you are aded to hospital ';
            }

            ///------------------------
            if ($_POST["select"] == "Patient") {

                $name = $_POST["name"];
                $family = $_POST["family"];
                $passwoord = $_POST["password"];
                $username = $_POST["userName"];

                $db = \app\core\Application::$app->db;


                $sql = 'insert into patient (name,family,username,passwoord)
                                        values(:name,:family,:username,:passwoord)';

                $statement = $db->pdo->prepare($sql);

                $statement->execute([
                    'name' => $name,
                    'family' => $family,
                    'username' => $username,
                    'passwoord' => $passwoord
                ]);
                return 'patient, you are aded to hospital';
            }

        }
        return $this->render('register');
    }


    public function doctorRegister(Request $request)
    {
        if ($request->isPost()) {

           //-----------------


            if ($_POST["select"] == "doctor") {


                $db = \app\core\Application::$app->db;


                $sql = 'insert into doctor (phone,major,address,social,visit_time)
                                        values(:phone,:major,:address,:social,visit_time)';

                $statement = $db->pdo->prepare($sql);

                $statement->execute([
                    'phone' => $_POST["phone"],
                    'major' => $_POST["edu"],
                    'address' => $_POST["address"],
                    'social' => $_POST["social"],
                    'visit_time' => $_POST["work"]
                ]);


                return 'info saved';
            }
            //--------------------


            return 'Handeled submited Data ';
        }
        return $this->render('doctorRegister');
    }


    public function part(Request $request)
    {
        if ($request->isPost()) {
            $name = $_POST["name"];
            $description = $_POST["description"];


            $db = \app\core\Application::$app->db;


            // add part
            if ($_POST["select"] == "addPart") {
                $sql = 'insert into part(name,description)
                                        values(:name,:description)';

                $statement = $db->pdo->prepare($sql);

                $statement->execute([
                    'name' => $name,
                    'description' => $description
                ]);
            }
            // delete part
            if ($_POST["select"] == "deletePart") {


                $sql = "DELETE FROM part WHERE name=?";
                $stmt = $db->pdo->prepare($sql);
                $stmt->execute([$name]);

            }
            // change part

            if ($_POST["select"] == "changePart") {

                $sql = 'UPDATE part
                        SET description = :description
                        WHERE name = :name';

                $statement = $db->pdo->prepare($sql);

                $statement->execute([
                    'name' => $name,
                    'description' => $description
                ]);
            }


        }

        return $this->render('part');
    }


    public function admin(Request $request)
    {


        if (isset($_POST["part"])) {
            return $this->render('part');
        }
        if (isset($_POST["doctor"])) {
            return $this->render('showDoctor');
        }
        if (isset($_POST["admin"])) {
            return $this->render('showAdmin');
        }


        return $this->render('admin');
    }


    public function showAdmin(Request $request)
    {
        if ($request->isPost()) {
            return 'Handeled submited Data ';
        }

        return $this->render('showAdmin');
    }


    public function showDoctor(Request $request)
    {
        if ($request->isPost()) {
            return 'Handeled submited Data ';
        }

        return $this->render('showDoctor');
    }

    public function doctors(Request $request)
    {
        if ($request->isPost()) {
            return 'Handeled submited Data ';
        }

        return $this->render('doctors');
    }


    public function showSearch(Request $request)
    {
        if ($request->isPost()) {
            return 'Handeled submited Data ';
        }

        return $this->render('showSearch');
    }

//    public function main(Request $request)
//    {
//        if ($request->isPost()) {
//
//            return $this->render('showSearch');
//        }
//
//        return $this->render('main');
//    }
//    public function home(Request $request)
//    {
//        if ($request->isPost()) {
//
//            return $this->render('showSearch');
//        }
//
//        return $this->render('main');
//    }

}