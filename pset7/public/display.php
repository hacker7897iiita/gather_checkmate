<?php

    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("login.php", ["title" => "Log In"]);
    }
        // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $events = [];

    if(isset($_POST['submit'])){

        if(!empty($_POST['interests'])){

        foreach($_POST['interests'] as $interest){

    }
    
    
    
    
    
    
    


}

?>