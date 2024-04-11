                    <select class="form-control form-control-sm w-10 col-21" name="Treatment" id="Treatment">
                          <option>select Treatment</option>
<?php
include("../databases/config.php");
$th = mysqli_query($q, "SELECT DISTINCT Name FROM Add_Treatment");
while ($r = mysqli_fetch_array($th)) {
    echo "<option>" . htmlspecialchars($r[0]) . "</option>";
}
?>



                      </select>