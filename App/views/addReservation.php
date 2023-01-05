
<style>
    .formReserve{
  display: flex;
  justify-content: center;
  margin-top: 30px;
}
.ReserveForm{
  display: flex;
  flex-direction: column;
  gap: 20px;
  background-color: rgb(4, 4, 33);
  padding: 30px;
  border-radius: 15px;
}
.reserveSubmit{
  display: flex;
  justify-content: center;
}
</style>
<div class="formReserve">
    <form class="ReserveForm" action="<?= URLROOT ?>cruiseController/insertAllinfo" method="post">
        <input type="hidden" name="id_cruise" value="<?=$data['cruise']->ID_cruise?>">
        <label for="Price">cruise price</label>
        <input type="text" readonly  name="Price" value="<?=$data['cruise']->price?> DH">
        <label for="date">booking date</label>
        <input type="date" name="date" placeholder="Booking date" required="required">
        <label for="id_roomType_price">room type</label>
        <select name="id_roomType_price"  required="required">
            <option selected disabled>room type</option>
            <?php foreach ($data['roomType'] as $roomType) : 
            ?>
            <option value="<?=$roomType->id . ' ' . $roomType->price?>">
                <?= $roomType->name .':'. $roomType->price .' $'?>
            </option>
            <?php  endforeach ?>
        </select>
        <div class="reserveSubmit">
            <input class="btnMe btnMe3" type="submit" value="Reserve">
        </div>
    </form>
</div>