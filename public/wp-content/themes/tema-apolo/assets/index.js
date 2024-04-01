import homeScript from "./js/front_page/home-script";
import motosScript from "./js/widgets/motos";

((fn) => {
    if (document.attachEvent ? document.readyState === 'complete' : document.readyState !== 'loading') {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
})(() => {
    homeScript();
    motosScript();
});

