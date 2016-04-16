<?php

//require_once('Spreadsheet/Excel/Writer.php');
class XLSExport
{
    public $is_error;
    private $tables;
    private $link;
    private $xls;
    private $fn;

    public function export()
    {
        foreach ($this->tables as $table) {
            // query
            $res = mysql_query("SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY productid" . $table, $this->link) or $this->error(mysql_error());
            $colnames = array();

            // add new sheet
            $sheet = $this->xls->addWorksheet($table);

            for ($i = 0; $i < mysql_num_fields($res); $i++) {
                $fld = mysql_fetch_field($res, $i);
                $colnames[] = '"' . $fld->name . '"';

                // add cols to sheet
                $sheet->write(0, $i, $fld->name);
            }

            if (mysql_num_rows($res) > 0)
                for ($j = 1; $row = mysql_fetch_array($res, MYSQL_NUM); $j++)
                    for ($i = 0; $i < sizeof($row); $i++)
                        $sheet->write($j, $i, utf8_decode($row[$i]));
        }

        $this->xls->close();
        return $this->fn;
    }

    public function __destruct()
    {
        @ mysql_close($this->link);
    }

}

?>