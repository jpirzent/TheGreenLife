<?php
    include_once 'header.php';
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM products";
    $query = mysqli_query($conn, $sql);
    $rowcnt = mysqli_num_rows($query);
    $sql = "SELECT * FROM products WHERE pr_type='sativa'";
    $query = mysqli_query($conn, $sql);
?>
<table class="table-contents">
    <?php
        for ($i=0; $i <= $rowcnt; $i++)
        {
            if ($row = mysqli_fetch_assoc($query))
            {
                echo "<tr>";
                echo "<td class=\"tbl-div\">";
                echo "<h1 class=\"tbl-h1\">".$row['pr_name']."</h1>";
                echo "<img src=".$row['pr_picture']." class=\"tbl-img\" >";
                echo "</td>";
            }
        }
    ?>
    <img src="" alt="">
    <tr>
        <td>
           <div class="tbldiv">
               
           </div>
        </td>
    </tr>
</table>
<?php
    include_once 'footer.php';
?>