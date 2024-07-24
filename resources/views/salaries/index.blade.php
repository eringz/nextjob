<x-layout>
    <div class="bg-[#0D2D5E] h-screen max-h-[480px] py-32 ">
        <div class="mx-56 h-auto">
            <div class="flex justify-between ">
                <div class="ml-8 mb-6 text-white">
                    <h2 class="mb-1 text-[28px] font-semibold">Discover your earning potential</h2>
                    <span class="text-sm">Explore high-paying careers, salaries, and job openings by industry and location.</span>
                </div>
                <div class="relative top-[22px] pr-4">
                    <img class="w-[160px] h-[127px]"  src="{{ Vite::asset('resources/images/handbag.svg')}}" alt="hand bag">
                </div>
            </div>
            <div role="search" class="bg-white p-6 h-[120px]  border rounded-tl-lg rounded-tr-3xl rounded-b-lg">
                <form action="" class="flex">
                    <div class="w-[492px] mr-2">
                        <label class="mb-1 font-semibold" for="job-title">What</label>
                        <div class="p-1 border rounded-lg has-[:focus]:border-blue has-[:focus]:border-b-4 transition:colors duration-1000">
                            <span class="flex">
                                <input class="self-end px-3 py-2 w-full outline-none" type="text" placeholder="Job title" />
                            </span>
                        </div>
                        <div class="autocomplete-container"></div>
                    </div>
                    <div class="w-[360px] mr-2">
                        <label class="mb-1 font-semibold" for="job-title">Where</label>
                        <div class="p-1 border rounded-lg has-[:focus]:border-blue has-[:focus]:border-b-4 transition:colors duration-1000">
                            <span class="flex">
                                <input class="px-3 py-2 self-end outline-none" type="text" placeholder="Job title" />
                            </span>
                        </div>
                        <div class="autocomplete-container"></div>
                    </div>
                    <div class="">
                        <button class="bg-blue mt-6 px-6 py-[12px]  text-white font-semibold rounded-lg">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="bg-black">
        <x-footer-career/>
    </footer>
</x-layout>