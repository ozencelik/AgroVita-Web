@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">User List</div>

                <table class="table">
                  <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                  </tr>


                  <?php
                  foreach ($users as $user) { ?>
                    <tr>
                      <td><?php echo $user->id ?></td>
                      <td><?php echo $user->name ?></td>
                      <td><?php echo $user->email ?></td>
                    </tr>


                  <?php
                  }
                  ?>

                </table>
        </div>
    </div>
</div>
@endsection
