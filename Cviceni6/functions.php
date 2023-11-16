<?php

require_once('config.php');

$aMenu = array(
  "about_me" => "About me",
  "contact" => "Contact",
  "hobbies" => "Hobbies",
  "school" => "School",
  "work" => "My work",
  "photos" => "Photos"
);

/* Functions */
function showMenu($input)
{
  $navbar = '<header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">EduCover</h3>
      <nav class="nav nav-masthead justify-content-center">';

  foreach ($input as $key => $value) {
    $navbar = $navbar . "<a class='nav-link' href='$key'>$value</a>";
  }

  $navbar = $navbar . '</nav>
  </div>
</header>'
  ;

  return $navbar;
}

function showAuthor($name, $year)
{
  return "Used by $name, PVA4 $year";
}

echo showMenu($aMenu);

?>