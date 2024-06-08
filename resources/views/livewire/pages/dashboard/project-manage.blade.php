<section class="w-full pt-12 bg-gray-100">
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
    <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h1 class="font-bold pl-2">Project Manage</h1>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full leading-normal tracking-wider text-gray-900 bg-gray-100">

                <!--Container-->
                <div class="container w-full px-2 mx-auto">

                    <!--Title-->
                    {{-- <h1 class="flex items-center px-2 py-8 font-sans text-xl font-bold text-indigo-500 break-normal md:text-2xl">
                Responsive <a class="mx-2 underline" href="https://datatables.net/">DataTables.net</a> Table
            </h1> --}}
                    <a href="/project_create" wire:navigate>
                        <button
                            class="px-6 py-3 mt-8 mb-4 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-blue-600 rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none active:shadow-lg">
                            Create New Project
                        </button>
                    </a>
                    <!--Card-->
                    <div id='recipients' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">
                        <table id="example" class="stripe hover"
                            style="width:100%; padding-top: 1em; padding-bottom: 1em;">
                            <colgroup>
                                <col width="17%">
                                <col width="35%">
                                <col>
                                <col width="10%">
                                <col width="5%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th data-priority="1">Name</th>
                                    <th data-priority="2">Description</th>
                                    <th data-priority="3">Skill</th>
                                    <th data-priority="5">Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Inertia</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, Inertia,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Inertia</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, Inertia,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Inertia</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, Inertia,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Inertia</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, Inertia,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                                <tr>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, API</td>
                                    <td class="border-b border-solid border-zinc-400">This project built with
                                        Laravel, RESTful API,
                                        React</td>
                                    <td class="border-b border-solid border-zinc-400">Laravel, React, Tailwnd CSS,
                                        Alpine.js, MySQL
                                    </td>
                                    <td class="text-center border-b border-solid border-zinc-400">2021.3.6</td>
                                    <td class="text-center border-b border-solid border-zinc-400"></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <!--/Card-->

                </div>
                <!--/container-->
            </div>
        </div>
    </div>
</section>
