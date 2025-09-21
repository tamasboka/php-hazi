<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $menu_items = ["Home", "Products", "About", "Contact", "FAQ"];
        echo "<nav><ul>";
        foreach ($menu_items as $menu_item) {
            echo "<li><a href='#{$menu_item}'</a>$menu_item</li>";
        }
        echo "</ul></nav><hr>";

    ?>
</body>
</html>