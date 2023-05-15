@extends('user.layouts.main')
@section('content')
<section class="causes-area single-padding">
    <div class="container">
        <div class="row">
            @foreach ($campaings as $campaing)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="single-cause-list res">
                    <div class="single-cause-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href=""><img src="{{ asset('uploads/campaing/'.$campaing->campaing_image) }}" alt="image alt" /></a>
                    </div>
                    <div class="cause-lists-desc">
                        <div class="cause-prgrs-br">
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                    <span>70%</span>
                                </div>
                            </div>
                            <div class="prgrs-collected-amnt">
                                <span class="collected-txt">Collected:</span>
                                <span class="collected-amnt">{{ $campaing->campaing_total_amount_collected}}</span>
                            </div>
                            <div class="prgrs-goal-amnt pull-right">
                                <span class="goal-txt">Goal:</span>
                                <span class="goal-amnt">{{ $campaing->campaing_goal}}</span>
                            </div>
                        </div>
                        <div class="cause-list-desig text-center">
                            <div class="cause-desig-title">
                                <h3><a href="#">{{ $campaing->campaing_name}}</a></h3>
                            </div>
                            <div class="cause-desig-title-desc">
                                <p>{{ $campaing->campaing_description}}</p>
                            </div>
                            <div class="cause-dnt">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{$campaing->id}}">
                                    Launch demo modal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal-{{$campaing->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$campaing->campaing_name}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/user-donation/{{$campaing->id}}" method="post">
                            @csrf
                            <div class="modal-body">
                                <label for="">Enter The Amount You Want To Donate</label>
                                <input type="number" name="amount" class="form-control" id="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-pg-nav text-center">
                    <span>1</span>
                    <a href="#">2</a>
                    <a href="#">Next »</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection