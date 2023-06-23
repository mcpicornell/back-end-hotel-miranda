@extends('layout')

@section('content')
<section class="section section-perfect-base">
    <div class="section-perfect-base__text">
        <h3 class="h3 text__experience">THE ULTIMATE LUXURY EXPERIENCE</h3>

        <h3 class="h3 text__base">The Perfect Base For You</h3>

    </div>

    <div class="section-perfect-base__button-container">
        <a href="#" class="button button-container__button-gold">
            <h3 class="button-gold__span">TAKE A TOUR</h3>
        </a>
        <a href="#" class="button button-container__button-black">
            <h3 class="button-black__span">LEARN MORE</h3>
        </a>
    </div>

    <form class="form section-perfect-base__form-check-availability">
        <div class="form-check-availability">
            <h3 class="h3 form-check-availability__span">Arrival Date</h3>
            <div class="form-check-availability__input-container">

                <img class="input-container__img" src="/../img/calendarBlack.jpg" />

                <input class="input form-check-availability__input" type="text" placeholder="24th may 2023" />
            </div>

            <img class="form-check-availability__golden.bar" src="/../img/goldenBar.svg" />
        </div>

        <div class="form-check-availability">
            <h3 class="h3 form-check-availability__span">LeDeparture Date</h3>
            <div class="form-check-availability__input-container">

                <img class="input-container__img" src="/../img/calendarBlack.jpg" />

                <input class="input form-check-availability__input" type="text" placeholder="30th may 2023" />
            </div>

            <img class="form-check-availability__golden.bar" src="/../img/goldenBar.svg" />
        </div>
        <a class="button form-check-availability__button" href="/controllers/rooms.php">Check Availability</a>
    </form>

</section>

<section class="section section-about-us">
    <div class="container__section-about-us">

        <div class="content__section-about-us">
            <h3 class="h3 section-about-us__span">ABOUT US</h3>
            <h3 class="h3 
            section-about-us__title">Discover Our Underground.</h3>
            <p class="p section-about-us__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <a class="button section-about-us__button-gold"><span class="h3 button-gold__text">Book Now</span></a>
        </div>

        <div class="section-about-us__card-container">
            <div class="section__img1-container">
                <img class="img img1-container__img" src="/../img/fondoGris.jpg" />
            </div>

            <div class="section__strong-team">

                <div class="strong-team__img-container-strong-team">
                    <img class="img-container-strong-team__img-team-gold" src="/../img/teamGold.svg">

                    <div class="img-container-strong-team__transparent-img">
                        <img class="transparent-img__img" src="/../img/teamTransparent.svg">
                    </div>
                </div>

                <h3 class="h3 strong-team__span">Strong Team</h3>
                <p class="p strong-team__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor.</p>
            </div>

            <div class="section-luxury-room__img-container">
                <img class="img img2-container__img" src="/../img/fondoGris.jpg">
            </div>

            <div class="section-luxury-room">


                <div class="section-luxury-room__container-luxury-room">
                    <div class="container-luxury-room__calendar-gold">
                        <img class="calendar-gold__img" src="/../img/calendarGoldWithArrow.svg" />
                    </div>

                    <h3 class="container-luxury-room__span-white">Luxury Room</h3>

                    <p class="container-luxury-room__p-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor.</p>

                </div>


            </div>
        </div>
    </div>
</section>



<section class="section section-hand-picked">
    <div class="section-hand-picked__text">
        <h3 class="h3 text__rooms-grey">ROOMS</h3>
        <h3 class="h3 text__hand-picked">Hand Picked Rooms</h3>
    </div>

    <div class="section-hand-picked__container-hand-picked">

    
    @if (!empty($rooms))
        @php
            $count = 0;
        @endphp

        @foreach ($rooms as $room)

            @if ($count < 1)

                <div class="container-hand-picked">
                    <div class="section-hand-picked__rectangle">
                        <div class="rectangle__img">
                            <img class="img rectangle__bed" src="/../img/handPickedRooms/1.bed.svg" />
                        </div>
                        <div class="rectangle__img">
                            <img class="img rectangle__wifi" src="/../img/handPickedRooms/2.wifi.svg" />
                        </div>
                        <div class="rectangle__img">
                            <img class="img rectangle__car" src="/../img/handPickedRooms/3.car.svg" />
                        </div>
                        <div class="rectangle__img">
                            <img class="img rectangle__snow" src="/../img/handPickedRooms/4.snow.svg" />
                        </div>
                        <div class="rectangle__img">
                            <img class="img rectangle__gym" src="/../img/handPickedRooms/5.gym.svg" />
                        </div>
                        <div class="rectangle__img">
                            <img class="img rectangle__noSmoke" src="/../img/handPickedRooms/6.noSmoke.svg" />
                        </div>
                        <div class="rectangle__img">
                            <img class="img rectangle__coctel" src="/../img/handPickedRooms/7.coctel.svg" />
                        </div>
                    </div>

                    <div class="section-hand-picked__carrusel">
                    @if (!empty($room->photos))
                        @php
                            $photos = json_decode($room->photos, true);
                        @endphp
                        @if (is_array($photos) && count($photos) > 0)
                        <a href="roomDetails.php?id={{ $room->roomId }}">
                            <img class="carrusel__img-hand-picked" src="{{ $photos[0] }}" />
                        </a>
                        @endif
                    @endif
                        
                        <div class="section-hand-picked__duplex">
                            <h3 class="section-hand-picked__span">{{$room->roomName}}</h3>
                            <p class="p section-hand-picked__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore.</p>
                            <h3 class="h3 section-hand-picked__price-gold">${{$room->price}}<span class="price-gold__night">/Night</span></h3>
                        </div>
                    </div>
                </div>
               
            @php
            $count++;
            @endphp
            @endif
            @endforeach 
            <div class="buttons-carrusel-hand-picked">
                <a type="button" class="button buttons__white"><img src="/../img/arrow-left.svg" /></a>
                <a type="button" class="button buttons__gold"><img src="/../img/arrow-right.svg" /></a>
            </div>
            @endif
    </div>
</section>

<section class="section-intro-video">
    <div class="section-intro-video__container">
        <h3 class="h3 section-intro-video__sub-title-gold">Intro Video</h3>
        <h3 class="h3 section-intro-video__title">Meet With Our Luxury Place.</h3>
        <p class="p section-intro-video__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>

    </div>

    <div class="section-intro-video__video">
        <video class="video video__video" controls>
            <source src="../img/videos/homeVideo.mp4" type="video/mp4"/>
            Your browser does not support this video tag.
        </video>
    </div>

    <a type="button" class="button section-intro-video__button">
        <h3 class="button button-gold">BOOK NOW</h3>
    </a>

</section>

<section class="section section-facilities">
    <div class="section-facilities__title">
        <h3 class="title__subtitle-facilities">Facilities</h3>
        <h3 class="title__title-facilities">Core Features</h3>

    </div>

    <div class="section-facilities__carrusel">
        <div class="carrusel__img">
            <h3 class="img__span01">01</h3>
            <div class="img__container-goldFinger">
                <img class="container-goldFinger" src="/../img/features/1.goldFinger.svg" />
            </div>
        </div>

        <div class="carrusel__container-high">
            <h3 class="container-high__title">Have High Rating</h3>
            <p class="container-high__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna..</p>
        </div>

    </div>

</section>



<section class="section-menu">
    <div class="section-menu__donut">
        <img class="donut__img" src="/../img/goldDonut.svg" />
    </div>

    <div class="section-menu__donut-complete">
        <img class="donut-complete__img" src="/../img/completeDonut.svg" />
    </div>


    <h3 class="section-menu__menu">MENU</h3>
    <h3 class="h3 section-menu__our-food">Our Foods Menu</h3>
    <div class="section-menu__all-options">
        <div class="all-options__options">

            <img class="options__img" src="/../img/fondoGris.jpg" />

            <div class="options__text">
                <h3 class="text__name">Eggs & Bacon</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>

            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>

        </div>

        <div class="all-options__options">
            <img class="options__img" src="/../img/fondoGris.jpg" />

            <div class="options__text">
                <h3 class="text__name">Tea or Coffee</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>
            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>
        </div>

        <div class="all-options__options">
            <img class="options__img" src="/../img/fondoGris.jpg" />
            <div class="options__text">
                <h3 class="text__name">Chia Oatmeal</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>
            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>
        </div>



        <div class="all-options__options">

            <img class="options__img" src="/../img/fondoGris.jpg" />

            <div class="options__text">
                <h3 class="text__name">Fruit Parfait</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>

            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>

        </div>

        <div class="all-options__options">

            <img class="options__img" src="/../img/fondoGris.jpg" />

            <div class="options__text">
                <h3 class="text__name">Marmalade Selection</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>

            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>

        </div>

        <div class="all-options__options">

            <img class="options__img" src="/../img/fondoGris.jpg" />

            <div class="options__text">
                <h3 class="text__name">Chees Plate</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>

            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>
        </div>
    </div>

    <div class="section-menu__buttons">
        <a type="button" class="button buttons__white"><img class="white__button-img" src="/../img/arrow-left.svg" /></a>
        <a type="button" class="button buttons__gold"><img class="gold__button-img" src="/../img/arrow-right.svg" /></a>
    </div>

    <div class="section-menu__carrusel">
        <img class="img carrusel__img" src="/../img/fondoGris.jpg" />

    </div>
</section>

<section class="section-objectives">
    <div class="section-objectives__container">
        <img class="img container__img-objective" src="/../img/1.goldHornet.svg" />
        <h3 class="h3 container__objective-white">84k<span class="objective-white__plus">+</span></h3>
        <h3 class="h3 container__objective-grey"> Projects are Completed</h3>
    </div>
    <div class="section-objectives__container">
        <img class="img container__img-objective" src="/../img/2.teamsGold.svg" />
        <h3 class="h3 container__objective-white">10M<span class="objective-white__plus">+</span></h3>
        <h3 class="h3 container__objective-grey">Active Backers Around World</h3>
    </div>
    <div class="section-objectives__container">
        <img class="img container__img-objective" src="/../img/3.graphicRises.svg" />
        <h3 class="h3 container__objective-white">02k<span class="objective-white__plus">+</span></h3>
        <h3 class="h3 container__objective-grey">Categories Served</h3>
    </div>
    <div class="section-objectives__container">
        <img class="img container__img-objective" src="/../img/4.books.svg" />

        <h3 class="span container__objective-white">100M<span class="objective-white__plus">+</span></h3>
        <h3 class="h3 container__objective-grey">Idea Raised Funds</h3>
    </div>

</section>
@endsection