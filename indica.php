<?php
    include_once 'header.php';
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM products WHERE pr_type='indica'";
    $query = mysqli_query($conn, $sql);
    $rowcnt = mysqli_num_rows($query);
    $sql = "SELECT * FROM products WHERE pr_type='indica'";
    $query = mysqli_query($conn, $sql);
?>
<table class="table-contents">
    <?php
        if (isset($_SESSION['u_id']))
        {
            for ($i=0; $i <= $rowcnt; $i++)
            {
                if ($row = mysqli_fetch_assoc($query))
                {
                    echo "<tr>";
                    echo "<td class=\"tbl-div\">";
                    echo "<h1 class=\"tbl-h1\">".$row['pr_name']."</h1>";
                    echo "<div><img src=".$row['pr_picture']." class=\"tbl-img\" ></div>";
                    echo "<div class=\"tbl-p\"><p>".$row['pr_description']."</p></div>";
                    echo "<div class=\"tbl-price\">";
                    echo "<h2>".$row['pr_price']."<h2>";
                    echo "</div>";
                    echo "<input type=\"number\" name=\"points\" step=\"1\" placeholder=\"0\">";
                    echo "</td>";
                }
            }
        }
        else
        {
            echo "<h1 class=\"else-h1\">Please Login to See Our Products</h1>";
        }
    ?>
</table>
<?php
    include_once 'footer.php';
?>