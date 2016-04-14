
    @include("layouts.header")
    @include("layouts.aside")

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="/createCard" class="">
            <button type="button" class="btn btn-default "><i class="glyphicon glyphicon-plus"> Create Card</i></button>
        </a>

        <h1>
            {{$Board->name}}
        </h1>
      {{--  <ol class="breadcrumb">
            <li><a href="/home"> Home</a></li>
            <li class="active">Board</li>
        </ol>--}}
    </section>
    <section class="content" >
        <div ng-view></div>
        </nav>

    </section>

</div>

</body>
    @include('layouts.script')
</html>
