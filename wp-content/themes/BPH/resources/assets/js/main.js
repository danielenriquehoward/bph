/* ==========================================================================
Global Imports
========================================================================== */
import $ from 'jquery'; // https://www.youtube.com/watch?v=FaSFzp6IDgw
import Vue from "vue";
import 'whatwg-fetch';


/* ==========================================================================
Vue Components
========================================================================== */

new Vue({ el: "#app" });


/* ==========================================================================
Template Components
========================================================================== */

const app = {};


/* ==========================================================================
Config
========================================================================== */
app.instantiate = function (elem) {
  const $this = $(elem);
  const module = $this.attr('data-module');
  console.log("data-module: " + module);
  if (module === undefined) {
    throw 'Module not defined (use data-module="")';
  } else if (module in app) {
    if ($this.attr('data-initialized') === "true") return;
    app[module](elem);
    $this.attr('data-initialized', true);
  } else {
    throw 'Module \'' + module + '\' not found';
  }
};

$(document).ready(function () {
  // Component functions that should only run if the component exists in the ajax container or page
  $('[data-module]').each(function () {
    // console.log( $(this) );
    app.instantiate(this);
  });
});


/* ==========================================================================
Globals
========================================================================== */
// Hide Page Loader when DOM and images are ready
$(window).on('load', () => $('.pageloader').removeClass('is-active'));

// Toggle mobile menu
$('.navbar-burger').on('click', () => $('.navbar-burger, .navbar-menu').toggleClass('is-active'));
