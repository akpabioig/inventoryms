if ($purchasepend == $salespend) {
echo "
<script type='text/javascript'>
    alert('PRODUCT BEING ORDER IS AWAITING FULFILLMENT FROM SUPPLIER !!! ' < BR > ' ***** DO NOT REORDER **** ');
    window.location.replace('pendingorders.php');
</script>";
return;
} else if ($purchasepend !== $salespend) {
echo "
<script type='text/javascript'>
    alert(' REORDER STOCK !!! ');
    window.location.replace('pendingorders.php');
</script>";
return;
}