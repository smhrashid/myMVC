<?php

class InsertModel {

    public function welcomeMessage() {
        $password = $_POST['receipt_id'];
        $salt = 'anythingyouwant_';
        $hash = hash('sha512', $salt . $password);
        $hash_key = '{"salt":"' . $salt . '", "hash":"' . $hash . '" }';
        $servername = 'localhost';
        $username = 'root';
        $dpassword = '****************';
        $dbname = 'buyer_info';
        $conn = new mysqli($servername, $username, $dpassword, $dbname);
        $sql = ("INSERT INTO buyer 
(amount, buyer, receipt_id, items, buyer_email, buyer_ip, note, city, phone, hash_key, entry_by) 
VALUES 
('" . $_POST['amount'] . "', '" . $_POST['buyer'] . "', '" . $_POST['receipt_id'] . "', '" . $_POST['items'] . "', '" . $_POST['buyer_email'] . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $_POST['note'] . "', '" . $_POST['city'] . "', '" . $_POST['phone'] . "', '" . $hash_key . "', '" . $_POST['entry_by'] . "')");

        if ($conn->query($sql) === TRUE) {
            $sql = "SELECT * FROM buyer WHERE id=(SELECT MAX(id) FROM buyer)";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    return $row;
                }
            }
        }
        $conn->close();
    }
}
