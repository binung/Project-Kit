<section class="w-full pt-12 bg-gray-100">
    @push('page_style')
        <!--Regular Datatables CSS-->
        <link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet">
        <!--Responsive Extension Datatables CSS-->
        <link href="https://cdn.datatables.net/2.0.8/css/dataTables.jqueryui.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.jqueryui.css" rel="stylesheet">
        <style>
            select {
                width: 80px;
            }
        </style>
    @endpush

    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h1 class="font-bold pl-2">Project Add</h1>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full leading-normal tracking-wider text-gray-900 bg-gray-100">
                <div class="container w-full px-2 mx-auto">
                    <div class="flex">
                        <a href="/project_create" wire:navigate>
                            <button
                                class="px-6 py-3 mt-8 mb-4 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-blue-600 rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none active:shadow-lg">
                                Create New Project
                            </button>
                        </a>
                        <h1
                            class="flex items-center px-4 py-8 font-sans text-xl font-bold text-indigo-500 break-normal md:text-2xl">
                            Responsive <a class="mx-2 underline" href="https://datatables.net/">DataTables.net</a> Table
                        </h1>
                    </div>
                    <div class="p-8 mt-6 bg-white rounded shadow lg:mt-0">
                        <table id="projectTable" class="responsive nowrap hover w-full py-4">
                            <thead>
                                <tr>
                                    <th data-priority="1">Name</th>
                                    <th data-priority="2">Description</th>
                                    <th data-priority="3">Skill</th>
                                    <th data-priority="5">Start Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($projects))
                                    @foreach ($projects as $project)
                                        <tr wire:key="tr-{{ $project->id }}" class="text-left">
                                            <td class="border-b border-solid border-zinc-400">
                                                {{ $project->title }}
                                            </td>
                                            <td class="border-b border-solid border-zinc-400">
                                                {{ $project->description }}
                                            </td>
                                            <td class="border-b border-solid border-zinc-400">
                                                {{ $project->skill }}
                                            </td>
                                            <td class="text-center border-b border-solid border-zinc-400">
                                                {{ $project->created_at->format('Y.m.d') }}
                                            </td>
                                            <td class="text-center border-b border-solid border-zinc-400">
                                                <i class="fas fa-edit text-blue-300 hover:text-blue-600 cursor-pointer"
                                                    wire:click="edit({{ $project->id }})"></i>
                                                <i class="fas fa-times text-red-300 hover:text-red-600 pl-2 cursor-pointer"
                                                    wire:click="remove({{ $project->id }})"
                                                    wire:confirm="Are you want to delete this project?"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">No existing records found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

        <!--Datatables -->
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.jqueryui.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.jqueryui.js"></script>

        <script>
            $(document).ready(function() {
                var table = $('#projectTable').DataTable({
                    responsive: true,
                    paging: true, // Enable pagination
                    searching: true, // Enable search functionality
                    ordering: true, // Enable column ordering
                    info: true, // Show table information
                    lengthChange: true, // Allow user to change page length
                    pageLength: 10, // Default number of rows per page
                    autoWidth: false, // Disable auto column width calculation
                });

                // Livewire hook to handle updates after DataTables draws
                Livewire.hook('message.processed', (message, component) => {
                    table.draw(); // Redraw DataTable after Livewire updates
                });

                document.addEventListener('livewire:load', function() {
                    Livewire.on('remove', projectId => {
                        // Handle the 'remove' event here
                        console.log('Remove project with ID:', projectId);

                        // Example: Perform an action like deleting the project
                    });
                });
            });
        </script>
    @endpush
</section>
