<?php
    function fetch()
    {
        $connection = 'dummy_db';
        $query_fetch_barang = "SELECT * FROM tbl_barang";
        $results = mysqli_fetch_all(mysqli_query($connection, $query_fetch_barang), MYSQLI_ASSOC);

        $connection->close();
        header('Content-Type: application/json');
        echo json_encode($results);
    }

    function getDataById($id)
    {
        $connection = 'dummy_db';
        $query_get_barang_by_id = "SELECT * FROM tbl_barang WHERE id_barang = '$id'";
        $results = mysqli_fetch_all(mysqli_query($connection, $query_get_barang_by_id), MYSQLI_ASSOC);

        $connection->close();
        header('Content-Type: application/json');
        echo json_encode($results);
    }

    function update($id, $data)
    {
        $nama_barang = $data['nama_barang'];
        $harga_barang = $data['harga_barang'];
        $connection = 'dummy_db';
        $query_update = "UPDATE tbl_barang SET
            `nama_barang` = '$nama_barang',
            `harga_barang` = '$harga_barang'
            WHERE id_barang = '$id'
        ";

        $exe_update = $connection->query($query_update);
        
        $connection->close();
        header('Content-Type: application/json');
        echo json_encode(['message' => 'success for update data']);
    }
    function delete($id)
    {
        $connection = 'dummy_db';
        $query_delete = "DELETE FROM tbl_barang 
            WHERE id_barang = '$id'
        ";

        $exe_update = $connection->query($query_delete);
        
        $connection->close();
        header('Content-Type: application/json');
        echo json_encode(['message' => 'success for update data']);
    }

    function search($data)
    {
        $connection = 'dummy_db';
        $search = $data['search'];
        $query_search_barang = "SELECT * FROM tbl_barang
            WHERE `nama_barang` like '%'.$search.'%'
            OR `harga_barang` like '%'.$search.'%'
        ";
        $results = mysqli_fetch_all(mysqli_query($connection, $query_search_barang), MYSQLI_ASSOC);

        $connection->close();
        header('Content-Type: application/json');
        echo json_encode($results);
    }