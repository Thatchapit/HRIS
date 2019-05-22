<?php
    require_once 'Reward_system.php';
    $reward_system = new Reward_system();
    $data = $_POST;
    $reward_system->delete_salary_level($data);
?>