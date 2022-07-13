<template>
    <div class="header m-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Boolpress</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav p-2">
                    <li class="nav-item active pe-3">
                        <router-link :to="{ name: 'home' }">Home<span class="sr-only">(current)</span></router-link>
                    </li>
                    <li class="nav-item active pe-3">
                        <router-link :to="{ name: 'about' }">About<span class="sr-only">(current)</span></router-link>
                    </li>
                     <li class="nav-item active">
                        <router-link :to="{ name: 'reviews' }">Reviews<span class="sr-only">(current)</span></router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>

export default {
    name: 'Header',

};


</script>

<style>
</style>