<x-adminlayout>
    <main>
        <!-- Content header -->
        <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
            <h1 class="text-2xl font-semibold">Dashboard</h1>

        </div>
        <!-- End Content header -->

        <!-- Content -->
        <div class="mt-2">
            <!-- State cards -->
            <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4">
                <!-- Value card -->
                <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                    <div>
                        <h6
                            class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
                        >
                            Publications
                        </h6>
                        <span class="text-xl font-semibold"></span>

                    </div>
                    <div>
                <span>
                  <svg
                      class="w-12 h-12 text-gray-300 dark:text-primary-dark"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                  >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"
                    />
                  </svg>
                </span>
                    </div>
                </div>

                <!--End  Value card -->

                <!-- Users card -->
                <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                    <div>
                        <h6
                            class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
                        >
                            Users
                        </h6>
                        <span class="text-xl font-semibold"></span>

                    </div>
                    <div>
                <span>
                  <svg
                      class="w-12 h-12 text-gray-300 dark:text-primary-dark"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                  >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                    />
                  </svg>
                </span>
                    </div>
                </div>
                <!--End  Users card -->
                <!--End  State cards -->
            </div>

        </div>
        <!--End  Content -->
        <div class="w-full my-12 ">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Managers
            </p>
            <div class="overflow-auto bg-white rounded-md dark:bg-darker">
                <table id="managers" class="min-w-full leading-normal m-b-8">
                    <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-white-600 uppercase tracking-wider">
                            Id
                        </th>
                        <th
                            class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-white-600 uppercase tracking-wider">
                            Full name
                        </th>
                        <th
                            class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-white-600 uppercase tracking-wider">
                            email
                        </th>

                    </tr>
                    </thead>

                </table>
            </div>

        </div>
    </main>
</x-adminlayout>
