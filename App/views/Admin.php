


<!-- This is an example component -->
<div class="w-3/4 mx-auto mt-6">

	<div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                          
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Cruise Name
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                start_port
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Price
                            </th>
                            <th scope="col" class="p-4">
                                <span class="sr-only">Delete</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                   
                    <?php foreach($data["cruises"]  as $cruise) : ?>
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                         
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"><?= $cruise-> name?></td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"><?= $cruise-> start_port?></td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">$<?= $cruise-> price ?></td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <a href="<?= URLROOT?>cruiseController/delete_cruise/<?= $cruise-> ID_cruise ?>" class="text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                      <?php endforeach; ?>
                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<a href="<?= URLROOT?>Pages/add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New Item</a>
</div>


