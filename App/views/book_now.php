<?php require_once "include/navbar.php"; ?>



<style>
  .formReserve {
    display: flex;
    justify-content: center;
    margin-top: 30px;
  }

  .ReserveForm {
    display: flex;
    flex-direction: column;
    gap: 20px;
    background-color: burlywood;
    padding: 30px;
    border-radius: 15px;
  }

  .reserveSubmit {
    display: flex;
    justify-content: center;
  }
</style>
<div class="formReserve ml-6">
  <form class="ReserveForm" action="<?= URLROOT ?>cruiseController/reservation" method="POST">

    <input type="hidden" name="id_cruise" value="<?= $data['cruise']->ID_cruise ?>">
    <input type="hidden" name="port" value="<?= $data['cruise']->id_port ?>">
    <input type="hidden" name="date" value="<?= $data['cruise']->start_date ?>">

    <label for="Price">cruise price</label>
    <input type="text" readonly name="Price" value="<?= $data['cruise']->price ?> DH">

    <label for="id_roomType_price">room type</label>
    <input type="text" id="tbto" required="required" style="display: none;" name="tbto">
    <select name="id_room" id="id_roomType_price" required="required" >
      <option selected value="0">room type</option>
      <?php foreach ($data['rooms'] as $rooms) : ?>
        <option value="<?= $rooms->id . ' ' . $rooms->price ?>">
          <?= $rooms->name . ':' . $rooms->price . ' $' ?>
        </option>
      <?php endforeach ?>
    </select>

    <div class="reserveSubmit">

      <button for="submit" id="btn_book_now" name="submit" type="submit" class="btn bnt primary">book Now</button>
    </div>
  </form>
</div>

<script>
  var id_roomType_price = document.getElementById('id_roomType_price')
  var tbto = document.getElementById('tbto')
  id_roomType_price.addEventListener("change", function(event) {
    var option = event.target.options[event.target.selectedIndex];
    var value = option.value;
    tbto.value =value
  })
</script>

<?php require_once "include/footer.php"; ?>