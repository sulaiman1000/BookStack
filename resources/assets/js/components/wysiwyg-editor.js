class WysiwygEditor {

    constructor(elem) {
        this.elem = elem;
        this.options = require("../pages/page-form");
        this.options.language = 'ar';
        this.options.directionality = 'rtl';
        tinymce.init(this.options);
    }

}

module.exports = WysiwygEditor;