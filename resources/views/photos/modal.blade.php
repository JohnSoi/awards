<!-- модалка фоток -->
<div class="modal photo-modal fade" id="getPhoto" items-modal-photo>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="cross-modal" data-dismiss="modal" aria-label="Close">
                    <svg width="39" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3284 22.6213L21.6213 23.3284L32.935 34.6421L33.6421 33.935L22.3284 22.6213ZM17.3787 23.3284L16.6716 22.6213L4.65074 34.6421L5.35785 35.3492L17.3787 23.3284ZM16.6716 18.3787L17.3787 17.6716L6.06496 6.35786L5.35785 7.06497L16.6716 18.3787ZM34.3492 6.35786L22.3284 18.3787L21.6213 17.6716L33.6421 5.65076L34.3492 6.35786Z" fill="#222222" />
                    </svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="photo-place" data-html="image">
                    <img attr="src:src">
                </div>
            </div>
            <div class="modal-footer bg-white">
                <div class="slider-navigation slider-navigation__white slider-navigation__photo">
                    <div class="arrows-nav">
                        <div class="arrows-nav__left">
                            <svg data-photo-prev width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="23" cy="23" r="22.5" transform="rotate(-180 23 23)" stroke="#FBFBFB" />
                                <path d="M11.6464 22.6464C11.4512 22.8417 11.4512 23.1583 11.6464 23.3536L14.8284 26.5355C15.0237 26.7308 15.3403 26.7308 15.5355 26.5355C15.7308 26.3403 15.7308 26.0237 15.5355 25.8284L12.7071 23L15.5355 20.1716C15.7308 19.9763 15.7308 19.6597 15.5355 19.4645C15.3403 19.2692 15.0237 19.2692 14.8284 19.4645L11.6464 22.6464ZM34 22.5L12 22.5L12 23.5L34 23.5L34 22.5Z" fill="#FBFBFB" />
                            </svg>
                        </div>
                        <div class="arrows-nav__right">
                            <svg data-photo-next width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="23" cy="23" r="22.5" stroke="#FBFBFB" />
                                <path d="M34.3536 23.3536C34.5488 23.1583 34.5488 22.8417 34.3536 22.6464L31.1716 19.4645C30.9763 19.2692 30.6597 19.2692 30.4645 19.4645C30.2692 19.6597 30.2692 19.9763 30.4645 20.1716L33.2929 23L30.4645 25.8284C30.2692 26.0237 30.2692 26.3403 30.4645 26.5355C30.6597 26.7308 30.9763 26.7308 31.1716 26.5355L34.3536 23.3536ZM12 23.5H34V22.5H12V23.5Z" fill="#FBFBFB" />
                            </svg>
                        </div>
                    </div>
                    <div class="download-area">
                        <a href="javascript://" attr="href:original" target="_blank" download class="download-area__link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#222222" stroke-width="0.65" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                        </a>
                    </div>
                    <div class="counter">
                        <span data-active-count></span>
                        /
                        <span data-all-count></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>