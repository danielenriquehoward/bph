<template>
	<nav>
	</nav>
</template>

<script>
export default {
    created: function () {
        window.addEventListener('scroll', this.handleScroll);
        this.prevScrollPos = this.getScrollPos();
    },

    data: function () {
        return {
            show: this.getScrollPos() < 175,
            didScroll: false,
            delta: 50,
            lastScrollTop: 0,
            prevScrollPos: 0,
            atTop: document.documentElement.scrollTop === 0
        };
    },
    
    watch: {
        didScroll: function (val) {
            if (val) {
                this.hasScrolled();
                this.didScroll = false;
            }
        }
    },

    methods: {
        handleScroll: function () {
            this.prevScrollPos = this.getScrollPos();
            this.didScroll = true;
            this.atTop = document.documentElement.scrollTop === 0;
        },

        hasScrolled: function () {
            const st = this.getScrollPos();

            if (Math.abs(this.lastScrollTop - st) <= this.delta) {
                return;
            }

            const isAtTop = this.prevScrollPos < 175;
            const isScrollingDown = st > this.lastScrollTop && st > this.$el.clientHeight;

            this.show = isAtTop || !isScrollingDown;
            this.lastScrollTop = st;
        },

        getScrollPos: function () {
            return Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop);
        }
    }
}
</script>
