<x-layout>
    <div class="grid place-content-center px-4 pb-6 w-1519">
        <div class="p-1 w-1044">
            <div class="mt-20 mb-16">
                <h1 class="mb-4 text-4xl font-bold">Find great places to work</h1>
                <h2 class="mb-6 text-xl text-black/50">Get access to millions of company reviews</h2>
                <div class="">
                    <form action="" class="w-full">
                        <div class="flex h-[77px]">
                            <div class="flex-col flex-1 pr-2">
                                <label for="search" class="block mb-1 font-bold">Company name or job title</label>
                                <span id="company-search" class="flex px-1 border rounded-lg w-full has-[:focus]:border-blue has-[:focus]:border-b-4 transition-colors duration-1000">
                                    <input type="text" class="flex-1 p-3 outline-none" /> 
                                    <span class="pr-2 place-self-center">
                                        <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="css-v86lqu eac13zx0"><path fill-rule="evenodd" d="M13.335 14.749a6.5 6.5 0 111.414-1.414l6.105 6.104a.5.5 0 010 .707l-.708.708a.5.5 0 01-.707 0l-6.104-6.105zM14 9.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z" clip-rule="evenodd"></path></svg>
                                    </span>
                                </span>
                            </div>
                            <div class="flex items-stretch">
                                <x-forms.button class="w-72 py-3 self-end rounded-lg">Find Companies</x-forms.button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pt-6 text-blue underline">
                    <a href="">Do you want to search for salaries?</a>
                </div>
            </div>
    
            <div class="mb-16">
                <h2 class="mb-4 text-black/80 text-4xl font-bold">Popular companies</h2>
                <ul class="flex flex-wrap justify-between">
                @for ($i = 0; $i < 9; $i++)
                    
                        <li class="w-72 h-32">
                            <div>
    
                                <div class="flex">
                                    <div class="w-16 h-14 ">
                                        <a  href="">
                                            <img class="w-14 pt-1 rounded-lg" src="{{ Vite::asset('resources/images/pagibig.jpg') }}" alt="company logo">
                                        </a>
                                    </div>
                                    <div class="ml-2 w-full">
                                        <a href="">
                                            <span class="text-black/80  font-bold antialiased hover:subpixel-antialiased">Pag-ibig Fund</span>
                                        </a>
                                        <a  href="">
                                            <div class="flex">
                                                <div class="flex">
                                                    <svg width="20" class="fill-[#9D2B6B] stroke-[#C37CA4]" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true" class="css-1whqk8t eac13zx0"><path d="M10 15.48l5.01 3.024a.485.485 0 00.724-.525l-1.33-5.7 4.428-3.836a.485.485 0 00-.277-.85l-5.83-.495-2.278-5.378a.485.485 0 00-.894 0L7.274 7.098l-5.83.495a.485.485 0 00-.276.85l4.428 3.835-1.33 5.7a.485.485 0 00.723.526L10 15.48z"></path></svg>
                                                    <svg  class="w-5 fill-[#9D2B6B] stroke-[#C37CA4]" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true" class="css-1whqk8t eac13zx0"><path d="M10 15.48l5.01 3.024a.485.485 0 00.724-.525l-1.33-5.7 4.428-3.836a.485.485 0 00-.277-.85l-5.83-.495-2.278-5.378a.485.485 0 00-.894 0L7.274 7.098l-5.83.495a.485.485 0 00-.276.85l4.428 3.835-1.33 5.7a.485.485 0 00.723.526L10 15.48z"></path></svg>
                                                    <svg  class="w-5 fill-[#9D2B6B] stroke-[#C37CA4]" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true" class="css-1whqk8t eac13zx0"><path d="M10 15.48l5.01 3.024a.485.485 0 00.724-.525l-1.33-5.7 4.428-3.836a.485.485 0 00-.277-.85l-5.83-.495-2.278-5.378a.485.485 0 00-.894 0L7.274 7.098l-5.83.495a.485.485 0 00-.276.85l4.428 3.835-1.33 5.7a.485.485 0 00.723.526L10 15.48z"></path></svg>
                                                    <svg  class="w-5 fill-[#9D2B6B] stroke-[#C37CA4]" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true" class="css-1whqk8t eac13zx0"><path d="M10 15.48l5.01 3.024a.485.485 0 00.724-.525l-1.33-5.7 4.428-3.836a.485.485 0 00-.277-.85l-5.83-.495-2.278-5.378a.485.485 0 00-.894 0L7.274 7.098l-5.83.495a.485.485 0 00-.276.85l4.428 3.835-1.33 5.7a.485.485 0 00.723.526L10 15.48z"></path></svg>
                                                    <svg  class="w-5 fill-none stroke-[#9D2B6B]" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true" class="css-1whqk8t eac13zx0"><path d="M10 15.48l5.01 3.024a.485.485 0 00.724-.525l-1.33-5.7 4.428-3.836a.485.485 0 00-.277-.85l-5.83-.495-2.278-5.378a.485.485 0 00-.894 0L7.274 7.098l-5.83.495a.485.485 0 00-.276.85l4.428 3.835-1.33 5.7a.485.485 0 00.723.526L10 15.48z"></path></svg>
                                                </div>
                                                <div class="ml-1">
                                                    <span class="text-sm text-blue hover:underline hover:underline-offset-1 ">1,222 reviews</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
    
                                <ul class="flex space-x-5 mb-4 text-black/60">
                                    <li>Salaries</li>
                                    <li>Questions</li>
                                    <li>Open Jobs</li>
                                </ul>
                            </div>
                        </li>
                    
                @endfor
                </ul> 
            </div>
    
            <div class="mb-16">
                <h2 class="mb-4 text-black/80 text-4xl font-bold">Compare working at</h2>
                <ul class="flex flex-wrap justify-between gap-10 content-between">
                    @for ($i = 0; $i < 4; $i++)
                        <li class="w-468 h-36 border rounded-lg">
                            <a class="flex items-center px-6 py-10 justify-between" href="">
                                <div class="flex gap-x-2">
                                    <div class="">
                                        <img class="w-12 rounded-lg" src="{{Vite::asset('resources/images/sagility.jpg')}}" alt="Sagility Logo">
                                    </div>
                                    <div>
                                        <div>
                                            <span class="">Sagility</span>
                                        </div>
                                        <div class="flex">
                                            <div class="flex">
                                                <span>3.2</span>    
                                                <svg width="10" class="fill-[#9D2B6B] stroke-[#C37CA4]" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true" class="css-1whqk8t eac13zx0"><path d="M10 15.48l5.01 3.024a.485.485 0 00.724-.525l-1.33-5.7 4.428-3.836a.485.485 0 00-.277-.85l-5.83-.495-2.278-5.378a.485.485 0 00-.894 0L7.274 7.098l-5.83.495a.485.485 0 00-.276.85l4.428 3.835-1.33 5.7a.485.485 0 00.723.526L10 15.48z"></path></svg>
                                            </div>  
                                            <div>
                                                <span>226 reviews</span>
                                            </div>  
                                        </div>    
                                    </div>     
                                </div>
                                <div class="">VS</div>
                                <div class="flex gap-x-2">
                                    <div class="">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="48" height="48" rx="8" fill="#FAF9F8"/>
                                            <path d="M26.625 21.1875H35.0625C35.4767 21.1875 35.8125 21.5233 35.8125 21.9375V35.0625C35.8125 35.4767 35.4767 35.8125 35.0625 35.8125H26.625V21.1875Z" fill="#E4E2E0"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 12C12.3358 12 12 12.3358 12 12.75V35.8125H15.9375V27.75H22.6875V35.8125H26.625V12.75C26.625 12.3358 26.2892 12 25.875 12H12.75ZM24 15.9375H14.625V17.4375H24V15.9375ZM14.625 19.875H24V21.375H14.625V19.875Z" fill="#B4B2B1"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div>
                                            <span>Sagility</span>
                                        </div>
                                        <div class="flex">
                                            <div class="flex">
                                                <span>3.2</span>    
                                                <svg width="10" class="fill-[#9D2B6B] stroke-[#C37CA4]" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true" class="css-1whqk8t eac13zx0"><path d="M10 15.48l5.01 3.024a.485.485 0 00.724-.525l-1.33-5.7 4.428-3.836a.485.485 0 00-.277-.85l-5.83-.495-2.278-5.378a.485.485 0 00-.894 0L7.274 7.098l-5.83.495a.485.485 0 00-.276.85l4.428 3.835-1.33 5.7a.485.485 0 00.723.526L10 15.48z"></path></svg>
                                            </div>  
                                            <div>
                                                <span>226 reviews</span>
                                            </div>  
                                        </div>    
                                    </div>     
                                </div>
                            </a>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="bg-[#F5FBF9] flex h-28 place-content-center place-items-center">
                <div class="h-16 flex">
                    <div class="mr-2">
                        <x-star-rating></x-star-rating>
                    </div>
                    <div class="flex place-content-center place-items-center space-x-5">
                        <legend class="text-xl font-bold">Rate your recent employer:</legend>
                        <div class="bg-white p-2 rounded">
                            <div class="flex">
                                <a href="">
                                    <svg width="28"  xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="css-16yzo4g eac13zx0 stroke-blue"><path fill-rule="evenodd" d="M12 16.249l4.157 2.51-1.103-4.73 3.675-3.184-4.834-.41L12 5.965l-1.895 4.47-4.834.41 3.675 3.184-1.103 4.73L12 16.248zm-6.124 6.145a.593.593 0 01-.884-.642l1.625-6.967-5.412-4.688a.593.593 0 01.339-1.04l7.124-.604 2.786-6.573a.593.593 0 011.092 0l2.786 6.573 7.124.605a.593.593 0 01.338 1.039l-5.411 4.688 1.625 6.967a.593.593 0 01-.883.642L12 18.698l-6.124 3.696z" clip-rule="evenodd"></path></svg>
                                </a>
                                <a href="">
                                    <svg width="28"  xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="css-16yzo4g eac13zx0 stroke-blue"><path fill-rule="evenodd" d="M12 16.249l4.157 2.51-1.103-4.73 3.675-3.184-4.834-.41L12 5.965l-1.895 4.47-4.834.41 3.675 3.184-1.103 4.73L12 16.248zm-6.124 6.145a.593.593 0 01-.884-.642l1.625-6.967-5.412-4.688a.593.593 0 01.339-1.04l7.124-.604 2.786-6.573a.593.593 0 011.092 0l2.786 6.573 7.124.605a.593.593 0 01.338 1.039l-5.411 4.688 1.625 6.967a.593.593 0 01-.883.642L12 18.698l-6.124 3.696z" clip-rule="evenodd"></path></svg>
                                </a>
                                <a href="">
                                    <svg width="28"  xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="css-16yzo4g eac13zx0 stroke-blue"><path fill-rule="evenodd" d="M12 16.249l4.157 2.51-1.103-4.73 3.675-3.184-4.834-.41L12 5.965l-1.895 4.47-4.834.41 3.675 3.184-1.103 4.73L12 16.248zm-6.124 6.145a.593.593 0 01-.884-.642l1.625-6.967-5.412-4.688a.593.593 0 01.339-1.04l7.124-.604 2.786-6.573a.593.593 0 011.092 0l2.786 6.573 7.124.605a.593.593 0 01.338 1.039l-5.411 4.688 1.625 6.967a.593.593 0 01-.883.642L12 18.698l-6.124 3.696z" clip-rule="evenodd"></path></svg>
                                </a>
                                <a href="">
                                    <svg width="28"  xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="css-16yzo4g eac13zx0 stroke-blue"><path fill-rule="evenodd" d="M12 16.249l4.157 2.51-1.103-4.73 3.675-3.184-4.834-.41L12 5.965l-1.895 4.47-4.834.41 3.675 3.184-1.103 4.73L12 16.248zm-6.124 6.145a.593.593 0 01-.884-.642l1.625-6.967-5.412-4.688a.593.593 0 01.339-1.04l7.124-.604 2.786-6.573a.593.593 0 011.092 0l2.786 6.573 7.124.605a.593.593 0 01.338 1.039l-5.411 4.688 1.625 6.967a.593.593 0 01-.883.642L12 18.698l-6.124 3.696z" clip-rule="evenodd"></path></svg>
                                </a>
                                <a href="">
                                    <svg width="28"  xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="css-16yzo4g eac13zx0 stroke-blue"><path fill-rule="evenodd" d="M12 16.249l4.157 2.51-1.103-4.73 3.675-3.184-4.834-.41L12 5.965l-1.895 4.47-4.834.41 3.675 3.184-1.103 4.73L12 16.248zm-6.124 6.145a.593.593 0 01-.884-.642l1.625-6.967-5.412-4.688a.593.593 0 01.339-1.04l7.124-.604 2.786-6.573a.593.593 0 011.092 0l2.786 6.573 7.124.605a.593.593 0 01.338 1.039l-5.411 4.688 1.625 6.967a.593.593 0 01-.883.642L12 18.698l-6.124 3.696z" clip-rule="evenodd"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    {{-- <div class="flex flex-col mb-20"> --}}
    </div>
    <footer>
        <x-footer />
    </footer>
</x-layout>