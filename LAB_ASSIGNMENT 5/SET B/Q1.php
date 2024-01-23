<center>
<?php 
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $l=$_POST["list"];
        $sugar=$_POST["sugar"];
        $corn=$_POST["corn"];
        $cook=$_POST["cookies"];
        $t=$_POST["tea"];
        $s=35;
        $tea=100;
        $c=75;
        $co=80;
        $list=array();
        $i=0;
        foreach ($l as $k) {
           $list[$i]=$k;
           $i++;
        }
       
        $i=0;
        while($i<count($list))
        {
        if($list[$i]=="sugar")
        {
            $ps=$list[$i];
            $rs=$sugar*$s;
        }else if($list[$i]=="corn"){
            $pc=$list[$i];
            $rc=$corn*$c;
        }else if($list[$i]=="cookies")
        {
            $pco=$list[$i];
            $rco=$co*$cook;
        }else if($list[$i]=="tea powder"){
            $ptp=$list[$i];
            $rt=$tea*$t;
        }
        $i++;
    }
    $total=$rs+$rc+$rco+$rt;
    echo"<h1>customer purchase details!</h1>";
    echo"<table border='1px solid black' text-align='center'>
    <tr>
    <th>customer name</th>
    <th>product name</th>
    <th>rate of product</th>
    <th>quantity</th>
    <th>total cost(per/product)</th>
    <th>total</th>
    </tr>";
    echo"<tr>
    <td rowspan='4'>$name</td>";
    echo"<td>$ps</td>";
    echo"<td>$s</td>";
    echo" <td>$sugar</td>";
    echo"<td>$rs</td>";
    echo"<td>$total</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>$pc</td>";
    echo"<td>$c</td>";
    echo" <td>$corn</td>";
    echo"<td>$rc</td>";
    echo"<tr>";
    echo" <td>$ptp</td>";
    echo" <td>$tea</td>";
    echo" <td>$t</td>";
    echo"<td>$rt</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>$pco</td>";
    echo"<td>$co</td>";
    echo" <td>$cook</td>";
    echo"<td>$rco</td>";
    echo"</tr>";
    echo"</table>";
    }
}
?>
</center>