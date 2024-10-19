<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('AdminUsers.delete_user') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title"><?= lang('AdminUsers.delete_user') ?></h1>

<p><?= lang('AdminUsers.are_you_sure') ?></p>

<?= form_open("/admin/users/delete/" . $user->id) ?>

<div class="field is-grouped mt-4">
    <div class="control">

    <button class="button is-danger"><?= lang('AdminUsers.yes') ?></button>
    </div>

    <div class="control">
    <a class="button" href="<?= site_url("/admin/users/show/" . $user->id) ?>"><?= lang('AdminUsers.cancel') ?></a>
    </div>

</form>

<?= $this->endSection() ?>