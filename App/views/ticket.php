<!-- component -->
<?php foreach ($data['reservations']as$reservation) :
   
    ?>
    
<div class="flex flex-col justify-center h-screen ml-16">
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
        <div class="w-full md:w-1/3 bg-white grid place-items-center">
            <img src="<?= IMAGE . $reservation->picture ?>" alt="tailwind logo" class="rounded-xl" />
        </div>
        <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
            <div class="flex justify-between item-center">

                <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                    <a href="<?=URLROOT . 'cruiseController/delete_ticket/' . $reservation->id_reservation ?>">Cancel</a>
                </div>
            </div>
            <h3 class="font-black text-gray-800 md:text-3xl text-xl"><?= $reservation->name ?></h3>
            <p class="md:text-lg text-gray-500 text-base">¤ start port : <?= $reservation->start_port ?><br>¤ start date : <?= $reservation->start_date ?></p>
            <p class="text-xl font-black text-gray-800">
                $<?= $reservation->price_reservation ?>
                <span class="font-normal text-gray-600 text-base"> / <?= $reservation->nights_number ?> nights</span>
            </p>
        </div>
    </div>
</div>
<?php endforeach; ?>