<h1> Configuration du container </h1>

<h2>Welcome back</h2>

<?php
    echo '<pre>';
    var_dump($this->containers);
    echo '</pre>';
?>

<table>
    <thead>
        <th>Name</th>
        <th>Serveur</th>
        <th>Base de données</th>
        <th>Langage utilisé</th>
    </thead>
    <tbody>
        <?php
            foreach ($this->containers as $container) {
                ?>
        <tr>
            <td><?php echo $container->getName(); ?></td>
            <td><?php echo $container->getServer(); ?></td>
            <td><?php echo $container->getDb(); ?></td>
            <td><?php echo $container->getLanguage(); ?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>