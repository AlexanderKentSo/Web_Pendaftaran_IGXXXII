@extends('layouts.app')

@section("title", "FAQ")

@section("css")
    <style>
        :root{
            --c1: #CB553B;
            --c2: rgba(228, 173, 173, 0.35);
            --c3: rgba(208, 153, 98, 70);
            --c4: rgba(201, 65, 44, 0.85);
            --montserrat-light : 'Montserrat Light';
            --montserrat-medium : 'Montserrat Medium';
            --montserrat-bold : 'Montserrat Bold';
        }

        p {
            margin: 0;
        }

        .monst-bold {
            font-family: var(--montserrat-bold);
        }
        
        .monst-medium {
            font-family: var(--montserrat-medium);
        }
        
        .monst-light {
            font-family: var(--montserrat-light);
        }

        .gallery-section {
            position: relative;
            background-repeat: no-repeat;
            background-size: cover;
            height: 70vh;
            width: 100vw;
            box-sizing: border-box;
            /* margin-top: 80px; */
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center; 
            z-index: -2;

            /* Smooth transition effect */
            transition: background-image 2s ease-in-out, opacity 2s ease-in-out;
            opacity: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Semi-transparent black */
            z-index: 1;
        }

        .gallery-title {
            z-index: 2;
            background-image: url('/assets/logo/logo_gallery.png');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            height: 20vh;
            width: 100vw;
        }

        .gallery-subtitle {
            font-family: var(--montserrat-medium);
            font-size: 2rem;
            color: #f0cd8a;
            text-align: center;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            margin-top: -20px;
        }
    </style>
@endsection

@section('content')
    <div class="gallery-section">
        <div class="overlay"></div>
        <div class="gallery-title"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const images = [
                '/assets/img/Images_Gallery/img1.jpg',
                '/assets/img/Images_Gallery/img2.jpg',
                '/assets/img/Images_Gallery/img3.jpg',
                '/assets/img/Images_Gallery/img4.jpg',
                '/assets/img/Images_Gallery/img5.jpg',
                '/assets/img/Images_Gallery/img6.jpg',
                '/assets/img/Images_Gallery/img7.jpg',
                '/assets/img/Images_Gallery/img8.jpg',
                '/assets/img/Images_Gallery/img9.jpg',
            ];

            let currentIndex = 0;
            const gallerySection = document.querySelector('.gallery-section');

            function changeBackgroundImage() {
                setTimeout(function () {
                    if(currentIndex > 8){
                        currentIndex = 0;
                        gallerySection.style.backgroundImage = `url(${images[currentIndex]})`;
                    }else{
                    currentIndex = (currentIndex + 1) % images.length;
                    gallerySection.style.backgroundImage = `url(${images[currentIndex]})`;
                }
                }, 0); // Wait for 1 second to complete the fade out before changing the image
                
            }

            // Initial call to set the first background image
            changeBackgroundImage();

            // Change the background image every 5 seconds (5000 milliseconds)
            setInterval(changeBackgroundImage, 5000);
        });
    </script>
@endsection

@section('js')
    <script>
        
    </script>
@endsection
