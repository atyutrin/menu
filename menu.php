<?php

class Menu
{
    /**
     * Отделы
     * @var array
     */
    private $departments;
    /**
     * Пользователи
     * @var array
     */
    private $persons;

    public function __construct()
    {
        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        $dbh->exec("set names utf8");

        $sth = $dbh->prepare("select * from department");
        $sth->execute();
        $this->departments = $sth->fetchAll(PDO::FETCH_ASSOC);

        $sth = $dbh->prepare("select * from person");
        $sth->execute();
        $this->persons = $sth->fetchAll(PDO::FETCH_ASSOC);

    }

    /**
     * @param string $parentId
     */
    public function render($parentId = '0'){
        foreach ($this->departments as $department){
            if ($department['parent_id'] === $parentId) {
                echo "<button class='dropdown-btn'><span>+</span> ".$department['name']."</button>";
                echo '<div class="dropdown-container">';
                foreach ($this->persons as $person) {
                    if ($person['department_id'] === $department['id']){
                        echo '<a href="#'.$person['id'].'">'.$person['name'].'</a>';
                    }
                }
                $this->render($department['id']);
                echo '</div>';
            }
        }
    }
}