
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lavenderblush;

}
</style>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wed Site</title>

</head>
<body>
    <?php include 'header.php'; ?>
    
    <br>
    <br>
    <br>
    <fieldset>
            <form>
                <div>
                    <table>
                        <tr>
    <div align="center">
        <div style="border: 1px black; color: purple; font-size: 20px; font-style: italic;">
        <h3>Welcome to Wedsite</h3></p>



        <div id="demo">
<h2></h2>
<button type="button" onclick="loadDoc()">About US</button>
</div>

<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "ajax_info.json");
  xhttp.send();
}
</script>





    </div>
        </td>
                                            </tr>
                                        </table>
                                    </div>
                                    </form>
                                </fieldset>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div style=" font-size: 20px;">
    <?php include 'footer.php';?>

</body>
</html>