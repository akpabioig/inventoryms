<script type="application/javascript">
    window.onload{
        confirm("Are you sure you want to delete this record?");
    }
</script>
<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    if(isset($_GET['prodid'])){
    $prodId = $_GET['prodid'];
        try {
            $sql = "DELETE FROM addproduct
                    WHERE productid = {$prodid}";
            $sth = $db->query($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }else{
        header("Location: allproducts.php");
    }
?>