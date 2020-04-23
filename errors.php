<?php if(array_filter($errors)): ?>
    <div class="error">
        <!-- For register and login -->
        <p><?php echo $errors['user']; ?></p>
        <p><?php echo $errors['email']; ?></p>
        <p><?php echo $errors['password']; ?></p>
        <p><?php echo $errors['password2']; ?></p>

        <!-- For adding customers, products and orders -->
        <p><?php echo $errors['id']; ?></p>
        <p><?php echo $errors['name']; ?></p>
        <p><?php echo $errors['birth']; ?></p>
        <p><?php echo $errors['address']; ?></p>
    </div>
<?php endif ?>
