<?php
    $name = (isset($_POST["name"]) && $_POST["name"] != "" ) ?$_POST["name"] : "No especificado";
    $apellidos = (isset($_POST["appellidos"]) && $_POST["apellidos"] != "" ) ?$_POST["apellidos"] : "No especificado";
    $age = (isset($_POST["age"]) && $_POST["age"] != "" ) ?$_POST["age"] : "No especificado";
    $address = (isset($_POST["address"]) && $_POST["address"] != "" ) ?$_POST["address"] : "No especificado";
    $tickets = (isset($_POST["tickets"]) && $_POST["tickets"] != "" ) ?$_POST["tickets"] : "No especificado";
    //$kticket = (isset($_POST["kticket"]) && $_POST["kticket"] != "" ) ?$_POST["kticket"] : "No especificado";
    
    echo "
        <table border=l align=center cellpadding=25px>
            <thead>
                <th>
                    <th colspan=4>SIX FLAGS</th>
                </th>
            </thead>

            <tbody>
                <tr>
                    <td> $name </td>
                    <td>$apellidos</td>
                    <td>$age</td>
                </tr>
                <tr>
                    <td>$address</td>
                    <td>$tickets</td>
                </tr>
            </tbody>

        </table><br/>";
?>