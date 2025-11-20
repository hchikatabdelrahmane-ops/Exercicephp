  <h1>LOGIN</h1>
<form method="post">
    <label>username :</label>
    <input type="text" name="username"><br/>
    
 
  

    <input type="submit" class="mt-3">
    <input type='submit' value = supprimer class='mt-3'>
 
</form>


<?php

//session_start()

if (!isset ($_SESSION['username'])) {
    echo 'bonjour ,' . $_POST ['username'];



}

unset ($_SESSION['supprimer'])

?>