<!--- Đăng ký tài khoản ------>

<?php
if (!defined('_CODE')) {
    die('Access denied...');
}


if (isPost()) {
    $filterAll = filter();
    $errors = []; // mảng chứa các lỗi 

    // Validate fullname: bắt buộc phải nhập, min 5 ký tự
    if (empty($filterAll['fullname'])) {
        $errors['fullname']['required'] = 'Họ tên bắt buộc phải nhập.';
    } else {
        if (strlen($filterAll['fullname']) < 5) {
            $errors['fullname']['min'] = 'Họ tên phải có ít nhất 5 ký tự';
        }
    }

    //Email validate: bắt buộc phải nhập, đúng định dạng email, kiểm tra email đã tồn tại trong csdl chưa
    if (empty($filterAll['email'])) {
        $errors['email']['required'] = 'Email bắt buộc phải nhập.';
    } else {
        $email = $filterAll['email'];
        $sql = "SELECT id FROM users WHERE email = '$email'";
        if (getRows($sql) > 0) {
            $errors['email']['unique'] = 'Email đã tồn tại';
        }
    }

    //Validate số điện thoại: bắt buộc phải nhập, số có đúng định dạng không
    if (empty($filterAll['phone'])) {
        $errors['phone']['required'] = 'Số điện thoại bắt buộc phải nhập.';
    } else {
        if (!isPhone($filterAll['phone'])) {
            $errors['phone']['isPhone'] = 'Số điện thoại không hợp lệ!';
        }
    }
    //Validate password: bắt buộc phải nhập, >=8 ký tự
    if (empty($filterAll['password'])) {
        $errors['password']['required'] = 'Mật khẩu bắt buộc phải nhập.';
    } else {
        if (strlen($filterAll['password']) < 8) {
            $errors['password']['min'] = 'Mật khẩu phải lớn hơn hoặc bằng 8';
        }
    }
    //Validate password_confirm
    if (empty($filterAll['password_confirm'])) {
        $errors['password_confirm']['required'] = 'Bạn phải nhập lại mật khẩu.';
    } else {
        if ($filterAll['password'] != $filterAll['password_confirm']) {
            $errors['password_confirm']['match'] = 'Mật khẩu bạn nhập lại không đúng';
        }
    }
    if (empty($errors)) {

        
        $dataInsert = [
            'fullname' => $filterAll['fullname'],
            'email' => $filterAll['email'],
            'phone' => $filterAll['phone'],
            'password' => password_hash($filterAll['password'], PASSWORD_DEFAULT),
            'status' => $filterAll['status'],
            'create_at' => date('Y-m-d H:i:s')
        ];
        $insertStatus = insert('users', $dataInsert);
        if ($insertStatus) {
      
            setFlashData('smg', 'Thêm người dùng thành công!!');
            setFlashData('smg_type', 'success');
            redirect('?module=users&action=list');

            
        } else {
            setFlashData('smg', 'Hệ thống đang lỗi, vui lòng thử lại sau.');
            setFlashData('smg_type', 'danger');
            redirect('?module=users&action=add');
        }

        
    } else {
        setFlashData('smg', 'Vui lòng kiểm tra lại dữ liệu!!');
        setFlashData('smg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $filterAll);
        redirect('?module=users&action=add');
    }
}

$data = [
    'pageTitle' => 'Đăng ký tài khoản'
];

layouts('header-login', $data);

$smg = getFlashData('smg');
$smg_type = getFlashData('smg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');

?>

<div class="container">
    <div class="row" style="margin: 50px auto;">
        <h2 class="text-center text-uppercase">Thêm người dùng</h2>
        <?php
        if (!empty($smg)) {
            getSmg($smg, $smg_type);
        }
        ?>
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group mg-form">
                        <label for="">Họ tên</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Họ tên" value="<?php echo old('fullname', $old) ?>">
                        <?php
                        echo form_error('fullname', '<span class="error">', '</span>', $errors);
                        ?>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Địa chỉ email" value="<?php echo old('email', $old) ?>">
                        <?php
                        echo form_error('email', '<span class="error">', '</span>', $errors);
                        ?>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Số điện thoại</label>
                        <input type="text" name="phone" class="form-control" placeholder="084-XXX-XXXX" value="<?php echo old('phone', $old) ?>">
                        <?php
                        echo form_error('phone', '<span class="error">', '</span>', $errors);
                        ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group mg-form">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                        <?php
                        echo form_error('password', '<span class="error">', '</span>', $errors);
                        ?>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Nhập lại mật khẩu</label>
                        <input type="password" name="password_confirm" class="form-control" placeholder="Nhập lại mật khẩu">
                        <?php
                        echo form_error('password_confirm', '<span class="error">', '</span>', $errors);
                        ?>
                    </div>

                    <div class="form-control mg-form">
                        <label for="">Trạng thái</label>
                        <select name="status" id="" class="form-control">
                            <option value="0" <?php echo (old('status',$old) == 0) ? 'selected' : false; ?>>Chưa kích hoạt</option>
                            <option value="1" <?php echo (old('status',$old) == 1) ? 'selected' : false; ?>>Đã kích hoạt</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn-user mg-btn btn btn-primary btn-block">Thêm người dùng</button>
            <a href="?module=users&action=list" class="mg-btn btn btn-success btn-block">Quay lại</a>
            

            <hr>

            <p class="text-center"><a href="?module=auth&action=login">Đăng nhập tài khoản</a></p>
        </form>
    </div>
</div>




<?php
layouts('footer-login');
?>