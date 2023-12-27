<style>
    @font-face {
        font-family: 'StorytellerScript';
        src: url('/public/assets/fonts/StorytellerScript-Regular.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
    }

    .hero {
        width: 100%;
        min-height: 750px;
        position: relative;
        top: 0;
        left: 0;
        background-color: #d9edfd;
    }

    .hero-cta {
        position: relative;
        z-index: 3;
        border: 2px solid rgba(82, 78, 183, 1.7);
        display: flex;
        justify-content: center;
        align-items: center;
    }


    #typing-cta {
        left: 50%;
        transform: translateX(-50%);
    }

    .layer-1 {
        animation: parallax_fg linear 20s infinite both;
        background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/24650/1.png) 0 100% repeat-x;
        z-index: 2;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: auto 136px;
    }

    .layer-2 {
        animation: parallax_fg linear 30s infinite both;
        background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/24650/2.png) 0 100% repeat-x;
        z-index: 1;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: auto 145px;
    }

    .layer-3 {
        animation: parallax_fg linear 55s infinite both;
        background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/24650/3.png) 0 100% repeat-x;
        z-index: 1;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: auto 158px;
    }

    .layer-4 {
        animation: parallax_fg linear 75s infinite both;
        background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/24650/4.png) 0 100% repeat-x;
        z-index: 1;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: auto 468px;
    }

    .layer-5 {
        animation: parallax_fg linear 95s infinite both;
        background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/24650/5.png) 0 100% repeat-x;
        z-index: 1;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: auto 311px;
    }

    .layer-6 {
        animation: parallax_fg linear 120s infinite both;
        background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/24650/6.png) 0 100% repeat-x;
        z-index: 1;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: auto 222px;
    }

    .bike-1 {
        background: url(https://www.kallatoyota.co.id/storage/images/360exterior/16529289205-all-new-avanza.png) 0 100% no-repeat;
        z-index: 1;
        position: absolute;
        bottom: 100px;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: auto 75px;
    }

    .bike-2 {
        background: url(https://www.kallatoyota.co.id/storage/images/360exterior/16529317835-all-new-hiace-premio.png) 0 100% no-repeat;
        z-index: 1;
        position: absolute;
        bottom: 100px;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: auto 75px;
    }

    .bike-3 {
        background: url(https://resource.digitaldealer.com.au/image/104181539363ca00934a347251292065_0_0.png) 0 100% no-repeat;
        z-index: 1;
        position: absolute;
        bottom: 100px;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: auto 75px;
    }

    .bike-4 {
        background: url(https://www.toyotasutan.com/product/alphard/img/360-view/data1/images/alfonso_360ext_06.png) 0 100% no-repeat;
        z-index: 1;
        position: absolute;
        bottom: 100px;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: auto 75px;
    }

    .bike-1 {
        animation: parallax_bike linear 10s infinite both;
    }

    .bike-2 {
        animation: parallax_bike linear 15s infinite both;
    }

    .bike-3 {
        animation: parallax_bike linear 20s infinite both;
    }

    .bike-4 {
        animation: parallax_bike linear 25s infinite both;
    }

    @keyframes parallax_fg {
        0% {
            background-position: 2765px 100%;
        }

        100% {
            background-position: 550px 100%;
        }
    }

    @keyframes parallax_bike {
        0% {
            background-position: -300px 100%;
        }

        100% {
            background-position: 2000px 100%;
        }
    }

    .logo {
        /* margin: 70px auto;
        position: absolute; */
        z-index: 2;
        width: 100%;
    }

    .logo img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
    }

    .logo h1 {
        font-family: 'Bungee Spice', sans-serif;
        font-size: 4rem;
    }

    .logo h4 {
        font-family: 'StorytellerScript';
        font-size: 2rem;
    }

    @media (max-width: 700px) {
        .logo img {
            max-width: 90%;
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .fadeInLeft {
        animation: fadeInLeft 1s ease-out;
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .fadeInRight {
        animation: fadeInRightt 1s ease-out;
    }
</style>
<section id="home" class="relative">
    <div class="hero">

        <div class="parallax-layer layer-6"></div>
        <div class="parallax-layer layer-5"></div>
        <div class="parallax-layer layer-4"></div>
        <div class="parallax-layer bike-1"></div>
        <div class="parallax-layer bike-2"></div>
        <div class="parallax-layer bike-3"></div>
        <div class="parallax-layer bike-4"></div>
        <div class="parallax-layer layer-3"></div>
        <div class="parallax-layer layer-2"></div>
        <div class="parallax-layer layer-1"></div>
        <div class="logo grid grid-cols-1 gap-4 place-items-center h-56 py-24">
            <!-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/24650/logo.svg" alt="" /> -->
            <div class="col">
                <h1 class="text-bold">D & N</h1>
            </div>
            <div class="col mt-2 fadeInRight">
                <h4 id="typing" class="text-black"></h4>
            </div>
        </div>
        <div class="grid grid-cols-1 py-24 px-4">
            <div class="col-span-full">
                <a href="#rental" id="cta-hero" class="hero-cta py-1 px-1 pr-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800 fadeInLeft">
                    <div class="flex justify-between items-center">
                        <div class="absolute left-0 top-0 transform -translate-y-1/2 bg-blue-600 rounded-full text-white px-6 py-1.5 mr-24">
                            <i class="fa-solid fa-van-shuttle fa-1xl"></i>
                        </div>
                        <div>
                            <span id="typing-cta" class="text-lg font-medium">Selengkapnya &nbsp;&nbsp;<i class="fa-solid fa-angle-down text-lg"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>