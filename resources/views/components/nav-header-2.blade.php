<div class="border border-b-2">
    <div class="flex p-6 justify-center ">
        <x-forms.form action="/search" class="flex border border-black/40 rounded-lg shadow-lg shadow-gray-300" >
            <div class="flex h-14">
                <div class="flex w-360 has-[:focus]:border has-[:focus]:border-blue  has-[:focus]:rounded-l-lg has-[:focus]:border-b-4 transition-colors duration-1000">
                {{-- <div class="flex w-360 rounded-xl has-[:focus]:border has-[:focus]:text-blue has-[:focus]:ring-indigo-200 outline-none rounded-l"> --}}
                    <span class="grid w-12 h-6 self-center place-items-end">
                        <svg class="css-v86lqu eac13zx0 mx-2" width="24" height="24" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" >
                            <path fill-rule="evenodd" d="M13.335 14.749a6.5 6.5 0 111.414-1.414l6.105 6.104a.5.5 0 010 .707l-.708.708a.5.5 0 01-.707 0l-6.104-6.105zM14 9.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input type="text" class="w-full bg-white/10 border border-white/10 focus:outline-none text-lg" placeholder="Job title, keywords, or company"/>
                </div> 
                <div class="flex w-360 has-[:focus]:border has-[:focus]:border-blue  has-[:focus]:rounded-r-lg has-[:focus]:border-b-4 transition-colors duration-1000">
                    <span class="grid w-12 h-6 self-center place-items-end">
                        <svg  class="css-r72e78 eac13zx0 mx-2" width="24" height="24" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" id="jobLocationIcon">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 4.523 5.195 11.093 6.634 12.826a.47.47 0 00.732 0C13.805 20.093 19 13.523 19 9c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"></path>
                        </svg>
                    </span>
                    <input type="text" class="w-full bg-white/10 border border-white/10 focus:outline-none text-lg" placeholder='City,state,zip code, or "remote"' />
                </div> 
            </div>
            <div class="flex align-items-center ml-2 p-1">
                <x-forms.button>Find Jobs</x-forms.button>
            </div>
        </x-forms.form>
    </div>
    <div class="mb-2 text-center">
        <div>
            <a href="" class="text-blue font-bold">Post your resume</a>
            - It only takes a few seconds
        </div>
    </div>
    <div role="tablist" class="pt-4 h-24 space-x-20 text-center text-xl ">
        <button role="tab" class="h-full border-b-4 border-white/10 focus:border-b-blue px-10 focus:font-semibold transition duration-1000">Job feed</button>
        <button role="tab" class="h-full border-b-4 border-white/10 focus:border-b-blue px-10 focus:font-semibold transition duration-1000">Recent searches</button>
    </div> 
</div>
    