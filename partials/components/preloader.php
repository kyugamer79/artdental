<div id="preloader" class="fixed bg-primary-100 inset-0 z-50 flex justify-center items-center transition-opacity duration-500 opacity-100 pointer-events-none">
    <div class="preloader-loader"></div>
</div>

<style>
    /* HTML: <div class="loader"></div> */
    .preloader-loader {
        height: 15px;
        aspect-ratio: 4;
        --_g: no-repeat radial-gradient(farthest-side, #000 90%, #0000);
        background:
            var(--_g) left,
            var(--_g) right;
        background-size: 25% 100%;
        display: grid;
    }

    .preloader-loader:before,
    .preloader-loader:after {
        content: "";
        height: inherit;
        aspect-ratio: 1;
        grid-area: 1/1;
        margin: auto;
        border-radius: 50%;
        transform-origin: -100% 50%;
        background: #000;
        animation: l49 1s infinite linear;
    }

    .preloader-loader:after {
        transform-origin: 200% 50%;
        --s: -1;
        animation-delay: -.5s;
    }

    @keyframes l49 {

        58%,
        100% {
            transform: rotate(calc(var(--s, 1)*1turn))
        }
    }
</style>