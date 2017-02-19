<?php
class NameGenerator
{

  function genFirstWarriorName()
    {
  $firstName = array("Kr", "Ca", "Ra", "Mrok", "Cru", "Ray", "Bre", "Zed", "Drak", "Mor", "Jag",
           "Mer", "Jar", "Mjol", "Zork", "Mad", "Cry", "Zur", "Creo", "Azak", "Azur", "Rei", "Cro", "Mar", "Luk", "a",
           "e", "i", "o", "u", "ei", "ai", "ou", "j", "ji", "y", "oi", "au", "oo");

    $secondName = array("an", "ar", "ad", "et", "ief", "ob", "or", "od");

    $firstGeneratedNumber = mt_rand(0, count($firstName));
    $secondGeneratedNumber = mt_rand(0, count($secondName));

    if($firstGeneratedNumber == count($firstName))
    {
      $firstGeneratedNumber--;
    }
    if ($secondGeneratedNumber == count($secondName))
    {
      $secondGeneratedNumber--;

        }
     $name = $firstName[$firstGeneratedNumber].$secondName[$secondGeneratedNumber];
     $name = ucfirst($name);
     if($name != "Oo")
     {
            return $name;
     }

      }

  function genSecondWarriorName()
    {
      $number  = 0;
      $warriorNames = array("hammer" , "stone" , "rock" , "fist" , "strength", "hard");
      $firstNumber = mt_rand(0, count($warriorNames));
      $secondNumber = $this->duplicateNumber($firstNumber, $warriorNames);

      if($firstNumber == count($warriorNames))
      {
        $firstNumber--;
      }
      else if ($secondNumber == count($warriorNames)) {
        $secondNumber--;
      }

      $newWarriorName = $warriorNames[$firstNumber].$warriorNames[$secondNumber];
      $newWarriorName = ucfirst($newWarriorName);
      if($newWarriorName != "Hardhard"){
        return $newWarriorName;
      }

    }

    function duplicateNumber($firstNumber, $warriorNames)
         {
           $name = mt_rand(0, count($warriorNames));
           if($name == $firstNumber) {
             return $this->duplicateNumber($firstNumber, $warriorNames);
            }
            else {
             if($name != $firstNumber)
             return $name;
            }
         }

         function generateName(){

           $firstName = $this->genFirstWarriorName();
           $blankSpace = " ";
            $secondName = $this->genSecondWarriorName();
            $name = $firstName.$blankSpace.$secondName;
            return $name;
         }

}
?>
