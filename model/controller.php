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

function GetSortedData($dataArray,$sortby,$ascDesc,$mainQueryPart)
{
    global $mysqli;
    $dataArray = array();
    $query = "SELECT ".$mainQueryPart." ORDER BY ".$sortby." "."$ascDesc";
    $query = mysqli_real_escape_string($mysqli, $query);
    $res_data = $mysqli->query($query);

    while ($data = $res_data->fetch_assoc()) {
        array_push($dataArray, $data);
    }
    return $dataArray;

}

?>
