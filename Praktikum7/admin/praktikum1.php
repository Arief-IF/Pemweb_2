<<<<<<< HEAD
<?php 
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h1>
    Praktikum 1
</h1>

<?php

$fruits = ["Banana", "Avocado", "Melon"];
echo $fruits[1];

echo "<ol>";
foreach ($fruits as $fruit){
    echo "<li>" . $fruit . "</li>";
}
echo "</ol>";

?>

=======
<?php 
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h1>
    Praktikum 1
</h1>

<?php

$fruits = ["Banana", "Avocado", "Melon"];
echo $fruits[1];

echo "<ol>";
foreach ($fruits as $fruit){
    echo "<li>" . $fruit . "</li>";
}
echo "</ol>";

?>

>>>>>>> 07b8eaeebec8dea3be910399a48989fa0c3cf2e0
<?php require_once 'footer.html'; ?>