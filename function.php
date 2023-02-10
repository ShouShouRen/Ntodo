<?php
require_once("pdo.php");

function RoleCheck()
{
    if (!isset($_SESSION["AUTH"])) {
        header("Location: index.php");
    }
}

function QueryCode()
{
    global $pdo;
    $sql = "SELECT * FROM todo_list JOIN status ON todo_list.status = status.code JOIN usetodo ON usetodo.codes";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
