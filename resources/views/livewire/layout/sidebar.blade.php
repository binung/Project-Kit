<nav aria-label="alternative nav" class="bg-gray-800">
  <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 md:relative md:h-screen z-10 w-full md:w-48 content-center">

    <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
      <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
        <li class="mr-3 flex-1">
          <a href="/dashboard" wire:navigate class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-500">
            <i class="fas fa-chart-area pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Analytics</span>
          </a>
        </li>
        <li class="mr-3 flex-1">
          <a href="/projects" wire:navigate class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
            <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Projects</span>
          </a>
        </li>
        <li class="mr-3 flex-1">
          <a href="/project_manage" wire:navigate class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
            <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Project Manage</span>
          </a>
        </li>
        <li class="mr-3 flex-1">
          <a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">User Manage</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
