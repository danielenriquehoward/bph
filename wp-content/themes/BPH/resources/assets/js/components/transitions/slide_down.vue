<template>
    <transition
        @enter="onEnter"
        @before-leave="onBeforeLeave"
        @leave="onLeave"
    >
        <slot />
    </transition>
</template>

<script>
import { noop } from '../../helpers';
export default {
    props: {
        transition: {
            type: String,
            required: false
        },
        enter: {
            type: Function,
            required: false,
            default: noop
        },
        beforeLeave: {
            type: Function,
            required: false,
            default: noop
        },
        leave: {
            type: Function,
            required: false,
            default: noop
        },
        heightZero: {
            type: Boolean,
            default: true
        }
    },
    
    mounted: function () {
        // make sure animated element starts off with no height
        if (this.heightZero) {
            this.$el.style.height = '0';
        }

        // add transition style if passed in
        if (this.transition) {
            this.$el.style.transition = this.transition;
        }
    },
    
    methods: {
        onEnter: function (el) {
            this.setHeightFull(el);
            this.enter(el);
        },

        onBeforeLeave: function (el) {
            this.beforeLeave(el);
        },

        onLeave: function (el) {
            this.setHeightZero(el);
            this.leave(el);
        },

        setHeightZero: function (el) {
            el.style.height = '0';
        },

        setHeightFull: function (el) {
            el.style.height = el.scrollHeight + 'px';
        }
    }
}
</script>
