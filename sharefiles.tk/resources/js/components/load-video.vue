<template>
    <div class="col-sm-6">
        <div class="card text-white mb-3 dark-color-3" style="max-height: 100%">
            <div class="card-body">
                <h5 class="card-title">{{ videoData.video_title }}</h5>
                <p class="card-text">Uploaded by: {{ videoData.video_uploader.username }}</p>
                <div v-if="isLoaded" class="col-sm-12 px-0 d-flex">
                    <video v-if="isLoaded" width="100%" height="100%" controls>
                        <source :src="videoData.video_url"
                                type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div v-else class="col-sm-12 d-flex dark-color-1" @click="isLoaded = true">
                    <svg
                        role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        style="width: 50px; margin: 75px auto;"
                    >
                        <path
                            fill="currentColor"
                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"
                        ></path>
                    </svg>
                </div>
                <a :href="videoData.video_item_route" class="btn dark-color-1 button-fade--white mt-2">go to </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Load-Video',
        data: function () {
            return {
                isLoaded: false,
            }
        },
        props: {
            videoData: {
                required: true,
                type: Object
            },

        }
    }
</script>
