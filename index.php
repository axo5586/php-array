<html>
<head>
</head>
<body>


<?php
$fruits = array( 
    "apple" => array (
       "color" => 'Red or Green',
       "funfact" => 'Apples are part of the rose family, just like pears and plums.'
    ),
    
    "banana" => array (
        "color" => 'Yellow',
       "funfact" => 'Bananas are actually classified as a berry.'
    ),
    
    "orange" => array (
       "color" => 'Orange',
       "funfact" => 'Orange peels can be used by gardeners to sprinkle over vegetables as a slug repellent.'
    )
 );

/* Accessing array values and listing them */
echo "I love fruit! Here are some my favorites: " ."<br /><br />";
echo "Apples: " . "<br />";
echo "Color: " . "<b>" . $fruits['apple']['color'] . "</b>" . "<br />"; 
echo "Fun fact: " . "<i>" . $fruits['apple']['funfact'] . "</i>"  . "<br /><br />"; 

echo "Bananas: " . "<br />";
echo "Color: " . "<b>" . $fruits['banana']['color'] . "</b>" . "<br />"; 
echo "Fun fact: " . "<i>" . $fruits['banana']['funfact'] . "</i>"  . "<br /><br />"; 

echo "Oranges: " . "<br />";
echo "Color: " . "<b>" . $fruits['orange']['color'] . "</b>" . "<br />"; 
echo "Fun fact: " . "<i>" . $fruits['orange']['funfact'] . "</i>"  . "<br /><br />"; ; 
?>


</body>
</html>