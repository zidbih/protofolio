<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   
    
    {{-- container --}}
    <div class="w-full mx-auto lg:w-[80%]">
        {{-- header --}}
        <div class="w-full flex justify-between px-4 py-4 bg-blue-950">
            <i class="fa-solid fa-book-open text-white text-3xl"></i>
            <i class="fa-solid fa-bars  text-white text-3xl cursor-pointer" id="menu"></i>
        </div>
        
        {{-- yellow div --}}
        <div class="flex flex-col-reverse justify-between w-full px-4 bg-yellow-300 relative sm:flex-row">
            {{-- side bar --}}
            <div id="nav" class="px-4 py-2 bg-blue-950 text-white text-center absolute top-0 right-0 hidden">
                <div class="relative mt-1 py-1">
                    <p class="text-yellow-300 text-xl uppercase">choose language</p>
                    <select id="lang" class="w-full bg-transparent border border-yellow-300 text-yellow-300 py-2 px-4  rounded leading-tight outline-none focus:border-yellow-300 focus:ring">
                     <option value="en">English</option>
                     <option value="fr">Francais</option>
                     <option value="ar">العربية</option>
                    </select>
                </div>
            </div>
            {{-- image div --}}
            <div class="p-4 pt-0 max-w-sm mx-auto translate-y-14 sm:translate-y-0 sm:pt-4">
                <img src="images/my_image.jpg">
                <div class="text-white text-lg -mt-10 text-center font-bold">Protofolio</div>
            </div>
            {{-- text div --}}
            <div class="px-10 pt-4  max-w-lg " id="headText">
                Versatile Web Developer proficient in HTML, CSS, JavaScript, and Laravel. 
                Expert in creating visually appealing and responsive interfaces. Skilled in both front-end and Laravel back-end development, committed to delivering efficient
                 and innovative web solutions. Ready to contribute expertise to impactful projects.
                <div class="w-full pt-4 pb-2 text-center hidden text-blue-950 md:inline-block"><i class="fa-solid fa-code text-6xl"></i></div>
            </div>
        </div>

        {{-- blue div --}}
        <div class="w-full bg-blue-950 pt-20 sm:pt-2">
            {{-- about me div --}}
            <div class="text-white px-10 w-full sm:w-3/4 sm:px-20">
                <h1 class="text-xl" id="belowText">
                    My name is <span class="text-yellow-300">zidbih hmoud</span>
                    and i'm a web developer
                </h1>
                <p class="text-sm pt-2">
                    Experienced web developer with a robust skill set in HTML, CSS, JavaScript, and Laravel. 
                    Proficient in additional tools and technologies, enhancing the development lifecycle. Known for crafting visually appealing and responsive interfaces. Expertise spans both front-end finesse and Laravel back-end mastery. Committed to delivering seamless, innovative web solutions.
                    Ready to leverage diverse skills for your next project.
                </p>
                <p class="text-yellow-300" id="learn"></p>
                <button onclick="learnMore()" class="bg-transparent border-2 border-white p-2 mt-4 mb-2 rounded-md hover:text-blue-950 hover:bg-yellow-300 hover:border-yellow-300">
                    Learn more
                </button>
            </div>
            {{-- some of my project div--}}
            <div class="w-full grid grid-cols-1 gap-4 p-10 sm:grid-cols-2 md:grid-cols-3">
                <div class="text-white mb-2 underline decoration-yellow-400 decoration-wavy underline-offset-2 text-3xl text-center col-span-1 sm:col-span-2 md:col-span-3">some examples of my projects</div>
               <div class="h-48 pt-2 text-center text-white  cursor-pointer hover:opacity-90">
                 {{-- title of project --}}
                    <i class="fa-solid fa-shop text-9xl text-yellow-300"></i>
                    <p class="font-bold text-xl mt-2">shop management</p>
                </div>
                <div class="h-48 pt-2 text-center text-white  cursor-pointer hover:opacity-90">
                    {{-- title of project --}}
                    <i class="fa-solid fa-prescription-bottle-medical text-9xl text-yellow-300"></i>
                    <p class="font-bold text-xl mt-2">pharmacy management</p>
                </div>
                <div class="h-48 pt-2 text-center text-white  cursor-pointer hover:opacity-90">
                    {{-- title of project --}}
                    <i class="fa-solid fa-school text-9xl text-yellow-300"></i>
                    <p class="font-bold text-xl mt-2">school management</p>
                </div>
                <div class="h-48 pt-2 text-center text-white  cursor-pointer hover:opacity-90">
                    {{-- title of project --}}
                    <i class="fa-solid fa-exclamation text-9xl text-yellow-300"></i>
                    <p class="font-bold text-xl mt-2">not finished</p>
                </div>
                <div class="h-48 pt-2 text-center text-white  cursor-pointer hover:opacity-90">
                    {{-- title of project --}}
                    <i class="fa-solid fa-exclamation text-9xl text-yellow-300"></i>
                    <p class="font-bold text-xl mt-2">not finished</p>
                </div>
                <div class="h-48 pt-2 text-center text-white  cursor-pointer hover:opacity-90">
                    {{-- title of project --}}
                    <i class="fa-solid fa-exclamation text-9xl text-yellow-300"></i>
                    <p class="font-bold text-xl mt-2">not finished</p>
                </div>
            </div>
        </div>
        {{-- another yelow div --}}
        <div class="w-full bg-yellow-300 p-4 grid grid-cols-1 sm:grid-cols-2">
            {{-- contact form --}}
            <div class="p-4">
                <form action="/contact" method="get">
                    <div class="w-full">
                        <input type="text" name="name" placeholder="Enter Your Name" class="w-full mb-2 placeholder-black bg-transparent outline-none h-10 border-b-2 border-black">
                    </div>
                    <div class="w-full">
                        <input type="text" name="email" placeholder="Enter Your Email" class="w-full mb-2  placeholder-black bg-transparent outline-none h-10 border-b-2 border-black">
                    </div>
                    <div class="w-full">
                        <textarea name="message"cols="30" rows="5" class="w-full mt-2 mb-2 bg-transparent  placeholder-black border-b-2 border-black outline-none" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="w-full">
                        <input type="submit" value="SUBMIT" class="px-6 mb-2 py-2 border-2 border-black outline-none cursor-pointer hover:bg-blue-950 hover:text-yellow-300 hover:border-blue-950">
                    </div>
                </form>
            </div>
            {{-- social media contact --}}
            <div class="p-4">
                {{-- icons --}}
                <div class="grid grid-cols-4 gap-2 px-20 text-center">
                    <p class="uppercase text-3xl mb-2 text-center font-bold col-span-4">Contact me</p>
                    <div><a href=""><i class="fa-brands fa-whatsapp text-blue-950 text-3xl"></i></a></div>
                    <div><a href=""><i class="fa-brands fa-facebook text-blue-950 text-3xl"></i></a></div>
                    <div><a href=""><i class="fa-brands fa-snapchat text-blue-950 text-3xl"></i></a></div>
                    <div><a href=""><i class="fa-brands fa-x-twitter text-blue-950 text-3xl"></i></a></div>
                </div>
                {{-- telephone number --}}
                <div class="grid grid-cols-1 gap-4 px-20 mt-14 text-center">
                    <p class="text-black text-2xl">+222 41092085</p>
                    <p class="text-black text-2xl">+222 31196406</p>
                </div>
            </div>
        </div>
        {{-- footer --}}
        <div class="w-full p-10 bg-blue-950">
            <p class="text-white text-sm text-center">with my love zidbih hmoud copyrite all droit reserved</p>
        </div>
    </div>
   
    <script>
        function learnMore(){
            let learn=document.getElementById('learn');
            learn.innerHTML="Uncover the complete story behind our offerings. Delve into detailed insights, explore features, and discover how our solutions can benefit you. Have questions? Our team is here to provide the information you need. Elevate your understanding and experience a new level of possibilities.";
            
        }
       let menu=document.getElementById('menu');
       menu.addEventListener('click',()=>{
        document.getElementById('nav').classList.toggle('hidden');
       });
    </script>
</body>
</html>