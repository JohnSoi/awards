<!-- Уведомления -->
<div class="modal notify-modal fade" id="modalNotify">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div data-btn-close class="modal-header mb-4" style="display: none;">
                <div class="cross-modal" data-dismiss="modal" aria-label="Close">
                    <svg width="39" height="41" viewBox="0 0 39 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3284 22.6213L21.6213 23.3284L32.935 34.6421L33.6421 33.935L22.3284 22.6213ZM17.3787 23.3284L16.6716 22.6213L4.65074 34.6421L5.35785 35.3492L17.3787 23.3284ZM16.6716 18.3787L17.3787 17.6716L6.06496 6.35786L5.35785 7.06497L16.6716 18.3787ZM34.3492 6.35786L22.3284 18.3787L21.6213 17.6716L33.6421 5.65076L34.3492 6.35786Z" fill="#222222" />
                    </svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="title-notify" data-title></div>
                <p class="text-notify" data-text></p>
            </div>
            <div class="modal-footer">
                <a href="javascript://" class="close-notify" data-btn></a>
            </div>
        </div>
    </div>
</div>

@yield('modals')