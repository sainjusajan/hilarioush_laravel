@extends('layouts.master')

@section('content')
<!--my about wala tab-->
    <section>
        <div class="block remove-gap gray-layer p-b-30">
            <div class="parallax" data-velocity="-.1" style="background: rgba(0, 0, 0, 0) url(images/resource/property-image.jpg) no-repeat 50% 0; background-size:cover;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 column">
                        <div class="big-tabs">

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="about-hotel">
                                    <div class="tab-data">
                                        <strong>Welcome To</strong>
                                        <h4>{{ $info->name }}</h4>
                                        <p>
                                        <img src="{{ asset('uploads/'.$info->photo->path) }}" class="img-responsive pull-right m-l-13" alt="Image" style="max-height: 240px;">
                                            {{ $info->information }}
                                            </p>

                                        <!-- ul -->
                                    </div>
                                    <!-- tabs-data -->
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- block -->
    </section>
    <!-- Tabs Section -->

@endsection
