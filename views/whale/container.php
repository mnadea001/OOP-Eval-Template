<h1> Configuration du container </h1>

<h2>Welcome back <?php echo $this->user['username']; ?></h2>

<?php
    echo '<pre>';
    var_dump($this->form_infos);
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
        <tr>
            <td><?php echo $this->form_infos['name']; ?></td>
            <td><?php echo $this->form_infos['server']; ?></td>
            <td><?php echo $this->form_infos['database']; ?></td>
            <td><?php echo $this->form_infos['language']; ?></td>
        </tr>
    </tbody>
</table>