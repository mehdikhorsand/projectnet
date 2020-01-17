<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(url('dashbordadmin/editordeletepost/editPost/'.$id)); ?>" method="post">
    <?php echo csrf_field(); ?>

        <label for="brand">brand : </label>
        <input type="text" name="brand" id="brand" value="<?php echo e($cars->brand); ?>">
        <label for="name">name : </label>
        <input type="text" name="name" id="name" value="<?php echo e($cars->name); ?>">
        <label for="model">model : </label>
        <input type="text" name="model" id="model" value="<?php echo e($cars->model); ?>">
        <label for="price">price : </label>
        <input type="text" name="price" id="price" value="<?php echo e($cars->price); ?>">
        <label for="year">year : </label>
        <input type="text" name="year" id="year" value="<?php echo e($cars->year); ?>">
        <label for="time0to100">time0to100 : </label>
        <input type="text" name="time0to100" id="time0to100" value="<?php echo e($cars->time0to100); ?>">
        <label for="transmission">transmission : </label>
        <input type="text" name="transmission" id="transmission" value="<?php echo e($cars->transmission); ?>">
        <label for="fueltype">fuel type : </label>
        <input type="text" name="fueltype" id="fueltype" value="<?php echo e($cars->fueltype); ?>">
        <label for="enginepowers">engine power : </label>
        <input type="text" name="enginepowers" id="enginepowers" value="<?php echo e($cars->enginepowers); ?>">
        <label for="numbercylinder">cylinder number : </label>
        <input type="text" name="numbercylinder" id="numbercylinder" value="<?php echo e($cars->numbercylinder); ?>">
        <label for="moreDetail">moreDetail : </label>
        <textarea name="moreDetail" id="moreDetail" style="width: 150px;height: 100px"><?php echo e($cars->moreDetail); ?></textarea>
        <input type="submit" value="edit" name="editPostBtn" id="editPostBtn">
    </form>
    <form action="<?php echo e(route('dashbordadmin')); ?>" method="get">
        <input type="submit" value="leave to dashbord" name="leavePostBtn" id="leavePostBtn">
    </form>
    <?php
    if(isset($success)){
    ?>
    <h1>successfully edited...</h1>
    <?php
    }
    ?>
</body>
</html><?php /**PATH E:\wamp64\www\projectnet\projectnet\resources\views/admin/editPostAdmin.blade.php ENDPATH**/ ?>