@extends('layouts.myapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Rating</div>

                    <div class="card-body" style="background-color: #fafafa;">
                        @if(\Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <strong>{{ \Session::get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if($errors->any())
                            <div>
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-warning alert-dismissible fade show">
                                        <strong>{{ $error }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <form role="form" action="" id="ratingForm">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="property">Select Agent</label>
                                <select class="form-control" id="agent" name="agent">
                                    <option disabled selected>--Select--</option>
                                    @foreach($employees as $emp)
                                        <option value="{{ $emp-> id }}">{{ $emp-> first_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <i class="fa fa-2x fa-star" data-index="0"></i>
                                <i class="fa fa-2x fa-star" data-index="1"></i>
                                <i class="fa fa-2x fa-star" data-index="2"></i>
                                <i class="fa fa-2x fa-star" data-index="3"></i>
                                <i class="fa fa-2x fa-star" data-index="4"></i>
                            </div>
                            {{--<button type="submit" id="btn-rate" class="btn btn-primary" style="width: 100%;">--}}
                            {{--Rate--}}
                            {{--</button>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        var ratedIndex = -1;


        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            resetStarsColor();

            $('.fa-star').on('click', function (e) {
                e.preventDefault();
                ratedIndex = parseInt($(this).data('index'));
                console.log(ratedIndex + 1);

                var agent_id = $('#agent').val();
                var rating = ratedIndex + 1;

                $.ajax({
                    type: "POST",
                    url: "/rate",
                    data: {agent_id: agent_id, rating: rating},
                    success: function (data) {
                        // window.location.href = "/rate"
                        alert('success');
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.status);
                        data = jqXHR.responseJSON;

                    }
                });
            });

            $('.fa-star').mouseover(function () {
                resetStarsColor();

                var currentIndex = parseInt($(this).data('index'));

                for (var i = 0; i <= currentIndex; i++) {
                    $('.fa-star:eq(' + i + ')').css('color', 'orange');
                }
            });

            $('.fa-star').mouseleave(function () {
                resetStarsColor();

                if (ratedIndex != -1)
                    for (var i = 0; i <= ratedIndex; i++) {
                        $('.fa-star:eq(' + i + ')').css('color', 'orange');
                    }
            });

            // function rateAgent() {
            //     $('body').on('click', '#btn-rate', function (e) {
            //         e.preventDefault();
            //         var agent_id = $('#agent').val();
            //         var rating = ratedIndex + 1;
            //
            //         $.ajax({
            //             url: "/rate",
            //             type: "POST",
            //             dataType: 'json',
            //             data: {agent_id: agent_id, rating: rating},
            //             success: function (data) {
            //                 window.location.href = "/rate"
            //             },
            //         });
            //     });
            // }

            function resetStarsColor() {
                $('.fa-star').css('color', 'black');
            }
        });
    </script>
@endsection