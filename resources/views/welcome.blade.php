@extends('templates.main-guest')

@section('title')
Incio
@endsection

@section('main')

<div class="relative flex w-full h-full">
    <!-- Carousel Wrapper -->
    <div class="overflow-hidden relative shadow-lg w-full">
        <!-- Carousel Items -->
        <div id="carousel-items" class="flex transition-transform duration-500 ease-in-out h-full">
            <div class="w-full flex-shrink-0 flex justify-center"
                style="background-image: url('../images/carousel-1.jpg'); background-size: cover; background-position: center;">
                <!-- Content of Slide 1 -->
                <div class="p-8 bg-white bg-opacity-10 h-full w-4/5 flex flex-col justify-end">
                    <h2 class="text-8xl font-bold text-[#5E86A2] fade-in">Slide 1</h2>
                    <p class="mt-4 text-white text-2xl fade-in">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="w-full flex-shrink-0 flex justify-center"
                style="background-image: url('../images/carousel-2.jpg'); background-size: cover; background-position: center;">
                <!-- Content of Slide 2 -->
                <div class="p-8 bg-white bg-opacity-10 h-full w-4/5 flex flex-col justify-end">
                    <h2 class="text-8xl font-bold text-[#5E86A2] fade-in">Slide 2</h2>
                    <p class="mt-4 text-white text-2xl fade-in">Consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="w-full flex-shrink-0 flex justify-center"
                style="background-image: url('../images/carousel-3.jpg'); background-size: cover; background-position: center;">
                <!-- Content of Slide 3 -->
                <div class="p-8 bg-white bg-opacity-10 h-full w-4/5 flex flex-col justify-end">
                    <h2 class="text-8xl font-bold text-[#5E86A2] fade-in">Slide 3</h2>
                    <p class="mt-4 text-white text-2xl fade-in">Sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Eum sint, atque optio eligendi odio quasi quam
                        officiis minus possimus dolore. Iure accusantium optio corporis possimus quis accusamus dolor,
                        corrupti placeat?
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Previous Button -->
    <button id="prev-btn"
        class="absolute top-1/2 transform -translate-y-1/2 left-0 bg-gray-800 bg-opacity-50 text-white px-3 py-2 rounded-full hover:bg-gray-900 z-10">
        &larr;
    </button>

    <!-- Next Button -->
    <button id="next-btn"
        class="absolute top-1/2 transform -translate-y-1/2 right-0 bg-gray-800 bg-opacity-50 text-white px-3 py-2 rounded-full hover:bg-gray-900 z-10">
        &rarr;
    </button>
</div>
<div class="h-auto flex justify-center my-40">
    <div class="grid md:grid-cols-3 lg:grid-cols-3  w-4/5 gap-10 p-5">
        <div class="flex flex-col bg-white shadow-md p-2 rounded-md gap-10 border py-10 fade-in">
            <h3 class="text-xl font-bold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus cumque itaque assumenda placeat, ut
                maiores facilis esse et dolor corrupti distinctio optio fugiat vitae dicta, est reprehenderit quis quos
                in.</p>
        </div>
        <div class="flex flex-col bg-white shadow-md p-2 rounded-md gap-10 border py-10 fade-in">
            <h3 class="text-xl font-bold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus cumque itaque assumenda placeat, ut
                maiores facilis esse et dolor corrupti distinctio optio fugiat vitae dicta, est reprehenderit quis quos
                in.</p>
        </div>
        <div class="flex flex-col bg-white shadow-md p-2 rounded-md gap-10 border py-10 fade-in">
            <h3 class="text-xl font-bold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus cumque itaque assumenda placeat, ut
                maiores facilis esse et dolor corrupti distinctio optio fugiat vitae dicta, est reprehenderit quis quos
                in.</p>
        </div>
        <div class="flex flex-col bg-white shadow-md p-2 rounded-md gap-10 border py-10 fade-in">
            <h3 class="text-xl font-bold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus cumque itaque assumenda placeat, ut
                maiores facilis esse et dolor corrupti distinctio optio fugiat vitae dicta, est reprehenderit quis quos
                in.</p>
        </div>
        <div class="flex flex-col bg-white shadow-md p-2 rounded-md gap-10 border py-10 fade-in">
            <h3 class="text-xl font-bold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus cumque itaque assumenda placeat, ut
                maiores facilis esse et dolor corrupti distinctio optio fugiat vitae dicta, est reprehenderit quis quos
                in.</p>
        </div>
        <div class="flex flex-col bg-white shadow-md p-2 rounded-md gap-10 border py-10 fade-in">
            <h3 class="text-xl font-bold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus cumque itaque assumenda placeat, ut
                maiores facilis esse et dolor corrupti distinctio optio fugiat vitae dicta, est reprehenderit quis quos
                in.</p>
        </div>
    </div>
</div>
<div class="flex w-full bg-gray-200 justify-center py-5 shadow-lg mt-10">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29865.49079773383!2d-87.0979600961027!3d20.661996250817033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e4302bf0105cf%3A0x261a83e963d3bfe1!2sFARMACIAS%20DEL%20AHORRO!5e0!3m2!1ses-419!2smx!4v1723152460610!5m2!1ses-419!2smx"
        width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection