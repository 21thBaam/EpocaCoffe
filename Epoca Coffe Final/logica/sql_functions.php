<?php
function consulta($sql){
    require '../logica/conexion.php';

    $result = mysqli_query($conn, $sql);
    $iteraciones=0;

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $resultado[$iteraciones] = array_merge($row);
            $iteraciones++;
        }
    } else {
        //echo "0 results";
        $resultado = 0;
    }
    mysqli_close($conn);

    return $resultado;
}

function total($conn, $query){
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);
    return $data['total'];
}

function insert($conn,$sql){
    mysqli_query($conn, $sql);
}

function delete($conn,$sql){
    mysqli_query($conn,$sql);
    //"DELETE FROM MyGuests WHERE id=3";
}
?>