<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
  <div class="panel panel-default panel-noborder widget-features">
    <div class="panel-heading">
      Enterpreneur/{{$user->level}}
    </div>
    <div class="panel-body">
      <ul>
        <li class="bigger">
          <div class="media">
            <div class="media-body">
              <div class="avatar">
                <img class="img-circle" src="{{asset('images/teams/team1.jpg')}}">
              </div>
              <div style="padding-bottom:10px;"></div>
              <div class="description">
                <h4 class="location-name">{{$user->name}} 
                @if($isverif)
                <i class="fa fa-check-circle" style="color:#007e6c;"></i> </h4>
                @endif
                <h5 class="location-name">{{$user->email}}</h5>
              </div>
              <div style="padding-bottom:10px;"></div>
              <a href="{{route('student-edit',$data->id)}}" class="button-default" style="margin: 0px 22%;">Edit Profile</a>
              <div style="padding-bottom:30px;"></div>
              <div class="list-group">
                <a href="{{route('dashboard')}}" class="list-group-item active text-center">Dashboard
                </a>

                <a href="{{route('dashboard-campaign')}}" class="list-group-item text-center">Kampanye
                </a>
                <a href="{{route('dashboard-blog')}}" class="list-group-item text-center">Blog
                </a>
                <a href="#" class="list-group-item text-center">Chatting
                </a>
                <a href="#" class="list-group-item text-center">Saldo Anda
                </a>
                <a href="#" class="list-group-item text-center">Categories
                </a>
                <a href="{{route('user-setting')}}" class="list-group-item text-center">Settings
                </a>
                <a href="#" class="list-group-item text-center">Pages
                </a>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</aside>
<script type="text/javascript">
  (function ($, undefined) {

    "use strict";

    // When ready.
    $(function () {

      var $form = $("#form");
      var $input = $form.find("input");

      $input.on("keyup", function (event) {


        // When user select text in the document, also abort.
        var selection = window.getSelection().toString();
        if (selection !== '') {
          return;
        }

        // When the arrow keys are pressed, abort.
        if ($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
          return;
        }


        var $this = $(this);

        // Get the value.
        var input = $this.val();

        var input = input.replace(/[\D\s\._\-]+/g, "");
        input = input ? parseInt(input, 10) : 0;

        $this.val(function () {
          return (input === 0) ? "" : input.toLocaleString("en-US");
        });
      });

      /**
       * ==================================
       * When Form Submitted
       * ==================================
       */
      $form.on("submit", function (event) {

        var $this = $(this);
        var arr = $this.serializeArray();

        for (var i = 0; i < arr.length; i++) {
          arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ''); // Sanitize the values.
        };

        console.log(arr);

        event.preventDefault();
      });

    });
  })(jQuery);
</script>
