@extends('layouts.app')

@section('content-top')
    <div class="content-top section-flex">
        <h2 class="toggle-content">Organiseer activiteit</h2>
        <div class="back-button-box"> <a href="{{URL::previous()}}"><img src="{{URL::asset('img/back-button.png')}}" class="back-button"></a></div>
    </div>
@endsection

@section('content-bottom')

    <div class="my-row row mt-4 p-0">
    <form  class="login-form"  action="/activities" method="POST">
    {{ csrf_field() }}

    <span class="form-label">Activity:</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" required type="text" name="activity">
    </span>
    <br>

    <span class="form-label">Max-persons:</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" required type="number" name="persons">
    </span>
    <br>

    <span class="form-label">Category:</span>

    <span>
        <select class="form-input category-selector" name="category" id="">
            <option value="Skillup">Skillup</option>
            <option value="Chillup">Chillup</option>
        </select>
    </span>
    <br>

    <span class="form-label">omschrijving</span>

    <span>
        <input class="col-md-6 form-control form-control-lg" required type="textarea" name="description">
    </span>
    <br>

    <button class="activity-button-link" type="submit">Create activity</button>
</form>
</div>
</div>

    
    

@endsection