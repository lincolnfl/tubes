<?php
    //KONEKSI MENGGUNAKAN PDO
    $host = 'localhost';
    $uname = 'root';
    $pw = '';
    $db_name = 'tubes';
    $shortcut = "mysql:host=$host;dbname=$db_name";

    // $conn = new PDO($shortcut,$uname,$pw);
    // try{
    //     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //     echo 'Database connected successfully !';
    // }
    // catch(PDOException $e){
    //     echo 'Connection error : '. $e -> GetMessage();
    // }

    //KONEKSI MENGGUNAKAN mysqli
    $conn = new mysqli($host,$uname,$pw,$db_name);

    //FUNGSI UNTUK RETRIEVE DATA DARI DATABASE
    function query($p)
    {
        global $conn;
        $results = mysqli_query($conn,$p);
        $data =[];
        while ($result = mysqli_fetch_assoc($results))
        {
            $data[] = $result;

        }
        return $data;
    }

    //Fungsi INSERT DATA
    function insert_data($data)
    {
        global $conn;
        $gmbr   = htmlspecialchars($data['gmbr']);
        $nim    = htmlspecialchars($data["nim"]);
        $nama   = htmlspecialchars($data["nama"]);
        $email  = htmlspecialchars($data["email"]);
        $prodi  = htmlspecialchars($data["prodi"]);

        $query  =  "INSERT INTO mahasiswa
                    VALUES
                    ('','$gmbr',  '$nim', '$nama', '$email', '$prodi')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    //Fungsi HAPUS DATA
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa where id = $id");
        return mysqli_affected_rows($conn);
    }

    //Fungsi UBAH DATA
    function ubah($data)
    {
        global $conn;
        $id     = $data['id'];
        $gmbr   = htmlspecialchars($data['gmbr']);
        $nim    = htmlspecialchars($data["nim"]);
        $nama   = htmlspecialchars($data["nama"]);
        $email  = htmlspecialchars($data["email"]);
        $prodi  = htmlspecialchars($data["prodi"]);

        $query  =  "UPDATE mahasiswa SET 
                    gmbr = '$gmbr',
                    nim = '$nim',
                    nama = '$nama',
                    email = '$email',
                    prodi = '$prodi'
                    WHERE id = $id
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>