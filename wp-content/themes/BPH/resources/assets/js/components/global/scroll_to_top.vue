<template>
    <div @click="scrollToTop">
    </div>
</template>

<script>
export default {
    methods: {
        scrollToTop: function () {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        }
    }
}
</script>
