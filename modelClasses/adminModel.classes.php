<?php

//run queries inside the database
//inside this class we're going to create methods use to queries into database
class AttendanceLog extends Dbh{
    //extend to Dbh class so we can use connection in Dbh class
    
    protected function attendanceDashboard() {
   
        $sql = $this->connect()->prepare('SELECT user_id, user_email, clock_in FROM users;');

        //if this command is not mentioned, it wont display anything
        $sql->execute();
        
        //mysqli method
        // $result = $dbh->query($sql);

        //pdo method
        $row = $sql->fetchAll(\PDO::FETCH_ASSOC);

        $i = 0;
        while($i < count($row)){
            echo "
            <p>Employee ID: {$row[$i]['user_id']}</p>
            <p>Employee Email: {$row[$i]['user_email']}</p>
            <p>Employee Clock In: {$row[$i]['clock_in']}</p>
            <form action='#' method='post'>
                <button type='submit' value ='{$row[$i]['user_id']}' name='edit_log'>Edit log</button>
            </form>
            ".'<br>';
                
            $i += 1;

        }               
    }
}