<?php require_once "include/navbar.php"; ?>







<!-- This is an example component -->
<div class="w-3/4 mx-auto mt-6">

    <div class="flex flex-col">
        <h1 class="text-6xl font-extrabold tracking-tighter text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 mb-4">Dashboard Controller</h1>
        <div class="overflow-x-auto shadow-md sm:rounded-lg">


            <div class="gap-3 flex flex-row justify-center mb-5">
                <a href="<?= URLROOT ?>cruiseController/admin" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Cruises</a>
                <a href="<?= URLROOT ?>portController/admin_ports" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Ports</a>
                <a href="<?= URLROOT ?>navireController/admin_ships" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Ships</a>
            </div>



            <div class="inline-block min-w-full align-middle">


                <div class="overflow-hidden ">


                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>

                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    ID
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Port Name
                                </th>
                                
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Delete
                                </th>
                               
                                
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">


                             <?php foreach ($data["ports"]  as $port) : ?>
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"><?= $port['id'] ?></td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"><?= $port['name'] ?></td>
                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                        <a href="<?= URLROOT ?>portController/delete_port/<?= $port['id'] ?>" class="text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?> 

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <a href="<?= URLROOT ?>Pages/add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New Cruise</a>
    <a href="<?= URLROOT ?>Pages/add_port" class="btn btn-sm btn-primary mx-5"><i class="fa fa-plus"></i> New Port</a>
    <a href="<?= URLROOT ?>Pages/add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New Ship</a>
</div>


<?php require_once "include/footer.php"; ?>