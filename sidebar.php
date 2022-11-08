<div class="px-6 py-2">

    <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
        <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Search</h2>
        <div class="mt-2 mb-2 flow-root">
            <ul role="list" class="-mb-8">
                <li>
                    <div class="relative pb-8">
                        <div class="relative flex space-x-3">
                            <div class=" min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                            <form methood="get" action="/blog">

                                <div>
                                    <div>
                                        <div class="relative flex items-center">
                                                <input type="hidden" name="post_type" value="post"/>
                                                <input type="text" name="s" placeholder="Type search query" id="search" class="w-full block w-full ring-1 rounded-md border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>

                                </div>
                                </form>

                                <div class="whitespace-nowrap text-right text-sm text-gray-500"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>