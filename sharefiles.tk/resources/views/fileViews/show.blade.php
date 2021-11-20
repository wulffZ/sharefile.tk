@extends('layout')

@section('content')
    <div class="row">
        <div class="col py-4">
            <div class="card text-white mb-3 dark-color-3">
                <div class="card-body">
                    <h1 class="card-title">{{ $file->name }}</h1>
                    <p class="card-text">Category: {{ $file->type }}</p>
                    <p class="card-text">Uploaded by: {{ $file->userdata[0]['username'] ?? 'Log in to view' }}</p>
                    @if($file->type == "image")
                        <img class="img-thumbnail" style="width:100%;"
                             src="/storage/images/{{ $file->file_name }}">
                    @endif
                    @if($file->type == "video")
                        <video width="100%" height="70%" controls>
                            <source src="/storage/videos/{{ $file->file_name }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                    @if($file->type == "music")
                        <audio style="width: 100%;" controls>
                            <source src="horse.mp3" type="audio/mpeg">
                            <source src="/storage/music/{{ $file->file_name }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    @endif
                    @if($file->type == "other")
                        <p class="card-text">This file is marked as "other" so there is no preview available</p>
                    @endif
                    @if($file->type == "game")
                        <p class="card-text">This file is marked as "game" so there is no preview available</p>
                    @endif

                    <div class="w-100 d-flex mt-2">
                        <a
                            class="btn d-flex dark-color-1 button-fade--white" href="/file/download/{{ $file->id }}"
                            role="button"
                        >
                            <svg
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"
                                class="my-auto mr-2"
                                style="height: .9rem"
                            >
                                <path
                                    fill="currentColor"
                                    d="M360 480H24c-13.3 0-24-10.7-24-24v-24c0-13.3 10.7-24 24-24h336c13.3 0 24 10.7 24 24v24c0 13.3-10.7 24-24 24zM128 56v136H40.3c-17.8 0-26.7 21.5-14.1 34.1l152.2 152.2c7.5 7.5 19.8 7.5 27.3 0l152.2-152.2c12.6-12.6 3.7-34.1-14.1-34.1H256V56c0-13.3-10.7-24-24-24h-80c-13.3 0-24 10.7-24 24z"
                                ></path>
                            </svg>
                            <span>Download</span>
                        </a>

                        @if(Auth::check())
                            <a
                                class="btn d-flex dark-color-1 button-fade--white ml-2" href="/guest/generate/{{ $file->id }}"
                                role="button"
                            >
                                <svg
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    class="my-auto mr-2"
                                    style="height: .9rem"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z"
                                    ></path>
                                </svg>
                                <span>Generate Guest page</span>
                            </a>

                            <delete-confirm-button
                                delete-url="/file/delete/{{ $file->id }}"
                                class="ml-auto"
                            ></delete-confirm-button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
