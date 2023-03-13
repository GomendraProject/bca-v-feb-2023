<?php
// Request processing
?>

<?php
include_once "includes/Connection.php";
include_once "header.php";
?>

<h1>
    Add Room
</h1>

<div class="card">
    <div class="card-body">
        <div class="form-group">
            <label for="RoomNo">Room No</label>
            <input type="text" name="room_no" id="RoomNo">
        </div>

        <div class="form-group">
            <input type="checkbox" name="room_no" id="chk">
            <label for="chk">I have read the terms and conditions!</label>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>