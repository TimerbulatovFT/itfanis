<?php 
echo '<!DOCTYPE html><html><head><title>Таблица</title></head><body><style>.td_st {
    border:1px solid #cccccc;
    text-align:center;
    height:10px;
}</style><div>';

$connection = new mysqli("localhost", "root", "root", "itfanis");
if (!$connection) {
die("Соединение не удалось: " . mysqli_connect_error());
} 

$query = "select * from city";
$result = $connection->query($query);
echo '<table width="100%"><tr><td class="td_st" width="25%"><select id="city_change" name="city_change" style="width:300px"><option>Выберите район</option>';

/*if (isset($_GET['city_change'])){
    $nameSort = $_GET['city_change'];
    echo '<option>'.$nameSort.'</option>';
}
else {
    echo '<option>Выберите район</option>';
}*/
while($row = mysqli_fetch_array($result)) {
echo '<option>'.$row['city'].'</option>';
}
echo '</select></td>';

?>

<script>

let select = document.getElementById("city_change");
    
    if (localStorage.getItem("indexSelected")) {
      select.options[localStorage.getItem("indexSelected")].selected = true;
    }

    /*select.addEventListener("change", function() {
      localStorage.setItem("indexSelected", this.selectedIndex);
      window.location.href = this.options[this.selectedIndex].value;
    });*/




document.getElementById("city_change").addEventListener("change", table);
function table() {
    localStorage.setItem("indexSelected", this.selectedIndex);
    let valCity = city_change.value;
    let linkCity = `http://localhost:81/itfanis/dir/php/table/www/index.php/?city_change=${valCity}`;
    document.getElementById("table").innerHTML = city_change.value;
    location.href = linkCity;
}
let newSelect = document.getElementById("city_change");
newSelect.value = valCity;
</script>


<?php
if (isset($_GET['city_change'])){
$nameSort = $_GET['city_change'];

$query1 = "SELECT school FROM clients WHERE city = '$nameSort'";
$result1 = $connection->query($query1);
echo '<td class="td_st" width="25%"><select id="clients_change" name="clients_change" style="width:300px"><option>Выберите заказчика</option>';
while($row1 = mysqli_fetch_array($result1)) {
echo '<option>'.$row1['school'].'</option>';
}
echo '</select></td><td class="td_st" width="50%"></td></tr></table>';


$query2 = "SELECT city, school, full_name FROM clients WHERE city = '$nameSort'";
$result2 = $connection->query($query2);
echo '<div id="table"><table width="100%">';
while ($row2 = mysqli_fetch_array($result2)) {
echo '<tr>';
echo '<td class="td_st" width="25%">'.$row2['city'].'</td>';
echo '<td class="td_st" width="25%">'.$row2['school'].'</td>';
echo '<td class="td_st" width="50%">'.$row2['full_name'].'</td>';
echo '</tr>';
}
echo '</table></div>';

} else {
    echo '<td class="td_st" width="25%"></td><td class="td_st" width="50%"></td></tr></table>';  
$query3 = "SELECT city, school, full_name FROM clients";
$result3 = $connection->query($query3);
echo '<div id="table"><table width="100%">';
while($row3 = mysqli_fetch_array($result3)) {
echo '<tr>';
echo '<td class="td_st" width="25%">'.$row3['city'].'</td>';
echo '<td class="td_st" width="25%">'.$row3['school'].'</td>';
echo '<td class="td_st" width="50%">'.$row3['full_name'].'</td>';
echo '</tr>';
}
echo '</table>';
}
echo '</div></body></html>';
?>


