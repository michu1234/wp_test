// essential class names, which developer should use preparing html tags of slider:
// .container
// .slider
// .slider__item


// jQuery Slider

jQuery.fn.slajd = function ({time,auto}) {

    let arrows = $('<div class="slider__arrows"><div class="slider__arrow arrow--left">🢀</div><div class="slider__arrow arrow--right">🢂</div></div>'),
        slides = $(".container .slider").children().length,
        pagination = $('<ul class="slider__pagination"></ul>'),
        slider = $(this);

    // appending UI

    function appendUI() {
        slider.append(arrows);
        slider.append(pagination);
        for (let index = 0; index < slides; index++) {
            let pag = slider.find(".slider__pagination");
            pag.append("<li></li>");
        }

        pagination.find("li").eq(0).addClass("is--active");
    };

    appendUI();



    // CLICK EVENTS

    // left arrow click

    let left = this.find(".arrow--left"),
        right = this.find(".arrow--right"),
        counter = 0;

    function goLeft() {
        $(".slider__item:first-child").clone().insertAfter($(".slider__item:last-child"));
        $(".slider__item:first-child").animate({
            "marginLeft": "-=25%"
        }, 100, function () {
            $(".slider__item:first-child").remove();
        });

        if (counter < slides - 1) {
            counter++;
        } else {
            counter = 0;
        }

        pagination.find("li").eq(counter).addClass("is--active");
        pagination.find("li").eq(counter).siblings().removeClass("is--active");
    }

    function goRight() {
        $(".slider__item:last-child").clone().insertBefore($(".slider__item:first-child"));
        $(".slider__item:first-child").css({
            "marginLeft": "-25%"
        });
        $(".slider__item:first-child").animate({
            "marginLeft": "+=25%"
        }, 100, function () {
            $(".slider__item:last-child").remove();
        });


        if (counter > 0) {
            counter--;
        } else {
            counter = slides - 1;
        }

        pagination.find("li").eq(counter).addClass("is--active");
        pagination.find("li").eq(counter).siblings().removeClass("is--active");
    }

    $(left).click(function () {
        goLeft();
    });

    // right arrow click

    $(right).click(function () {
        goRight();
    })

    // auto sliding

    if (auto) {
        setInterval(function () {
            goLeft();
        }, time)
    }
}
