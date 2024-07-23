@props(['job'])


<li class="p-4 my-4 w-471 space-y-1 border rounded-lg">
    <a href="">
        <div>
            <table>
                <tbody>
                    <tr class="flex justify-between">
                        <td>
                            <div>
                                <div>
                                    <span class="px-2 text-center  text-xs border rounded">New</span>
                                    <span class="bg-[#FCEEF4] px-2 text-red-800 text-center text-xs font-bold border rounded">Hiring multiple candidates</span>
                                </div>
                                <h2 class="mb-2 text-2xl font-bold">
                                    <a href="">{{ $job->title }}</a>
                                </h2>
                            </div>
                            <div class="text-sm text-black/60">
                                <div>{{ $job->employer->name }}</div>
                                <div>{{ $job->location }}</div>
                            </div>
                            <div class="flex flex-wrap my-3 text-black/60 text-sm font-bold gap-x-1 gap-y-1">
                                <span class="bg-black/10 px-2 py-1 rounded">PHP {{ number_format($job->min_salary) }}.00 - {{ number_format($job->min_salary + $job->max_salary) }}.00 a month</span>
                                <span class="bg-black/10 px-2 py-1 rounded">{{ $job->type }}</span>
                                <span class="bg-black/10 px-2 py-1 rounded">{{ $job->schedule }}</span>
                            </div>
                        </td>
                        <td>
                            <button>
                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" class="mosaic-provider-jobcards-1luvpuv eac13zx0"><path d="M12 7c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 7c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div role="presentation">
                <div>
                    <span class="flex space-x-1 items-center text-black/60">
                        <span>
                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" 
                                focusable="false" 
                                role="img" 
                                fill="currentColor" 
                                viewBox="0 0 24 24" 
                                aria-hidden="true" 
                                class="mosaic-provider-jobcards-1tvjh98 eac13zx0 fill-blue">
                                <path d="M2.344 4.018a.25.25 0 00-.33.31l1.897 5.895a.5.5 0 00.371.335l7.72 1.44-7.72 1.44a.5.5 0 00-.371.335l-1.898 5.896a.25.25 0 00.33.31l19.494-7.749a.25.25 0 000-.464L2.344 4.018z"></path>
                            </svg>
                        </span>
                        <span>Easily apply</span>
                    </span>
                </div>
                <div>
                    <div class="px-4 pb-4">
                        <ul class="ml-1 mt-2 list-disc marker:text-blue text-sm">
                            <li>Develop functionally rich, robust and user-friendly web applications.</li>
                            <li>Collaborate on a cross-functional team including graphic design/UX, front-end web engineers, QA and other software developers.</li>
                        </ul>
                    </div>
                    <span class="text-sm text-black/60">Just posted</span>
                </div>
            </div>
        </div>
    </a>
</li>