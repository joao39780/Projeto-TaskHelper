<?php require APPROOT . '/views/inc/header.php' ?>
<style>
    body{
        background-color:rgba(51, 102, 255, 0.1);;
    }
    </style>
<div class="row">
    <div class="col-md-5 mx-auto mt-5">
        <div class="card card-body  mt-5" style="background-color:#f2f2f2;">
            <h2><i class="fas fa-address-card"></i>Crie uma conta</h2>
            <p>Preecha o formulário abaixo para cadastrar-se em nosso sistema</p>
            <form action="<?php echo URLROOT; ?>/users/register" method="post">
            <div class="form-group">
                <label for="name">Nome: <sup class="text-danger">*</sup></label>
                <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name'];?>">
                <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email: <sup class="text-danger">*</sup></label>
                <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email'];?>">
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Senha: <sup class="text-danger">*</sup></label>
                <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password'];?>">
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirme sua senha: <sup class="text-danger">*</sup></label>
                <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password'];?>">
                <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
            </div>
            <div class="row">
                <div class="col mt-2">
                    <input type="submit" value="Login" class="btn btn-block" style="width:300px;background-color:#3366ff;color:#fff;">
                </div>
                <div class="col">
                    <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-block text-success">Já possui uma conta? <strong>Então faça login em nosso sistema</strong></a>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
