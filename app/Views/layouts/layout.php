<?= $this->include('layouts/header') ?>
<!-- For app/Views/layouts/header.php -->
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/userJs.js') ?>"></script>
<div class="container">
  <?= $this->renderSection('content') ?>
</div>
<?= $this->include('layouts/footer') ?>