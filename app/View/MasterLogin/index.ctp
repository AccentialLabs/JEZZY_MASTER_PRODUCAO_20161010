<?php $this->Html->css('View/Login.index', array('inline' => false)); ?>
<div class="form-signin centerElement" >
    <?php echo $this->Html->image('jezzy_logo/jezzy_logo_color.PNG', array('class' => '')); ?>
</div>

<form class="form-signin" action="<?php echo $this->Html->url("login"); ?>" method="post">
    <h2 class="form-signin-heading"></h2>
    <?php 
        $message = $this->Session->flash();
        if($message !== null && $message != ""){
            echo '<div class="alert alert-danger centerText" role="alert">'.$message.'</div>';
        }
    ?>
    <label for="inputEmail" class="sr-only">E-mail</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus name="data[MasterUser][email]">
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="data[MasterUser][password]">
    <div class="checkbox">
        <label>
            <input type="checkbox" value="true" name="data[MasterUser][remember]"> Manter logado
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar no Jezzy</button>
    <a class="" href="<?php echo $this->Html->url("forgotPassword"); ?>">Esqueci minha senha.</a>
</form>