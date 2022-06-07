import '../../block/submit';

const ENTITY_SELECTOR = 'entity';
const INDIVIDUAL_SELECTOR = 'individual';
const PREFIX_SELECTOR = 'form-wrapper__type-selector-';
const ACTIVE_BUTTON_CLASS = 'form-wrapper__active';
const FORM_SELECTOR_TEMPLATE = 'form-wrapper__{name}-wrap';
const FORM_HIDDEN_CLASS = 'form-wrapper__hidden';

let activeSelector = INDIVIDUAL_SELECTOR;

function createSelector(selectorName, isClass = false, prefix = PREFIX_SELECTOR) {
    return (isClass ? '.' : '#') + prefix + selectorName;
}

function changeSelector(selectorName) {
    const selector = createSelector(selectorName);
    const formSelectorClass = FORM_SELECTOR_TEMPLATE.replace('{name}',
        selectorName === INDIVIDUAL_SELECTOR ? ENTITY_SELECTOR : INDIVIDUAL_SELECTOR);

    if (selectorName !== activeSelector) {
        activeSelector = selector;
        $(createSelector(ACTIVE_BUTTON_CLASS, true, '')).removeClass(ACTIVE_BUTTON_CLASS);
        $(createSelector(FORM_HIDDEN_CLASS, true, '')).removeClass(FORM_HIDDEN_CLASS);
        $(selector).addClass(ACTIVE_BUTTON_CLASS);
        $(createSelector(formSelectorClass, true, '')).addClass(FORM_HIDDEN_CLASS);
    }
}


$(
    function () {
        $(createSelector(ENTITY_SELECTOR)).click(function () {
            changeSelector(ENTITY_SELECTOR);
        });
        $(createSelector(INDIVIDUAL_SELECTOR)).click(function () {
            changeSelector(INDIVIDUAL_SELECTOR);
        });
    }
);