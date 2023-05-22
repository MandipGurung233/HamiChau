@extends('user.layouts.main')
@section('content')
<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{ asset('uploads/campaing/'.$campaings->campaing_image) }}"/></div>
						 
						</div>
						
						 
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$campaings->campaing_name}}</h3>
						
						<p class="product-description">{{$campaings->campaing_description}}</p>
						<h4 class="price">Amount collected: <span>{{$campaings->campaing_total_amount_collected}}</span></h4>
                        <h4 class="price">Amount Goal: <span>{{$campaings->campaing_goal}}</span></h4>
                        <form action="/comment/{{$campaings->id}}" method="post">
                            @csrf
                            <div class="form-group">
                                <h4>Comment</h4>
                                <textarea class="form-control" name="comment" id="" cols="30" rows="5"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Enter</button>
                        </form>

						@foreach($comments as $comment)
							@if ($comment->campaing_id == $id)
								<h5>{{$comment->comment}}</h5>
								<h5>{{$comment->user['name']}}</h5>
							@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection