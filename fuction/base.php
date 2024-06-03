<?php

class DB
{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    protected $pdo;
    protected $table;

    public function __construct($table)
    {
        $this->pdo = new PDO($this->dsn, 'root', '');
        $this->table = $table;
    }


    public function all(...$arg)
    {
        $sql = "select * from $this->table ";

        if (!empty($arg[0]) && is_array($arg[0])) {
            $tmp = $this->array2sql($arg[0]);
            $sql = $sql . " where " . implode(" && ", $tmp);
        }
        if (!empty($arg[1])) {
            $sql = $sql . $arg[1];
        }
        echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }


    function find($arg)
    {
        $sql = "SELECT * FROM `{$this->table}` WHERE ";

        if (is_array($arg)) {

            $tmp = $this->array2sql($arg);

            $sql .= join(" && ", $tmp);
        } else {

            $sql .= " `id` = '{$arg}'";
        }

        echo $sql;

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    function save($array)
    {
        if (isset($array['id'])) {
            // update
            // sql語法
            $sql = "UPDATE `{$this->table}` SET ";

            // 使用迴圈將欄位名稱跟值組合成字串
            $tmp = $this->array2sql($array);
            $sql .= join(",", $tmp);
            $sql .= " WHERE `id`='{$array['id']}'";
        } else {
            // insert
            $sql = "INSERT INTO `{$this->table}` ";

            $sql .= "(`" . join("`,`", array_keys($array)) . "`)";

            $sql .= " VALUES('" . join("','", $array) . "')";
        }
        echo $sql;
        return $this->pdo->exec($sql);
    }

    function del($arg)
    {
        $sql = "DELETE FROM `{$this->table}` WHERE ";

        if (is_array($arg)) {
            $tmp = $this->array2sql($arg);

            $sql .= join(" && ", $tmp);
        } else {
            $sql .= " `id`='{$arg}'";
        }

        return $this->pdo->exec($sql);
    }

    function math($method, $cols, ...$arg)
    {
        $sql = "SELECT $method(`$cols`) from $this->table ";

        if (!empty($arg[0]) && is_array($arg[0])) {
            $tmp = $this->array2sql($arg[0]);
            $sql = $sql . " where " . implode(" && ", $tmp);
        }
        if (!empty($arg[1])) {
            $sql = $sql . $arg[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }

    function count(...$arg)
    {
        $sql = "SELECT COUNT(*) from $this->table ";

        if (!empty($arg[0]) && is_array($arg[0])) {
            $tmp = $this->array2sql($arg[0]);
            $sql = $sql . " where " . implode(" && ", $tmp);
        }
        if (!empty($arg[1])) {
            $sql = $sql . $arg[1];
        }
        // echo $sql;   
        return $this->pdo->query($sql)->fetchColumn();
    }

    protected function select($sql, ...$arg)
    {
        if (!empty($arg[0]) && is_array($arg[0])) {
            $tmp = $this->array2sql($arg[0]);
            $sql = $sql . " where " . implode(" && ", $tmp);
        } else {
            $sql = $sql . $arg[0];
        }

        if (!empty($arg[1])) {
            $sql = $sql . $arg[1];
        }

        return $sql;
    }

    protected function array2sql($array)
    {
        foreach ($array as $key => $value) {
            $tmp[] = "`$key`='$value'";
        }

        return $tmp;
    }

    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll();
    }
}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$Student = new DB('students');
$Dept = new DB('dept');

// $dept = $Dept->find(7);

// dd($dept);
// $dept['name'] = "aaa";
// $Dept->save($dept);
// echo $Student->count(['dept' => 2]);
// echo "<br>";
// echo $Student->math('max', 'dept');
