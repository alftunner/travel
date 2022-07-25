<h2>Select Tours</h2>
<hr>
<?php
$link = connect();
echo '<div class="form-inline">';
echo '<select name="countyid" id="countyid" onchange="showCities(this.value);">';
echo '<option value="0">select country</option>';
$res = mysqli_query($link, 'select * from countries');
while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
    echo '<option value="' . $row['id'] . '">' . $row['country'] . '</option>';
}
echo '</select>';
//список городов
echo '<select name="cityid" id="citylist" onchange="showHotels(this.value)"></select>';
echo '</div>';
//список отелей
echo '<div id="h"></div>';
