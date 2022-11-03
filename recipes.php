<?

/*recipe loader for tp8php*/

$name = $_GET["recipeName"];
$list = $_GET["recipeList"];

if ($name == "Taco Dip") {
  
  if ($list == "ingredients") {
   include "ingredients.html";
    
  } elseif ($list == "equipment") {
    include "equipment.html";
  
  } elseif ($list == "directions") {
    include "directions.html";
  
  
  } else {
    echo "1";
  
  } 
  
} elseif ($name == "Fluffy French Toast") {
  
  if ($list == "ingredients") {
   include "fluffyfrenchtoast-ingredients.html";
    
  } elseif ($list == "equipment") {
    include "fluffyfrenchtoast-equipment.html";
  
  } elseif ($list == "directions") {
    include "fluffyfrenchtoast-directions.html";
  
  
  } else {
    echo "1";
  
  } 
  
  } elseif ($name == "Peach Crisp") {
  
  if ($list == "ingredients") {
   include "peachcrisp-ingredients.html";
    
  } elseif ($list == "equipment") {
    include "peachcrisp-equipment.html";
  
  } elseif ($list == "directions") {
    include "peachcrisp-directions.html";
  
  
  } else {
    echo "1";
  
  } 
  
  
  
} else {
  
  echo "0";
}

?>




















