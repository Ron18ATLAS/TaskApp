<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= lang('Profileimage.delete_title') ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1 class="title"><?= lang('Profileimage.delete_title') ?></h1>

<p><?= lang('Profileimage.are_you_sure') ?></p>

<?= form_open("/profileimage/delete") ?>

<div class="field is-grouped mt-4">
    <div class="control">
    <button class="button is-danger"><?= lang('Profileimage.yes') ?></button>
    </div>

    <div class="control">
    <a class="button" href="<?= site_url("/profile/show") ?>"><?= lang('Profileimage.cancel') ?></a>

</form>

<?= $this->endSection() ?>