
<ul>
    <li><a href="../index.php">Home</a></li>
    <?php
        foreach ($navItems as $item){
            echo "<li><a href='$item[slug]'>$item[title]</a></li>";
        }
    ?>
</ul>