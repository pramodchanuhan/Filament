<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
                        @if($team->image != null)
						<img loading="lazy" decoding="async" src="{{asset('storage/'.$team->image)}}" data-src="{{asset('storage/'.$team->image)}}" alt="{{$team->name}}" class="rounded w-100" width="300" height="332">
						@else
                        <img loading="lazy" decoding="async" src="https://images.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" data-src="https://images.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="{{$team->name}}" class="rounded w-100" width="300" height="332">
                        @endif
                        @if($team->fb_url != null || $team->tw_url != null || $team->in_url != null)
                        <ul class="card-social list-inline">
						@if($team->fb_url != null)	
                        <li class="list-inline-item"><a class="facebook" href="{{$team->fb_url}}"><i class="fab fa-facebook"></i></a>
							</li>
                        @endif
                        @if($team->tw_url != null)
							<li class="list-inline-item"><a class="twitter" href="{{$team->tw_url}}"><i class="fab fa-twitter"></i></a>
							</li>
                        @endif
                        @if($team->in_url != null)
							<li class="list-inline-item"><a class="instagram" href="{{$team->in_url}}"><i class="fab fa-instagram"></i></a>
							</li>
                        @endif
						</ul>
                        @endif
					</div>
					<div class="card-body">
						<h3>{{$team->name}}</h3>
						<p>{{$team->designation}}</p>
					</div>
				</div>
			</div>