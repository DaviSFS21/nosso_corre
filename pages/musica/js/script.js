const DOM = {
    timeline: "timeline",
    timelineStepper: "timeline__stepper",
    timelineStep: "timeline__step",
    timelineStepTitle: "timeline__step-title",
    timelineStepActive: "is-active",
    timelineStepActiveMarker: "timeline__step-active-marker",
    timelineSlidesContainer: "timeline__slides",
    timelineSlide: "timeline__slide",
    timelineSlideActive: "is-active"
}

const STEP_ACTIVE_MARKEP_CUSTOM_PROPS = {
    width: "--slide-width",
    posX: "--slide-pos-x",
    posY: "--slide-pos-y"
}

const SLIDES_CONTAINER_CUSTOM_PROPS = {
    height: "--slides-container-height"
}

const timeline = document.querySelector(`.${DOM.timeline}`)
const timelineStepper = timeline?.querySelector(`.${DOM.timelineStepper}`)
const timelineStepTitle = timeline?.querySelector(`.${DOM.timelineStepTitle}`)
const timelineSlidesContainer = timeline?.querySelector(
    `.${DOM.timelineSlidesContainer}`
)
const timelineSlides =
    timeline && Array.from(timeline.querySelectorAll(`.${DOM.timelineSlide}`))

window.addEventListener("load", () => {
    createStepActiveMarker()
    activateCurrentSlide()
})

window.addEventListener("resize", () => {
    recalcStepActiveMarkerProps()
})

timeline?.addEventListener("click", event => {
    const { target } = event

    if (
        !target ||
        !(target instanceof Element) ||
        !target.closest(`.${DOM.timelineStep}`)
    ) {
        return
    }

    const currentStep = target.closest(`.${DOM.timelineStep}`)

    if (!currentStep) {
        return
    }

    deactivateSteps()
    activateCurrentStep(currentStep)

    recalcStepActiveMarkerProps()

    deactivateSlides()
    activateCurrentSlide()
})

function deactivateSteps() {
    const steps = document.querySelectorAll(`.${DOM.timelineStep}`)
    steps?.forEach(elem => elem.classList.remove(`${DOM.timelineStepActive}`))
}

function activateCurrentStep(currentStep) {
    currentStep?.classList.add(`${DOM.timelineStepActive}`)
}

function deactivateSlides() {
    timelineSlides?.forEach(elem =>
        elem.classList.remove(`${DOM.timelineSlideActive}`)
    )
}

function activateCurrentSlide() {
    const currentSlide = getCurrentSlide()

    if (!currentSlide) {
        return
    }

    const currentSlideHeight = getCurrentSlideHeight(currentSlide)
    setSlideContainerHeight(currentSlideHeight)
    currentSlide.classList.add(`${DOM.timelineSlideActive}`)
}

function createStepActiveMarker() {
    const stepActiveMarker = document.createElement("div")
    stepActiveMarker.classList.add(`${DOM.timelineStepActiveMarker}`)
    timelineStepper?.appendChild(stepActiveMarker)

    const positionProps = getStepActiveMarkerProps()

    if (!positionProps) {
        return
    }

    setStepActiveMarkerProps({
        stepActiveMarker,
        ...positionProps
    })
}

function recalcStepActiveMarkerProps() {
    const stepActiveMarker = timeline?.querySelector(
        `.${DOM.timelineStepActiveMarker}`
    )

    const stepActiveMarkerProps = getStepActiveMarkerProps()
    if (!stepActiveMarkerProps) {
        return
    }

    setStepActiveMarkerProps({ stepActiveMarker, ...stepActiveMarkerProps })
}

function setStepActiveMarkerProps({ stepActiveMarker, posX, posY, width }) {
    stepActiveMarker.style.setProperty(
        `${STEP_ACTIVE_MARKEP_CUSTOM_PROPS.width}`,
        `${width}px`
    )

    stepActiveMarker.style.setProperty(
        `${STEP_ACTIVE_MARKEP_CUSTOM_PROPS.posX}`,
        `${posX}px`
    )

    if (typeof posY === "number") {
        stepActiveMarker.style.setProperty(
            `${STEP_ACTIVE_MARKEP_CUSTOM_PROPS.posY}`,
            `${posY}px`
        )
    }
}

function getStepActiveMarkerProps() {
    const { currentStep } = getCurrentStep()

    if (!currentStep) {
        return null
    }

    const width = getElementWidth(currentStep)
    const posX = getStepActiveMarkerPosX(currentStep)
    const posY = getStepActiveMarkerPosY()

    if (typeof posX !== "number" || typeof posY !== "number") {
        return null
    }

    return { posX, posY, width }
}

function getCurrentStep() {
    const timelineSteps = Array.from(
        document.querySelectorAll(`.${DOM.timelineStep}`)
    )

    const currentStep = timelineSteps.find(element =>
        element.classList.contains(`${DOM.timelineStepActive}`)
    )

    const currentStepIndex =
        currentStep &&
        timelineSteps.findIndex(element =>
            element.classList.contains(`${DOM.timelineStepActive}`)
        )

    return { currentStep, currentStepIndex }
}

function getCurrentSlide() {
    const { currentStepIndex } = getCurrentStep()

    if (typeof currentStepIndex !== "number" || !timelineSlides) {
        return null
    }

    return timelineSlides[currentStepIndex]
}

function setSlideContainerHeight(height) {
    timelineSlidesContainer?.style.setProperty(
        `${SLIDES_CONTAINER_CUSTOM_PROPS.height}`,
        `${height}px`
    )
}

function getCurrentSlideHeight(currentSlide) {
    return currentSlide.clientHeight
}

function getStepActiveMarkerPosY() {
    const timelineTitlePosY = timelineStepTitle?.getBoundingClientRect().top
    const timelineStepperPosY = timelineStepper?.getBoundingClientRect().top

    if (!timelineTitlePosY || !timelineStepperPosY) {
        return null
    }

    return timelineTitlePosY - timelineStepperPosY
}

function getStepActiveMarkerPosX(currentStep) {
    const timelineStepperPosX = timelineStepper?.getBoundingClientRect().left
    const currentStepPosX = currentStep.getBoundingClientRect().left

    if (!timelineStepperPosX) {
        return null
    }

    return currentStepPosX - timelineStepperPosX
}

function getElementWidth(elem) {
    return elem.clientWidth
}
jQuery(document).ready(function ($) {
    var feedbackSlider = $(".feedback-slider");
    feedbackSlider.owlCarousel({
        items: 1,
        nav: true,
        dots: true,
        autoplay: true,
        loop: true,
        mouseDrag: true,
        touchDrag: true,
        navText: [
            "<i class='fa fa-long-arrow-left'></i>",
            "<i class='fa fa-long-arrow-right'></i>"
        ],
        responsive: {
            // breakpoint from 767 up
            767: {
                nav: true,
                dots: false
            }
        }
    });

    feedbackSlider.on("translate.owl.carousel", function () {
        $(".feedback-slider-item h3")
            .removeClass("animated fadeIn")
            .css("opacity", "0");
        $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
            .removeClass("animated zoomIn")
            .css("opacity", "0");
    });

    feedbackSlider.on("translated.owl.carousel", function () {
        $(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
        $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
            .addClass("animated zoomIn")
            .css("opacity", "1");
    });
    feedbackSlider.on("changed.owl.carousel", function (property) {
        var current = property.item.index;
        var prevThumb = $(property.target)
            .find(".owl-item")
            .eq(current)
            .prev()
            .find("img")
            .attr("src");
        var nextThumb = $(property.target)
            .find(".owl-item")
            .eq(current)
            .next()
            .find("img")
            .attr("src");
        var prevRating = $(property.target)
            .find(".owl-item")
            .eq(current)
            .prev()
            .find("span")
            .attr("data-rating");
        var nextRating = $(property.target)
            .find(".owl-item")
            .eq(current)
            .next()
            .find("span")
            .attr("data-rating");
        $(".thumb-prev").find("img").attr("src", prevThumb);
        $(".thumb-next").find("img").attr("src", nextThumb);
        $(".thumb-prev")
            .find("span")
            .next()
            .html(prevRating + '<i class="fa fa-star"></i>');
        $(".thumb-next")
            .find("span")
            .next()
            .html(nextRating + '<i class="fa fa-star"></i>');
    });
    $(".thumb-next").on("click", function () {
        feedbackSlider.trigger("next.owl.carousel", [300]);
        return false;
    });
    $(".thumb-prev").on("click", function () {
        feedbackSlider.trigger("prev.owl.carousel", [300]);
        return false;
    });
}); //end ready
$(document).ready(function () {
    $("#myCarousel").on("slide.bs.carousel", function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 3;
        var totalItems = $(".carousel-item").length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $(".carousel-item")
                        .eq(i)
                        .appendTo(".carousel-inner");
                } else {
                    $(".carousel-item")
                        .eq(0)
                        .appendTo($(this).find(".carousel-inner"));
                }
            }
        }
    });
});
$(document).ready(function () {
    $("#myCarousel").on("slide.bs.carousel", function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 3;
        var totalItems = $(".carousel-item").length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $(".carousel-item")
                        .eq(i)
                        .appendTo(".carousel-inner");
                } else {
                    $(".carousel-item")
                        .eq(0)
                        .appendTo($(this).find(".carousel-inner"));
                }
            }
        }
    });
});

$(".custom-carousel").owlCarousel({
    autoWidth: true,
    loop: false
  });
  $(document).ready(function () {
    $(".custom-carousel .item").click(function () {
      $(".custom-carousel .item").not($(this)).removeClass("active");
      $(this).toggleClass("active");
    });
  });
  
  