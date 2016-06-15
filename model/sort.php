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

function GetSortedData($sortstring)
{
    global $mysqli;

    foreach ($fregetables as $key => $row) {
        $age[$key] = $row['age'];
        $height[$key] = $row['height'];
        $name[$key] = $row['name'];
    }
    $action = $sortstring;
    $actionarray = explode(':', $action);
    if ($actionarray[1] == 'ASC') {
        $sortby = SORT_ASC;
    } elseif ($actionarray[1] == 'DESC') {
        $sortby = SORT_DESC;
    }
    if ($actionarray[0] == 'name') {
        array_multisort($name, $sortby, $fregetables);
    } elseif ($actionarray[0] == 'price') {
        array_multisort($age, $sortby, $fregetables);
    }
}

?>
