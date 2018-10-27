<?php
    require('dbConnect.php');
    session_start();
    $db = get_db();

    function checkUsername($db, $user) {
        $isFound = false;

        try {
            $stmt = $db->prepare("SELECT username from users;");
            $stmt->execute();
            $accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($accounts as $account) {
                alert($account);
                alert($user);
                if ($account == $user) {
                    $isFound = true;
                }
                alert($isFound);
            }
        } catch (PDOException $ex) {
            echo "Error has occurred. Please nod your head to prompt the NSA to engage their code monkeys to fix the code.\n";
            echo $ex;
            die();
        }

        return $isFound;
    }
    

    function registerUser($db) {
        $user = htmlspecialchars($_POST['user']);
        $pass0 = htmlspecialchars($_POST['pass0']);
        $pass1 = htmlspecialchars($_POST['pass1']);
        
        if ($pass0 != $pass1) {
            alert('Please ensure that passwords match!');

            header('Location: index.php');
            die();
        } else if (!checkUsername($db, $user)) {
            alert('Username has already been claimed!');

            header('Location: signUp.php');
            die();
        } else {
            try {
                $stmt = $db->prepare("INSERT INTO users(username, password) VALUES (:usr, :pass);");

                $stmt->bindValue(':usr', $user, PDO::PARAM_STR);
                $stmt->bindValue(':pass', $pass0, PDO::PARAM_STR);
                $stmt->execute();
                
                $_SESSION['loggedIn'] = true;
                $_SESSION['name'] = $user;

                header('Location: index.php');
                die();
            } catch (PDOException $ex) {
                echo "Error has occurred. Please nod your head to prompt the NSA to engage their code monkeys to fix the code.\n";
                echo $ex;
                die();
            }
        }
    }

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    if (isset($_POST['user']) && isset($_POST['pass0']) && isset($_POST['pass1'])) {
        $db = get_db();
        registerUser($db);
    }
?>