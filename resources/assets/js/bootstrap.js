import axios from 'axios';
window.axios = axios;
// import {sidebarOpenCloseByBodyTag} from './front/sidebarOffCanvasMain.js';
// import {closeSidebar} from './front/sidebarOffCanvasMain.js';
// import {openSidebar} from './front/sidebarOffCanvasMain.js';
// sidebarOpenCloseByBodyTag();
// closeSidebar();
// openSidebar();
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// Bootstrap JS
import '../vendor/bootstrap/dist/js/bootstrap.bundle.min';

import './functions';

import './front/swiperSlideTrigger';

 import './front/sidebarOffCanvasMain'

import './dark-theme'

import './common/successNotification'

//Dashboard JS

import './dashboard/fileUploadBotton'
import './dashboard/tinymce'
import './dashboard/iamgeUploadPreview'
import './dashboard/imageFileManagerPreview'
import './dashboard/bootstrapTooltips'
import './dashboard/clickboardFile'


import.meta.glob([ '../assets/images/**', ]);
