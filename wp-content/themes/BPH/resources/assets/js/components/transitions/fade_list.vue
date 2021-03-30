<template>
    <transition-group
        name="fade-list"
        :tag="tag"
    >
        <slot />
    </transition-group>
</template>

<script>
export default {
    props: {
        tag: {
            type: String,
            required: false,
            default: 'div'
        }
    }
}
</script>

<style lang="scss">
.fade-list-enter-active,
.fade-list-leave-active,
.fade-list-move {
    transition: opacity .5s;
}
.fade-list-enter, .fade-list-leave-to {
    opacity: 0;
}
.fade-list-enter-to {
    opacity: 1;
}
.fade-list-leave-active, .fade-list-leave-to {
    // make sure outgoing list items are hidden
    display: none !important;
}
</style>
