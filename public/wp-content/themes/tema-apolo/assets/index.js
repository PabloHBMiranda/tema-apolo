import homeScript from "./js/front_page/home-script";

((fn) => {
    if (document.attachEvent ? document.readyState === 'complete' : document.readyState !== 'loading') {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
})(() => {
    homeScript();
});

