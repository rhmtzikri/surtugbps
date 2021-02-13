
<div class="row">
  <div class="card white col s10 offset-s1 m6 offset-m3 l4 offset-l4 login-card">
    <div class="center">
      <img src="<?=base_url('/assets/images/logo-bps-solok.png');?>" alt="logo-bps-solok" class="logo-img">
    </div>
    <?= form_open('home','class="col s10 offset-s1"'); ?>
    <p class="center text-judul">Sistem Informasi Surat Tugas</p>
    <div class="row">
      <div class="input-field center">
        <i class="fas fa-user prefix"></i>
        <input id="username" type="text" class="validate black-text">
        <label class="black-text" for="username">Username</label>
      </div>
      <div class="input-field center">
        <i class="fas fa-key prefix"></i>
        <input id="password" type="password" class="validate black-text">
        <label class="black-text" for="password">Password</label>
      </div>
      <div class="col s12 center">
        <button type="submit" class="waves-effect waves-light btn cyan lighten-2 login-btn"><i class="fas fa-sign-in-alt left"></i>Login</button>

      </div>
      <?=form_close();?>
    </div>
    <div class="row" id="error_validation">
      <p class="center text-error"><?=$validation->listErrors();?></p>
    </div>
  </div>
</div>
