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

    <label for="Price">cruise price</label>
    <input type="text" readonly name="Price" value="<?= $data['cruise']->price ?> DH">

    <label for="id_roomType_price">room type</label>

    <select name="id_roomType_price" required="required">
      <option selected disabled>room type</option>
      <?php foreach ($data['roomType'] as $roomType) : ?>
        <option value="<?= $roomType->id . ' ' . $roomType->price ?>">
          <?= $roomType->name . ':' . $roomType->price . ' $' ?>
        </option>
      <?php endforeach ?>
    </select>
    <label for="trajet">trajet</label>

    <select name="trajet" required="required">
      <option selected disabled>trajet</option>
      <?php foreach ($data['trajet'] as $escale) : ?>
        <option value="<?= $escale->id ?>">
          <?= $escale->name ?>
        </option>
      <?php endforeach ?>
    </select>

    <p style="color: black;">
      <?php foreach ($data['trajet'] as $escale) : ?>
        <?= $escale->name ?>
      <?php endforeach; ?>
    </p>

    <label for="port">Port 1</label>
    <select name="port">
      <option selected disabled>ports</option>
      <?php foreach ($data['ports'] as $port) : ?>

        <option value="<?= $port->id ?>">
          <?= $port->name ?>
        </option>

      <?php endforeach ?>

    </select>
    <div class="reserveSubmit">
      <!-- <input class="btnMe btnMe3"  type="submit" value="Reserve"> -->
      <button for="submit" name="submit" type="submit" class="btn bnt primary">book Now</button>
    </div>
  </form>
</div>



<?php require_once "include/footer.php"; ?>