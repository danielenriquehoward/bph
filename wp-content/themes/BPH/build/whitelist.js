module.exports = {
  /**
   * You can whitelist selectors to stop purgecss from removing them from your CSS
   *
   * whitelist: ['random', 'yep', 'button']
   * In the example, the selectors .random, #yep, button will be left in the final CSS
   */
  whitelist: [
    "sal-animate",
    "sal-disabled",
    "collapse",
    "post-type-case-studies",
    "wpcf7",
    "wpcf7-form-control",
    "wpcf7-checkbox",
    "field-interests",
    "wpcf7-form-control-wrap",
    "contact-form-section",
    "page-template-page-contact",
    "wpcf7",
    "checkbox",
    "wpcf7-list-item",
    "wpcf7-list-item-label",
    "has-sep",
    "contact-form-section",
    "has-caption",
    "field-caption",
    "fields",
    "cli_settings_button",
    "cli_action_button",
    "alm-reveal",
    "gform_ajax_spinner",
    "button",
    "gform_footer",
    "gfield_radio",
    "gform_wrapper",
    "gform_body",
    "gform_fields",
    "gfield",
    "ginput_container",
    "tight-deadlines",
    "gfield_contains_required",
    "gfield_required",
    "validation_message",
    "gfield_description",
    "gfield_label",
    "is-outlined",
    "close-modal",
    "is-rounded",
    "alm-load-more-btn",
    "input_1_30",
    "field_1_30",
    "ctf-tweets",
    "ctf",
    "ctf-item",
    "ctf-reply",
    "ctf-retweet",
    "ctf-like",
    "ctf-author-box",
    "ctf-tweet-content",
    "ctf-tweet-actions",
    "ctf-screename-sep",
    "ctf-tweet-meta",
    "ctf-author-screenname",
    "ctf-quoted-tweet",
    "fp-enabled",
    "fp-section",
    "fp-slide",
    "fp-slidesContainer",
    "fp-table",
    "fp-tableCell",
    "fp-prev",
    "fp-controlArrow",
    "fp-next",
    "fp-scrollable",
    "fp-scroller",
    "fp-notransition",
    "fp-nav",
    "fp-right",
    "fp-left",
    "fp-slidesNav",
    "fp-bottom",
    "fp-top",
    "fp-tooltip",
    "fp-show",
    "fp-auto",
    "fp-tableCell",
    "fp-responsive",
    "fp-sr",
    "fp-sr-only",
    "page-template-page-home",
    "page-template-default",
    "pswp__bg",
    "pswp__ui--fit",
    "pswp__top-bar",
    "pswp__caption__center",
    "char",
    "alignleft",
    "alignright",
    "aligncenter",
    "wp-caption",
    "transition-fade",
    "is-animating",
    "Masthead",
    "progress-bar-container--container",
    "hero-foot",
    "lazyload",
    "lazyloading",
    "lazyloaded",
    "accordion",
    // 'card',
    // 'card-footer',
    // 'card-header-title',
    // 'card-header-icon',
    // 'card-header',
    // 'card-content',
    "ajax-load-more",
    "alm-btn-wrap",
    "px-4",
    "captioninfo",
    "wp-block-table",
    "tablepress",
    "tbody",
    "table",
    "justify-content-start",
    "justify-content-center",
    "justify-content-end",
    "items-start",
    "items-center",
    "th",
    "td",
    "is-bordered",
    "is-striped",
    "is-narrow",
    "is-hoverable",
    "tr:not(.is-selected):nth-child(even)",
    "is-fullwidth",
    "current_page_item",
    "current_page_ancestor",
    "ais-facets",
    "ais-root",
    "ais-menu--count",
    "ais-stats--body",
    "ais-menu--item__active",
    "ais-refinement-list--item__active",
    "ais-refinement-list--checkbox",
    "ais-refinement-list--count",
    "algolia-autocomplete",
    "items-end",
    "bounceInLeft",
    "bounce",
    "flash",
    "pulse",
    "rubberBand",
    "shake",
    "headShake",
    "swing",
    "tada",
    "wobble",
    "jello",
    "bounceIn",
    "bounceInDown",
    "bounceInLeft",
    "bounceInRight",
    "bounceInUp",
    "bounceOut",
    "bounceOutDown",
    "bounceOutLeft",
    "bounceOutRight",
    "bounceOutUp",
    "fadeIn",
    "fadeInDown",
    "fadeInDownBig",
    "fadeInLeft",
    "fadeInLeftBig",
    "fadeInRight",
    "fadeInRightBig",
    "fadeInUp",
    "fadeInUpBig",
    "fadeOut",
    "fadeOutDown",
    "fadeOutDownBig",
    "fadeOutLeft",
    "fadeOutLeftBig",
    "fadeOutRight",
    "fadeOutRightBig",
    "fadeOutUp",
    "fadeOutUpBig",
    "flipInX",
    "flipInY",
    "flipOutX",
    "flipOutY",
    "lightSpeedIn",
    "lightSpeedOut",
    "rotateIn",
    "rotateInDownLeft",
    "rotateInDownRight",
    "rotateInUpLeft",
    "rotateInUpRight",
    "rotateOut",
    "rotateOutDownLeft",
    "rotateOutDownRight",
    "rotateOutUpLeft",
    "rotateOutUpRight",
    "hinge",
    "jackInTheBox",
    "rollIn",
    "rollOut",
    "zoomIn",
    "zoomInDown",
    "zoomInLeft",
    "zoomInRight",
    "zoomInUp",
    "zoomOut",
    "zoomOutDown",
    "zoomOutLeft",
    "zoomOutRight",
    "zoomOutUp",
    "slideInDown",
    "slideInLeft",
    "slideInRight",
    "slideInUp",
    "slideOutDown",
    "slideOutLeft",
    "slideOutRight",
    "slideOutUp",
    "heartBeat",
    "flip-down : Flip Down",
    "flip-left : Flip Left",
    "flip-right : Flip Right",
    "is-nav-selected",
    "subnav-highlight",
    "show-trigger",
    "hide-trigger",
    "is-selected",
    "dot",
    "wt-cli-cookie-bar-container",
    "cookie-law-info-bar",
    "wt-cli-cookie-bar",
    "order-1",
    "order-2",
    "order-3",
    "order-4",
    "order-5",
    "max-h-52"
  ],
  whitelistPatterns: [
    /^qs/,
    /^flickity/,
    /^aa/,
    /^algolia/,
    /^sv_api_form/,
    /^ais/,
    /^sal/,
    /^w-/,
    /^lg\:w-/,
    /^bkg/,
    /^icon/,
    /^chevron/,
    /^border-/,
    /^text-/,
    /^pb-/,
    /^pt-/,
    /^rotate/,
    /^-rotate/,
    /^delay/,
    /-button$/,
    /^overlay/,
    /^pswp/,
    /^card/,
    /^h/
  ],
  whitelistPatternsChildren: []
};
