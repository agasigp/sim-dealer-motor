<div class="row">
    <div class="col-sm-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit User</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="POST" role="form" name="user-form">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $user->id_users }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Group</label>
                        <select class="form-control" name="group">
                            <?php $selected = ""; ?>
                            <option value="admin" <?php ($user->group === "admin" ? "selected = ".$selected : $selected) ?>>Admin</option>
                            <option value="manager" <?php ($user->group === "manager" ? "selected = ".$selected : $selected) ?>>Manager</option>
                            <option value="sales" <?php ($user->group === "sales" ? "selected = ".$selected : $selected) ?>>Sales</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gaji_pokok">Gaji Pokok</label>
                        <input type="number" name="gaji_pokok" class="form-control" value="{{ $user->gaji_pokok }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="edit_user('{{ url('user/edit') }}')">Simpan</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>