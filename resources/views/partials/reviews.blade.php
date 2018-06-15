<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <!-- Fluid width widget -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-comment"></span> 
                    Recent Comments
                </h3>
            </div>
            <div class="panel-body">
                <ul class="media-list">
                    @foreach($reviews as $review)
                        <li class="media">
                            <div class="media-left">
                                <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <small>
                                        <p><b>{{ $review->customer_name }}</b></p>
                                        - <p>Rate: {{ $review->rating }}</p>
                                        <br>
                                    </small>
                                </h4>
                                <p>
                                    {{ $review->details }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- End fluid width widget -->

    </div>
</div>