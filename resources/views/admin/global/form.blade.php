<div id="formModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <form class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @csrf
                @yield('form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
</div>