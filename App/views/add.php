<?php require_once "include/navbar.php"; ?>

<div class="p-8 rounded border border-gray-200">
    <h1 class="font-medium text-3xl">Add cruise</h1>
    <!-- <p class="text-gray-600 mt-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos dolorem vel cupiditate laudantium dicta.</p> -->
    <form method="POST" action="<?= URLROOT ?>cruiseController/add_cruise">
        <div class="mt-8 grid lg:grid-cols-2 gap-4">
            <div>
                <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Name</label>
                <input type="text" name="name" id="name" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Cruise name" />
            </div>
            <div>
                <label for="price" class="text-sm text-gray-700 block mb-1 font-medium">Price</label>
                <input type="number" name="price" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="$ OR £ OR DH" />
            </div>
            <div>
                <label for="picture" class="text-sm text-gray-700 block mb-1 font-medium">picture</label>
                <input type="file" name="picture" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="picture" />
            </div>
            <div>
                <label for="Date" class="text-sm text-gray-700 block mb-1 font-medium">Date</label>
                <input type="date" name="Date" id="date_reservation" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Date" />
            </div>
            <div>
                <label for="nights" class="text-sm text-gray-700 block mb-1 font-medium">Nights</label> <input type="number" name="nights" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="nights number" />
            </div>
            <div>
                <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Ship</label>
                <select class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " required="required" name="ship">
                    <option value="" disabled selected>select ship</option>



                    <?php foreach ($data['ship'] as $ship) : ?>
                        <option value="<?= $ship->id ?>">
                            <?= $ship->name ?>
                        </option>
                    <?php endforeach ?>


                </select>

            </div>

            <div>
                <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Port</label>
                <select class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " name="ports">
                    <option value="" disabled selected>select port</option>
                    <?php foreach ($data['port'] as $port) : ?>
                        <option value="<?= $port->id ?>">
                            <?= $port->name ?>
                        </option>
                    <?php endforeach ?>
                </select>

            </div>

            <div class="mb-3">
                <label class="form-label">Escale a:</label><br>
                <div class="container">
                    <div class="row">
                        <?php foreach ($data['port'] as $port) : ?>
                            <div class="col-md-6">
                                <input type="checkbox" name="trajet[]" value="<?= $port->id ?>" id="<?= $port->id ?>" class="check">&nbsp;<label for="check"><?= $port->name  ?></label>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="space-x-4 mt-8">
            <button name="submit" type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Creat</button>
            <!-- Secondary -->
            <button class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</button>
        </div>
    </form>
</div>




<?php require_once "include/footer.php"; ?>