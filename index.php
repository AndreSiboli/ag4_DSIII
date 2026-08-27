<?php

$tasks = [
    "Estudar PHP",
    "Tocar guitarra",
    "Ler um livro",
];

function addTask(&$list, $task)
{
    $list[] = $task;
}
function showTasks($list)
{
    echo "<h2>Lista de Tarefas</h2>";
    echo "<ol>";

    foreach ($list as $task) {
        echo "<li>" . htmlspecialchars($task) . "</li>";
    }

    echo "</ol>";
}

addTask($tasks, "Jogar videogame");

showTasks($tasks);

echo "<h2>Tarefas numeradas:</h2>";

for ($i = 0; $i < count($tasks); $i++) {
    echo ($i + 1) . " - " . htmlspecialchars($tasks[$i]) . "<br>";
}

?>
