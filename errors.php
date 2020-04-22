<?php if(array_filter($errors)): ?>
    <div class="error">
        <p><?php echo $errors['user']; ?></p>
        <p><?php echo $errors['email']; ?></p>
        <p><?php echo $errors['password']; ?></p>
        <p><?php echo $errors['password2']; ?></p>
    </div>
<?php endif ?>
