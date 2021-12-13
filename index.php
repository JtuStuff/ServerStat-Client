<?php require('construct/index.html'); ?>
<?php require('engine/dbcread.php'); ?>
<?php require('construct/php/anything.php'); ?>

<?php echo "<h3 style='$color'>".$status ."</h3>"; ?>
    <hr size=8>
    <h3>Last Update</h3>
<?php echo "<h4>".$dt ."</h4>"; ?>
    <hr size=8>
    <h3>Current Date and Time is</h3>
    <h4 id='datetime'></h4>

<script type="text/javascript">
var datetime = document.getElementById("datetime");
function dt() {
    datetime.textContent = new Date().toLocaleString();
    }
setInterval(dt, 1000);
</script>
</body>
</html>

<?php mysqli_close($db); ?>

