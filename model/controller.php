<?php

function GetAllData()
{
    global $mysqli;
    $dataArray = array();
    $query = "SELECT * FROM products";
    $res_data = $mysqli->query($query);

    while ($data = $res_data->fetch_assoc()) {
        array_push($dataArray, $data);
    }
    return $dataArray;
}

function getSingleData($id)
{
    global $mysqli;
    $dataArray = array();
    $query = "SELECT * FROM products where id=" . $id . "";
    $res_data = $mysqli->query($query);

    while ($data = $res_data->fetch_assoc()) {
        array_push($dataArray, $data);
    }
    return $dataArray;
}

function GetSortedData($sortby, $ascDesc)
{
    global $mysqli;
    $dataArray = array();
    $query = "SELECT * FROM products ORDER BY ".$sortby." "."$ascDesc";
    $res_data = $mysqli->query($query);

    while ($data = $res_data->fetch_assoc()) {
        array_push($dataArray, $data);
    }
    return $dataArray;

}

?>
