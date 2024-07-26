<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/images/logo.svg') }}" type="image/x-icon">
    <title>Post a Job | NextJob.com</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hanken-grotesk">
    <div class="aspect-auto max-h-500px">
        <nav class="bg-[#2D2D2D] flex justify-between border-b-2">
            <div class="flex">
                <a class="px-6 py-[14px] mx-0.5" href="/">
                   <x-svg.dark-logo /> 
                </a> 
                <div class="pt-1  mr-8 w-auto space-x-3 self-center text-white text-sm text-black/60 ">
                    <x-employers.nav-link class="border-[#9BB1F0]" href="/recruitment" :active="request()->is('recruitment')">Post a Job</x-employers.nav-link>
                    <x-employers.nav-link href="/" :active="request()->is('/')">Find resumes</x-employers.nav-link>
                </div>
            </div>
            <div class="pt-1 self-center space-x-3 text-white text-sm">
                <a href="/auth" class="pt-7 pb-5 font-bold hover:border-b-2 hover:border-blue transition-colors duration-1000">
                    Help Center
                    <svg class="inline ml-1 gnav-header-1wleog7 eac13zx0" width="24" height="24" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" >
                        <path fill-rule="evenodd" d="M12 2C6.4771 2 2 6.4771 2 12c0 5.5228 4.4771 10 10 10 5.5228 0 10-4.4772 10-10 0-5.5229-4.4772-10-10-10zm-.0018 7c-.2716 0-.5219.0915-.7216.2454-.0743.0573-.149.1187-.2246.1808-.3405.2798-.6982.5737-1.1214.5737-.6028 0-1.0956-.5218-.857-1.0754C9.5614 7.7925 10.6872 7 11.9982 7c1.758 0 3.1831 1.4251 3.1831 3.1831 0 1.3292-.923 2.0788-1.4433 2.5014l-.0672.0546c-.2767.2246-.4449.3613-.5666.5058-.1016.1206-.106.1734-.106.2129a.5458.5458 0 01-.5458.5457h-.9084a.5457.5457 0 01-.5458-.5457c0-.6428.2684-1.1358.5762-1.5012.2521-.2994.5722-.5576.8082-.7481l.0765-.0618c.5748-.467.7222-.6707.7222-.9636 0-.6534-.5297-1.1831-1.1831-1.1831zm-.9963 7c0-.5523.4477-1 1-1s1 .4477 1 1-.4477 1-1 1-1-.4477-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <x-divider/>
                <a href="/auth" class="bg-blue px-4 py-2 font-bold rounded-lg hover:border-b-2 hover:border-blue transition-colors duration-1000">Sign in</a>
                <x-divider/>
                <a href="/recruitment" class="px-1 pt-7 pb-5 hover:border-b-2 hover:border-blue transition-colors duration-1000">Find Jobs</a>
            </div>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>