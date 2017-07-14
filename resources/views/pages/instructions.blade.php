@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h4 class="subheader">Instructions</h4>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control search">
                </div>
            </div>
        </div>
        <div class="instruction-list">
            @for ($i = 0; $i < 15; $i++)
                <div class="panel-group" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <div class="row">
                                <div class="col-md-11 opcode">ADD</div>
                                <div class="col-md-1">
                                    <button class="toggle collapsed" data-toggle="collapse" data-parent="instruction-{{ $i }}" href="#instruction-panel-{{ $i }}">
                                        <span class="fa fa-angle-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-collapse collapse panel-full" id="instruction-panel-{{ $i }}">
                        <div class="panel-body">
                            text
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <script type="text/javascript">
        window.onload = function () {
            $('.toggle').click(function () {
                if ($(this).hasClass("collapsed")) {
                    $(this).children("span").removeClass("fa-angle-down").addClass("fa-angle-up");
                } else {
                    $(this).children("span").removeClass("fa-angle-up").addClass("fa-angle-down");
                }
            });
        }
    </script>
@endsection