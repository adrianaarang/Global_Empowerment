<?php $rootPath = $rootPath ?? '.'; ?>
  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- JS principal -->
  <script src="<?= $rootPath ?>/assets/js/main.js"></script>
  <?php if (isset($extraJs)): ?>
    <script src="<?= $rootPath ?>/assets/js/<?= $extraJs ?>"></script>
  <?php endif; ?>
</body>
</html>
