const slider = document.querySelector('#slider');
const btnNext = document.querySelector('#btnNext');
const btnPrev = document.querySelector('#btnPrev');
const sliderItems = Array.from(slider.children);

sliderItems.forEach(function (slide, index){
    if(index !== 0){
        slide.classList.add('hidden');
    }

    slide.dataset.index = index;

    sliderItems[0].setAttribute('data-active', '');
})

setInterval(function(){
    showNextSlide('next');
}, 6000);

btnNext.onclick = function(){
    showNextSlide('next');
}

btnPrev.onclick = function(){
    showNextSlide('prev');
}

function showNextSlide(direction){
    const currentSlide = slider.querySelector('[data-active]');
    const currentSlideIndex = +currentSlide.dataset.index;
    
    currentSlide.classList.add('hidden');
    currentSlide.removeAttribute('data-active');

    let nextSlideIndex;

    if(direction === 'next'){
        nextSlideIndex = currentSlideIndex + 1 === sliderItems.length ? 0 : currentSlideIndex + 1;
    }else if(direction === 'prev'){
        nextSlideIndex = currentSlideIndex === 0 ? sliderItems.length - 1 : currentSlideIndex - 1;
    }

    const nextSlide = slider.querySelector(`[data-index="${nextSlideIndex}"]`);
    nextSlide.classList.remove('hidden');
    nextSlide.setAttribute('data-active', '');
}