<div class="p-8 rounded border border-gray-200">
    <h1 class="font-medium text-3xl">Add cruise</h1>
    <p class="text-gray-600 mt-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos dolorem vel cupiditate laudantium dicta.</p>
    <form>
        <div class="mt-8 grid lg:grid-cols-2 gap-4">
            <div>
                <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Name</label> <input type="text" name="name" id="name" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Cruise name" />
            </div>
            <div>
                <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Price</label> <input type="text" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="$ OR £ OR DH" />
            </div>
            <div>
                <label for="Date" class="text-sm text-gray-700 block mb-1 font-medium">Date</label> <input type="date" name="date" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="(ex. developer)" />
            </div>
            <div>
                <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Ship</label>
                <select class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "required="required" name="integration[city_id]">
                  <option value="">select ship</option>
                  <option value="">titanic</option>
                  <option value="">shipMaroc</option>
                  <option value="">spain_icon</option>
                </select>

            </div>

            <div>
                <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Port</label>
                <select class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "required="required" name="integration[city_id]">
                  <option value="">select port</option>
                  <option value="">madrid-spain</option>
                  <option value="">marsaille-france</option>
                  <option value="">tanger-morroco</option>
                </select>

            </div>
        </div>

            <!-- <div>
                <input type = "checkbox" name = "madrid_spain">
                <label for = "English"> madrid_spain </label>
                </div>
                <div>
                <input type = "checkbox" name = "madrid_spain" >
                <label for = "Hindi" > madrid_spain </label>
                </div>
                <div>
                <input type = "checkbox" name = "madrid_spain" >
                <label for = "German" > madrid_spain </label>
            </div> -->

        <div class="space-x-4 mt-8">
            <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Creat</button> <!-- Secondary --> <button class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</button>
        </div>
    </form>
</div>