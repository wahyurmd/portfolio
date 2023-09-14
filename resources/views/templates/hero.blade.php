<div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
        <div class="table-cell">
            <div class="container">
                <p class="display-6 color-d">Hello, Folks!</p>
                @foreach ($profile as $row)
                    <h1 class="hero-title mb-4">I am {{ $row->name }}</h1>
                    <p class="hero-subtitle"><span class="typed" data-typed-items="Web Developer, Backend Developer, Freelancer"></span></p>
                    <p class="pt-3">
                        <a class="btn btn-primary btn js-scroll px-4" href="{{ $url . 'storage/profile/' . $row->curriculum_vitae }}" role="button" target="_blank">Get My CV</a>
                    </p>
                @endforeach
            </div>
        </div>
    </div>
</div>
