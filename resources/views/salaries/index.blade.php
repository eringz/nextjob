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
            <div role="search" class="bg-white p-6 border rounded-tl-lg rounded-tr-3xl rounded-b-lg">
                <form action="">
                    <div class="p-6">
                        <label for="job-title">What</label>
                        <div>
                            <span>
                                <input type="text" />
                            </span>
                        </div>
                    </div>
                    <div></div>
                </form>
            </div>
        </div>
    </div>
    <footer class="bg-black">
        <x-footer-career/>
    </footer>
</x-layout>