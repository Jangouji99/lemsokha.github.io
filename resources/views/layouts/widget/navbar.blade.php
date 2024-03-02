<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span>L</span>em Sokha</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
            data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                <li class="nav-item"><a href="#project-section" class="nav-link"><span>Projects</span></a></li>
                {{-- <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li> --}}
                {{-- <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li> --}}
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                <li class="nav-item ml-5 d-flex justify-content-center">

                    {{-- <livewire:lang.lang-component /> --}}
                    {{-- <div class="switch my-auto">
                        <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
                        <label for="language-toggle"></label>
                        <span class="on">EN</span>
                        <span class="off">KH</span>
                    </div> --}}
                    {{-- <select wire:model="selectedLanguage" id="language" wire:change="switchLanguage">
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                        <option value="km" {{ app()->getLocale() == 'km' ? 'selected' : '' }}>Khmer</option>
                    </select> --}}

                    {{-- <form class="tabber">
                        <label for="t1" class=" text-white">English</label>
                        <input id="t1" name="food" type="radio" checked>
                        <label for="t2">Khmer</label>
                        <input id="t2" name="food" type="radio">
                        <div class="blob"></div>
                    </form> --}}


                </li>
            </ul>
        </div>
    </div>
    <style>
        label {
            display: inline-block;
            margin-bottom: 0 !important;
        }

        .switch {
            position: relative;
            display: inline-block;
            margin: 0 5px;
        }

        .switch>span {
            position: absolute;
            top: 8px;
            pointer-events: none;
            font-family: 'Helvetica', Arial, sans-serif;
            font-weight: bold;
            font-size: 12px;
            text-transform: uppercase;
            text-shadow: 0 1px 0 rgba(0, 0, 0, .06);
            width: 50%;
            text-align: center;
        }

        input.check-toggle-round-flat:checked~.off {
            color: #ff923e;
        }

        input.check-toggle-round-flat:checked~.on {
            color: #fff;
        }

        .switch>span.on {
            left: 0;
            padding-left: 2px;
            color: #ff923e;
        }

        .switch>span.off {
            right: 0;
            padding-right: 4px;
            color: #fff;
        }

        .check-toggle {
            position: absolute;
            margin-left: -9999px;
            visibility: hidden;
        }

        .check-toggle+label {
            display: block;
            position: relative;
            cursor: pointer;
            outline: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        input.check-toggle-round-flat+label {
            padding: 2px;
            width: 97px;
            height: 35px;
            background-color: #ff923e;
            -webkit-border-radius: 60px;
            -moz-border-radius: 60px;
            -ms-border-radius: 60px;
            -o-border-radius: 60px;
            border-radius: 60px;
        }

        input.check-toggle-round-flat+label:before,
        input.check-toggle-round-flat+label:after {
            display: block;
            position: absolute;
            content: "";
        }

        input.check-toggle-round-flat+label:before {
            top: 2px;
            left: 2px;
            bottom: 2px;
            right: 2px;
            background-color: #ff923e;
            -webkit- -moz-border-radius: 60px;
            -ms-border-radius: 60px;
            -o-border-radius: 60px;
            border-radius: 60px;
        }

        input.check-toggle-round-flat+label:after {
            top: 4px;
            left: 4px;
            bottom: 4px;
            width: 48px;
            background-color: #fff;
            -webkit-border-radius: 52px;
            -moz-border-radius: 52px;
            -ms-border-radius: 52px;
            -o-border-radius: 52px;
            border-radius: 52px;
            -webkit-transition: margin 0.2s;
            -moz-transition: margin 0.2s;
            -o-transition: margin 0.2s;
            transition: margin 0.2s;
        }

        input.check-toggle-round-flat:checked+label {}

        input.check-toggle-round-flat:checked+label:after {
            margin-left: 44px;
        }
    </style>
    {{-- <style>
        svg {
            display: none;
        }

        .tabber {
            position: relative;
            display: flex;
            align-items: stretch;
            justify-content: stretch;
        }

        .tabber label {
            user-select: none;
            text-align: center;
            padding: 2px;
            margin: 5px;
            cursor: pointer;
            will-change: transform;
            transform: translateZ(0px);
            transition: transform 125ms ease-in-out, filter 125ms ease-in-out;
        }

        .tabber label:hover {
            transform: scale(1.15);
        }

        .tabber input[type="radio"] {
            display: none;
        }

        .tabber input[type="radio"]#t1~.blob {
            transform-origin: right center;
        }

        .tabber input[type="radio"]#t2~.blob {
            transform-origin: left center;
        }

        .tabber input[type="radio"]#t1:checked~.blob {
            background: #ff923e;
            animation-name: stretchyRev;
        }

        .tabber input[type="radio"]#t2:checked~.blob {
            background-color: #ff923e;
            animation-name: stretchy;
        }

        .tabber .blob {
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            position: absolute;
            z-index: -1;
            border-radius: 4rem;
            animation-duration: 0.5s;
            animation-direction: forwards;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
            transition: transform 150ms ease, background 150ms ease;
            filter: url("data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\"><defs><filter id=\"goo\"><feGaussianBlur in=\"SourceGraphic\" stdDeviation=\"10\" result=\"blur\" /><feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9\" result=\"goo\" /><feComposite in=\"SourceGraphic\" in2=\"goo\" operator=\"atop\"/></filter></defs></svg>#goo")
        }

        .tabber .blob:before,
        .tabber .blob:after {
            display: block;
            content: "";
            position: absolute;
            top: 0;
            background-color: inherit;
            height: 100%;
            width: 50%;
            border-radius: 100%;
            transform: scale(1.15);
            transition: transform 150ms ease;
            animation-name: pulse;
            animation-duration: 0.5s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        .tabber .blob:before {
            left: 0;
            animation-delay: 0.15s;
        }

        .tabber .blob:after {
            right: 0;
        }

        @keyframes stretchy {
            0% {
                transform: translateX(0) scaleX(1);
            }

            50% {
                transform: translateX(0) scaleX(2);
            }

            100% {
                transform: translateX(100%) scaleX(1);
            }
        }

        @keyframes stretchyRev {
            0% {
                transform: translateX(100%) scaleX(1);
            }

            50% {
                transform: translateX(0) scaleX(2);
            }

            100% {
                transform: translateX(0) scaleX(1);
            }
        }

        @keyframes pulse {

            0%,
            50% {
                transform: scaleX(1);
            }

            25%,
            75% {
                transform: scaleX(1.5);
            }
        }
    </style> --}}
</nav>
