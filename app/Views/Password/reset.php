<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Password reset<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title">Password reset</h1>

<div class="container">

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/password/processreset/$token") ?>

    <div class="field">
        <label class="label" for="password">Password</label>
        <input class="input" type="password" name="password">
    </div>

    <div class="field">
        <label class="label" for="password_confirmation">Repeat password</label>
        <input class="input" type="password" name="password_confirmation">

<div class="field is-grouped">
    <div class="control">
    <button class="button is-success">Reset password</button>
</form>
</div>

<?= $this->endSection() ?>