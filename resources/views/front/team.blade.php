@extends('front.layouts.app')
@section('content')
    <div id="header" class="relative -mb-[388px] h-[600px] bg-[#F6F7FA]">
        <div class="container relative z-10 mx-auto max-w-[1130px] pt-10">
            <x-navbar/>
        </div>
    </div>
    <div id="Teams" class="relative z-10 w-full px-[10px]">
        <div class="container mx-auto flex max-w-[1130px] flex-col items-center gap-[50px]">
            <div class="flex flex-col items-center gap-[50px]">
                <div class="breadcrumb flex items-center justify-center gap-[30px]">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Our Team</p>
                </div>
                <h2 class="text-center text-4xl font-bold leading-[45px]">We’re Here to Build <br> Your Awesome Projects
                </h2>
            </div>
            <div
                class="teams-card-container grid grid-cols-1 justify-center gap-[30px] sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

                @forelse ($teams as $team)
                    <div
                        class="card hover:border-cp-dark-blue flex h-full flex-col items-center justify-center gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] px-[29px] transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
                        <div
                            class="flex h-[100px] w-[100px] shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
                            <div class="h-[90px] w-[90px] overflow-hidden rounded-full">
                                <img src="{{ Storage::url($team->avatar) }}"
                                    class="h-full w-full object-cover object-center" alt="photo">
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 text-center">
                            <p class="text-xl font-bold leading-[30px]">{{ $team->name }}</p>
                            <p class="text-cp-light-grey">{{ $team->occupation }}</p>
                        </div>
                        <div class="flex items-center justify-center gap-[10px]">
                            <div class="flex h-6 w-6 shrink-0">
                                <img src="assets/icons/global.svg" alt="icon">
                            </div>
                            <p class="text-cp-dark-blue font-semibold">{{ $team->location }}</p>
                        </div>
                    </div>
                @empty
                    <p>belum ada data terbaru</p>
                @endforelse

            </div>
        </div>
    </div>
    <div id="Stats" class="bg-cp-black mt-20 w-full">
        <div class="container mx-auto max-w-[1000px] py-10">
            <div class="flex flex-wrap items-center justify-between p-[10px]">

                @forelse ($statistics as $statistic)
                    <div class="card flex w-[200px] flex-col items-center gap-[10px] text-center">
                        <div class="flex h-[55px] w-[55px] shrink-0 overflow-hidden">
                            <img src="{{ Storage::url($statistic->icon) }}" class="h-full w-full object-contain"
                                alt="icon">
                        </div>
                        <p class="text-cp-pale-orange text-4xl font-bold leading-[54px]">{{ $statistic->goal }}</p>
                        <p class="text-cp-light-grey">{{ $statistic->Name }}</p>
                    </div>
                @empty
                    <p>belum ada data terbaru</p>
                @endforelse


            </div>
        </div>
    </div>
    <div id="Awards" class="container mx-auto mt-20 flex max-w-[1130px] flex-col gap-[30px]">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-[14px]">
                <p
                    class="badge bg-cp-pale-blue text-cp-light-blue w-fit rounded-full p-[8px_16px] text-sm font-bold uppercase">
                    OUR AWARDS</p>
                <h2 class="text-4xl font-bold leading-[45px]">We’ve Dedicated Our<br>Best Team Efforts</h2>
            </div>
            <a href="" class="bg-cp-black w-fit rounded-xl p-[14px_20px] font-bold text-white">Explore More</a>
        </div>
        <div
            class="awards-card-container grid grid-cols-1 justify-center gap-[30px] sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Solid Fundamental Crafter Async</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bali, 2020</p>
            </div>
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Most Crowded Yet Harmony Place</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Shanghai, 2021</p>
            </div>
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Small Things Made Much Big Impacts</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Zurich, 2022</p>
            </div>
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Teamwork and Solidarity</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bandung, 2023</p>
            </div>
        </div>
    </div>
    <footer class="bg-cp-black relative mt-20 w-full overflow-hidden">
        <div
            class="container relative z-10 mx-auto flex max-w-[1130px] flex-wrap items-center justify-between gap-y-4 pb-[220px] pt-[100px]">
            <div class="flex flex-col gap-10">
                <div class="flex items-center gap-3">
                    <div class="flex h-[43px] shrink-0 overflow-hidden">
                        <img src="assets/logo/logo.svg" class="h-full w-full object-contain" alt="logo">
                    </div>
                    <div class="flex flex-col">
                        <p id="CompanyName" class="text-xl font-extrabold leading-[30px] text-white">ShaynaComp</p>
                        <p id="CompanyTagline" class="text-cp-light-grey text-sm">Build Futuristic Dreams</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="assets/icons/youtube.svg" class="h-full w-full object-contain" alt="youtube">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="assets/icons/whatsapp.svg" class="h-full w-full object-contain" alt="whatsapp">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="assets/icons/facebook.svg" class="h-full w-full object-contain" alt="facebook">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="assets/icons/instagram.svg" class="h-full w-full object-contain" alt="instagram">
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap gap-[50px]">
                <div class="flex w-[200px] flex-col gap-3">
                    <p class="text-lg font-bold text-white">Products</p>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">General
                        Contract</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Building
                        Assessment</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">3D Paper
                        Builder</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Legal
                        Constructions</a>
                </div>
                <div class="flex w-[200px] flex-col gap-3">
                    <p class="text-lg font-bold text-white">About</p>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">We’re
                        Hiring</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Our Big
                        Purposes</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Investor
                        Relations</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Media
                        Press</a>
                </div>
                <div class="flex w-[200px] flex-col gap-3">
                    <p class="text-lg font-bold text-white">Useful Links</p>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Privacy &
                        Policy</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Terms &
                        Conditions</a>
                    <a href="contact.html" class="text-cp-light-grey transition-all duration-300 hover:text-white">Contact
                        Us</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Download
                        Template</a>
                </div>
            </div>
        </div>
        <div class="absolute -bottom-[135px] w-full">
            <p class="text-center text-[250px] font-extrabold leading-[375px] text-white opacity-5">SHAYNA</p>
        </div>
    </footer>
@endsection
