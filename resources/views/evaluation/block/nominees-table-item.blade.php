<tr items-html-project class="nominees-item nominees-item-table" attr="data-project-url:url">
    <td scope="row">
        <div class="nominees-item__number text-center" html="loop_iteration"></div>
    </td>
    <td>
        <div class="nominees-item__title" html="name_nominate"></div>
    </td>
    <td>
        <div class="nominees-item__nomination" html="nomination.name"></div>
    </td>
    <td>
        <div class="nominees-item__eval" html="eval">-</div>
    </td>
    <td>
        <div class="nominees-item__score" html="total">-</div>
    </td>
    <td>
        <div class="nominees-item__comment" html="comment">Не прокомментировано</div>
    </td>
    @if(request()->user()->group_id == 5)
    <td class="d-none">
        <div class="nominees-item__top" html="top">
            <a href="javascript://" attr="data-btn-accept:id" class="nominees-item__top-icon"></a>
        </div>
    </td>
    <td>
        <div class="nominees-item__top" html="top">
            <a href="javascript://" attr="data-btn-is-top:id" class="nominees-item__top-icon"></a>
        </div>
    </td>
    <td class="d-none">
        <div class="nominees-item__remove" html="top">
            <a href="javascript://" attr="data-btn-delete:id" class="nominees-item__remove-icon"></a>
        </div>
    </td>
    @endif
</tr>