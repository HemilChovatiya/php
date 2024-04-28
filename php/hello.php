<?php
echo "Hi, Hemil.";
$var = date("H");
if ($var <= 11)
{
echo "good moroning";
}
elseif ($var > 11 and $var < 18)
{
echo "good afternoon";
}
else
{
echo "good evening";
}
?>