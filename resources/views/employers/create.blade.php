<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create an employer account</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        <div class="bg-[#2557A7] px-4 py-3 text-white text-[14px]">
            <div>
                <div class="flex">
                    <div class="mt-[6px]">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" focusable="false" role="img" fill="white" viewBox="0 0 24 24" aria-hidden="true" class="css-1f4rn1b eac13zx0">
                            <path fill-rule="evenodd" d="M12 22C6.4771 22 2 17.5228 2 12 2 6.4771 6.4771 2 12 2c5.5228 0 10 4.4771 10 10 0 5.5228-4.4772 10-10 10zm1-14c0-.5523-.4477-1-1-1s-1 .4477-1 1 .4477 1 1 1 1-.4477 1-1zm0 4c0-.5523-.4477-1-1-1s-1 .4477-1 1v4c0 .5523.4477 1 1 1s1-.4477 1-1v-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex justify-between w-full pl-4">
                        <div class="py-2">
                            <h2 class="font-semibold">Set up two-factor authentication (2FA) to help protect your account.</h2>
                            2FA provides an extra layer of security which may help prevent scammers from posting as your company and damaging your reputation.
                        </div>
                        <div class="self-center">
                            <a class="px-[15px] py-[5px] border rounded-lg" href="">Set up 2FA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="flex justify-between border-b-1 border-gray min-h-14">
            <div class="flex">
                {{-- <img class="w-1/5 h-auto p-7" src="{{ Vite::asset('resources/images/logo.svg')}}" alt="logo" class="mx-0.5 p-4" /> --}}
                <a class="px-6 py-5 mx-0.5" href="/">
                    <svg data-testid="logo-en" fill="none" height="24" role="img" viewBox="0 0 83 20" width="96" xmlns="http://www.w3.org/2000/svg" aria-label="Indeed Home">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M74.6134 3.45838C74.348 3.16078 73.993 3.01038 73.5133 3.01038C73.0336 3.01038 72.6674 3.16878 72.4116 3.49678C72.1573 3.81358 72.0246 4.29038 72.0246 4.91438V9.43758C71.4346 8.80238 70.8221 8.34638 70.2001 8.03918C69.8116 7.85198 69.3543 7.71278 68.8442 7.64238C68.5484 7.60238 68.2429 7.58158 67.9072 7.58158C66.3481 7.58158 65.0849 8.11758 64.1159 9.18958C63.1581 10.2616 62.6784 11.7496 62.6784 13.6616C62.6784 14.5656 62.8015 15.4088 63.0446 16.1816C63.2908 16.9544 63.6346 17.6296 64.1047 18.204C64.5732 18.78 65.1345 19.2152 65.7757 19.5336C66.4169 19.8408 67.1108 19.9992 67.864 19.9992C68.2094 19.9992 68.5356 19.9704 68.841 19.9112C69.0456 19.8808 69.2375 19.8312 69.4326 19.7704C69.9107 19.612 70.36 19.3848 70.7678 19.0968C71.1851 18.7992 71.6041 18.412 72.0214 17.9464V18.244C72.0214 18.8088 72.1637 19.236 72.4387 19.5432C72.725 19.8408 73.0815 19.9992 73.5085 19.9992C73.9466 19.9992 74.3032 19.8504 74.5782 19.564C74.8517 19.2664 74.9956 18.8296 74.9956 18.2456V4.75758C75.0004 4.19118 74.8676 3.75438 74.6134 3.45838ZM71.4442 15.9352C71.1691 16.5096 70.8014 16.9368 70.3536 17.2152C69.8947 17.4936 69.3942 17.6312 68.8442 17.6312H68.8346C68.2829 17.6312 67.784 17.4824 67.3251 17.196C66.8662 16.8984 66.5 16.4616 66.2362 15.8872C65.9723 15.3016 65.8396 14.5976 65.8396 13.764C65.8396 12.98 65.9611 12.2872 66.217 11.7016C66.4616 11.1064 66.8182 10.6504 67.2675 10.3336C67.7265 10.0056 68.2365 9.85678 68.8154 9.85678H68.8458C69.3862 9.85678 69.8851 10.0152 70.344 10.3224C70.803 10.6296 71.1691 11.0776 71.4442 11.6616C71.7192 12.2472 71.8519 12.9512 71.8519 13.764C71.8519 14.636 71.7192 15.3608 71.4442 15.9352ZM61.5479 16.0648C61.3544 15.8968 61.089 15.8072 60.7628 15.8072C60.467 15.8072 60.2431 15.8776 60.08 16.0056C59.6818 16.3624 59.3668 16.6504 59.1206 16.8584C58.8775 17.0568 58.6009 17.2552 58.3067 17.4424C58.0221 17.6216 57.7151 17.7608 57.4112 17.8408C57.0946 17.9288 56.7588 17.9688 56.3815 17.9688C56.2999 17.9688 56.2184 17.9688 56.1464 17.9592C55.6763 17.9304 55.2398 17.8008 54.8432 17.5624C54.3731 17.2952 54.0069 16.9 53.7207 16.3832C53.4457 15.8472 53.3034 15.2328 53.2938 14.5384H59.4388C60.2639 14.5384 60.9051 14.4184 61.3544 14.2008C61.8133 13.9624 62.0372 13.4664 62.0372 12.7032C62.0372 11.8696 61.8133 11.0568 61.3752 10.2536C60.9371 9.45838 60.2847 8.80398 59.3988 8.29998C58.521 7.79438 57.472 7.54638 56.2392 7.54638H56.148C55.2414 7.55598 54.4051 7.70638 53.6616 7.98318C52.8876 8.28078 52.2336 8.70798 51.6932 9.25198C51.1751 9.80718 50.7673 10.4712 50.4923 11.2456C50.2173 12.02 50.0734 12.8632 50.0734 13.764C50.0734 15.6888 50.6346 17.196 51.7555 18.316C52.8141 19.3784 54.282 19.9336 56.1464 19.9928C56.2488 20.0024 56.3591 20.0024 56.4726 20.0024C57.3489 20.0024 58.1324 19.8936 58.8152 19.6664C59.498 19.4376 60.0592 19.1592 60.5085 18.8232C60.9546 18.476 61.292 18.1192 61.5159 17.7528C61.7398 17.3864 61.8533 17.0584 61.8533 16.7896C61.8533 16.4808 61.7526 16.2328 61.5479 16.0648ZM54.2116 10.46C54.7121 9.93358 55.3533 9.67598 56.1384 9.67598H56.1496C56.9635 9.67598 57.6271 9.93358 58.126 10.4488C58.6265 10.9656 58.9207 11.7496 58.9927 12.7992H53.2954C53.3961 11.7688 53.7031 10.9848 54.2116 10.46ZM48.1674 15.8056C47.8619 15.8056 47.6381 15.876 47.475 16.004C47.088 16.3608 46.7618 16.6488 46.5172 16.8568C46.2725 17.0552 46.0071 17.2536 45.7113 17.4408C45.4171 17.62 45.1196 17.7592 44.8046 17.8392C44.4992 17.9272 44.1522 17.9672 43.7749 17.9672C43.6949 17.9672 43.6134 17.9672 43.5414 17.9576C43.0713 17.9288 42.6348 17.7992 42.2366 17.5608C41.7793 17.2936 41.4019 16.8984 41.1269 16.3816C40.8407 15.8456 40.6984 15.2312 40.6872 14.5368H46.8418C47.6573 14.5368 48.2985 14.4168 48.7574 14.1992C49.2051 13.9608 49.4306 13.4648 49.4306 12.7016C49.4306 11.868 49.2163 11.0552 48.7782 10.252C48.3401 9.45678 47.6781 8.80238 46.8018 8.29838C45.9239 7.79278 44.8654 7.54478 43.6438 7.54478H43.5414C42.6348 7.55438 41.8097 7.70478 41.055 7.98158C40.2794 8.27918 39.627 8.70638 39.0978 9.25038C38.5685 9.80558 38.1607 10.4696 37.8857 11.244C37.6091 12.0184 37.4668 12.8616 37.4668 13.7624C37.4668 15.6872 38.0376 17.1944 39.1585 18.3144C40.2187 19.3768 41.6754 19.932 43.5398 19.9912C43.6518 20.0008 43.7525 20.0008 43.866 20.0008C44.7519 20.0008 45.5274 19.892 46.2086 19.6648C46.8914 19.436 47.4526 19.1576 47.9003 18.8216C48.3592 18.4744 48.6854 18.1176 48.9093 17.7512C49.1332 17.3848 49.2467 17.0568 49.2467 16.788C49.2467 16.4808 49.1444 16.2328 48.9509 16.0648C48.7494 15.8952 48.4824 15.8056 48.1674 15.8056ZM41.605 10.46C42.1039 9.93358 42.7467 9.67598 43.5318 9.67598H43.543C44.3569 9.67598 45.0205 9.93358 45.5194 10.4488C46.0279 10.9656 46.3141 11.7496 46.3957 12.7992H40.6888C40.8007 11.7688 41.1077 10.9848 41.605 10.46ZM6.5467 17.9688V10.668C6.75937 10.6872 6.96404 10.6968 7.17831 10.6968C8.19688 10.6968 9.15629 10.4296 9.97019 9.95278V17.9672C9.97019 18.652 9.80709 19.1576 9.49048 19.4952C9.17548 19.8312 8.75654 19.9992 8.24805 19.9992C7.74756 19.9992 7.35101 19.8312 7.02481 19.484C6.7098 19.148 6.5467 18.6424 6.5467 17.9688ZM36.1476 3.45838C35.8822 3.16078 35.516 3.01038 35.0571 3.01038C34.5774 3.01038 34.2112 3.16878 33.9554 3.49678C33.6915 3.81358 33.5684 4.29038 33.5684 4.91438V9.43758C32.9784 8.80238 32.3675 8.34638 31.7439 8.03918C31.3474 7.85198 30.898 7.71278 30.3896 7.64238C30.0953 7.60238 29.7883 7.58158 29.4525 7.58158C27.8935 7.58158 26.6191 8.11758 25.6613 9.18958C24.7035 10.2616 24.2238 11.7496 24.2238 13.6616C24.2238 14.5656 24.3469 15.4088 24.5803 16.1816C24.825 16.9544 25.1816 17.6296 25.6517 18.204C26.1202 18.78 26.6799 19.2152 27.3227 19.5336C27.9655 19.8408 28.6562 19.9992 29.411 19.9992C29.7468 19.9992 30.073 19.9704 30.388 19.9112C30.5926 19.8808 30.7861 19.8312 30.9796 19.7704C31.4577 19.612 31.907 19.3848 32.3148 19.0968C32.7321 18.7992 33.1415 18.412 33.5668 17.9464V18.244C33.5668 18.8088 33.7107 19.236 33.9857 19.5432C34.2608 19.8408 34.6285 19.9992 35.0555 19.9992C35.4728 19.9992 35.8406 19.8504 36.1156 19.564C36.3906 19.2664 36.5218 18.8296 36.5218 18.2456V4.75758C36.5234 4.19118 36.4018 3.75438 36.1476 3.45838ZM32.9879 15.9352C32.7129 16.5096 32.3451 16.9368 31.8878 17.2152C31.4385 17.4936 30.9284 17.6312 30.3896 17.6312H30.38C29.8299 17.6312 29.3294 17.4824 28.8721 17.196C28.4036 16.8984 28.047 16.4616 27.7816 15.8872C27.5177 15.3016 27.385 14.5976 27.385 13.764C27.385 12.98 27.5081 12.2872 27.7512 11.7016C28.0054 11.1064 28.3524 10.6504 28.8113 10.3336C29.2591 10.0056 29.7787 9.85678 30.3496 9.85678H30.3896C30.93 9.85678 31.4289 10.0152 31.8782 10.3224C32.3467 10.6296 32.7129 11.0776 32.9879 11.6616C33.2518 12.2472 33.3957 12.9512 33.3957 13.764C33.3957 14.636 33.2518 15.3608 32.9879 15.9352ZM14.9943 9.25038V9.62798C15.5539 8.91278 16.1552 8.39758 16.8076 8.05998C17.4695 7.73358 18.2243 7.56398 19.0798 7.56398C19.9064 7.56398 20.65 7.74318 21.3008 8.09038C21.9532 8.43598 22.4313 8.93358 22.7575 9.57838C22.9717 9.95438 23.1045 10.3624 23.1652 10.7992C23.226 11.2248 23.2564 11.78 23.2564 12.4552V18.14C23.2564 18.7544 23.1029 19.22 22.8182 19.5272C22.5336 19.844 22.1562 20.0024 21.6973 20.0024C21.2288 20.0024 20.8515 19.844 20.5556 19.5176C20.2598 19.1992 20.1175 18.7352 20.1175 18.14V13.0472C20.1175 12.036 19.9736 11.2632 19.689 10.7272C19.4043 10.1928 18.8223 9.92398 17.9684 9.92398C17.4072 9.92398 16.8987 10.092 16.4398 10.4104C15.9809 10.7384 15.6355 11.1832 15.4212 11.7592C15.2677 12.2152 15.1974 13.0584 15.1974 14.3192V18.1384C15.1974 18.7624 15.0454 19.2184 14.7496 19.5368C14.4538 19.844 14.078 20.0024 13.6079 20.0024C13.149 20.0024 12.7812 19.844 12.487 19.5176C12.1912 19.1992 12.0489 18.7352 12.0489 18.14V9.29998C12.0489 8.71598 12.1816 8.27918 12.4471 8.00078C12.7013 7.71438 13.0579 7.56398 13.5168 7.56398C13.7918 7.56398 14.0365 7.62318 14.2603 7.75278C14.4842 7.88078 14.6665 8.06958 14.8008 8.32718C14.9319 8.58478 14.9943 8.89358 14.9943 9.25038ZM6.56589 0.472774C8.68618 -0.271226 11.1007 -0.231226 12.914 1.29517C13.2514 1.60237 13.6367 1.98957 13.7902 2.44557C13.9741 3.02158 13.149 2.38478 13.0355 2.30638C12.4439 1.92877 11.8538 1.61197 11.1918 1.39437C7.62603 0.323974 4.25212 2.25838 2.15422 5.26318C1.27796 6.59118 0.707115 7.98958 0.238604 9.52718C0.187436 9.69518 0.147461 9.91438 0.0547182 10.0616C-0.0380244 10.2312 0.0147429 9.60718 0.0147429 9.58638C0.0850994 8.95118 0.217817 8.33678 0.382515 7.72238C1.34992 4.44878 3.48939 1.72237 6.56589 0.472774ZM10.6722 6.35438C10.6722 7.74478 9.54485 8.87278 8.15531 8.87278C6.76577 8.87278 5.64006 7.74478 5.64006 6.35438C5.64006 4.96398 6.76577 3.83598 8.15531 3.83598C9.54485 3.83598 10.6722 4.96238 10.6722 6.35438Z" fill="#000000"></path>
                    </svg>
                </a>
                
                <div class="pt-1  mr-8 w-auto space-x-3 self-center text-sm text-black/60">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/companies" :active="request()->is('companies')">Company Reviews</x-nav-link>
                    <x-nav-link href="/career/salaries" :active="request()->is('career/salaries')">Find salaries</x-nav-link>
                </div>
            </div>
            <div class="pt-1  pl-4 self-center space-x-3 text-sm">
                <a href="/auth" class="pt-7 pb-5 text-blue font-bold hover:border-b-2 hover:border-blue transition-colors duration-1000">Sign in</a>
                <x-divider/>
                <a href="/recruitment" class="px-1 pt-7 pb-5 text-black/60 hover:border-b-2 hover:border-blue transition-colors duration-1000">Employers / Post Job</a>
            </div>
        
        </div>
    </nav>
    <main>
        <div class="bg-[#F3F2F1] h-screen w-full">

        </div>

    </main>
    <footer class="flex justify-between p-8 text-black/70 text-sm">
        <div>
            <span>©2024 Indeed</span>
        </div>
        <ul class="flex">
            <li class="flex">
                <div>
                    <a href="">Cookies privacy and terms</a>
                </div>
                <span>-</span>
            </li>
            <li class="flex">
                <div>
                    <a href="">Privacy center</a>
                </div>
                <span>-</span>
            </li>
            <li class="flex">
                <div>
                    <a href="">Security</a>
                </div>
                <span>-</span>
            </li>
            <li class="flex">
                <div>
                    <a href="">Billing</a>
                </div>
                <span>-</span>
            </li>
            <li class="flex">
                <div>
                    <a href="">Contact</a>
                </div>
            </li>
        </ul>
    </footer>
    
</body>
</html>