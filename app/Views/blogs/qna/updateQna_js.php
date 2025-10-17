<script>
    const id = <?= isset($id) ? (int)$id : 0 ?>;
    const base_url = "<?= base_url(); ?>";
    const token = "<?= $_SESSION['token'] ?? '' ?>"; // if using auth
</script>
<script src="<?= base_url('resource/js/custom/updateQna.js'); ?>"></script>
