<?php 
$results = DB::select('select username from users where id = ?', array(1));
echo 'Id number one username: ' .  $results[0] -> username . '<br />';

DB::update("update users set password = 'cool' where username = ?", array('Frank'));
echo 'Changed Frank password <br />';

DB::insert("insert into users (username, password) values (?,?)", array("Not Frank", "reallygoodpassword"));
echo 'Added Not Frank <br />';

DB::insert("insert into users (username, password) values (?,?)", array("Definitely Not Frank", "reallygoodpassword"));
echo 'Added Definitely Not Frank <br />';

DB::delete("delete from users where username = ?", array('Definitely Not Frank'));
echo 'Deleted Definitely Not Frank <br />';