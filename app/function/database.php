<?php

function connect(){
    $pdo = new \PDO("mysql:host=localhost;curso; charset=utf8",'valnir', 'nil123456');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}

function create($table, $fields){

    if (!is_array($fields)){
        $fields = (array)$fields;
    }

    $sql = "insert into curso.{$table}" . "("  . implode("," , array_keys($fields)) . ")" .  " values(".":".implode(',:',array_keys($fields)).")";
    
      
    $pdo = connect();
    $insert = $pdo->prepare($sql);
    return $insert->execute($fields);

}

function all($table){
    $pdo = connect();
    $sql = "select * from curso.{$table}";
    $list = $pdo->query($sql);
    $list->execute();
    return $list->fetchAll();
}



function update($table, $fields, $where){

    if(!is_array($fields)){
        $fields = (array) $fields;
    }

    $pdo = connect();
    $data = array_map(function ($field){
        return "{$field} = :{$field}";
    }, array_keys($fields));

    $sql = "update curso.{$table} set ";
    $sql .= implode(',',$data);
    $sql .=" where {$where[0]} = :{$where[0]}";
    $data = array_merge($fields, [$where[0] => $where[1]]);

    $update = $pdo->prepare($sql);
    $update->execute($data);
    return $update->rowCount();
}

function find($table, $field, $value)
{

    $pdo = connect();

    $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

    $sql = "select * from curso.{$table} where {$field} = :{$field}";
    $find = $pdo->prepare($sql);
    $find->bindValue($field, $value);
    $find->execute();
    return $find->fetch();
}

function delete($table, $field, $value ){
    $pdo = connect();

    $sql = "delete from {$table} where {$field}= $value";
    $delete = $pdo->prepare($sql);
    $delete->bindValue($field, $value);
    return $delete->execute();
}