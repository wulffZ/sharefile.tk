<template>
    <div class="col-sm-6">
        <div class="card text-white mb-3 dark-color-3" style="max-height: 100%">
            <div class="card-body">
                <h5 class="card-title">{{ videoData.video_title }}</h5>
                <p class="card-text">Uploaded by: {{ videoData.video_uploader.username }}</p>
                <div v-if="isLoaded" class="col-sm-12 d-flex">
                <video v-if="isLoaded" width="100%" height="100%" controls>
                    <source :src="videoData.video_url"
                            type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                </div>
                <div v-else class="col-sm-12 d-flex" @click="isLoaded = true">
                    <img class="mx-auto d-block" width="56.5%" src="https://image.flaticon.com/icons/svg/907/907856.svg">
                </div>
                <a :href="videoData.video_item_route" class="btn dark-color-1 button-fade--white">go to </a>
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
