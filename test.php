<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 06/04/2016
 * Time: 5:46 PM
 */

?>


<script type="application/javascript">
    function pass(){
        $.ajax({
            type: "POST",
            url: "passlocation.php",
            data: { a1: "WH Location A1"}
        });
    }
</script>

<button onclick="pass();">Click to pass data</button>
