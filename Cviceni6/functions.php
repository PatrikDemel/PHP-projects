<?php

require_once('config.php');

$aMenu = array(
  "about_me" => "About me",
  "contact"  => "Contact",
  "hobbies"  => "Hobbies",
  "school"   => "School"
  "work"     => "My work"
  "photos"   => "Photos"
  );

/* Functions */
function showMenu(){
    echo '<header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">EduCover</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">About Me</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header>';
}

function showAuthor($name){
  return "Used by $name, PVA4 2023";
}

showMenu();
showAuthor($author);
?>