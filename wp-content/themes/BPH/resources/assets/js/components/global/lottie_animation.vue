<template>
    <div v-observe-visibility="visibilityChanged">
    </div>
</template>

<script>
import lottie from 'lottie-web';
import { ObserveVisibility } from 'vue-observe-visibility'


const DATA_PATH = '/wp-content/themes/Tailbase/resources/vue-anim/';


export default {
    props: {
        path: {
            type: String,
            required: true
        },
        renderer: {
            type: String,
            default: 'svg'
        },
        loop: {
            type: Boolean,
            default: false
        },
        autoplay: {
            type: Boolean,
            default: true
        },
        whenVisible: {
            type: Boolean,
            default: false
        }
    },

    mounted: function () {
        if (!this.whenVisible) {
            this.load();
        }
    },

    data: function () {
        return {
            visible: false,
            loaded: false
        };
    },

    watch: {
        visible: function (val) {
            if (val && !this.loaded) {
                this.load();
            }
        }
    },

    methods: {
        load: function () {
            lottie.loadAnimation({
                container: this.$el,
                renderer: this.renderer,
                loop: this.loop,
                autoplay: this.autoplay,
                path: DATA_PATH + this.path + '/animation.json'
            });
            this.loaded = true;
        },

        visibilityChanged: function (visible) {
            if (!this.visible) {
                this.visible = visible;
            }
        }
    },

    directives: {
        ObserveVisibility
    }
}
</script>
