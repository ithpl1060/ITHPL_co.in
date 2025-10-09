
<script src="<?php echo base_url() . 'resource/js/custom/addPost.js'; ?>"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
document.getElementById('image').addEventListener('change', function (event) {
  const file = event.target.files[0];
  const preview = document.getElementById('preview');

  if (file) {
    // Validate size (2MB max)
    if (file.size > 2 * 1024 * 1024) {
      alert("File size exceeds 2MB limit!");
      this.value = ""; // reset file input
      preview.src = "<?= base_url('public/images/placeholder.png') ?>";
      return;
    }

    // Show live preview
    const reader = new FileReader();
    reader.onload = function (e) {
      preview.src = e.target.result;
    };
    reader.readAsDataURL(file);
  } else {
    preview.src = "<?= base_url('public/images/placeholder.png') ?>";
  }
});
</script> -->

