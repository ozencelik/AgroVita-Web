@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                  <table class="table">
                    <tr>
                      <td>First name</td>
                      <td>Last Name</td>
                      <td>Email</td>
                    </tr>


                    <?php
                    foreach ($users as $user) { ?>
                      <tr>
                        <td><?php echo $user->fname ?></td>
                        <td><?php echo $user->lname ?></td>
                        <td><?php echo $user->email ?></td>
                      </tr>


                    <?php
                    }
                    ?>

                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
