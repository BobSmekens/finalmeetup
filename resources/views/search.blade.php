@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12"><h2>Laravel 5.7 AutoComplete Search Using Typeahead JS</h2></div>
        <div class="col-12">
            <div id="custom-search-input">
                <div class="input-group">
                    <input id="search" name="search" type="text" class="form-control" placeholder="Search" />
                </div>
            </div>
        </div>
    </div>
</div>
 
<script type="text/javascript">
    var route = "{{ url('autocomplete') }}";
    $('#search').typeahead({
        source:  function (term, process) {
        return $.get(route, { term: term }, function (data) {
                return process(data);
            });
        }
    });
</script>
   @endsection


