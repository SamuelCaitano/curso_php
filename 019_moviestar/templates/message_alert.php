 <?php if (!empty($flassMessage['msg'])) : ?>
   <?php if ($flassMessage['type'] === "success") : ?>
     <div class="msg-container">
       <p class="msg alert alert-success text-center" role="alert"><i class="fas fa-check-circle"></i> <?= $flassMessage['msg'] ?></p>
     </div>
   <?php else : ?>
     <div class="msg-container">
       <p class="msg alert alert-danger text-center" role="alert"><i class="fas fa-exclamation-triangle"></i> <?= $flassMessage['msg'] ?></p>
     </div>
   <?php endif ?>
 <?php endif ?>