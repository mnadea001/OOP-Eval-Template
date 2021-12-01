<h1> La page qui reçoit des infos </h1>

<?php
    foreach ($_POST as $key => $value) {
        echo $key.$value;
    }
?>

<table>
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Montant</th>
    </thead>
    <tbody>
        <tr>
            <td>Axel</td>
            <td>Formateur WF3</td>
            <td>56010506665465465454K</td>
        </tr>
    </tbody>
</table>