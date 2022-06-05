window.$ = window.jQuery = require('jquery');
require('bootstrap');
import WOW from 'wow.js';
new WOW().init();

// module
import 'lazysizes';
import 'lazysizes/plugins/parent-fit/ls.parent-fit';
window.debug = require('./js-modules/Debug').default;
window.NotifyTG = require('./js-modules/Notify').default;
window.ZoneObject = require('./js-modules/ZoneObject').default;
require('./js-modules/modalNotify');
require('./js-modules/jquery.maskedinput');
require('./js-modules/isMouseOver');
require('./js-modules/ajax');
require('./js-modules/scroller');
require('./js-modules/bs.modal.fix');
require('./js-modules/label_up');
require('./js-modules/validate');
require('./js-modules/webp');
require('./js-modules/items');
require('./js-modules/entryModal');
require('./js-modules/text_count');
require('./js-modules/file_change');
require('./js-modules/modalVideoStop');
window.MeSelect = require('./js-modules/Select').default;

// block
require('./block/Header');
require('./block/form-control');
require('./block/opacity');
require('./block/plug');
require('./block/bodyIsSafari');

// helpers
require('./helpers.js');